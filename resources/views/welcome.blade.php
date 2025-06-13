<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>

    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->firstname }} {{ $post->middlename }} {{ $post->lastname }}, Age: {{ $post->age }}</li>
        @endforeach
    </ul>
</body>
</html>
