<?php 
include "connection.php";
session_start();
if(isset($_POST)){
	$order_id= $_POST['order_id'];
	$user_id= $_SESSION["user_id"];
    
        $today = date("Y-m-d H:i:s"); 
        $query="UPDATE users SET updated_date='$today',updated_by='$user_id',is_active=0 WHERE user_id='$order_id'";
        $result=mysqli_query($conn, $query);
        if($result){
            echo "User is Unactiated.";
        }
        else{
            echo "Please try again.";
        }
   
}


?>