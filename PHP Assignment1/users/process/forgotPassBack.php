<?php
include "connection.php";
$i=0;
include "mail.php";
   ob_start();
   session_start();

    $msg = '';
            
     if (isset($_POST['forgot-btn'])  && isset($_POST['mail'])) 
     {
         
       $mail=$_POST['mail'];  
         
        $query="SELECT * FROM users WHERE email='$mail'";
        $result=mysqli_query($conn, $query);
         
         
        if(mysqli_num_rows($result) > 0){
            $random=rand(1000,10000);
           $to_email = $mail;
           $altBody="Password is $random";
           $subject = "New Temporary Password has been created for you";
           $body = "Hello, <br/> <br/>We have generated a new password for you<br/>Password: $random<br/><br/>Regards,<br/>Notes Marketplace";
           $name = "Forgot Password";
             
            $q="UPDATE users SET password = '$random' WHERE email = '$mail'";
            $r=mysqli_query($conn, $q);
            if($r){
                if(sendMail($to_email,$name,$subject,$body,$altBody,$i)){
                    $msg="Password is changed";
                    header("location:../login.php?msg={$msg}");
                }
                else{
                    echo "error in sending mail. Mailer Error:{ $mail->ErrorInfo}";
                }
            }
      
         }
         else{
              $msg="Email does not exist";
             header("location:../forgot-password.php?msg={$msg}");
         }
       
    }
    else{
      header("location:../forgot-password.php");
    }
?>
