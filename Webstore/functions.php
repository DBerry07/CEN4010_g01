<?php

function Connect(){
    $servername = "localhost";
    $username = "username";
    $password = "";
    $dbName = "products";
    $conn = new mysqli($servername, $username, $password, $dbName);
    
    if ($conn->connect_error){
        die("Connection Failed: " . mysqli_connect_error());
    }
    else{
        return $conn;
    }
}

?>