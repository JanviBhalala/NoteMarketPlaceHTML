<?php 
include "connection.php";
include "mail.php";
session_start();
if(isset($_POST)){
	print_r($_POST);
	$note_id= $_POST['order_id'];
    $reviewComments= $_POST['remarks'];
	$user_id= $_SESSION["user_id"];
	$user= $_SESSION["user_id"];
    
    
        $today = date("Y-m-d H:i:s"); 
        $query="UPDATE note SET status_id=4,action_by='$user_id',admin_remark='$reviewComments',published_date='' WHERE note_id='$note_id'";
	
		//getting seller info
		$result=mysqli_query($conn, $query);
		$query="SELECT fname,lname,email,title,admin_remark FROM note JOIN users on note.user_id=users.user_id WHERE note.note_id='$note_id'";
		$result1=mysqli_query($conn, $query);
        if($result && $result1){
			
			$row=mysqli_fetch_assoc($result1);
			$name=$row['fname'];
			$surname=$row['lname'];
			$mail=$row['email'];
			$title=$row['title'];
			$admin_remark=$row['admin_remark'];

			$to_email = "janvibhalala15@gmail.com";
			//$to_email = $mail;
			$subject = "Sorry! We need to remove your notes from our portal.";
			$body = "Hello $name $surname, <br /> <br />We want to inform you that, your note $title has benn removed from portal.Please find our remarks as below -<br />$admin_remark<br /><br />Regards,<br />Notes Marketplace";
			$name = "Unpublishing Book";
			$altBody="Sorry! We need to remove your notes from our portal.";
             
                if(sendMail($to_email,$name,$subject,$body,$altBody,0)){
                    $msg="Password is changed";
                }
                else{
                    echo "error in sending mail. Mailer Error:{ $mail->ErrorInfo}";
                }
            
			
            echo "Remark is saved now you can not change it.";
        }
        else{
            echo "Please try again.";
        }
   
}


?>