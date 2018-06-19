<?php

if(isset($_POST["submitBtn"])){
$name = $_POST["name"];
$email = $_POST["email_id"];
$phNo = $_POST["ph_no"];
$country = $_POST["country"];

include("dbConnection.php");
$sql = "INSERT INTO `my_user`( `name`, `email`, `phone_no`, `country`) VALUES ('$name','$email','$phNo','$country')";

$result = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));

if($result){

	if(mysqli_affected_rows($conn)>0){
         echo "Your data has been inserted successfully.";
         header("refresh:5;url=index.php");
                     
        }else{
		 echo "Fail to insert.";
         header("refresh:5;url=index.php");

        }

}else{
	echo "Something went wrong";
	header("refresh:5;url=index.php");
}

mysqli_close($conn);



}
else if(isset($_POST["updateBtn"])){
$id = $_POST['id'];
$name = $_POST["name"];
$email = $_POST["email_id"];
$phNo = $_POST["ph_no"];
$country = $_POST["country"];

include("dbConnection.php");
$sql = "UPDATE `my_user` SET `name`='$name',`email`='$email',`phone_no`='$phNo',`country`='$country' WHERE id='$id'";

$result = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));

if($result){

	if(mysqli_affected_rows($conn)>0){
         echo "Your data has been updated successfully.";
         header("refresh:5;url=view-data.php");
                     
        }else{
		 echo "Fail to update.";
         header("refresh:5;url=view-data.php");

        }


}else{
	echo "Something went wrong!";
	header("refresh:5;url=view-data.php");
}

mysqli_close($conn);



}


?>
