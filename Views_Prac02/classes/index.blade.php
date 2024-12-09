<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes List</title>
</head>
<body>
<h1>Classes List</h1>
<ul>
    @foreach ($classes as $class)
        <li>
            <a href="{{ route('classes.show', $class->id) }}">
                {{ $class->grade_level }} - Room: {{ $class->room_number }} ({{ $class->students->count() }} students)
            </a>
        </li>
    @endforeach
</ul>
</body>
</html>
