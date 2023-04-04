<?php
// Kiểm tra nếu người dùng đã submit form xóa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy thông tin sinh viên cần xóa
    $hoten = $_POST["hoten"];

    // Kết nối với database
    $MYSQL_ADDON_HOST = getenv('MYSQL_ADDON_HOST');
    $MYSQL_ADDON_PORT = getenv('MYSQL_ADDON_PORT');
    $MYSQL_ADDON_DB = getenv('MYSQL_ADDON_DB');
    $MYSQL_ADDON_USER = getenv('MYSQL_ADDON_USER');
    $MYSQL_ADDON_PASSWORD = getenv('MYSQL_ADDON_PASSWORD');

    $conn = mysqli_connect($MYSQL_ADDON_HOST, $MYSQL_ADDON_USER, $MYSQL_ADDON_PASSWORD, $MYSQL_ADDON_DB);

    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối không thành công: " . mysqli_connect_error());
    }

    // Xóa sinh viên theo họ tên
    $sql = "DELETE FROM B1909984_qlsv WHERE ho_ten='$hoten'";
    if (mysqli_query($conn, $sql)) {
        echo "Xóa sinh viên thành công.";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }

    // Đóng kết nối
    mysqli_close($conn);
}
?>
<h2>Xóa sinh viên</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Họ tên sinh viên cần xóa: <input type="text" name="hoten"><br><br>
    <input type="submit" value="Xóa">
</form>
<br>
<a href="index.php">Trang chủ</a>
