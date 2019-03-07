@extends('user.layout.design')
@section('content')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/user_images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">About us</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>About us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="clearfix">
            <!-- Our Awesome Services -->
            <div class="section-full bg-white content-inner">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-12 text-center section-head">
								<h3 class="h3">Our Awesome Services</h3>
								<div class="dez-separator bg-primary"></div>
                                <div class="clear"></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 right m-r50">
                                    <div class="icon-bx-md radius bg-primary"><span class="icon-cell text-white"><i class="fa fa-user-md" aria-hidden="true"></i></span></div>
                                    <div class="icon-content p-r40">
                                        <h5 class="dez-tilte">Our Best Doctor</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                                <div class="icon-bx-wraper bx-style-2 m-b30 p-a20  right m-r50">
                                    <div class="icon-bx-md radius bg-primary"> <span class="icon-cell text-white"><i class="fa fa-ambulance" aria-hidden="true"></i></span> </div>
                                    <div class="icon-content p-r40">
                                        <h5 class="dez-tilte">Fast Ambulance Searvice</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                                <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 right m-r50">
                                    <div class="icon-bx-md radius bg-primary"> <span class="icon-cell text-white"><i class="fa fa-users" aria-hidden="true"></i></span> </div>
                                    <div class="icon-content p-r40">
                                        <h5 class="dez-tilte ">Well Qualified Staff</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6  col-sm-12 text-center d-md-none d-lg-block">
                                <div class="worker"> <img src="{{ asset('images/user_images/service-image.png') }}" alt=""/> </div>
                            </div>
                            <div class="col-lg-4 col-md-6  col-sm-12">
                                <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 left m-l50">
                                    <div class="icon-bx-md radius bg-primary"> <span class="icon-cell text-white"><i class="fa fa-stethoscope" aria-hidden="true"></i></span> </div>
                                    <div class="icon-content p-l40">
                                        <h5 class="dez-tilte ">24X7 Service</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                                <div class="icon-bx-wraper bx-style-2 m-b30 p-a20 left m-l50">
                                    <div class="icon-bx-md radius bg-primary"> <span class="icon-cell text-white"><i class="fa fa-wheelchair" aria-hidden="true"></i></span> </div>
                                    <div class="icon-content p-l40">
                                        <h5 class="dez-tilte ">Health Care</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                                <div class="icon-bx-wraper bx-style-2 m-b10 p-a20 left m-l50">
                                    <div class="icon-bx-md radius bg-primary"> <span class="icon-cell text-white"><i class="fa fa-medkit" aria-hidden="true"></i></span> </div>
                                    <div class="icon-content p-l40">
                                        <h5 class="dez-tilte ">Emergency Service</h5>
                                        <div class="dez-separator-outer ">
                                            <div class="dez-separator bg-primary style-liner"></div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing  sed diam nibh euismod [...]</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Awesome Services END -->
            <!-- Company Stats  -->
            <div class="section-full bg-img-fix content-inner-1 overlay-black-dark our-projects-galery" style="background-image:url(images/user_images/background/bg3.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="icon-bx-wraper center text-white">
                                <div class="icon-xl m-b20"> <span class="icon-cell"> <i class="fa fa-group"></i></span> </div>
                                <div class="m-t10">
                                    <div class="dez-separator bg-primary"></div>
                                </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte text-uppercase h3"> <span class="counter">5000</span> + </h3>
                                    <h6>Passionate Employee</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="icon-bx-wraper center text-white">
                                <div class="icon-xl m-b20"> <span class="icon-cell"> <i class="fa fa-university"></i></span> </div>
                                <div class="m-t10">
                                    <div class="dez-separator bg-primary"></div>
                                </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte text-uppercase h3"> <span class="counter">700</span> + </h3>
                                    <h6>Hospital in Worldwide</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                            <div class="icon-bx-wraper center text-white">
                                <div class="icon-xl m-b20"> <span class="icon-cell"> <i class="fa fa-globe"></i></span> </div>
                                <div class="m-t10">
                                    <div class="dez-separator bg-primary"></div>
                                </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte text-uppercase h3"> <span class="counter">245</span> + </h3>
                                    <h6>Modern Style Care</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="icon-bx-wraper center text-white">
                                <div class="icon-xl m-b20"> <span class="icon-cell"> <i class="fa fa-trophy"></i></span> </div>
                                <div class="m-t10">
                                    <div class="dez-separator bg-primary"></div>
                                </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte text-uppercase h3"> <span class="counter">648</span> + </h3>
                                    <h6>International Awards</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Company Stats END -->
            <!-- Team member -->
            <div class="section-full bg-white content-inner">
                <div class="container">
                    <div class="section-head text-center ">
                        <h3 class="h3">Meet our Dedicate Team</h3>
                        <div class="dez-separator bg-primary"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                    </div>
                    <div class="section-content ">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 m-b30">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="#"><img src="{{ asset('images/user_images/our-team/pic1.jpg') }}" alt=""></a> </div>
                                    <div class="dez-info p-a20 p-t40 border-1">
                                        <h4 class="dez-title m-tb0"><a href="#">Jimmy Morris</a></h4>
                                        <div class="bg-primary skew-content-box">
                                            <ul class="dez-social-icon">
                                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-google-plus" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-pinterest-p" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-instagram" href="javascript:void(0);"></a></li>
                                            </ul>
                                        </div>
                                        <span>Senor Vice President</span>
                                        <p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 m-b30">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="#"><img src="{{ asset('images/user_images/our-team/pic2.jpg') }}" alt=""></a> </div>
                                    <div class="dez-info p-a20 p-t40 border-1">
                                        <h4 class="dez-title m-tb0"><a href="#">Jimmy Morris</a></h4>
                                        <div class="bg-primary skew-content-box">
                                            <ul class="dez-social-icon">
                                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-google-plus" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-pinterest-p" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-instagram" href="javascript:void(0);"></a></li>
                                            </ul>
                                        </div>
                                        <span>Senor Vice President</span>
                                        <p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4  m-b10">
                                <div class="dez-box">
                                    <div class="dez-media"> <a href="#"><img src="{{ asset('images/user_images/our-team/pic3.jpg') }}" alt=""></a> </div>
                                    <div class="dez-info p-a20 p-t40 border-1">
                                        <h4 class="dez-title m-tb0"><a href="#">Jimmy Morris</a></h4>
                                        <div class="bg-primary skew-content-box">
                                            <ul class="dez-social-icon">
                                                <li><a class="fa fa-facebook" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-twitter" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-linkedin" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-google-plus" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-pinterest-p" href="javascript:void(0);"></a></li>
                                                <li><a class="fa fa-instagram" href="javascript:void(0);"></a></li>
                                            </ul>
                                        </div>
                                        <span>Senor Vice President</span>
                                        <p class="m-t10 m-b0">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team member -->
            <!-- Testimonials -->
            <div class="section-full bg-img-fix content-inner overlay-black-dark testimonials" style="background-image:url(images/user_imagesbackground/bg3.jpg);">
                <div class="container">
                    <div class="section-head text-center text-white">
                        <h3 class="h3"> Testimonials</h3>
                        <div class="dez-separator bg-primary"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                    </div>
                    <div class="section-content">
                        <div class="testimonial-five owl-carousel owl-none">
                            <div class="item">
                                <div class="testimonial-6">
                                    <div class="testimonial-text bg-white quote-left quote-right">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                                    </div>
                                    <div class="testimonial-detail clearfix bg-primary text-white">
                                        <h4 class="testimonial-name m-tb0">David Matin</h4>
                                        <span class="testimonial-position">Student</span>
                                        <div class="testimonial-pic radius"><img src="{{ asset('images/user_images/testimonials/pic1.jpg') }}" alt="" width="100" height="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-6">
                                    <div class="testimonial-text bg-white quote-left quote-right">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
                                    </div>
                                    <div class="testimonial-detail clearfix bg-primary text-white">
                                        <h4 class="testimonial-name m-tb0">David Matin</h4>
                                        <span class="testimonial-position">Student</span>
                                        <div class="testimonial-pic radius"><img src="{{ asset('images/user_imagesbackground/testimonials/pic2.jpg') }}" alt="" width="100" height="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonials End -->
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
@endsection
