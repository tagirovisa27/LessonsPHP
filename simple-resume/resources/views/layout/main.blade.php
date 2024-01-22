<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">
  <link rel="shortcut icon" href="images/img-icon.png">
  <title>{{ $title ?? 'My Page' }}</title>
  @vite('resources/css/main.scss')
</head>
<body>
@include('layout.nav')  
@yield('content')   
@include('layout.footer')  
@vite('resources/js.main.js')
</body>
</html>
