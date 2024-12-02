<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../Controllers/UserController.php';

$controller = new UserController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $id = isset($_GET['id']) ? intval($_GET['id']) : null;

    switch ($action) {
        case 'index':
            $controller->index(); // Hiển thị danh sách người dùng
            break;
        case 'create':
            $controller->create(); // Hiển thị form thêm người dùng
            break;
        case 'edit':
            if ($id) {
                $controller->edit($id); // Hiển thị form sửa người dùng
            } else {
                echo "ID người dùng không hợp lệ.";
            }
            break;
        case 'delete':
            if ($id) {
                $controller->delete($id); // Xóa người dùng
            } else {
                echo "ID người dùng không hợp lệ.";
            }
            break;
        default:
            echo "Hành động không hợp lệ.";
            break;
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'store':
                $controller->store($_POST); // Lưu người dùng mới
                break;
            case 'update':
                $controller->update($_POST); // Cập nhật thông tin người dùng
                break;
            default:
                echo "Hành động POST không hợp lệ.";
                break;
        }
    }
} else {
    $controller->index(); // Mặc định hiển thị danh sách người dùng
}