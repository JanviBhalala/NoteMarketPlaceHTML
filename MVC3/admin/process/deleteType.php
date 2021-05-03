<?php 
    include "connection.php";
    ob_start();
	$msg='';
	if(!empty( $_REQUEST['id'] )){
		$user=$_GET['id'];
		$query="UPDATE type SET is_active=0 WHERE type.type_id = '$user'";
    	$result=mysqli_query($conn, $query);
		if($result){
			$msg="deleted";
			header("location:../manage-type.php?msg=$msg");
			
		}
		$msg="not";
		header("location:../manage-type.php?msg=$msg");
	}
?>