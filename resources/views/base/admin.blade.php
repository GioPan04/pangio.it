<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('page::title') - Gioele Pannetto</title>
    <link rel="stylesheet" href="{{ asset('css/web.css') }}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body class="bg-primary text-white font-body">
@section('page::body')
Oh no
@show

<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
