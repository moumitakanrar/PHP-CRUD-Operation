<?php

if(isset($_POST["submitBtn"])){
$name = $_POST["name"];
$email = $_POST["email_id"];
$phNo = $_POST["ph_no"];
$country = $_POST["country"];

include("_inc/dbConnection.php");
$sql = "INSERT INTO `my_user`( `name`, `email`, `phone_no`, `country`) VALUES ('$name','$email','$phNo','$country')";

$result = mysqli_query($conn,$sql);

if($result>0){
echo "you have successfully registerred.";
header("refresh:5;url=index.php");
}else{
	echo "Something went wrong";
	header("refresh:5;url=index.php");
}

mysqli_close($conn);



}




?>
