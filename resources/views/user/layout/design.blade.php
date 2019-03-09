<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from medico.dexignlab.com/xhtml/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Feb 2019 10:55:44 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="A Solid Hospital Business Oriented Html Template with lots of Customizable Features make it separate from ordinary Templates." />
	<meta property="og:title" content="MediCo. - Doctor HTML Template" />
	<meta property="og:description" content="A Solid Hospital Business Oriented Html Template with lots of Customizable Features make it separate from ordinary Templates." />
	{{-- <meta property="og:image" content="{{ asset(../../s3.ap-south-1.amazonaws.com/dzon-html/medico/xhtml/social-image.png)}}" /> --}}
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="icon" href="{{ asset('images/user_images/favicons/favicon.ico') }}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/user_images/favicons/favicon-16x16.png') }}" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/user_images/favicons/favicon-32x32.png') }}" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/user_images/favicons/favicon-96x96.png') }}" />

	<!-- PAGE TITLE HERE -->
	{{-- only comment --}}
	<title>Helping Hands</title>
{{-- yo --}}
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="https://s3.ap-south-1.amazonaws.com/dzon-html/medico/xhtml/js/html5shiv.min.js"></script>
	<script src="https://s3.ap-south-1.amazonaws.com/dzon-html/medico/xhtml/js/respond.min.js"></script>
	<![endif]-->

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/plugins.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/style.css') }}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('css/user_css/skin/skin-1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/templete.css') }}">
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('user_plugins/revolution/revolution/css/layers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('user_plugins/revolution/revolution/css/settings.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('user_plugins/revolution/revolution/css/navigation.css') }}">
	<!-- Revolution Navigation Style -->
</head>

<body id='bg'>
  @include('user.layout.header')

  @yield('content')

	@include('user.layout.footer')

	<!-- scroll top button -->
	<button class="scroltop fa fa-chevron-up" ></button>
	</div>
	<!-- JavaScript  files ========================================= -->
	<script src="{{ asset('js/user_js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
	<script src="{{ asset('user_plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
	<script src="{{ asset('user_plugins/bootstrap/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
	<script src="{{ asset('user_plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
	<script src="{{ asset('user_plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
	<script src="{{ asset('user_plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
	<script src="{{ asset('user_plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
	<script src="{{ asset('user_plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
	<script src="{{ asset('user_plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
	<script src="{{ asset('user_plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
	<script src="{{ asset('user_plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
	<script src="{{ asset('user_plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
	<script src="{{ asset('js/user_js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
	<script src="{{ asset('js/user_js/dz.carousel.js')}}"></script><!-- SORTCODE FUCTIONS  -->
	{{-- <script src='../../www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  --> --}}
	<script src="{{ asset('js/user_js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
	{{-- <script src="{{ asset('user_plugins/switcher/js/switcher.js') }}"></script><!-- SWITCHER JS  --> --}}
	<!-- revolution JS FILES -->
	<script  src="{{ asset('user_plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
	<script  src="{{ asset('user_plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
	<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
	<script  src="{{ asset('user_plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script  src="{{ asset('user_plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script  src="{{ asset('user_plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script  src="{{ asset('user_plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script  src="{{ asset('user_plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script  src="{{ asset('user_plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script  src="{{ asset('user_plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	<script  src="{{ asset('user_plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script  src="{{ asset('user_plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
	<script  src="{{ asset('js/user_js/rev.slider.js') }}"></script>
	<script>
	jQuery(document).ready(function() {
		'use strict';
		dz_rev_slider_2();
	});	/*ready*/
	</script>
</body>
</html>
