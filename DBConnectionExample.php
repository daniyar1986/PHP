<?php

$server_name = "127.0.0.1";
$user_name  =  "root";
$password = "";

$conn = new mysqli($server_name, $user_name, $password);

$conn2 = mysqli_connect($server_name, $user_name, $password);

if ($conn->connect_error){
    die("Connection failed :".$conn->connect_error);
}

if (!$conn2){
    die("Connection failed :".mysqli_connect_error());
}

echo "Connection successfully";

try {
    $PDO_conn =  new PDO("mysql:host:=$server_name; dbname=newDB",$user_name,$password);
    echo "Connection successfully";
} catch (PDOException $exception){
    echo "Connection failed :".$exception->getMessage();
}