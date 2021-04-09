<?php
    include "connection.php";
    ob_start();
    session_start();
    $user_id=$_SESSION["user_id"];

    $msg = '';
    if(isset($_POST['add-country']) && !empty($_POST['country-name']) && !empty($_POST['country-code']) ){
        $name=$_POST['country-name'];
        $code=$_POST['country-code'];
		$id=$_POST['add-country'];
		$update=0;
		
		$quert="SELECT name FROM country WHERE country_id='$id'";
		$result=mysqli_query($conn, $quert);
		if($result && mysqli_num_rows($result)!=0){
			$update=1;
		}    
        
            if($update==1){
				
				//update 
                $today = date("Y-m-d H:i:s");
                $q1="UPDATE country SET name='$name',country_code='$code',updated_date='$today',updated_by='$user_id' WHERE country_id= '$id'";
            }
            else{
				
				//add
                $today = date("Y-m-d H:i:s");
                $q1="INSERT INTO country( name,country_code, created_date, created_by) VALUES ('$name','$code','$today',$user_id)";
            }
            $r1=mysqli_query($conn, $q1);
            if($r1){
				$msg="Countryis added.";
				header("location:../admin-add-country.php?msg=$msg");
            }
            else{
				$msg="Please try again.";
				header("location:../admin-add-country.php?msg=$msg");
            }
		
        
    }
    else{
        $msg="Please Fill All fields";
		header("location:../admin-add-country.php?msg=$msg");
    }
?>
