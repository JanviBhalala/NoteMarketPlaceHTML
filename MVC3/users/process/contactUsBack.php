<?php
include "connection.php";
$i=0;
include "mail.php";
ob_start();
session_start();
$msg="";
$msg1="";


if (isset($_POST['query_btn']) && isset($_POST['full-name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['comments']))
{
	$fname = $_POST['full-name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$comment = $_POST['comments'];
	$string1="name, email, subject, comment";
	$string2="'$fname' , '$email' , '$subject' , '$comment'";
	if(isset($_SESSION["isLogin"]) ){
		if($_SESSION["isLogin"]=="yes"){
			$user_id= $_SESSION["user_id"];
			$string1 .=", is_user, user_id";
			$string2 .=" , b'1' , '$user_id'";
		}
	}

	//inserting Query in database
	$query="INSERT INTO contact_us ( $string1 ) VALUES ( $string2 )";
	$result=mysqli_query($conn, $query);

	// selecting email of admin from database
	$q="SELECT email FROM users where role_id = 3";
	$r=mysqli_query($conn, $q);
	$row=mysqli_fetch_assoc($r);

	//sending mail to admin
	$to_email = $row['email'];
	$altBody="Query from $fname is about $subject that $comment.";
	$subject = "$fname Query";

	$body = "Hello,<br /><br />$comment<br /><br />Regards,<br />$fname";
	$name = $fname;

	if(sendMail($to_email,$name,$subject,$body,$altBody,$i)){
		$msg="Your Query is sent to NoteMarketPlace.";
		header("location:../contact-us.php?msg={$msg}");
	}
	else{
		$msg1= "Error in sending mail.";
		header("location:../contact-us.php?msg1=$msg1");
	}

}
?>