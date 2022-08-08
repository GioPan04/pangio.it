<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta http-equiv="refresh" content="1; url={{ $url }}"/>
    <title>Redirecting</title>
    <style>
        body {
            background-color: #0D1821;
            color: #fff;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
        span {
            text-align: center;
            display: block;
        }
    </style>
</head>
<body>
<span>Redirecting to {{$url}}</span>
<script src="{{ mix('js/redirect.js') }}" defer=""></script>
</body>
</html>
