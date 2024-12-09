<form action="{{ route('medicines.store') }}" method="POST">
    @csrf
    <label for="name">Tên thuốc:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="brand">Thương hiệu:</label>
    <input type="text" name="brand" id="brand">
    <br>
    <label for="dosage">Liều lượng:</label>
    <input type="text" name="dosage" id="dosage" required>
    <br>
    <label for="form">Dạng thuốc:</label>
    <input type="text" name="form" id="form" required>
    <br>
    <label for="price">Giá:</label>
    <input type="number" name="price" id="price" step="0.01" required>
    <br>
    <label for="stock">Số lượng tồn:</label>
    <input type="number" name="stock" id="stock" required>
    <br>
    <button type="submit">Thêm thuốc</button>
</form>
