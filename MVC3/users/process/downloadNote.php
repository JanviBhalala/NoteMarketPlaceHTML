<?php 
    include "connection.php";
    ob_start();
session_start();
if(isset($_GET['note_id'])){
    $msg="";
    $data=$_GET;
    $d=$data['note_id'];
    $user_id= $_SESSION["user_id"];
    
    $q="SELECT note.title,note.is_paid,note.price,note.category_id,note.user_id,documents.file_path FROM note JOIN documents ON note.note_id=documents.note_id WHERE note.note_id='$d'";
    $result=mysqli_query($conn, $q);
    $row=mysqli_fetch_assoc($result);
    $title=$row['title'];
    $is_paid=$row['is_paid'];
    $price=$row['price'];
    $category=$row['category_id'];
    $document_path=$row['file_path'];
    $seller_id=$row['user_id'];
    
   if($row['is_paid']=='0'){
        download($d,$conn);
    }
    else{
        $query="SELECT 	is_allowed_to_download FROM order_note WHERE note_id='$d' AND user_id='$user_id'";
        $result=mysqli_query($conn, $query);
        if($result){
        if(mysqli_num_rows($result)!=0){
            $order=mysqli_fetch_assoc($result);
            $allowed=$order['is_allowed_to_download'];
            if($allowed==1){
                 
                download($d,$conn);
            }
            else{
               // $msg 'Your request is under process';
                header("location:../notes-detail.php?msg='Your request is under process'");
            }
        }
        else{
            $today = date("Y-m-d H:i:s"); 
            
            $insert="INSERT INTO order_note(seller_id, user_id, note_id, attachment_path, is_paid, purchase_price, note_title, note_category, created_date) VALUES ('$seller_id','$user_id','$d','$document_path','$is_paid','$price','$title','$category','$today')";
            
            $result_insert=mysqli_query($conn, $insert);
                
            if($result_insert){
                header("location:../notes-detail.php?msg='Note is Paid and it is requested to publisher to allow you to Download this note'");
            }
            else{
                header("location:../notes-detail.php?msg='please try again'");
            }
            
        }
        }
        
        
    }
}
function download($id,$conn){
    $query1="SELECT file_path, note_id FROM documents where note_id='$id'";
        $result1=mysqli_query($conn, $query1);
    
        if($result1){
            $row1=mysqli_fetch_array($result1);
            $file=$row1[0];
            echo $file;

            header("content-disposition: attachment; filename=" . urlencode($file));
            $fb=fopen($file, "r");
            while(!feof($fb)){
           fread($fb, 8192);
            flush();
            }
           echo "<script>alert('Thank you')</script>";
        }
       else{
           echo "<script>alert('Note Not Found')</script>";
       }
}
?>
