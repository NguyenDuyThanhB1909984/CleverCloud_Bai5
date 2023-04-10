<!DOCTYPE html>
<html lang="en">
<body>
<h1>Thêm sinh viên</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="mssv">Mssv:</label><br>
		<input type="text" id="mssv" name="mssv"><br>
		<label for="hoten">Họ tên:</label><br>
		<input type="text" id="hoten" name="hoten"><br>
		<label for="namsinh">Năm sinh:</label><br>
		<input type="text" id="namsinh" name="namsinh"><br>
		<label for="sdt">SDT:</label><br>
		<input type="text" id="sdt" name="sdt"><br>
		<input type="submit" name="submit" value="Thêm">
	</form>


    <?php
	$mssv = $_POST["mssv"];
        $hoten = $_POST["hoten"];
	$namsinh = $_POST["namsinh"];
	$sdt = $_POST["sdt"];

        $MYSQL_ADDON_HOST = getenv('MYSQL_ADDON_HOST');
        $MYSQL_ADDON_PORT = getenv('MYSQL_ADDON_PORT');
        $MYSQL_ADDON_BD = getenv('MYSQL_ADDON_DB');
        $MYSQL_ADDON_USER = getenv('MYSQL_ADDON_USER');
        $MYSQL_ADDON_PASSWORD = getenv('MYSQL_ADDON_PASSWORD');

        $conn = mysqli_connect($MYSQL_ADDON_HOST, $MYSQL_ADDON_USER, $MYSQL_ADDON_PASSWORD, $MYSQL_ADDON_BD);

        if (!$conn) {
            echo "Error: Unable to open database\n";
        } else {
            echo "Open database successfully\n";
        }

        $sql = "INSERT INTO B1909984_paas_db (masv,hoten, nam_sinh, dienthoai) VALUES ('$mssv','$hoten', '$namsinh', '$sdt')";
        if (mysqli_query($conn, $sql)) {
            echo "User added successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql." . mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>
    <br>
	<a href="index.php">Trở về trang chủ</a>
</body>
</html>
