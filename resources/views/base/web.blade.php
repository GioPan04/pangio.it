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
@include('common.navbar')

<div class="mt-16 mb-10">
    @section('page::body')
    Oh no
    @show
</div>

<footer class="mb-5 text-xs text-white/60 space-y-1">
    <span class="text-center block">Copyright © {{ now()->format('Y') }}. All rights reserved</span>
    <span class="text-center block">Designed and Developed by Gioele Pannetto. Get the source code <a target="_blank" href="https://github.com/GioPan04/pangio.it">here</a></span>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
