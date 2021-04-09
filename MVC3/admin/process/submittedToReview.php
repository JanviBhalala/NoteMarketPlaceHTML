<?php 
include "connection.php";
session_start();
if(isset($_POST)){
	$order_id= $_POST['order_id'];
	$user_id= $_SESSION["user_id"];
    
    
        $today = date("Y-m-d H:i:s"); 
        $query="UPDATE note SET status_id= '5' ,action_by='$user_id',admin_remark='' WHERE note_id='$order_id'";
        $result=mysqli_query($conn, $query);
        if($result){
            echo $query;
        }
        else{
            echo "Please try again.";
        }
   
}


?>