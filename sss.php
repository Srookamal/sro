<?php
$servername = "localhost";
$username ="root";
$password ="";
$conn =new mysqli($servername, $username, $password);
if ($conn-> connect_error){
    die("connection failed: " .$conn->connect_error);
}
$sql ="create database mydb";
if($conn->query ($sql) === true){
    echo "database created successfully";
}else{
    echo "error creating db:" .$conn-> error;
}
$conn->close();