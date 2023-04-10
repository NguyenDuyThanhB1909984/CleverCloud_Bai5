<!DOCTYPE html>

<html lang="en">

<body>

    Danh sách sinh viên<BR>

    <?php
    $MYSQL_ADDON_HOST = getenv('MYSQL_ADDON_HOST');
    $MYSQL_ADDON_PORT = getenv('MYSQL_ADDON_PORT');
    $MYSQL_ADDON_DB = getenv('MYSQL_ADDON_DB');
    $MYSQL_ADDON_USER = getenv('MYSQL_ADDON_USER');
    $MYSQL_ADDON_PASSWORD = getenv('MYSQL_ADDON_PASSWORD');

    $conn = mysqli_connect($MYSQL_ADDON_HOST, $MYSQL_ADDON_USER, $MYSQL_ADDON_PASSWORD, $MYSQL_ADDON_DB);

    if (!$conn) {
        echo "Error: Unable to open database\n <BR>";
    } else {
        echo "Open database successfully\n <BR>";
    }

    // Lấy dữ liệu từ bảng sinhvien
    $sql = "SELECT * FROM B1909984_paas_db";
    $result = mysqli_query($conn, $sql);

    // Hiển thị dữ liệu
    if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Mssv</th><th>Họ tên</th><th>Năm sinh</th><th>SDT</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["masv"] . "</td><td>" . $row["hoten"] . "</td><td>" . $row["nam_sinh"] . "</td><td>" . $row["dienthoai"] . "</td></tr>";
    }
    echo "</table>";
    } else {
    echo "Không có sinh viên nào trong cơ sở dữ liệu.";
    }

// Đóng kết nối
    mysqli_close($conn);
    ?>

    <br>
    <a href="index.php">Trang chủ</a>
</body>

</html>
