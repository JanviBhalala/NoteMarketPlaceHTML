<?php
   session_start();
   unset($_SESSION["username"]);
   $_SESSION["isLogin"]="";
   
  
  header('Refresh: 2; URL = ../index.php');
?>