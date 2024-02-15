<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">
   <title>{{ $title ?? 'My Page' }}</title>
   @vite('resources/css/main.scss')
</head>
<body>
@include('layout.nav')
@yield('content')
@include('layout.footer')
@vite('resources/js/app.js')
</body>
</html>
