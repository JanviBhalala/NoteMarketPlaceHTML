<?php 
include "connection.php";
include "mail.php";
$i=0;
session_start();
if(isset($_GET)){
	$order_id= $_GET['note_id'];
	$user_id= $_SESSION["user_id"];
	$user= $_SESSION["username"];
    
    
        $today = date("Y-m-d H:i:s"); 
        $query="UPDATE order_note SET is_allowed_to_download=1,updated_date='$today',updated_by='$user_id' WHERE order_id='$order_id'";
	
		//getting seller info
		$result=mysqli_query($conn, $query);
		$query="SELECT fname,lname,email,note_title FROM order_note JOIN users on order_note.user_id=users.user_id WHERE order_note.order_id='$order_id'";
		$result1=mysqli_query($conn, $query);
        if($result && $result1){
			
			$row=mysqli_fetch_assoc($result1);
			$name=$row['fname'];
			$surname=$row['lname'];
			$mail=$row['email'];
			$title=$row['note_title'];
			
           $to_email = "janvibhalala15@gmail.com";
			//$to_email = $mail;
           $subject = "$user Allows you to download a note.";
           $body = "Hello $name $surname, <br/> <br/>We would like to inform you that, $user Allows you to download a note. Please login and see My Download tab to download particular note.<br/><br/>Regards,<br/>Notes Marketplace";
			 $altBody="You are allowed to doenload book.";
           $name = "Download Book";
             
                if(sendMail($to_email,$name,$subject,$body,$altBody,$i)){
                    header("location:../buyer-request.php");
                }
                else{
                     header("location:../buyer-request.php?msg='error in sending mail'");
                }
            
			
            
        }
        else{
            header("location:../buyer-request.php?msg='Please try again'");
        }
   
}


?>