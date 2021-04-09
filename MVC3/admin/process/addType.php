<?php
    include "connection.php";
    ob_start();
    session_start();
    $user_id=$_SESSION["user_id"];

    $msg = '';
    if(isset($_POST['add-type']) && !empty($_POST['type-name']) && !empty($_POST['comments']) ){
        $name=$_POST['type-name'];
        $comment=$_POST['comments'];
		$id=$_POST['add-type'];
		$update=0;
		
		$quert="SELECT type FROM type WHERE type_id='$id'";
		$result=mysqli_query($conn, $quert);
		if($result && mysqli_num_rows($result)!=0){
			$update=1;
		}    
        
            if($update==1){
				
				//update 
                $today = date("Y-m-d H:i:s");
                $q1="UPDATE type SET type='$name',description='$comment',updated_date='$today',updated_by='$user_id' WHERE type_id= '$id'";
            }
            else{
				
				//add
                $today = date("Y-m-d H:i:s");
                $q1="INSERT INTO type(type, description, created_date, created_by) VALUES ('$name','$comment','$today','$user_id')";
            }
            $r1=mysqli_query($conn, $q1);
            if($r1){
				$msg="Type is added.";
				header("location:../admin-add-type.php?msg=$msg");
            }
            else{
				$msg="Please try again.";
				header("location:../admin-add-type.php?msg=$msg");
            }
		
        
    }
    else{
        $msg="Please Fill All fields";
		header("location:../admin-add-type.php?msg=$msg");
    }
?>