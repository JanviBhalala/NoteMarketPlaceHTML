<?php
    include "connection.php";
    ob_start();
    session_start();
    $user_id=$_SESSION["user_id"];

    $msg = '';
    if(isset($_POST['add-admin']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email'])&& !empty($_POST['phone']) && !empty($_POST['phone-number']) ){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $code=$_POST['phone'];
        $phone=$_POST['phone-number'];
		$id=$_POST['add-admin'];
		$update=0;
		
		$quert="SELECT email FROM users WHERE user_id='$id'";
		$result=mysqli_query($conn, $quert);
		if($result && mysqli_num_rows($result)!=0){
			$update=1;
		}
             
        
            if($update==1){
				
				//update admin
                $today = date("Y-m-d H:i:s");
                $q1="UPDATE users SET fname='$fname',lname='$lname',email='$email',phone_code='$code',phone='$phone',updated_date='$today',updated_by='$user_id' WHERE user_id='$id'";
            }
            else{
				
				//add admin
                $today = date("Y-m-d H:i:s");
                $q1="INSERT INTO users(role_id, fname, lname, email, phone_code, phone,is_email_verfied, created_by, created_date) VALUES (2,'$fname','$lname','$email','$code','$phone',1,'$user_id','$today')";
            }
            $r1=mysqli_query($conn, $q1);
            if($r1){
				$msg="Admin is added.";
				header("location:../admin-add-administrator.php?msg=$msg");
            }
            else{
				$msg="Please try again.";
				header("location:../admin-add-administrator.php?msg=$msg");
            }
		
        
    }
    else{
        $msg="Please Fill All fields";
		header("location:../admin-add-administrator.php?msg=$msg");
    }
?>
