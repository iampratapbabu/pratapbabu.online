<?php

$db_host="127.0.0.1:3306";
$db_name="u228309238_abessecrets";
$db_user="u228309238_abes";
$db_pass="hellodata";

$conn =mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(mysqli_connect_error()){
  echo mysqli_connect_error();
  exit;
}
