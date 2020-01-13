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
    $PDO_conn =  new PDO("mysql:host=$server_name; mysql:dbname=newDB;
    unix_socket=/opt/lampp/var/mysql/mysql.sock",$user_name,$password);
    echo "Connection successfully";
} catch (PDOException $exception){
    echo "Connection failed :".$exception->getMessage();
}

$sql = "create database testDB";

if ($conn->query($sql) ===TRUE){
    echo "Database created successfully";
} else {
    echo "\nError " . $conn->error;
}

$sql2 = "create database testDB2";

if (mysqli_query($conn2,$sql2)){
    echo "Database $sql2 created successfully";
}  else {
    echo "\nError " . mysqli_error($conn2);
}
mysqli_close($conn2);


try {
    $PDO_conn2 =  new PDO("mysql:host=$server_name; mysql:dbname=newDB;
    unix_socket=/opt/lampp/var/mysql/mysql.sock",$user_name,$password);
    echo "\nConnection successfully";
    $sql3 = "create database testDB3";
    $PDO_conn2->exec($sql3);
    echo "\nDatabase $sql3 created successfully";
} catch (PDOException $exception){
    echo "Connection failed :".$exception->getMessage();
}