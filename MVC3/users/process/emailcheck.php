<?php 
include "connection.php";
echo "email is varified";
if(isset($_GET['id'])){
    $user= $_GET['id'];
    $msg="";
    $query="UPDATE users SET is_email_verfied = b'1', is_active = b'01' WHERE user_id = '$user'";
    $result=mysqli_query($conn, $query);
    if($result){
        $msg="Your email is verified, Now you can login";
        header("location:../login.php?msg={$msg}");
    }
    else{
        $msg="Please verify your email again";
         header("location:../login.php?msg={$msg}");
    }
}
?>