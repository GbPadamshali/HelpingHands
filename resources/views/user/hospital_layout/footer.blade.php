<!-- Footer -->
<footer class="site-footer">
    <div class="footer-top text-white footer-image overlay-black-dark bg-img-fix" style="background-image:url(images/user_images/background/bg3.jpg); background-attachment: fixed;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                    <div class="widget widget_about">
                        <div class="logo-footer"><img src="{{ asset('images/user_images/hospital_logo/logo1.png') }}" alt=""></div>
                        <p class="m-t40"><strong>ABC.</strong>  Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus.  cons ectetur elit. Vestibulum nec odios Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec.</p>
                        {{-- <ul class="dez-social-icon border dez-social-icon-lg">
                            <li><a href="javascript:void(0);" class="fa fa-facebook fb-btn"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-twitter tw-btn"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-linkedin link-btn"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-pinterest-p pin-btn"></a></li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                    <div class="widget widget_services">
                        <h4 class="m-b15 text-uppercase">Our services</h4>
                        <div class="dez-separator bg-primary"></div>
                        <ul>
                          <li><a href="#">Multispeciality</a></li>
                          <li><a href="#">Orthopedic</a></li>
                          <li><a href="#">Dental</a></li>
                          <li><a href="#">Maternity</a></li>
                          <li><a href="#">Laboratry</a></li>
                          <li><a href="#">Pharmacy</a></li>
                          <li><a href="#">Canteen</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                    <div class="widget widget_getintuch">
                        <h4 class="m-b15 text-uppercase">Contact us</h4>
                        <div class="dez-separator bg-primary"></div>
                        <ul>
                            <li><i class="fa fa-map-marker"></i><strong>address</strong> 21 Greens Road RD 2, Ruawai 0592 </li>
                            <li><i class="fa fa-phone"></i><strong>phone</strong>0000-0000000 (24/7 Support Line)</li>
                            <li><i class="fa fa-fax"></i><strong>Email</strong>info@abc.com<br/>
                          </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 footer-col-4">
                    <div class="widget widget_gallery">
                        <h4 class="m-b15 text-uppercase">Resent Post</h4>
                        <div class="dez-separator bg-primary"></div>
                        <ul>
                            <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('images/user_images/gallery/pic1.jpg') }}" alt=""></a> </li>
                            <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('images/user_images/gallery/pic2.jpg') }}" alt=""></a> </li>
                            <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('images/user_images/gallery/pic3.jpg') }}" alt=""></a> </li>
                            <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('images/user_images/gallery/pic4.jpg') }}" alt=""></a> </li>
                            <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('images/user_images/gallery/pic5.jpg') }}" alt=""></a> </li>
                            <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('images/user_images/gallery/pic7.jpg') }}" alt=""></a> </li>
                            <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('images/user_images/gallery/pic6.jpg') }}" alt=""></a> </li>
                            <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('images/user_images/gallery/pic8.jpg') }}" alt=""></a> </li>
                            <li class="img-effect2"> <a href="javascript:void(0);"><img src="{{ asset('images/user_images/gallery/pic9.jpg') }}" alt=""></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- <div class="row dez-newsletter p-a30 style1">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-bx-wraper left">
                        <div class="icon-lg text-primary radius m-t10"> <a href="#" class="icon-cell"><i class="fa fa-envelope-o"></i></a> </div>
                        <div class="icon-content">
                            <h2 class="dez-tilte m-b0">NewsLetter</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and.</p>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-8 col-md-6">
                    <div class="newsLetter-bx m-t20 m-b10">
          <form class="dzSubscribe" action="http://medico.dexignlab.com/xhtml/script/mailchamp.php" method="post">
            <div class="dzSubscribeMsg"></div>
            {{-- <div class="input-group">
              <input name="dzEmail" required="required" class="form-control" placeholder="Your Email Id" type="email">
              <span class="input-group-btn">
                <button name="submit" value="Submit" type="submit" class="site-button m-l10">Submit</button>
              </span>
            </div> --}}
          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom part -->
    <div class="footer-bottom bg-primary">
        <div class="container">
            <div class="row text-white">
                <div class="col-lg-4 col-md-4 text-left">
        {{-- <span>Copyright © 2017 DexignZone</span> --}}
      </div>
                <div class="col-lg-4 col-md-4 text-center">
        <span> Design & Developed By><a href="{{ url('dashboard') }}" style="color:#ffffff"> Helping Hands </a> </span>
      </div>
                <div class="col-lg-4 col-md-4 text-right">
        <a href="about-2.html"> About</a>
        <a href="help.html"> Help Desk</a>
        <a href="privacy-policy.html"> Privacy Policy</a>
      </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer END-->
