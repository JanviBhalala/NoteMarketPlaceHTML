<?php
include "connection.php";
$i=1;
include "mail.php";
   ob_start();
   session_start();
$msg="";
$b=1;
 
     if (isset($_POST['change-btn'])  && !empty($_POST['old-password']) && !empty($_POST['new-password']) && !empty($_POST['confirm-password'])) 
     {
         $n_pass = $_POST['new-password'];
         $pass = $_POST['old-password'];
         $c_pass = $_POST['confirm-password'];
         $user=$_SESSION["user_id"];
         
        //check for unique address
        $q="SELECT * FROM users WHERE user_id='$user'";
        $r=mysqli_query($conn, $q);
        $row= mysqli_fetch_assoc($r);
        
         
        
         if(password_verify($pass, $row["password"])){ 

            if (strlen($_POST['new-password']) < '8') {
            $msg = "Your Password Must Contain At Least 8 Characters!";
             header("location:../change-password.php?msg={$msg}");

            }
            else if(!preg_match("#[0-9]+#",$n_pass)) {
                $msg = "Your Password Must Contain At Least 1 Number!";
                 header("location:../change-password.php?msg={$msg}");

            }
            else if(!preg_match("#[A-Z]+#",$n_pass)) {
                $msg = "Your Password Must Contain At Least 1 Capital Letter!";
                 header("location:../change-password.php?msg={$msg}");

            }
            else if(!preg_match("#[a-z]+#",$n_pass)) {
                $msg = "Your Password Must Contain At Least 1 Lowercase Letter!";
                 header("location:../change-password.php?msg={$msg}");

            }
             else if($n_pass != $c_pass){
                $msg="Confirm Password should match password.";
                header("location:../change-password.php?msg={$msg}");
            }
             else if (!preg_match("/\W/", $n_pass)) {
             $msg = "Password should contain at least one special character";
                 header("location:../change-password.php?msg={$msg}");
             }            else if (preg_match("/\s/", $n_pass)) {
              $msg = "Password should not contain any white space";
                 header("location:../change-password.php?msg={$msg}");
             }   
            else{
				$hash = password_hash($n_pass, PASSWORD_DEFAULT);
                $today = date("Y-m-d H:i:s"); 
                $query="UPDATE users SET password='$hash',updated_date='$today' WHERE user_id = '$user'";
                $result=mysqli_query($conn, $query);
                if($result){
                    $msg="Your password has been changed.";
                    header("location:../change-password.php?msg1={$msg}");
                }
                else{
                    $msg="Please try again.";
                    header("location:../change-password.php?msg={$msg}"); 
                }
            }
        }
         else{
            $msg="Password does not match.";
              header("location:../change-password.php?msg={$msg}");
         }
         
        
       
    }
?>
