<?php 
    include "connection.php";
    ob_start();
if( !empty( $_GET['id'] ) ){
	$i=1;
	$user_idd=$_REQUEST['id'];
	echo $user_idd;
	echo "hoi";
	$GLOBAL['s']=" AND users.user_id='$user_idd'";
}

if( !empty($_POST)){
    $myData=$_POST;
    $data=$myData['query'];
    
    $str_arr = explode (":", $data);
    
    $new_str = str_replace('"', '', $str_arr[0]);
    $name = str_replace('{', '', $new_str);

    $new_str = str_replace('"', '', $str_arr[1]);
    $value = str_replace('}', '', $new_str);
    $value1 ='%';
    $value1 .=$value;
    $value1 .='%';
	
    if($value !=''){
        if($name !='searchBytxt'){
            
			$query="SELECT users.user_id,note.note_id,note.title,category.name,note.created_date,status.status,note.status_id,users.fname,users.lname FROM note JOIN category ON note.category_id=category.category_id JOIN status ON note.status_id= status.status_id JOIN users ON note.user_id=users.user_id WHERE note.status_id IN (2,5) AND users.fname='".$value."'";
        }
        else{
            
           $query="SELECT users.user_id,note.note_id,note.title,category.name,note.created_date,status.status,note.status_id,users.fname,users.lname FROM note JOIN category ON note.category_id=category.category_id JOIN status ON note.status_id= status.status_id JOIN users ON note.user_id=users.user_id WHERE note.status_id IN (2,5) AND (title LIKE '".$value1."' OR name LIKE '".$value1."' OR users.fname LIKE '".$value1."' OR users.lname LIKE '".$value1."'  OR note.created_date LIKE '".$value1."')";
        }
        
    }
    else{
     $query="SELECT users.user_id,note.note_id,note.title,category.name,note.created_date,status.status,note.status_id,users.fname,users.lname FROM note JOIN category ON note.category_id=category.category_id JOIN status ON note.status_id= status.status_id JOIN users ON note.user_id=users.user_id WHERE note.status_id IN (2,5)";
    
    }
    
}
else{
     $query="SELECT users.user_id,note.note_id,note.title,category.name,note.created_date,status.status,note.status_id,users.fname,users.lname FROM note JOIN category ON note.category_id=category.category_id JOIN status ON note.status_id= status.status_id JOIN users ON note.user_id=users.user_id WHERE note.status_id IN (2,5)";
    
}
if( $i=1)
    {
		$query .="";
    }
$query .=" ORDER BY note.created_date DESC";
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
   
    $output="";
    if($result1 && mysqli_num_rows($result1)!=0){
        
        $output .=' <table class="table  my-tables">
                        <thead class="small-head">
                            <tr>
                                <td class="align-middle">Sr No.</td>
                                <td class="align-middle">Note Title</td>
                                <td class="align-middle">Category</td>
                                <td class="align-middle">Seller</td>
                                <td class="align-middle">Date Added</td>
                                <td class="align-middle">Status</td>
                                <td class="align-middle text-center">Action</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>';
		$i=1;
            while($row=mysqli_fetch_assoc($result1)){
				
                $id=$row['note_id'];
            $time=strtotime($row['created_date']);
           $t=date("d-m-Y, H:i:s", $time);                                   
                                            
            $output .='<tr>
                                <td>'.$i.'</td>
                                <td class="note_title pl-0" id="'.$id.'">'.$row['title'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['fname'].' '.$row['lname'].' <img src="img/pre-login/eye.png" class="float-right view_seller" id="'.$row['user_id'].'" ></td>
                                <td>'.$t.'</td>
                                <td>'.$row['status'].'</td>
                                <td class="text-center row"><button class="btn-green btn-table approve-note" id="'.$id.'"> Approved</button><button class="btn-red btn-table reject-note" id="'.$id.'" > Reject</button><button class="btn-table btn-gray submitted-to-review " id="'.$id.'">InReview</button></td>
                                <td>
                                    <div class="dropdown float-right align-middle">
                                        <a class="toggle" href="#" data-toggle="dropdown"><img src="img/icons/dots.png" class="img-responsive"></a>
                                        <ul class="dropdown-menu dropdown-menu-left float-right">
                                            <li class="dropdown-item"><a href="notes-detail.php?note_id='.$id.'">View More Details</a></li>
                                            <li class="dropdown-item"><a href="process/download.php?note_id='.$id.'">Download Notes</a></li>
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
?>
