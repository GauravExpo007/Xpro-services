<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('download-brochure') }}" method="POST">
        @csrf
        
        <input type="text" name="name">
        <input type="email" name="email">
        <input type="text" name="phone">
        <input type="text" name="company">
        <input type="submit">
    </form>
</body>
</html>