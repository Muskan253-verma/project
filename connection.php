<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "boutmgt";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die($conn->connect_error);
    }
 //echo "Successfully connected";
?>