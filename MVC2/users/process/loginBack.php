<?php
include "connection.php";
   ob_start();
   session_start();

    $msg = "";
            
     if (isset($_POST['login-btn']) && isset($_POST['email']) && !empty($_POST['pass'])) 
     {
         
        $mail=mysqli_real_escape_string($conn,$_POST['email']);
        $password=mysqli_real_escape_string($conn,$_POST['pass']);
        
         
        $query="SELECT * FROM users WHERE email='$mail' AND password='$password'";
        $result=mysqli_query($conn, $query);
        
         if(mysqli_num_rows($result) > 0){
            $r= mysqli_fetch_assoc($result);
            $_SESSION['valid'] = true;
            $_SESSION['user_id'] = $r["user_id"];
            $_SESSION['email'] = $r["email"];
            $_SESSION['username'] = $r["fname"] . " " . $r["lname"];
            $_SESSION["isLogin"]="yes";
             
            if($r["is_email_verfied"]){
               header("location:search.php");
            }
            else{
                $msg = "Please varify Email";
            }
         }
         else{
              $msg="Incorrect Data";
         }
       
    }
?>
