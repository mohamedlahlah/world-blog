
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title', 'MyBlog')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
<link rel="icon" href="{{asset('frontend/img/core-img/favicon.ico')}}">

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
 
  {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/css/AdminLTE.min.css')}}">
{{-- datetime picker --}}
<link rel="stylesheet" href="{{asset('backend/css/bootstrap-datetimepicker.min.css')}}">

<link rel="stylesheet" href="{{asset('backend/css/jasny-bootstrap.min.css')}}">

  <link rel="stylesheet" href="{{asset('backend/css/customs.min.css')}}">
@yield('style')
  <!-- AdminLTE Skins. Choose a skin from the css/skins

   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="{{asset('backend/css/skins/_all-skins.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('backend/css/simplemde.min.css')}}">
   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    @include('layouts.backend.navbar')

    @include('layouts.backend.sidebar')


    @yield('content')

    <footer class="main-footer">
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank"><strong> Mohamed lahlah</strong></a>
      reserved.
    </footer>

  </div>

  <!-- ./wrapper -->

  <!-- jQuery 2.2.3 -->
  <script src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
  <!-- Bootstrap 3.3.6 -->

  <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('backend/js/simplemde.min.js')}}"></script>
  {{-- moment js--}}
  <script src="{{asset('backend/js/moment-with-locales.min.js')}}"></script>
  <script src="{{asset('backend/js/moment.js')}}"></script>
  {{-- date time picker --}}
    <script src="{{asset('backend/js/bootstrap-datetimepicker.min.js')}}"></script>
 <script src="{{asset('backend/js/jasny-bootstrap.min.js')}}"></script>
  <script src="{{asset('backend/js/jquery.caret.min.js')}}"></script>
 <script src="{{asset('backend/js/jquery.tag-editor.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('backend/js/app.min.js')}}"></script>
  @yield('script')

</body>
</html>
