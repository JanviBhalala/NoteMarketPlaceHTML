<?php 
include "connection.php";
session_start();
if(isset($_POST)){
	$order_id= $_POST['order_id'];
	$user_id= $_SESSION["user_id"];
    
        $today = date("Y-m-d H:i:s"); 
        $query="UPDATE note SET status_id=3,action_by='$user_id',admin_remark='',published_date='$today' WHERE note_id='$order_id'";
        $result=mysqli_query($conn, $query);
        if($result){
            echo "Book is approved.";
        }
        else{
            echo "Please try again.";
        }
   
}
?>
