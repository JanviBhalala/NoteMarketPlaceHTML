<?php 
    include "connection.php";
    ob_start();
	if(!empty( $_REQUEST['id'] )){
		$user=$_GET['id'];
		$query="UPDATE category SET is_active=0 WHERE category.category_id = '$user'";
    	$result=mysqli_query($conn, $query);
		if($result){
			header("location:../manage-category.php?msg=Deleted");
		}
		header("location:../manage-category.php?msg=NO");
	}
?>