<?php 
include "connection.php";
   ob_start();
   session_start();

    $msg = ""; 
if(isset($_POST['order_id']) && isset($_POST['remarks']) ){
    //print_r($_POST);
    $order_id= $_POST['order_id'];
    $reviewComments= $_POST['remarks'];
    $user_id= $_SESSION["user_id"];
    
    $q="SELECT note_id FROM order_note WHERE order_id='$order_id' AND user_id='$user_id'";
    $r=mysqli_query($conn, $q);
    
    if($r){
        $row=mysqli_fetch_assoc($r);
        $note_id=$row['note_id'];
        $today = date("Y-m-d H:i:s"); 
        $query="INSERT INTO remark(user_id, note_id, against_order_id, remark, created_date) VALUES ('$user_id','$note_id','$order_id','$reviewComments','$today')";
        $result=mysqli_query($conn, $query);
        if($result){
            echo "Remark is saved now you can not change it.";
        }
        else{
            echo "Please try again.";
        }
    }
}
?>