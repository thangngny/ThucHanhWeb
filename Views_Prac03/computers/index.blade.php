<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách máy tính</title>
</head>
<body>
<h1>Danh sách máy tính</h1>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Tên máy tính</th>
        <th>Model</th>
        <th>Hệ điều hành</th>
        <th>CPU</th>
        <th>Bộ nhớ</th>
        <th>Sẵn sàng</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($computers as $computer)
        <tr>
            <td>{{ $computer->id }}</td>
            <td>{{ $computer->computer_name }}</td>
            <td>{{ $computer->model }}</td>
            <td>{{ $computer->operating_system }}</td>
            <td>{{ $computer->processor }}</td>
            <td>{{ $computer->memory }} GB</td>
            <td>{{ $computer->available ? 'Yes' : 'No' }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
