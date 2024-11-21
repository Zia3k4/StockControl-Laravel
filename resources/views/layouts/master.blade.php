<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('layouts.partials._head')
</head>
<body class="hold-transition sidebar-mini"></body>
<div class="wrapper"></div>
@include('layouts.partials._sidebar')
@include('layouts.partials._navbar')
<!--Content Wrapper. Contains page content  -->
<div class="content-wrapper">
@yield('content')
    <!-- Content Header (Page header)[REMOVIDO] -->
    <!-- /.content[main]  {REMOVIDO} -->
 </div>      
  <!-- /.content-wrapper -->
  @include('layouts.partials._footer')
</div>
<!-- ./wrapper -->
@include('layouts.partials._footer-script')
</body>
</html>
