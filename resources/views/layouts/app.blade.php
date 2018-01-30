<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Murderer</title>

        <!-- CSRF token-->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <!-- Styles -->
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="/css/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="/css/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="/css/bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="/css/AdminLTE.min.css">
        <link rel="stylesheet" href="/css/skin-red.min.css">
    </head>
<body class="hold-transition skin-red sidebar-collapse">
    <div class="wrapper">
        <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Mr</b>dr</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg text-center"><b>Murderer</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    </nav>
  </header><!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper align-items-center ml-auto mr-auto">
    <!-- Content Header (Page header) -->
    <section class="content-header text-center">
      <h1>
        Murderer
      </h1>
    </section>

    @yield('content')

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- jQuery 3 -->
    <script src="/css/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/css/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="/css/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/css/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/js/adminlte.min.js"></script>
</body>
</html>
