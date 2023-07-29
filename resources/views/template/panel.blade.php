<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }} | Smart FMIPA</title>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset ('lte/plugins/fontawesome-free/css/all.min.css') }} ">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('lte/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('trix/style.css') }}">
  
  <style>
    trix-toolbar [data-trix-button-group="file-tools"]{
      display: none;
    }

    .spasi2 {
      padding: 5px;
    }
    .tabelsm tbody tr td{
    
      padding: 0.5rem 0.25rem !important;
    }
    
.card-footer-bg {
 background: #ececec !important;
}
 

  </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

    @include('template.header')
    @include('template.sidebar') 
    @yield('content')
    @include('template.footer')
    


    </div>
    <script src="{{ asset ('lte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset ('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
   
    <script src="{{ asset ('lte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset ('trix/trix.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>
</body>
</html>