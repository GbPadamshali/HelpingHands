@extends('user.layout.design')
@section('content')
    <!-- Content -->
    <div class="page-content">
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>403 </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="container">
            <!-- 404 Page -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-notfound text-center">
                            <form method="post">
                                <strong>4<i class="fa fa-frown-o text-primary"></i>3</strong>
                                <h5 class="m-b20 text-uppercase">Access Forbidden</h5>
                                <a href="#" class="site-button "><span>Go to home</span></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 404 Page END -->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
  @endsection
