<?php 
    include "connection.php";
    ob_start();
	if(!empty( $_REQUEST['id'] )){
		$user=$_GET['id'];
		$query="DELETE FROM category WHERE category.category_id = '$user'";
    	$result=mysqli_query($conn, $query);
		if($result){
			header("location:../manage-category.php?msg=Deleted");
		}
		header("location:../manage-category.php?msg=NO");
	}
?>