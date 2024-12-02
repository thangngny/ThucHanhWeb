<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
</head>
<body>
<h1>Thêm sản phẩm mới</h1>

<?php
// Kết nối cơ sở dữ liệu
global $conn;
require_once '../config/db.php';

// Xử lý thêm sản phẩm khi form được gửi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ form
    $name = $_POST['name'];
    $price = $_POST['price'];

    // Kiểm tra dữ liệu và thực hiện thêm vào cơ sở dữ liệu
    if (!empty($name) && !empty($price)) {
        $sql = "INSERT INTO products (name, price) VALUES ('$name', '$price')";
        if ($conn->query($sql) === TRUE) {
            echo "Sản phẩm đã được thêm thành công!";
            // Điều hướng về trang danh sách sản phẩm
            header("Location: ../views/index.php");
            exit;
        } else {
            echo "Lỗi: " . $conn->error;
        }
    } else {
        echo "Vui lòng nhập đầy đủ thông tin sản phẩm.";
    }
}
?>

<form method="POST" action="">
    <label for="name">Tên sản phẩm:</label>
    <input type="text" name="name" required><br>

    <label for="price">Giá sản phẩm:</label>
    <input type="number" name="price" required><br>

    <input type="submit" value="Lưu sản phẩm">
</form>
</body>
</html>
