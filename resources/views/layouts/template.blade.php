<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta  Cache-Control: max-age=31536000 >
    @yield('metadata')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.default.css')}}" id="theme-stylesheet">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    @yield('links')

  </head>
  <body>
    @include('layouts.partials.header')
    <main>
      @yield('content')
    </main>
    @include('layouts.partials.network')

    @include('layouts.partials.footer')
    @include('layouts.partials.modal')

    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    @yield('scripts')
  </body>
</html>