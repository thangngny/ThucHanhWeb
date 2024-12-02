<?php
global $conn;
require_once '../config/db.php'; // Đảm bảo rằng db.php được bao gồm trước khi sử dụng $conn


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: ../views/index.php");
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>
