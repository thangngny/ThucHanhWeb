<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $class->grade_level }} Class</title>
</head>
<body>
<h1>{{ $class->grade_level }} Class</h1>
<p>Room Number: {{ $class->room_number }}</p>
<h2>Students in this class:</h2>
<ul>
    @foreach ($class->students as $student)
        <li>{{ $student->first_name }} {{ $student->last_name }}</li>
    @endforeach
</ul>
<a href="{{ route('classes.index') }}">Back to list</a>
</body>
</html>
