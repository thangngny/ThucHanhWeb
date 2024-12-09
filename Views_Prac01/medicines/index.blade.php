<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách thuốc</title>
</head>
<body>
<h1>Danh sách thuốc</h1>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Tên thuốc</th>
        <th>Thương hiệu</th>
        <th>Liều lượng</th>
        <th>Dạng</th>
        <th>Giá</th>
        <th>Số lượng tồn</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($medicines as $medicine)
        <tr>
            <td>{{ $medicine->medicine_id }}</td>
            <td>{{ $medicine->name }}</td>
            <td>{{ $medicine->brand }}</td>
            <td>{{ $medicine->dosage }}</td>
            <td>{{ $medicine->form }}</td>
            <td>{{ $medicine->price }}</td>
            <td>{{ $medicine->stock }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
