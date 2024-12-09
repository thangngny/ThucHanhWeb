<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách vấn đề</title>
</head>
<body>
<h1>Danh sách vấn đề</h1>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Mã máy tính</th>
        <th>Báo cáo bởi</th>
        <th>Ngày báo cáo</th>
        <th>Mô tả</th>
        <th>Mức độ khẩn cấp</th>
        <th>Trạng thái</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($issues as $issue)
        <tr>
            <td>{{ $issue->id }}</td>
            <td>{{ $issue->computer->computer_name }}</td>
            <td>{{ $issue->reported_by }}</td>
            <td>{{ $issue->reported_date }}</td>
            <td>{{ $issue->description }}</td>
            <td>{{ $issue->urgency }}</td>
            <td>{{ $issue->status }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
