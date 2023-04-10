<?php 
    $MYSQL_ADDON_HOST = getenv('MYSQL_ADDON_HOST'); 
    $MYSQL_ADDON_PORT = getenv('MYSQL_ADDON_PORT'); 
    $MYSQL_ADDON_BD = getenv('MYSQL_ADDON_DB'); 
    $MYSQL_ADDON_USER = getenv('MYSQL_ADDON_USER');
    $MYSQL_ADDON_PASSWORD = getenv('MYSQL_ADDON_PASSWORD');
    $MYSQL_ADDON_URI= getenv('MYSQL_ADDON_URI');

    echo "$MYSQL_ADDON_URI";
    

    $MYSQL_ADDON_HOST = getenv('MYSQL_ADDON_HOST');
    $MYSQL_ADDON_PORT = getenv('MYSQL_ADDON_PORT');
    $MYSQL_ADDON_DB = getenv('MYSQL_ADDON_DB');
    $MYSQL_ADDON_USER = getenv('MYSQL_ADDON_USER');
    $MYSQL_ADDON_PASSWORD = getenv('MYSQL_ADDON_PASSWORD');

    $conn = mysqli_connect($MYSQL_ADDON_HOST, $MYSQL_ADDON_USER, $MYSQL_ADDON_PASSWORD, $MYSQL_ADDON_DB);

    if (!$conn) {
        echo "Error: Connect database\n <BR>";
    } else {
        echo "Connect database successfully\n <BR>";
    }

// Create table
    $sql = "CREATE TABLE B1909984_paas_db (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    masv VARCHAR(10) NOT NULL,
    hoten VARCHAR(30) NOT NULL,
    nam_sinh INT(4) NOT NULL,
    dienthoai VARCHAR(10),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if (mysqli_query($conn, $sql)) {
      echo "Tạo bảng sinh viên thành công!";
    } else {
      echo "Tạo bảng sinh viên thất bại: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>
<br>
<a href="index.php">Trở về trang chủ</a>
