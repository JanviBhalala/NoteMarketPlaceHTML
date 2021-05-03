<?php 
    include "connection.php";
    ob_start();
	$msg='';
	if(!empty( $_REQUEST['id'] )){
		$user=$_GET['id'];
		$query="UPDATE country SET is_active=0 WHERE country.country_id = '$user'";
    	$result=mysqli_query($conn, $query);
		if($result){
			header("location:../manage-country.php?msg=$msg");
		}
		header("location:../manage-country.php?msg=No");
	}
?>