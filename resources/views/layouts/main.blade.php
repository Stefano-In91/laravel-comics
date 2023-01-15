<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/x-icon">
  <title>DC || @yield('page-title')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap"
    rel="stylesheet">

  <!-- Styles -->
  @vite('resources/js/app.js')

</head>

<body>
  @include('partials.header')

  @yield('section-content')

  @include('partials.footer')
</body>

</html>
