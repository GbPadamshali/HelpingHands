@extends('user.layout.design')
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/user_images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Who We Are</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Who We Are</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-area">
            <!-- who we are -->
            <div class="container">
                <div class="row">
                    <!-- Side Bar -->
                    <div class="col-lg-9">
                        <div>
                            <h1 class="m-b20 m-t0">Implementing Perfection With Innovative Vision</h1>
                            <div class="dez-separator bg-primary"></div>
                            <p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </strong></p>
                        </div>
                        <div>
                            <h2 class="m-t30 m-b10 ">Chemical Research (Green Chemistry)</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 m-b30">
                                    <div class="dez-box">
                                        <div class="dez-media"> <a href="#"><img src="{{ asset('images/user_images/our-work/pic1.jpg') }}" alt=""></a> </div>
                                        <div class="dez-info p-a30 bg-gray">
                                            <h4 class="dez-title m-t0"><a href="#">first heading</a></h4>
                                            <p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
                                            <a href="#" class="site-button  ">More</a> </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 m-b30">
                                    <div class="dez-box">
                                        <div class="dez-media"> <a href="#"><img src="{{ asset('images/user_images/our-work/pic2.jpg') }}" alt=""></a> </div>
                                        <div class="dez-info p-a30 bg-gray">
                                            <h4 class="dez-title m-t0"><a href="#">first heading</a></h4>
                                            <p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
                                            <a href="#" class="site-button  ">More</a> </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 m-b30">
                                    <div class="dez-box">
                                        <div class="dez-media"> <a href="#"><img src="{{ asset('images/user_images/our-work/pic3.jpg') }}" alt=""></a> </div>
                                        <div class="dez-info p-a30 bg-gray">
                                            <h4 class="dez-title m-t0"><a href="#">first heading</a></h4>
                                            <p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
                                            <a href="#" class="site-button  ">More</a> </div>
                                    </div>
                                </div>
                            </div>
                            <h3>Our Offerings</h3>
                            <ul class="list-check-circle primary">
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
                                <li>Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</li>
                                <li>Printer took a galley of type and scrambled it to make a type specimen book. </li>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</li>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </li>
                                <li>Eorem ipsum dolor sit amet</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Side Bar END -->
                    <!-- Right Bar -->
                    <div class="col-lg-3">
                       <div class="row">
							<div class="col-lg-12 col-md-6 col-sm-6 m-b30">
								<div class="icon-bx-wraper bx-style-1 p-a30 center">
									<div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="fa fa-user"></i></a> </div>
									<div class="icon-content">
										<h5 class="dez-tilte text-uppercase">Recent Highlights</h5>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-6 col-sm-6 m-b30">
								<div class="icon-bx-wraper bx-style-1 p-a30 center">
									<div class="icon-bx-sm text-primary bg-white radius border-2 m-b20"> <a href="#" class="icon-cell"><i class="fa fa-building-o"></i></a> </div>
									<div class="icon-content">
										<h5 class="dez-tilte text-uppercase">Recent Highlights</h5>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod [...]</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 m-b30">
								<div class="icon-bx-wraper bx-style-1 p-a20 left">
									<div class="icon-bx-xs text-primary bg-white radius border-2 "> <a href="#" class="icon-cell "><i class="fa fa-code"></i></a> </div>
									<div class="icon-content">
										<h5 class="dez-tilte text-uppercase">Content title</h5>
										<p>Lorem ipsum dolor sit elit nonummy dolor is euismod end [...]</p>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <!-- Right Bar END -->
                </div>
            </div>
            <!-- who we are END -->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
	@endsection
