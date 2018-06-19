<?php
$id='';
if(isset($_GET["id"]))
{

	$id = $_GET["id"];
}


include("_inc/dbConnection.php");
$sql = "SELECT * FROM `my_user` WHERE id='$id'";
$result = mysqli_query($conn,$sql) or die("Error ".mysqli_error($sql));
mysqli_close($conn);
?>

<html>
	<head>
		<title>test</title>
	</head>
	<body>
	<?php foreach($result as $row){ ?>
	<form action="process.php" method="post" >
	<table>

			<tr>
				<td>ID:</td>
				<td><input type="text" name="id" value="<?php echo $row["id"]; ?>" readonly></td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value="<?php echo $row["name"]; ?>"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email_id" value="<?php echo $row["email"]; ?>"></td>
			</tr>
			<tr>
				<td>Phone No:</td>
				<td><input type="number" name="ph_no"  value="<?php echo $row["phone_no"]; ?>"></td>
			</tr>
			<tr>
				<td>Country:</td>
				<td><input type="text" name="country"  value="<?php echo $row["country"]; ?>"></td>
			</tr>
			<tr>
				
				<td colspan="2" align="right"><input type="submit" name="updateBtn" value="Update"></td>
			</tr>
		</table>
		
	</form>
	<?php } ?>
		
	</body>
</html>
