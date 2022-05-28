<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('page::title') - Gioele Pannetto</title>
    <link rel="stylesheet" href="{{ asset('css/web.css') }}"/>
</head>
<body>
@section('page::body')
Oh no
@show
</body>
</html>
