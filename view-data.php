<?php

include("dbConnection.php");
$sql = "SELECT * FROM `my_user`";
$result = mysqli_query($conn,$sql) or die("Error ".mysqli_error($sql));
mysqli_close($conn);
?>

<html>
	<head>
		<title>View Data</title>
	</head>
	<body>
	<table border="1">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email ID</th>
		<th>Phone No</th>
		<th>Country</th>
	</tr>
<?php foreach($result as $row){ ?>
	<tr>
		<td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["phone_no"]; ?></td>
		<td><?php echo $row["country"]; ?></td>
	</tr>
	<?php } ?>
	</table>
	</body>
</html>
