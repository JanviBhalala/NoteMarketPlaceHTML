<?php 
    include "connection.php";
    ob_start();
	$msg='';
	if(!empty( $_REQUEST['id'] )){
		$user=$_GET['id'];
		$query="DELETE FROM `country` WHERE `country`.`country_id` = '$user'";
    	$result=mysqli_query($conn, $query);
		if($result){
			header("location:../manage-country.php?msg=$msg");
		}
		header("location:../manage-country.php?msg=No");
	}
?>