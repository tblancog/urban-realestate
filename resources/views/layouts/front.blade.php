<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Urban - Desarrollo de proyectos urbanísiticos | Home</title>

    <!-- Favicon  -->
    {{-- <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}"> --}}

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/front.css') }}">
    @stack('styles')
</head>

<body>
  <div id="app">
    @yield('content')
  </div>
  <!-- ##### Call To Action Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('js/plugins.js') }} "></script>
    <script src="{{ asset('js/classy-nav.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js') }}"></script>
    @stack('scripts')
</body>

</html>
