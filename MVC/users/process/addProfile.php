<?php
include "connection.php";
   session_start();
 
     if (isset($_POST['profile_submit_btn']) && isset($_POST['first_name']) && isset($_POST['email']) && isset($_POST['last-name']) && isset($_POST['address-line-1']) && isset($_POST['city'])  && isset($_POST['zipcode'])&& isset($_POST['address-line-2']) && isset($_POST['state'])  && isset($_POST['country']) && isset($_POST['university']) && isset($_POST['college'])  ) 
     {
         $fname = $_POST['first_name'];
         $lname = $_POST['last-name'];
         $email = $_POST['email'];
         $add1 = $_POST['address-line-1'];
         $add2 = $_POST['address-line-2'];
         $zip = $_POST['zipcode'];
         $city = $_POST['city'];
         $state = $_POST['state']; 
         $country = $_POST['country'];
         $univercity = $_POST['university'];
         $college = $_POST['college'];
         $user_id= $_SESSION["user_id"];
         
         $string1 = "";
         $string2 = "";
         if(!empty($_POST['gender'])){
             $string1 .= "gender, ";
             $gender= $_POST["gender"];
             $string2 .= "'$gender', ";
         }
         if(!empty($_POST['date-of-birth'])){
             $string1 .= "dob, "; 
              $gender= $_POST["gender"];
         }
         if(isset($_FILES['profile'])){
             
             $file=$_FILES['profile'];
             print_r($file);
             $filename=$file['name'];
           $filePath=$file['tmp_name'];
             
             $fileText=explode('.',$filename);
             $fileExtention=strtolower(end($fileText));
             $filename1=$fname.$user_id."profile.".$fileExtention;
             echo "$filename1";
             $destination="../../uploads/user/".$filename1;
             move_uploaded_file($filePath,$destination);
             
             $string1 .= "profile_pic, ";
             $string2 .= "'$destination', ";
             
         }
         if(!empty($_POST['phone']) && !empty($_POST['phone-number'])){
             $string1 .= "country_code, mobile, ";
             $c_code= $_POST["phone"];
             $phone= $_POST["phone-number"];
             $string2 .= "'$c_code', '$phone', ";
         }
         
         $string1 .= "email2, address1, address2, city, state, zip_code, country, university, college, user_id";
         $string2 .= "'$email', '$add1', '$add2', '$city', '$state', '$zip', '$country', '$country', '$college', '$user_id'";
         $query="INSERT INTO user_profile ( $string1 ) VALUES ($string2)";
         echo $query;
         $result=mysqli_query($conn, $query);
         if(1){
           echo "registered";    
         }
       
    }
?>
