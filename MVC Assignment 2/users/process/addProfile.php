<?php
include "connection.php";
   session_start();
 
     if (isset($_POST['profile_submit_btn']) && isset($_POST['first_name']) && isset($_POST['email']) && isset($_POST['last_name']) && isset($_POST['address_line_1']) && isset($_POST['city'])  && isset($_POST['zipcode'])&& isset($_POST['address_line_2']) && isset($_POST['state'])  && isset($_POST['country']) && isset($_POST['university']) && isset($_POST['college'])  ) 
     {
         $fname = $_POST['first_name'];
         $lname = $_POST['last_name'];
         $email = $_POST['email'];
         $add1 = $_POST['address_line_1'];
         $add2 = $_POST['address_line_2'];
         $zip = $_POST['zipcode'];
         $city = $_POST['city'];
         $state = $_POST['state']; 
         $country = $_POST['country'];
         $univercity = $_POST['university'];
         $college = $_POST['college'];
         $user_id= $_SESSION["user_id"];
         $update="";
         
         $q="SELECT COUNT(user_id) FROM user_profile WHERE user_id = '$user_id'";
        $rslt=mysqli_query($conn, $q);
         $r= mysqli_fetch_assoc($rslt);
        
         if($r["COUNT(user_id)"]==1){
             $update .="UPDATE user_profile SET ";
             echo "1";
         }
            
         
         $string1 = "";
         $string2 = "";
         if(!empty($_POST['gender'])){
              $gender= $_POST["gender"];
             if($r["COUNT(user_id)"]==1){
                $update .="gender='$gender', ";
             }
             else{
                 $string1 .= "gender, ";
                 $string2 .= "'$gender', ";
             }
         }
         if(!empty($_POST['date-of-birth'])){
             $dob= $_POST["date-of-birth"];
             if($r["COUNT(user_id)"]==1){
                $update .="dob='$dob', ";
             }
             else{
                $string1 .= "dob, "; 
                $string2 .= "'$dob', ";
             }
             
              
              
         }
         if(isset($_FILES['profile'])){
             
             $file=$_FILES['profile'];
             //print_r($file);
             $filename=$file['name'];
           $filePath=$file['tmp_name'];
             
             $fileText=explode('.',$filename);
             $fileExtention=strtolower(end($fileText));
             $filename1=$fname.$user_id."profile.".$fileExtention;
            // echo "$filename1";
             $destination="../../uploads/user/".$filename1;
             move_uploaded_file($filePath,$destination);
             
             if($r["COUNT(user_id)"]==1){
                $update .="profile_pic='$destination', ";
             }
             else{
                 $string1 .= "profile_pic, ";
                 $string2 .= "'$destination', ";
             }
             
         }
         if(!empty($_POST['phone']) && !empty($_POST['phone-number'])){
             $c_code= $_POST["phone"];
             $phone= $_POST["phone-number"];
             if($r["COUNT(user_id)"]==1){
                $update .="country_code='$c_code', mobile='$phone', ";
             }
             else{
                 $string1 .= "country_code, mobile, ";
                 $string2 .= "'$c_code', '$phone', ";
             }
         }
         if($r["COUNT(user_id)"]==1){
             $today = date("Y-m-d H:i:s"); 
             $update .="email2='$email', address1='$add1',address2='$add2',city='$city',state='$state',zip_code='$zip',country='$country',university='$univercity',college='$college', updated_date ='$today' WHERE user_id= '$user_id'";
             $result=mysqli_query($conn, $update);
             $q="UPDATE users SET fname='$fname',lname='$lname',updated_date='$today' WHERE user_id='$user_id'";
             $r=mysqli_query($conn, $q);
         }
         else{
             $today = date("Y-m-d H:i:s");
             $string1 .= "email2, address1, address2, city, state, zip_code, country, university, college, user_id,created_date";
             $string2 .= "'$email', '$add1', '$add2', '$city', '$state', '$zip', '$country', '$univercity', '$college', '$user_id', '$today'";
             $string2 .= "'$email', '$add1', '$add2', '$city', '$state', '$zip', '$country', '$univercity', '$college', '$user_id', '$today'";
             
             $query="INSERT INTO user_profile ( $string1 ) VALUES ($string2)";
             $result=mysqli_query($conn, $query);
             $q="UPDATE users SET fname='$fname',lname='$lname',updated_date='$today' WHERE user_id='$user_id'";
             $r=mysqli_query($conn, $q);
         }
         if($result && $r){
           $msg= "Profile is updated";
              header("location:../user-profile.php?msg={$msg}");
             echo $msg;
         }
       
    }
?>
