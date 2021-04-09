<?php 
include "connection.php";
session_start();
if(isset($_POST)){
	print_r($_POST);
	$order_id= $_POST['order_id'];
    $reviewComments= $_POST['remarks'];
	$user_id= $_SESSION["user_id"];
    
    
        $today = date("Y-m-d H:i:s"); 
        $query="UPDATE note SET status_id=4,action_by='$user_id',admin_remark='$reviewComments',published_date='' WHERE note_id='$order_id'";
        $result=mysqli_query($conn, $query);
        if($result){
            echo "Remark is saved now you can not change it.";
        }
        else{
            echo "Please try again.";
        }
   
}


?>