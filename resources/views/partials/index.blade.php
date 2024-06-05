<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-primary">

  @include('partials.navbar')
  
  @yield('content')

  @include('partials.footer')
  
  @vite('resources/js/app.js')
</body>
</html>