<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Helping Hands | Admin Registeration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="shortcut icon" href="{{ asset('images/admin_images/favicon.ico') }}"/>
    <!-- global css -->
    <link href="{{ asset('css/admin_css/app.css') }}" rel="stylesheet">
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" href="{{ asset('admin_vendors/iCheck/css/all.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admin_vendors/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('admin_vendors/select2/css/select2-bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_css/custom.css') }}">
    <link href="{{ asset('css/admin_css/login.css') }}" rel="stylesheet">
    <!--end of page level css-->
</head>

<body>
<div class="preloader">
    <div class="loader_img"><img src="{{ asset('images/admin_images/loader.gif') }}" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row " id="form-login">
        <div class="col-sm-12">
            <div class="card-header nocolor">
                <h2 class="text-center text-primary">
                    Sign Up or Log In
                </h2>
            </div>
            <div class="card-body social">
                <div class="row">
                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 offset-2">
                        <form class="form-horizontal" method="post" action="{{ route('admin.register') }}" id="register_form"> {{ csrf_field() }}
                            {{-- <!-- CSRF Token -->
                            <input type="hidden" name="_token" value="sSAo7cToGJCJ2IBFgOpYbLNnqV5n8O4DdNG5jdez"/> --}}
                            <div class="form-group row ">
                                <label class="control-label col-sm-3" for="first_name">Name<sup>*</sup> :</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"> <i class="fa fa-fw fa-user-md text-primary"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Name" name="name"
                                               id="name" value=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-sm-3" for="email">Email<sup>*</sup>  :</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope text-primary"></i>
                                        </span>
                                        <input type="text" placeholder="Email Address" class="form-control" name="email"
                                               id="email" value=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-sm-3" for="password">Password<sup>*</sup>  :</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-text rounded-0">
                                            <i class="fa fa-fw fa-key text-primary"></i>
                                        </span>
                                        <input type="password" placeholder="Password" class="form-control" name="password"
                                               id="password"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-sm-3" for="password_confirm">Confirm Password<sup>*</sup>  :</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="password" placeholder="Confirm Password" class="form-control"
                                               name="password_confirm" id="password_confirm"/>
                                        <span class="input-group-text rounded-0">
                                            <i class="fa fa-fw fa-key text-primary"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3" for="phone">Mobile<sup>*</sup>  :</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-text rounded-0">
                                            <i class="fa fa-fw fa-phone text-primary"></i>
                                        </span>
                                        <input type="text" placeholder="Mobile Number" class="form-control" name="mobile"
                                               id="mobile" value=""/>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <div class="offset-sm-3 col-12 col-md-9 agree">
                                    <label class="checkbox-inline sr-only d-block"  for="terms">Agree to terms and conditions</label>
                                    <input type="checkbox" value="1" name="terms" id="terms"/> &nbsp;
                                    <label for="terms" class="agree "> I agree to Terms and Conditions.</label>
                                </div>
                            </div> --}}
                            <div class="form-group row ">
                                <div class="offset-sm-3 col-9">
                                    <button type="submit" class="btn btn-primary">Register</button>
                                    <input type="reset" class="btn btn-default" value="Reset" id="dee1"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="{{ asset('js/admin_js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin_js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script src="{{ asset('admin_vendors/moment/js/moment.min.js') }}"></script>
<script src="{{ asset('admin_vendors/select2/js/select2.js') }}"></script>
<script src="{{ asset('admin_vendors/iCheck/js/icheck.js') }}"></script>
<script src="{{ asset('admin_vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin_js/custom_js/register2.js') }}"></script>
<!-- end of page level js -->
</body>


<!-- Mirrored from coreplusdemo.lorvent.com/register2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:47:18 GMT -->
</html>
