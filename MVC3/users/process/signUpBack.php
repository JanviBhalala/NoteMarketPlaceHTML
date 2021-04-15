<?php
include "connection.php";
$i=1;
include "mail.php";
   ob_start();
   session_start();
$msg="";
$b=1;
 
     if (isset($_POST['sign-up-btn'])  && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])  && !empty($_POST['pass']) && !empty($_POST['confirm_pass'])) 
     {
         $fname = $_POST['fname'];
         $lname = $_POST['lname'];
         $email = $_POST['email'];
         $pass = $_POST['pass'];
         $c_pass = $_POST['confirm_pass'];
         
        //check for unique address
        $q="SELECT * FROM users WHERE email='$email'";
        $r=mysqli_query($conn, $q);
         
        
         if(mysqli_num_rows($r) < 1 ){ 
         
        if (strlen($_POST['pass']) <= '8') {
            $msg = "Your Password Must Contain At Least 8 Characters!";
             header("location:../signup.php?msg={$msg}");
            
        }
        elseif(!preg_match("#[0-9]+#",$pass)) {
            $msg = "Your Password Must Contain At Least 1 Number!";
             header("location:../signup.php?msg={$msg}");
            
        }
        elseif(!preg_match("#[A-Z]+#",$pass)) {
            $msg = "Your Password Must Contain At Least 1 Capital Letter!";
             header("location:../signup.php?msg={$msg}");
            
        }
        elseif(!preg_match("#[a-z]+#",$pass)) {
            $msg = "Your Password Must Contain At Least 1 Lowercase Letter!";
             header("location:../signup.php?msg={$msg}");
            
        } else if($pass != $c_pass){
            $msg="Confirm Password should match password.";
            header("location:../signup.php?msg={$msg}");
        }
        else{
            //inserting data into DB
                 $query="INSERT INTO users (role_id, fname, lname, email, password) VALUES ( 1, '$fname', '$lname ' , '$email' , '$pass')";
                 $result=mysqli_query($conn, $query);
                
                 //send mail if data is inserted
                 if($result){
                     $last_id = mysqli_insert_id($conn);
                     $to_email = $email;
                     $altBody="You are registered. Now you need to verify email.";
                     $subject = "Email Verifivcation";
                     $body = "<table><tr><br/><br/></tr><tr><img src='cid:logo' alt='logo'></tr><tr><h2 style='font-size: 26px; font-weight: 600; line-height: 30px;color: #6255a5; margin: 50px 0 30px 0;'>Email Varification</h2></tr><tr> <h4 style='font-size: 18px; font-weight: 600; line-height: 22px; color: #333333; margin: 0 0 20px 0;'>Dear $fname,</h4></tr> <tr><p style='font-size: 16px; font-weight: 400; line-height: 20px; color: #333333; margin-bottom: 0 0 100px 0;'>Thanks for Signing up!<br>Simply click below for email verification.</p></tr><tr><button style='outline: 0;background-color: #6255a5;width: 100%;border: 0;padding: 10px;transition: all 0.3 ease;cursor: pointer;border-radius: 3px;'><a style ='text-decoration: none;text-transform: uppercase;color: #FFFFFF;font-size: 18px;font-weight: 600;' href='http://localhost/NoteMarketPlaceHTML/users/process/emailcheck.php?id=$last_id'>Verify Email Address</a></button></tr></table>";

                     $name = "$fname $lname";

                     
                     if(sendMail($to_email,$name,$subject,$body,$altBody,$i)){
                         $msg="Email is sent to your email.";
                          header("location:../signup.php?msg={$msg}");
                         
                     }
                     else{
                      echo "error in sending mail. Mailer Error:{ $mail->ErrorInfo}";
                     }
            
        }
        
        
         
        }
             
           
         }
         else{
            $msg="email already exist";
              header("location:../signup.php?msg={$msg}");
         }
         
        
       
    }
    else{
        echo "nop";
    }
?>
