<?php

session_start();
header('location:login.php');


$con = mysqli_connect('127.0.0.1:3306','u228309238_abes','hellodata','u228309238_abessecrets');

if(mysqli_connect_errno()){
  echo "Failed to connect" .mysqli_connect_errno();

}

$name = $_POST['user'];
$pass = $_POST['password'];




$query = mysqli_query($con, "INSERT INTO usertable(name,password) VALUES('$name','$pass')");

echo "Registered successfully";


?>
