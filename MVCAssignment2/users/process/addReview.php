<?php 
include "connection.php";
   ob_start();
   session_start();

    $msg = ""; 
if(isset($_POST['rate']) && isset($_POST['reviewComments']) && isset($_POST['rateMe']) &&  isset($_POST['order_id'])){
    
    //print_r($_POST);
    $rate= $_POST['rateMe'];
    $reviewComments= $_POST['reviewComments'];
    $order_id=$_POST['order_id'];
    $user_id= $_SESSION["user_id"];
    
    $q="SELECT note_id FROM order_note WHERE order_id='$order_id' AND user_id='$user_id'";
    $r=mysqli_query($conn, $q);
    
    if($r){
        $row=mysqli_fetch_assoc($r);
        $note_id=$row['note_id'];
        $today = date("Y-m-d H:i:s"); 
        $query="INSERT INTO review(user_id, note_id, order_id, rating, comment, created_date) VALUES ('$user_id','$note_id','$order_id','$rate','$reviewComments','$today')";
        $result=mysqli_query($conn, $query);
        if($result){
            echo "Review is saved.";
        }
        else{
            echo "Please try again.";
        }
    }
}
?>