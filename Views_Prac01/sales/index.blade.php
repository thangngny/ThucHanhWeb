<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales</title>
</head>
<body>
<h1>Danh Sách Giao Dịch Bán Hàng</h1>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Tên Thuốc</th>
        <th>Số Lượng</th>
        <th>Ngày Bán</th>
        <th>Số Điện Thoại</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($sales as $sale)
        <tr>
            <td>{{ $sale->sale_id }}</td>
            <td>{{ $sale->medicine->name }}</td>
            <td>{{ $sale->quantity }}</td>
            <td>{{ $sale->sale_date }}</td>
            <td>{{ $sale->customer_phone }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
