<?php 
include "connection.php";
ob_start();

$select1 = "SELECT note.note_id,note.title,note.published_date,note.user_id,note.price,note.is_paid,category.name,documents.file_path,users.fname,users.lname, MONTH(note.published_date) AS month FROM `note` JOIN category ON note.category_id=category.category_id JOIN users ON note.user_id=users.user_id JOIN documents ON note.note_id=documents.note_id WHERE ";
$where="note.status_id=3 AND note.is_active=1 ";
	
$order = " ORDER BY note.published_date DESC";
if( !empty($_POST)){
	
	
	$myData=$_POST;
	$data=$myData['query'];

	$str_arr = explode (":", $data);
	//print_r($str_arr);

	$new_str = str_replace('"', '', $str_arr[0]);
	$name = str_replace('{', '', $new_str);
	// echo $name ;

	$new_str = str_replace('"', '', $str_arr[1]);
	$value = str_replace('}', '', $new_str);
	$value1 ='%';
	$value1 .=$value;
	$value1 .='%';
	
	
	
	
    if($value !=''){
        if($name !='searchBytxt'){
            
             $where="note.status_id=3 AND note.is_active=1 " . $name."='". $value ."' ";
            
           
        }
        else{
			$where="note.status_id=3 AND note.is_active=1 AND (title LIKE '". $value1. "'  OR name LIKE '" .$value1."'OR fname LIKE '".$value1."' OR lname LIKE '".$value1."'  OR note.price LIKE '".$value1."' OR note.published_date LIKE '".$value1."') ";
            
           
        }
        
    }
    else{
     $where="note.status_id=3 AND note.is_active=1 ";
    
    }
    
}
else{
      $where="note.status_id=3 AND note.is_active=1 ";
    
}
$query=$select1 .  $where . $order;
//pagination
$d="";
$current_page=1;
 $result=mysqli_query($conn, $query);
    $row_count=mysqli_num_rows($result);
    $p=$row_count/5;
    $page=ceil($p);
if(isset($_GET['page'])){
    $data=$_GET;
    $d=$data['page'];
    $temp=str_replace(',', '', $d);
    $current_page=$temp[0];
    $pre_page=$temp[1];
}
    $start=0;
    if($current_page == "" || $current_page == 1){
        $start=0;
    }
    elseif($current_page== 'p'){
        if($pre_page==1){
            $current_page=1;
            $start=($current_page*5)-5;
        }
        else{
        $current_page = $pre_page-1;
            $start=($current_page*5)-5;
        }
    }
    elseif($current_page== 'n'){
        if($pre_page == $page){
            $current_page=$pre_page;
            $start=($current_page*5)-5;
        }
        else{
            $current_page = $pre_page+1;
            $start=($current_page*5)-5;
        }
    }
    else{
        $start=($current_page*5)-5;
    }
//pagination ends


    $query1= $query.' LIMIT '.$start.', 5';
    $result1=mysqli_query($conn, $query1);

   // $row_count1=mysqli_num_rows($result1);
   
    $output="";
    if($result1 && mysqli_num_rows($result1)!=0){
        
        $output .='<table class="table  my-tables ">
                        <thead class="small-head">
                            <tr>
                                <td class="align-middle">Sr No.</td>
                                <td class="align-middle">Note Title</td>
                                <td class="align-middle">Category</td>
                                <td class="align-middle text-center">Attachment size</td>
                                <td class="align-middle">Sell Type</td>
                                <td class="align-middle">Price</td>
                                <td class="align-middle">Seller</td>
                                <td class="align-middle">Date Added</td>
                                <td class="align-middle text-center">Number of downloads</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>';
		$i=1;
            while($row=mysqli_fetch_assoc($result1)){
				
                $id=$row['note_id'];
                $file= substr($row['file_path'], 3);
                $size=filesize($row['file_path']);
                $fileSizeKB = round($size / 1024);
                $time=strtotime($row['published_date']);
                $t=date("d-m-Y, H:i:s", $time);
                if($row['is_paid']==1){
                	$p="Paid";
                }
                else{
                	$p="Free";
                } 
				$q="SELECT COUNT(note_id) AS c FROM `order_note` WHERE is_attachment_downloaded=1 AND note_id=".$id;
				 $r=mysqli_query($conn, $q);
				$count=0;
				if($r){
					$r1=mysqli_fetch_assoc($r);
					$count=$r1['c'];
				}
            	$output .='<tr>
                                <td>'.$i.'</td>
                                <td class="note_title" id="'.$id.'">'.$row['title'].'</td>
                                <td>'.$row['name'].'</td>
                                <td class="text-center">'.$fileSizeKB.'KB</td>
                                <td>'.$p.'</td>
                                <td>$'.$row['price'].'</td>
                                <td>'.$row['fname'].' '.$row['lname'].' </td>
                                <td >'.$t.'</td>

                                <td class="text-center" >'.$count.'</td>
                                <td>
                                    <div class="dropdown pull-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left pull-right">
                                            <li class="dropdown-item"><a href="process/download.php?note_id='.$id.'">Download Notes</a></li>
                                            <li class="dropdown-item"><a href="notes-detail.php?note
											_id='.$id.'">View More Details</a></li>
                                            <li class="dropdown-item remark-btn-add" id="'.$id.'"><a >Unpublish</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>';
				$i++;
            
        }
        $output .="</tbody>
                    </table>";
		
		//pagination
        $output .='<div class="pager"><span class="page-number clickable " id="p"><</span>';
        for($i=1;$i<=$page;$i++){
            if($i==$current_page){
            $output .='<span class="page-number clickable active" id="'.$i.'"><a>'.$i.'</a></span>';
            }
            else{
              $output .='<span class="page-number clickable " id="'.$i.'"><a>'.$i.'</a></span>';  
            }
        }
        $output .='<span class="page-number clickable" id="n">></span></div>';
		//pagination ends
        
    }
    else{
        $output .='<h5 class="text-center mt-3">No Record Found</h5>';
    }
echo $output;
// print_r($_POST);
?>
