@php
    session_start();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title> @yield('title') </title>
  {{-- Google Font: Source Sans Pro --}}

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  {{-- Font Awesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
  {{-- Theme style --}}
  <link rel="stylesheet" href="{{asset('admin/css/adminlte.css')}}">
  <link rel="stylesheet" href="@yield('cssForThisPage')">
  {{-- <link rel="stylesheet" href="../../build/css/admin.css"> --}}
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  {{-- Navbar --}}
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    {{-- Left navbar links --}}
      @include('admin.parts.nav')
  </nav>



  {{-- Main Sidebar Container --}}
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
     @include('admin.parts.aside')
  </aside>

  {{-- Content Wrapper. Contains page content --}}
  <div class="content-wrapper">
      {{-- content website --}}
        @yield('content')
  </div>
  {{-- /.content-wrapper --}}
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      {{-- <b>Version</b> 3.1.0 --}}
    </div>
    <strong> <a href="#">PHP3_Laravel</a>.</strong> Nguyễn Bá Nha - PC01368
  </footer>

  {{-- Control Sidebar --}}
  <aside class="control-sidebar control-sidebar-dark">
    {{-- Add Content Here --}}

  </aside>
  {{-- /.control-sidebar --}}
</div>
{{-- ./wrapper --}}

{{-- jQuery --}}
<script src="{{asset('admin/js/jquery.js')}}"></script>
{{-- admin main js --}}
<script src="{{asset('admin/js/adminlte.js')}}"></script>

{{-- js for this page --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script src="@yield('jsForThisPage')"> </script>

<script>

</script>

</body>
</html>
