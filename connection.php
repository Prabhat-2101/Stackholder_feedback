<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "stackholder_feedback";

    $conn = mysqli_connect($host,$user,$pass,$db);

    if(mysqli_connect_error()){
        echo "Connection Failed";
        die();
    }
?>