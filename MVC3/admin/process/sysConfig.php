<?php
    include "connection.php";
    ob_start();
    session_start();
    $user_id=$_SESSION["user_id"];

    $msg = '';
    if(isset($_POST['submit-sys-config']) && !empty($_POST['linkedin-url']) && !empty($_POST['twitter-url']) && !empty($_POST['facebook-url']) && !empty($_POST['email']) && !empty($_POST['support-phone-number']) && !empty($_POST['suppoet-email']) && isset($_FILES['default-note']) && isset($_FILES['default-profile'])){
		
		$update=$_POST['submit-sys-config'];
		echo "ho";
        $linkedin=$_POST['linkedin-url'];
        $twitter=$_POST['twitter-url'];
        $facebook=$_POST['facebook-url'];
        $email=$_POST['email'];
        $support_phone_number=$_POST['support-phone-number'];
        $support_email=$_POST['suppoet-email'];
        
        $file1=$_FILES['default-note'];
        $previewname=$file1['name'];
        $previewPath=$file1['tmp_name'];
        $previewText=explode('.',$previewname);
        $PreviewExtention=strtolower(end($previewText));
        $previewName1="defaultNote.".$PreviewExtention;
        $previewDestination="../../uploads/notes/displayPic/".$previewName1;
        move_uploaded_file($previewPath,$previewDestination);
		
		$file2=$_FILES['default-profile'];
		
        $previewname1=$file2['name'];
        $previewPath1=$file2['tmp_name'];
        $previewText1=explode('.',$previewname1);
		echo"query";
        $PreviewExtention1=strtolower(end($previewText1));
        $previewName1="defaultprofile.".$PreviewExtention1;
        $profileDestination="../../uploads/user/".$previewName1;
		echo"query";
        move_uploaded_file($previewPath1,$profileDestination);
         echo"query";    
        if($update==1){
			$today = date("Y-m-d H:i:s");
			
			$query="UPDATE system_configuration SET value='$email',updated_date='$today',updated_by='$user_id' WHERE id=1;";
			$r1=mysqli_query($conn, $query);
			
			$query="UPDATE system_configuration SET value='$support_phone_number',updated_date='$today',updated_by='$user_id' WHERE id=2;";
			$r2=mysqli_query($conn, $query);
			
			$query="UPDATE system_configuration SET value='$support_email',updated_date='$today',updated_by='$user_id' WHERE id=3;";
			$r3=mysqli_query($conn, $query);
			
			$query="UPDATE system_configuration SET value='$facebook',updated_date='$today',updated_by='$user_id' WHERE id=4;";
			$r4=mysqli_query($conn, $query);
			
			$query="UPDATE system_configuration SET value='$twitter',updated_date='$today',updated_by='$user_id' WHERE id=5;";
			$r5=mysqli_query($conn, $query);
			
			$query="UPDATE system_configuration SET value='$linkedin',updated_date='$today',updated_by='$user_id' WHERE id=6;";
			$r6=mysqli_query($conn, $query);
			
			$query="UPDATE system_configuration SET value='$previewDestination',updated_date='$today',updated_by='$user_id' WHERE id=7;";
			$r7=mysqli_query($conn, $query);
			
			$query="UPDATE system_configuration SET value='$profileDestination',updated_date='$today',updated_by='$user_id' WHERE id=8;";
			$r8=mysqli_query($conn, $query);
			
			if($r1 && $r2 && $r3 && $r4 && $r5 && $r6 && $r7 && $r8){
				$msg="Updated.";
				header("location:../manage-system-configuration.php?msg=$msg");
			}
			else{
				$msg="Please try again.";
				echo $msg;
				header("location:../manage-system-configuration.php?msg=$msg");
			}
		}else{
			$today = date("Y-m-d H:i:s");
			
			$query="INSERT INTO system_configuration( item_key, value, created_date, created_by) VALUES ('email','$email','$today','$user_id')";
			$r1=mysqli_query($conn, $query);
			$query="INSERT INTO system_configuration( item_key, value, created_date, created_by) VALUES ('support_phone_number','$support_phone_number','$today','$user_id')";
			$r2=mysqli_query($conn, $query);
			
			$query="INSERT INTO system_configuration( item_key, value, created_date, created_by) VALUES ('support_email','$support_email','$today','$user_id')";
			$r3=mysqli_query($conn, $query);
			
			$query="INSERT INTO system_configuration( item_key, value, created_date, created_by) VALUES ('facebook','$facebook','$today','$user_id')";
			$r4=mysqli_query($conn, $query);
			
			$query="INSERT INTO system_configuration( item_key, value, created_date, created_by) VALUES ('twitter','$twitter','$today','$user_id')";
			$r5=mysqli_query($conn, $query);
			
			$query="INSERT INTO system_configuration( item_key, value, created_date, created_by) VALUES ('linkedin','$linkedin','$today','$user_id')";
			$r6=mysqli_query($conn, $query);
			
			$query="INSERT INTO system_configuration( item_key, value, created_date, created_by) VALUES ('note','$previewDestination','$today','$user_id')";
			$r7=mysqli_query($conn, $query);
			
			$query="INSERT INTO system_configuration( item_key, value, created_date, created_by) VALUES ('profile','$profileDestination','$today','$user_id')";
			$r8=mysqli_query($conn, $query);
			
			if($r1 && $r2 && $r3 && $r4 && $r5 && $r6 && $r7 && $r8){
				$msg="Configured.";
				header("location:../manage-system-configuration.php?msg=$msg");
			}
			else{
				$msg="Please try again.";
				echo $msg;
				header("location:../manage-system-configuration.php?msg=$msg");
			}
			
		}
		
      
    }
    else{
        $msg="Please Fill All fields";
		header("location:../manage-system-configuration.php?msg=$msg");
    }
?>
