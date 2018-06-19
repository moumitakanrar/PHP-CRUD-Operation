<?php

$serverName="localhost";
$userName = "root";
$userPassword = "";
$dbName = "mydb";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

if(!$conn){

	die("connection failed.".mysql_connect_error());

}
?>
