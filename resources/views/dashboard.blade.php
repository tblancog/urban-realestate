@extends('layouts.master')

@section('content')
<!-- /.navbar -->
@include('partials.upper_navbar', [])

<!-- Main Sidebar Container -->
@include('partials.sidebar')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <router-view></router-view>

            <vue-progress-bar></vue-progress-bar>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Anything you want
    </div>
    <!-- Default to the left -->
    {{-- <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved. --}}
</footer>

@endsection
