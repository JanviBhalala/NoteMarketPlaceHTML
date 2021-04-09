<?php 
include "connection.php";
session_start();

if(isset($_GET['note_id'])){
    $note=$_GET['note_id'];
    
    $query="SELECT file_path, note_id FROM documents where note_id='$note'";
    $result=mysqli_query($conn, $query);
    if($result){
        $row=mysqli_fetch_array($result);
        $file=$row[0];
        echo $file;

        header("content-disposition: attachment; filename=" . urlencode($file));
        $fb=fopen($file, "r");
        while(!feof($fb)){
            echo fread($fb, 8192);
            flush();
        }
    }
}


?>