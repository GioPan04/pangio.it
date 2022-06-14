<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article#">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="og:site_name" content="Gioele Pannetto">
    <meta name="description" content="@yield('page::description', 'The official website of Gioele Pannetto')"/>
    <title>@yield('page::title') - Gioele Pannetto</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#e03616">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
    @yield('page::head')
    <link rel="stylesheet" href="{{ mix('css/web.css') }}"/>
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
    <span class="text-center block">Designed and Developed by Gioele Pannetto. <a target="_blank" href="https://github.com/GioPan04/pangio.it">Get the source code here</a></span>
</footer>

<script src="{{ mix('js/app.js') }}" defer=""></script>
</body>
</html>
