<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from vuze.bootlab.io/preview/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Feb 2019 19:26:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin Template">
	<meta name="author" content="Bootlab">

	<title>Helping Hands | Hospital</title>

	<link href="{{ asset('css/hospital_css/app.css') }}" rel="stylesheet">

</head>
<body>
	<div class="wrapper">
  @include('hospital.layout.sidebar')

  @include('hospital.layout.header')

  @yield('content')

  @include('hospital.layout.footer')

</body>
</html>
