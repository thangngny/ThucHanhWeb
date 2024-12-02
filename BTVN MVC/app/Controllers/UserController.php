<?php
require_once __DIR__ . '/../Models/UserModel.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    // Hiển thị danh sách sản phẩm
    public function index() {
        $products = $this->userModel->getAllProducts();
        require_once __DIR__ . '/../views/index.php'; // View hiển thị danh sách sản phẩm
    }

    // Hiển thị form thêm sản phẩm
    public function create() {
        require_once __DIR__ . '/../views/add.php'; // View form thêm sản phẩm
    }

    // Xử lý thêm sản phẩm
    public function store($data) {
        // Kiểm tra dữ liệu đầu vào
        if (!empty($data['name']) && isset($data['price'])) {
            $this->userModel->addProduct($data['name'], (int)$data['price']);
        } else {
            // Nếu dữ liệu không hợp lệ, có thể thêm thông báo lỗi
            echo "Thông tin không hợp lệ. Vui lòng kiểm tra lại!";
            exit;
        }

        // Sau khi thêm thành công, gọi lại phương thức index() để hiển thị danh sách sản phẩm
        $this->index();
        exit;
    }

    // Hiển thị form sửa sản phẩm
    public function edit($id) {
        $product = $this->userModel->getProductById($id);
        require_once __DIR__ . '/../views/edit.php'; // View form sửa sản phẩm
    }

    // Xử lý cập nhật sản phẩm
    public function update($data) {
        if (isset($data['id'], $data['name'], $data['price'])) {
            $this->userModel->updateProduct($data['id'], $data['name'], (int)$data['price']);
        }
        $this->index();  // Gọi lại phương thức index() để hiển thị danh sách sản phẩm
        exit;
    }

    // Xử lý xóa sản phẩm
    public function delete($id) {
        $this->userModel->deleteProduct($id);
        $this->index();  // Gọi lại phương thức index() để hiển thị danh sách sản phẩm
        exit;
    }
}
?>
