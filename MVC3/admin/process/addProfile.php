<?php
    include "connection.php";
    ob_start();
    session_start();
    $user_id=$_SESSION["user_id"];

    $msg = '';
    if(isset($_POST['add_profile']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['email2']) && !empty($_POST['phone']) && !empty($_POST['phone_number']) && isset($_FILES['profile_pic'])){
		
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $email2=$_POST['email2'];
        $code=$_POST['phone'];
        $phone=$_POST['phone_number'];
        
        $file=$_FILES['profile_pic'];
        $previewname=$file['name'];
        $previewPath=$file['tmp_name'];

        $previewText=explode('.',$previewname);
        $PreviewExtention=strtolower(end($previewText));
        $previewName1=$fname.$user_id."Adminprofile.".$PreviewExtention;
        $previewDestination="../../uploads/user/".$previewName1;
        move_uploaded_file($previewPath,$previewDestination);
             
        
        $query="SELECT user_id FROM user_profile WHERE user_id = '$user_id' ";
        $result=mysqli_query($conn, $query);
        if($result){
            if(mysqli_num_rows($result)==1){
				
				//update
                $today = date("Y-m-d H:i:s");
                $q="UPDATE user_profile SET email2='$email2',country_code='$code',mobile='$phone',profile_pic='$previewDestination',updated_date='$today' WHERE user_id='$user_id'";
				
                $q1="UPDATE users SET fname='$fname',lname='$lname',email='$email',phone_code='$code',phone='$phone',updated_date='$today'  WHERE user_id='$user_id'";
            }
            else{
				
				//add
                $today = date("Y-m-d H:i:s");
                $q="INSERT INTO user_profile(email2, country_code, mobile, profile_pic, user_id, created_date) VALUES ('$email2','$code','$phone','$previewDestination','$user_id','$today')";
				
                $q1="UPDATE users SET fname='$fname',lname='$lname',email='$email',updated_date='$today' WHERE user_id='$user_id'";
            }
            $r=mysqli_query($conn, $q);
            $r1=mysqli_query($conn, $q1);
            if($r && $r1){
                $msg="Your profile is updated.";
				 header("location:../my-profile.php?msg=$msg");
            }
        }
        else{
            $msg1="Please try again.";
			header("location:../my-profile.php?msg1=$msg1");
        }
    }
    else{
        $msg1="Please Fill All fields";
		header("location:../my-profile.php?msg1=$msg1");
    }
?>