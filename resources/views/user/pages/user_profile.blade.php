<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from medico.dexignlab.com/xhtml/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Feb 2019 10:57:22 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="A Solid Hospital Business Oriented Html Template with lots of Customizable Features make it separate from ordinary Templates." />
	<meta property="og:title" content="MediCo. - Doctor HTML Template" />
	<meta property="og:description" content="A Solid Hospital Business Oriented Html Template with lots of Customizable Features make it separate from ordinary Templates." />
	<meta property="og:image" content="{{ asset('images/user_images/social-image.png') }}" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="icon" href="{{ asset('/images/user_images/favicons/favicon.ico') }}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/user_images/favicons/favicon16x16.png') }}" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/user_images/favicons/favicon32x32.png') }}" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/user_images/favicons/favicon96x96.png') }}" />

	<!-- PAGE TITLE HERE -->
	<title>User | Edit</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="https://s3.ap-south-1.amazonaws.com/dzon-html/medico/xhtml/js/html5shiv.min.js"></script>
	<script src="https://s3.ap-south-1.amazonaws.com/dzon-html/medico/xhtml/js/respond.min.js"></script>
	<![endif]-->

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/user_css/plugins.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('user_plugins/scroll/scrollbar.css') }}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('css/user_css/skin/skin-1.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/user_css/templete.css') }}">
</head>
<body id="bg" >
<div class="page-wrapers">
    <!-- Content -->
    <div class="page-content dez-login p-t50 overlay-black-dark bg-img-fix" style="background-image:url(/images/user_images/background/bg3.jpg);">
        <div class="login-form relative z-index3 ">
            <div class="tab-content nav">
                <div id="developement-1" >
                    <form class="p-a30 dez-form text-center" method="post" enctype="multipart/form-data" action="{{ url('/sign-up-post') }}"> {{ csrf_field() }}
												{{-- <img src="{{ asset('images/user_images/logo.png') }}" style="width: 150px; height: 150px;"></img> --}}
                        <h3 class="form-title m-t0">Edit Profile</h3>
                        <div class="dez-separator-outer m-b5">
                            <div class="dez-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your personal details below: </p>
                        <div class="form-group">
                            <input name="name" required class="form-control" placeholder="Full Name" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="email" required class="form-control" placeholder="Email Id" type="text"/>
                        </div>
												<div class="form-group">
                            <input name="mobile" required class="form-control" placeholder="Mobile Number" type="text"/>
                        </div>
                        {{-- <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="Address" type="text"/>
                        </div> --}}
                        {{-- <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="City/Town" type="text"/>
                        </div> --}}
                        {{-- <label class="text-left m-b20">Enter your account details below: </label> --}}
                        {{-- <div class="form-group">
                            <input name="dzName" required="" class="form-control" placeholder="User Name" type="text"/>
                        </div> --}}
                        <div class="form-group">
                            <input name="password" required class="form-control" placeholder="Password" type="password"/>
                        </div>
                        <div class="">
                            <input name="retype-password" required class="form-control" placeholder="Re-type Your Password" type="password"/>
                        </div>
                        {{-- <label class="m-b30">
                        <input type="checkbox"/>
                        <label>I agree to the <a href="#">Terms of Service </a>& <a href="#">Privacy Policy </label>
                        </label> --}}
											<br>
                        <div class="form-group text-left "> <a class="site-button outline gray" href="{{ asset('user-login-page') }}">Back</a>
                            {{-- <button class="site-button pull-right">Submit</button> --}}
                            <input type="submit" class="site-button pull-right" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
</div>
<!-- JavaScript  files ========================================= -->
<script src="{{ asset('/js/user_js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('/user_plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('/user_plugins/bootstrap/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('/user_plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('/user_plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('/user_plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('/user_plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('/user_plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('/user_plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
<script src="{{ asset('/user_plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('/user_plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('/user_plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
<script src="{{ asset('/js/user_js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('/js/user_js/dz.carousel.js') }}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{ asset('/js/user_js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
<script src="{{ asset('/user_plugins/switcher/js/switcher.js') }}"></script><!-- SWITCHER JS  -->
</body>

<!-- Mirrored from medico.dexignlab.com/xhtml/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Feb 2019 10:57:22 GMT -->
</html>
