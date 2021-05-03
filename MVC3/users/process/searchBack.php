<?php 
include "connection.php";
ob_start();
if( !empty($_POST)){
     // print_r($_POST); 
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
   // echo $value ;
    if($value !=''){
        if($name !='searchBytxt'){
            
            $query="SELECT CEILING(AVG(review.rating)) as rating,note.note_id,note.title,note.display_img,note.number_of_pages,note.university,note.published_date FROM review RIGHT JOIN note ON review.note_id=note.note_id WHERE note.status_id=3 AND $name='$value' GROUP BY note_id ORDER BY note.published_date DESC";
            
           
        }
        else{
            $query="SELECT CEILING(AVG(review.rating)) as rating,note.note_id,note.title,note.display_img,note.number_of_pages,note.university,note.published_date FROM review RIGHT JOIN note ON review.note_id=note.note_id WHERE note.status_id=3 AND (note.title LIKE '$value1' OR note.number_of_pages LIKE '$value1' OR note.university LIKE '$value1' OR note.published_date LIKE '$value1') GROUP BY note_id ORDER BY note.published_date DESC";
            
           
        }
        
    }
    else{
     $query="SELECT CEILING(AVG(review.rating)) as rating,note.note_id,note.title,note.display_img,note.number_of_pages,note.university,note.published_date FROM review RIGHT JOIN note ON review.note_id=note.note_id WHERE note.status_id=3 GROUP BY note_id ORDER BY note.published_date DESC";
    
    }
    
    //echo $query;
    
}
else{
     $query="SELECT CEILING(AVG(review.rating)) as rating,note.note_id,note.title,note.display_img,note.number_of_pages,note.university,note.published_date FROM review RIGHT JOIN note ON review.note_id=note.note_id WHERE note.status_id=3 GROUP BY note_id ORDER BY note.published_date DESC";
    
}
$d="";
$current_page=1;
 $result=mysqli_query($conn, $query);
    $row_count=mysqli_num_rows($result);
    $p=$row_count/9;
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
            $start=($current_page*9)-9;
        }
        else{
        $current_page = $pre_page-1;
            $start=($current_page*9)-9;
        }
    }
    elseif($current_page== 'n'){
        if($pre_page == $page){
            $current_page=$pre_page;
            $start=($current_page*9)-9;
        }
        else{
            $current_page = $pre_page+1;
            $start=($current_page*9)-9;
        }
    }
    else{
        $start=($current_page*9)-9;
    }
    $query1= $query.' LIMIT '.$start.', 9';
    $result1=mysqli_query($conn, $query1);

   // $row_count1=mysqli_num_rows($result1);
   
    $output="";
    if($result1){
        
        $output .='<div class="row">
            <h4 class="col-md-12 animated fadeInLeft">Total '. $row_count .' notes</h4>
        </div>
        <div class="row" id="search-item">';
            while($row=mysqli_fetch_assoc($result1)){
                $id=$row['note_id'];
                $q="SELECT COUNT('user_id') AS remark1 FROM remark WHERE note_id='$id'";
                $r=mysqli_query($conn, $q);
                $remark=mysqli_fetch_assoc($r);

                $q="SELECT COUNT(user_id) AS user FROM review WHERE note_id='$id' GROUP BY note_id";
                $r=mysqli_query($conn, $q);
                if(mysqli_num_rows($r)==0){
                    $u=0;
                }
                else{
                    $review_count=mysqli_fetch_assoc($r);
                    $u=$review_count['user'];
                }
            $img= substr($row['display_img'], 3);
            $time=strtotime($row['published_date']);
            $t=date("D, M j  Y", $time);                                   
                                            
            $output .='<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp clickMeHere" >
                            <div class="item">
                                <a href="notes-detail.php?note_id='.$row["note_id"].'" class="text-decoration-none p-0"><img src=" '.$img.' " alt="  " class="w-100 "></a>
                                <div class="desc">
                                    <a href="notes-detail.php?note_id='.$row["note_id"].'" class="text-decoration-none"> <h4> '.$row["title"]. '</h4></a>
                                    <table>
                                        <tr>
                                            <td><img src="img/Search/university.png" class="img-responsive my-icon"></td>
                                            <td> '. $row["university"].' </td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/pages.png" class="img-responsive my-icon"></td>
                                            <td>  '.$row["number_of_pages"].' pages</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/date.png" class="img-responsive my-icon"></td>
                                            
                                            <td> '. $t.'  </td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/Search/flag.png" class="img-responsive my-icon"></td>
                                            <td> '.$remark['remark1'].' users markes this note as inappropriate</td>
                                        </tr>
                                    </table>
                                    <p>';
            if(is_null($row["rating"])){
                $c=0;
            }
            else{
                $c=$row["rating"];
            }
            for($i=1;$i<=$c;$i++){
                $output .=' <img src="img/icons/star.png" class="img-responsive star">';}
            $k=5-$i;
            for($j=0;$j<=$k;$j++){
            $output .='<img src="img/icons/star-white.png" class="img-responsive star">';}
            $output .=' '.$u.' Reviews</p>
                                </div>
                            </div>

                        </div>';
        }
        $output .="</div>";
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
        
    }
    else{
        $output .='<h5 class="text-center mt-3">No Record Found</h5>';
    }
echo $output;
// print_r($_POST);
?>
