<?php
    include "connection.php";
    ob_start();
    session_start();
    $user_id=$_SESSION["user_id"];

    $msg = '';
    if(isset($_POST['add-cat']) && !empty($_POST['category-name']) && !empty($_POST['comments']) ){
        $name=$_POST['category-name'];
        $comment=$_POST['comments'];
		$id=$_POST['add-cat'];
		$update=0;
		
		$quert="SELECT name FROM category WHERE name='$name'";
		$result=mysqli_query($conn, $quert);
		if($result && mysqli_num_rows($result)!=0){
			$update=1;
		}    
        
            if($update==1){
				
				//update 
                $today = date("Y-m-d H:i:s");
                $q1="UPDATE `category` SET `name`='$name',`description`='$comment',`updated_date`='$today',`updated_by`='$user_id' WHERE category_id= '$id'";
            }
            else{
				
				//add
                $today = date("Y-m-d H:i:s");
                $q1="INSERT INTO `category`(`name`, `description`, `created_date`, `created_by`) VALUES ('$name','$comment','$today','$user_id')";
            }
            $r1=mysqli_query($conn, $q1);
            if($r1){
				$msg="Category is added.";
				header("location:../admin-add-category.php?msg=$q1");
            }
            else{
				$msg="Please try again.";
				header("location:../admin-add-category.php?msg=$msg");
            }
		
        
    }
    else{
        $msg="Please Fill All fields";
		header("location:../admin-add-category.php?msg=$msg");
    }
?>
