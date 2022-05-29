<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('/css/web.css')}}"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Press+Start+2P&display=swap" rel="stylesheet">
        <title>@yield('title') - Gioele Pannetto</title>
    </head>
    <body class="bg-primary font-body">
        <div class="border-l-8 border-secondary h-screen text-white p-10 flex flex-col justify-center items-center text-center">
            <h1 class="font-8-bit text-6xl">Error @yield('code')</h1>
            <span class="block mt-4 text-white/90">@yield('message')</span>
            <div class="mt-8">
                <a href="{{ route('home') }}"><button class="bg-accent px-4 py-3 rounded shadow text-sm font-bold uppercase" role="link">Go to homepage</button></a>
            </div>
        </div>
    </body>
</html>
