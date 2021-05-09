<?php

session_start();



$con = mysqli_connect('127.0.0.1:3306','u228309238_abes','hellodata','u228309238_abessecrets');

if(mysqli_connect_errno()){
  echo "Failed to connect" .mysqli_connect_errno();

}

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
  header('location:post.php');
}else{
  header('location:register.php');

}





// $query = mysqli_query($con, "INSERT INTO usertable(name,password) VALUES('$name','$pass')");
//
// echo "Registered successfully";
