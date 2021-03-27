<?php
    include "connection.php";
   ob_start();
   session_start();

    $msg = '';
       echo "hi";     
     if (isset($_POST['email']) && !empty($_POST['pass'])
     ) {
         $mail=mysqli_real_escape_string($conn,$_POST['email']);
        $password=mysqli_real_escape_string($conn,$_POST['pass']);

     $query="SELECT * FROM users WHERE email='$mail' AND password='$password'";
     $result=mysqli_query($conn, $query);
         if (mysqli_num_rows($result) > 0) {
         $_SESSION['valid'] = true;
         $_SESSION['user_id'] = $r["user_id"];
         $_SESSION['email'] = $r["email"];
         $_SESSION['username'] = $r["fname"] . " " . $r["lname"];
         $_SESSION["isLogin"]="yes";

             header("location:admin-dashboard.php");
             

         }
         else {
          $msg = 'Wrong username or password';
        }
     }
?>
