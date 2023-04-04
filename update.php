<!DOCTYPE html>
<html>
<head>
	<title>Update Student</title>
</head>
<body>
	<h2>Update Student Information</h2>
	<form action="" method="post">
		<label for="id">Student ID:</label>
		<input type="text" id="id" name="id"><br><br>
		<label for="name">Full Name:</label>
		<input type="text" id="name" name="name"><br><br>
		<label for="dob">Date of Birth:</label>
		<input type="text" id="dob" name="dob"><br><br>
		<label for="email">Email:</label>
		<input type="text" id="email" name="email"><br><br>
		<input type="submit" name="submit" value="Update">
	</form>
	<br><br>
	<a href="index.php">Back to Homepage</a>

	<?php 
		if(isset($_POST['submit'])) {
			$id = $_POST['id'];
			$name = $_POST['name'];
			$dob = $_POST['dob'];
			$email = $_POST['email'];

			$MYSQL_ADDON_HOST = getenv('MYSQL_ADDON_HOST');
			$MYSQL_ADDON_PORT = getenv('MYSQL_ADDON_PORT');
			$MYSQL_ADDON_DB = getenv('MYSQL_ADDON_DB');
			$MYSQL_ADDON_USER = getenv('MYSQL_ADDON_USER');
			$MYSQL_ADDON_PASSWORD = getenv('MYSQL_ADDON_PASSWORD');

			$conn = mysqli_connect($MYSQL_ADDON_HOST, $MYSQL_ADDON_USER, $MYSQL_ADDON_PASSWORD, $MYSQL_ADDON_DB);

			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "UPDATE B1909984_qlsv SET ho_ten='$name', nam_sinh='$dob', email='$email' WHERE id=$id";

			if (mysqli_query($conn, $sql)) {
				echo "Student information updated successfully!";
				header("Location: index.php");
			} else {
				echo "Error updating record: " . mysqli_error($conn);
			}

			mysqli_close($conn);
		}
	?>
    <br>
    <a href="index.php">Trang chủ</a>
</body>
</html>
