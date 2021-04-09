<?php
    include "connection.php";
   ob_start();
   session_start();

    $msg = '';    
     if (isset($_POST['email']) && !empty($_POST['pass'])) {
		 $mail=mysqli_real_escape_string($conn,$_POST['email']);
		 $password=mysqli_real_escape_string($conn,$_POST['pass']);

		 $query="SELECT * FROM users WHERE email='$mail' AND password='$password' AND role_id IN(2,3)";
		 $result=mysqli_query($conn, $query);
         if (mysqli_num_rows($result) > 0) {
			  $r= mysqli_fetch_assoc($result);
             $_SESSION['valid'] = true;
             $_SESSION['user_id'] = $r["user_id"];
             $_SESSION['email'] = $r["email"];
             $_SESSION['username'] = $r["fname"] . " " . $r["lname"];
             $_SESSION["isLogin"]="yes";
             $user_id=$r["user_id"];
             $query="SELECT user_id FROM user_profile WHERE user_id='$user_id'";
             $result=mysqli_query($conn, $query);
             if($result){
                 if(mysqli_num_rows($result)==1){
                     header("location:admin-dashboard.php");
                 }
                 else{
					 $i=$r["user_id"];
                      header("location:my-profile.php?");
                 }
             }else{

                 header("location:admin-dashboard.php");

             }
         }
         else {
          $msg = 'Wrong username or password';
        }
     }
?>
