<?php
include "connection.php";
$i=0;
include "mail.php";
   session_start();
 
     if ((isset($_POST['save_note']) || isset($_POST['publish_note']))&& isset($_POST['note-title']) && isset($_POST['note-category']) && isset($_FILES['upload_notes']) && isset($_POST['comments']) && isset($_POST['sell_type'])  && isset($_POST['price'])) 
     {
         $update=0;
         $title = $_POST['note-title'];
         $category = $_POST['note-category'];
         $upload_notes = $_FILES['upload_notes'];
         $comments = $_POST['comments'];
         $sell_type1 = $_POST['sell_type'];
         $price = $_POST['price'];
         $user_id= $_SESSION["user_id"];
         $file=$_FILES['upload_notes'];
         if($sell_type1==1){
            $sell_type="b'1'"; 
         }
         else{
            $sell_type="b'0'";
         }
             
         $filename=$file['name'];
         $filePath=$file['tmp_name'];
             
         $fileText=explode('.',$filename);
         $fileExtention=strtolower(end($fileText));
         $filename1=$title.$user_id.$price."document.".$fileExtention;// echo "$filename1";
         $destination="../../uploads/notes/documents/".$filename1;
         move_uploaded_file($filePath,$destination);
         $string1 = "";
         $string2 = "";
		 $update_q="UPDATE note SET";
         if(!empty($_POST['note_type'])){
             $string1 .= "note_type_id, ";
             $note_type= $_POST['note_type'];
             $string2 .= "'$note_type', ";
			 $update_q .=" note_type_id='$note_type',";
         }
         if(!empty($_POST['number_of_pages'])){
             $string1 .= "number_of_pages, "; 
             $pages_count= $_POST['number_of_pages'];
             $string2 .= "'$pages_count', ";
			 $update_q .=" number_of_pages='$pages_count',";
         }
         if(!empty($_POST['country'])){
             $string1 .= "country, ";
             $country= $_POST['country'];
             $string2 .= "'$country', ";
			 $update_q .=" country='$country',";
         }
         if(!empty($_POST['institution'])){
             $string1 .= "university, "; 
             $institution= $_POST["institution"];
             $string2 .= "'$institution', ";
			 $update_q .=" university='$institution',";

         }
         if(!empty($_POST['course_name'])){
             $string1 .= "cource, ";
             $gender= $_POST["course_name"];
             $string2 .= "'$gender', ";
			 $update_q .=" cource='$gender',";
         }
         if(!empty($_POST['professor_name'])){
             $string1 .= "professor, "; 
             $professor_name= $_POST["professor_name"];
             $string2 .= "'$professor_name', ";
			 $update_q .=" professor='$professor_name',";
         }
         
         if(!empty($_POST['course_code'])){
             $string1 .= "cource_code, "; 
             $course_code= $_POST["course_code"];
             $string2 .= "'$course_code', ";
			 $update_q .=" cource_code='$course_code',";
         }
        
         if(isset($_FILES['display_pic'])){
             
             $profile=$_FILES['display_pic'];
             $profile_name=$profile['name'];
             $profile_path=$profile['tmp_name'];
             
             $profile_text=explode('.',$profile_name);
             $profile_extention=strtolower(end($profile_text));
             $profile_nm = $title . $user_id . $price."profile.".$profile_extention;
             $new_destination = "../../uploads/notes/displayPic/".$profile_nm;
             move_uploaded_file($profile_path,$new_destination);
             
             $string1 .= "display_img, ";
             $string2 .= "'$new_destination', ";
			 $update_q .=" display_img='$new_destination',";
             
         }
          if(isset($_FILES['note_preview'])){
             
             $file=$_FILES['note_preview'];
             $previewname=$file['name'];
             $previewPath=$file['tmp_name'];
             
             $previewText=explode('.',$previewname);
             $PreviewExtention=strtolower(end($previewText));
             $previewName1=$title.$user_id.$price."preview.".$PreviewExtention;
             $previewDestination="../../uploads/notes/notePreview/".$previewName1;
             move_uploaded_file($previewPath,$previewDestination);
             
             $string1 .= "note_preview, ";
             $string2 .= "'$previewDestination', ";
			 $update_q .=" note_preview='$previewDestination',";
             
         }
         if(isset($_POST['save_note'])){
            $status = 1; 
			$update=$_POST['save_note'];
         }
         else if(isset($_POST['publish_note'])){
            $status = 2; 
         }
		 $today = date("Y-m-d H:i:s"); 
        $update_q .=" title='$title', category_id='$category', description='$comments', is_paid=$sell_type,  price='$price', user_id='$user_id',status_id='$status', updated_date='$today' Where note_id='$update'  ";
         $string1 .= "title, category_id, 	description, is_paid, price, user_id, status_id,created_date";
         
         $string2 .= "'$title', '$category', '$comments', $sell_type, '$price', '$user_id', '$status','$today'";
         $query="INSERT INTO note ( $string1 ) VALUES ($string2)";
		 if($update!=0){
			 $result=mysqli_query($conn, $update_q);
		 }
		 else{
         	$result=mysqli_query($conn, $query);
		 }
         
         if($result ){
             $last_id = mysqli_insert_id($conn);
             $note_id=$last_id;
             $user_name=$_SESSION['username'];
             $today = date("Y-m-d H:i:s"); 
             $insert="INSERT INTO documents(file_path, note_id, file_name,created_date) VALUES ('$destination', '$note_id', '$filename1','$today' )";
             $r=mysqli_query($conn, $insert);
             
            if(isset($_POST['publish_note']) && $r){
               $q="SELECT email FROM users where role_id = 3";
               $r=mysqli_query($conn, $q);
               $row=mysqli_fetch_assoc($r);
               $seller_name= $_SESSION["username"];
                
                $to_email = $row['email'];
                $altBody="Someone Sent this note for review.";
                $subject = "$seller_name sent this note for review";
                $body = "Hello Admins,<br/><br/>We want to inform you that, $seller_name sent his note $title for review. Please look at the note sand take required actions.<br/><br/>Regards,<br/>Notes Marketplace";
                $name = $seller_name;

                     
                if(sendMail($to_email,$name,$subject,$body,$altBody,$i)){
                    $msg="Note is requested to be published.";
                   header("location:../add-notes.php?msg={$msg}");
                         
                }
                else{
                    echo "error in sending mail. Mailer Error:{ $mail->ErrorInfo}";
                }
           } 
            else{
                $msg="Note is saved as Draft.";
                header("location:../add-notes.php?msg={$msg}");
            } 
         }
		 echo $update_q;
    }
?>
