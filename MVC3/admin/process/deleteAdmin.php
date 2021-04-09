<?php 
    include "connection.php";
    ob_start();
	$msg='';
	if(!empty( $_REQUEST['id'] )){
		$user=$_GET['id'];
		$query="DELETE FROM users WHERE users.user_id = '$user'";
    	$result=mysqli_query($conn, $query);
		if($result){
			header("location:../manage-administrator.php");
		}
		header("location:../manage-administrator.php");
	}
?>