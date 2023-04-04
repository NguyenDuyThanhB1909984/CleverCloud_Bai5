<?php 
    $MYSQL_ADDON_HOST = getenv('MYSQL_ADDON_HOST'); 
    $MYSQL_ADDON_PORT = getenv('MYSQL_ADDON_PORT'); 
    $MYSQL_ADDON_BD = getenv('MYSQL_ADDON_DB'); 
    $MYSQL_ADDON_USER = getenv('MYSQL_ADDON_USER');
    $MYSQL_ADDON_PASSWORD = getenv('MYSQL_ADDON_PASSWORD');
    $MYSQL_ADDON_URI= getenv('MYSQL_ADDON_URI');

    echo "$MYSQL_ADDON_URI";

// Create table
    $sql = "CREATE TABLE B1909984_qlsv (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ho_ten VARCHAR(30) NOT NULL,
    nam_sinh INT(4) NOT NULL,
    email VARCHAR(50),
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