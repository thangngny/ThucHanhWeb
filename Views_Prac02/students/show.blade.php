<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $student->first_name }} {{ $student->last_name }}</title>
</head>
<body>
<h1>{{ $student->first_name }} {{ $student->last_name }}</h1>
<p>Date of Birth: {{ $student->date_of_birth }}</p>
<p>Parent's Phone: {{ $student->parent_phone }}</p>
<p>Class: {{ $student->classRoom->grade_level }} (Room: {{ $student->classRoom->room_number }})</p>
<a href="{{ route('students.index') }}">Back to list</a>
</body>
</html>
