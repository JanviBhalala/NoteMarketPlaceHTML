<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["valid"]);
   unset($_SESSION["user_id"]);
   unset($_SESSION["email"]);
   $_SESSION["isLogin"]="";
   
  
  header('Refresh: 2; URL = ../home.php');
?>