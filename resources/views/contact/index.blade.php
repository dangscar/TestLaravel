<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

@php

@endphp

<body>
    <h2>{{ $title }}</h2>
    {{ $description }}
    <ul>
        @foreach ($books as $book)
        <li>{{ $book }}</li>
        @endforeach
    </ul>
</body>

</html>

{{-- @if()
@elseif()
@endif

@for()
@endfor --}}