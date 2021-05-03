<?php 
    include "connection.php";
    ob_start();
	$msg='';
	if(!empty( $_REQUEST['id'] )){
		$user=$_GET['id'];
		$query="UPDATE note SET is_active=0 WHERE note.note_id = '$user'";
    	$result=mysqli_query($conn, $query);
		if($result){
			header("location:../dashboard.php");
		}
		header("location:../dashboard.php");
	}
?>