<!DOCTYPE html>
<html>


<!-- Mirrored from coreplusdemo.lorvent.com/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:47:12 GMT -->
<head>
    <meta charset="UTF-8">
    <title>::Admin Login::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('images/admin_images/favicon.ico') }}"/>
    <!-- Bootstrap -->
    <link href="{{ asset('css/admin_css/app.css') }}" rel="stylesheet">
    <!-- end of bootstrap -->
    <!--page level css -->
    <link type="text/css" href="{{ asset('css/admin_css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin_vendors/iCheck/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/admin_css/login.css') }}" rel="stylesheet">
    <!--end page level css-->
</head>

<body>
<div class="preloader">
    <div class="loader_img"><img src="{{ asset('images/admin_images/loader.gif') }}" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">

    <div class="card-header nocolor">
        <h2 class="text-center">
            Log In or Sign UP
            {{-- <a href="register2.html">Sign Up</a> --}}
        </h2>
    </div>
    <div class="row">
        <div class="col-md-10 ml-auto">
            <div class="card-body social">
                {{-- <div class="row">
                    <div class="col-12 col-sm-3">
                        <a href="#" class="btn btn-lg btn-block btn-facebook"> <i class="fa fa-facebook-square fa-lg"></i>
                            <span class="hidden-sm hidden-xs">Facebook</span>
                        </a>
                    </div>
                    <div class="col-12 col-sm-3">
                        <a href="#" class="btn btn-lg btn-block btn-twitter"> <i class="fa fa-twitter-square fa-lg"></i>
                            <span class="hidden-sm hidden-xs">Twitter</span>
                        </a>
                    </div>
                    <div class="col-12 col-sm-3">
                        <a href="#" class="btn btn-lg btn-block btn-google">
                            <i class="fa fa-google-plus-square fa-lg"></i>
                            <span class="hidden-sm hidden-xs">Google+</span>
                        </a>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="col-12 col-sm-9">
                        <hr class="omb_hrOr">
                        <span class="omb_spanOr">or</span>
                    </div> --}}
                    <div class="clearfix"></div>
                    <div class="col-12 col-sm-6 form_width">
                        <form action="http://coreplusdemo.lorvent.com/index.html" id="authentication" class="login_validator">
                            <div class="form-group">
                                <label for="email" class="sr-only"> E-mail</label>
                                <div class="input-group  input-group-prepend">
                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-envelope text-primary"></i></span>
                                    <input type="text" class="form-control  form-control-lg" id="email" name="username"
                                           placeholder="E-mail">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <div class="input-group input-group-prepend">
                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-lock text-primary"></i></span>
                                    <input type="password" class="form-control form-control-lg" id="password"
                                           name="password" placeholder="Password">
                                </div>
                            </div>
                            {{-- <div class="form-group checkbox">
                                <label for="remember">
                                    <input type="checkbox" name="remember" id="remember"> Remember Me
                                </label>
                            </div> --}}
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                            </div>
                            <a href="forgot_password.html" id="forgot" class="forgot"> Forgot Password? </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="{{ asset('js/admin_js/app.js') }}" type="text/javascript"></script>
<!-- end of global js -->
<!-- page level js -->
<script type="text/javascript" src="{{ asset('admin_vendors/iCheck/js/icheck.js') }}"></script>
<script src="{{ asset('admin_vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('js/admin_js/custom_js/login2.js') }}"></script>
<!-- end of page level js -->
</body>


<!-- Mirrored from coreplusdemo.lorvent.com/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:47:14 GMT -->
</html>
