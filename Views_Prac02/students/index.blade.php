<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
</head>
<body>
<h1>Students List</h1>
<ul>
    @foreach ($students as $student)
        <li>
            <a href="{{ route('students.show', $student->id) }}">
                {{ $student->first_name }} {{ $student->last_name }} - Class: {{ $student->classRoom->grade_level }} (Room: {{ $student->classRoom->room_number }})
            </a>
        </li>
    @endforeach
</ul>
</body>
</html>
