<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('student.index') }}">Index</a><br>
    <a href="{{ route('student.edit', ['student'=>5]) }}">edit</a><br>
    <a href="">update</a><br>
    <a href="">show</a><br>
    <a href="">store</a><br>
    <a href="">delete</a><br>
    <a href="">create</a><br>
</body>
</html>