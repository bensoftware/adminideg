<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head >
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'IGED') }}</title>
  <!-- Tell the browser to be responsive to screen width     <meta name="viewport" content="width=device-width, initial-scale=1">-->

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/jpg" href="{{URL::asset('public/dist/img/logo.jpg')}}" sizes="196x196" />
    <!-- iCheck -->
    <link rel="stylesheet" href="{{URL::asset('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{URL::asset('public/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::asset('public/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{URL::asset('public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{URL::asset('public/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{URL::asset('public/plugins/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{URL::asset('public/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{URL::asset('public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('public/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-fixed">

 @include('navbar.navbar')

 @include('sidebar.sidebar')

 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark"> @yield("content-header")</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">@yield("content-header")</a></li>
                <li class="breadcrumb-item active">@yield("content-header")</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  @yield("page-content")

  </div>
<!-- End of Content Wrapper. -->

  @include('footer.footer')
<!-- jQuery -->
<script src="{{URL::asset('public/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{URL::asset('public/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{URL::asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{URL::asset('public/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{URL::asset('public/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{URL::asset('public/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('public/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{URL::asset('public/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{URL::asset('public/plugins/moment/moment.min.js')}}"></script>
<script src="{{URL::asset('public/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{URL::asset('public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{URL::asset('public/plugins/summernote/summernote-bs4.min.jss')}}"></script>
<!-- overlayScrollbars -->
<script src="{{URL::asset('public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('public/dist/js/adminlte.js')}}"></script>


<!-- jQuery -->
<script src="{{URL::asset('public/plugins/jquery/jquery.min.jsdist/js/demo.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{URL::asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{URL::asset('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.j')}}s"></script>
<script src="{{URL::asset('public/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('public/dist/js/adminlte.min.jss')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('public/dist/js/demo.js')}}"></script>


</body>
</html>
