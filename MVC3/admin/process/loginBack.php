<?php
    include "connection.php";
   ob_start();
   session_start();

    $msg = '';    
     if (isset($_POST['email']) && !empty($_POST['pass'])) {
		 $mail=mysqli_real_escape_string($conn,$_POST['email']);
		 $password=mysqli_real_escape_string($conn,$_POST['pass']);

		 $query="SELECT * FROM users WHERE email='$mail' AND password='$password' AND is_active=1";
		 $result=mysqli_query($conn, $query);
         if (mysqli_num_rows($result) > 0) {
			  $r= mysqli_fetch_assoc($result);
			 $user=$r["role_id"];
             $_SESSION['valid'] = true;
             $_SESSION['user_id'] = $r["user_id"];
             $_SESSION['email'] = $r["email"];
             $_SESSION['username'] = $r["fname"] . " " . $r["lname"];
             $_SESSION["isLogin"]="yes";
             $user_id=$r["user_id"];
             $query="SELECT user_id FROM user_profile WHERE user_id='$user_id'";
             $result=mysqli_query($conn, $query);
			 if($user!=1){
				 if($result ){
					 if(mysqli_num_rows($result)==1 ){
						 header("location:../admin/admin-dashboard.php");
					 }
					 else{
						  header("location:../admin/my-profile.php?");
					 }
				 }else{
					 header("location:../admin/admin-dashboard.php");

				 }
			 }
			 else{
				 if($result ){
					 if(mysqli_num_rows($result)==1 ){
						 header("location:dashboard.php");
					 }
					 else{
						  header("location:user-profile.php?");
					 }
				 }else{
					 header("location:dashboard.php");
			 }
			 }
         }
         else {
          $msg = 'Wrong username or password';
        }
     }
?>
