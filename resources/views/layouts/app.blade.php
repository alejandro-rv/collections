<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>

  <!-- Styles -->
  <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">

  <!-- Scripts -->
  <script src="https://unpkg.com/jquery@3.5.1"></script>
</head>
<body>
  @yield('content')
</body>
</html>
