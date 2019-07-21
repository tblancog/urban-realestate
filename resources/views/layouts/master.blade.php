<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Urban | Dashboard</title>
    <!-- Favicon  -->
    <link rel="icon" type="image/png" href="{{ asset('img/core-img/favicon/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('img/core-img/favicon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('img/core-img/favicon/favicon-96x96.png') }}" sizes="96x96">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">


        @yield('content')

    </div>
    <!-- ./wrapper -->

    @auth
    <script>
        window.user = @json(auth()->user())

    </script>
    @endauth

    <script src="/js/app.js"></script>
</body>

</html>
