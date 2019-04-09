@extends('user.hospital_layout.design')
@section('content')
    <!-- Content -->
    <div class="page-content">
        <!-- Slider -->
        <div class="main-slider style-two default-banner" id="home">
            <div class="tp-banner-container">
                <div class="tp-banner" >
					<div id="rev_slider_1175_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="duotone192" data-source="gallery" style="background-color:transparent;padding:0px;">
						<!-- START REVOLUTION SLIDER 5.3.0.2 fullscreen mode -->
						<div id="rev_slider_1175_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.3.0.2">
							<ul>	<!-- SLIDE  -->
								<li data-index="rs-3239" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                    data-masterspeed="default"  data-thumb="images/user_images/main-slider/slide6.jpg"  data-rotate="0"  data-fstransition="fade"
                    data-fsmasterspeed="300" data-fsslotamount="7" data-saveperformance="off"  data-title="Slide" data-param1="" data-param2=""
                    data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
									<!-- MAIN IMAGE -->
									<img src="{{ asset($data['hospital']->banner_path) }}"  alt="" data-lazyload="/images/user_images/hospital_img1.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="3" class="rev-slidebg" data-no-retina>
									<!-- LAYERS -->
									<div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1"
									data-x="['center','center','center','center']"
									data-hoffset="['0','0','0','0']"
									data-y="['middle','middle','middle','middle']"
									data-voffset="['0','0','0','0']"
									data-width="full" data-height="full"
									data-whitespace="nowrap"
									data-type="shape"
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"
									data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
									data-textAlign="['left','left','left','left']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 2;background-color:rgba(0, 0, 0, 0.2);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
									<!-- LAYER NR. 1 -->
									<div class="tp-caption   rs-parallaxlevel-4"
										 id="slide-3239-layer-1"
										 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										 data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-100']"
										data-fontsize="['60','60','40','20']"
										data-lineheight="['70','70','50','30']"
										data-width="['720','640','480','300']"
										data-height="none"
										data-whitespace="normal"

										data-type="text"
										data-responsive_offset="off"
										data-responsive="off"
										data-frames='[{"from":"y:20px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
										data-textAlign="['center','center','center','center']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 5; min-width: 720px; max-width: 720px; white-space: normal; font-size: 60px; line-height: 70px;
                            color: rgba(255, 255, 255, 1.00);font-family:'Raleway',sans-serif;border-width:0px;letter-spacing:10px;
                            font-weight:300;">WELCOME<br/>
							        TO {{ $data['hospital']->name }}</div>




									<!-- LAYER NR. 2 -->
									<div class="tp-caption   rs-parallaxlevel-4"
										 id="slide-3239-layer-2"
										 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										 data-y="['middle','middle','middle','middle']" data-voffset="['44','57','39','0']"
													data-fontsize="['17','17','17','15']"
										data-lineheight="['26','26','26','24']"
										data-width="['720','480','480','300']"
										data-height="none"
										data-whitespace="normal"

										data-type="text"
										data-responsive_offset="off"
										data-responsive="off"
										data-frames='[{"from":"y:10px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
										data-textAlign="['center','center','center','center']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 6; min-width: 720px; max-width: 720px; white-space: normal; font-size: 17px; line-height: 26px;
                            font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:'Raleway',sans-serif;border-width:0px;">
                            {{ $data['hospital']->tag_line }}</div>

									<!-- LAYER NR. 3 -->
									<div class="tp-caption rev-btn  rs-parallaxlevel-4"
										 id="slide-3239-layer-4"
										 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										 data-y="['middle','middle','middle','middle']" data-voffset="['133','159','141','102']"
													data-width="none"
										data-height="none"
										data-whitespace="nowrap"

										data-type="button"
										data-actions='[{"event":"click","action":"px","delay":""}]'
										data-responsive_offset="off"
										data-responsive="off"
										data-frames='[{"from":"y:20px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":900,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(238, 238, 238, 1.00);bs:solid;"}]'
										data-textAlign="['left','left','left','left']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[30,30,30,30]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[30,30,30,30]"

										style="z-index: 7; white-space: nowrap; font-size: 15px; line-height: 40px; font-weight: 700; color: rgba(0, 0, 0, 1.00);
                              font-family:'Raleway',sans-serif;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 1.00);border-width:0px;
                              outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                              <a href='{{ url('booking/1') }}'>Make An Appointment<a> </div>
								</li>
								<!-- SLIDE  -->
								{{-- <li data-index="rs-3240" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/user_images/main-slider/slide9.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
									<!-- MAIN IMAGE -->
									<img src="{{ asset('/images/user_images/hospital_img1.jpg') }}"  alt=""  data-lazyload="/images/user_images/hospital_img1.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="3" class="rev-slidebg" data-no-retina>
									<!-- LAYERS -->
									<div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-2"
									data-x="['center','center','center','center']"
									data-hoffset="['0','0','0','0']"
									data-y="['middle','middle','middle','middle']"
									data-voffset="['0','0','0','0']"
									data-width="full" data-height="full"
									data-whitespace="nowrap"
									data-type="shape"
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"
									data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
									data-textAlign="['left','left','left','left']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 2;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
									<!-- LAYER NR. 4 -->
									<div class="tp-caption   rs-parallaxlevel-4"
										 id="slide-3240-layer-1"
										 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										 data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-100']"
													data-fontsize="['60','60','40','20']"
										data-lineheight="['70','70','50','30']"
										data-width="['720','640','480','300']"
										data-height="none"
										data-whitespace="normal"

										data-type="text"
										data-responsive_offset="off"
										data-responsive="off"
										data-frames='[{"from":"y:20px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
										data-textAlign="['center','center','center','center']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 8; min-width: 720px; max-width: 720px; white-space: normal; font-size: 60px; line-height: 70px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family:'Raleway',sans-serif;border-width:0px;letter-spacing:10px;">WELCOME<br/>
							 TO ABC HOSPITAL</div>

									<!-- LAYER NR. 5 -->
									<div class="tp-caption   rs-parallaxlevel-4"
										 id="slide-3240-layer-2"
										 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										 data-y="['middle','middle','middle','middle']" data-voffset="['44','57','39','0']"
													data-fontsize="['17','17','17','15']"
										data-lineheight="['26','26','26','24']"
										data-width="['720','480','480','300']"
										data-height="none"
										data-whitespace="normal"

										data-type="text"
										data-responsive_offset="off"
										data-responsive="off"
										data-frames='[{"from":"y:10px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
										data-textAlign="['center','center','center','center']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 9; min-width: 720px; max-width: 720px; white-space: normal; font-size: 17px; line-height: 26px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:'Raleway',sans-serif;border-width:0px;">Post-ironic authentic drinking vinegar chambray quinoa. VHS letterpress sriracha, tacos skateboard migas farm-to-table artisan kombucha.  </div>

									<!-- LAYER NR. 6 -->
									<div class="tp-caption rev-btn  rs-parallaxlevel-4"
										 id="slide-3240-layer-4"
										 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										 data-y="['middle','middle','middle','middle']" data-voffset="['133','159','141','102']"
													data-width="none"
										data-height="none"
										data-whitespace="nowrap"

										data-type="button"
										data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
										data-responsive_offset="off"
										data-responsive="off"
										data-frames='[{"from":"y:20px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":900,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(238, 238, 238, 1.00);bs:solid;"}]'
										data-textAlign="['left','left','left','left']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[30,30,30,30]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[30,30,30,30]"

										style="z-index: 10; white-space: nowrap; font-size: 15px; line-height: 40px; font-weight: 700; color: rgba(0, 0, 0, 1.00);font-family:'Raleway',sans-serif;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 1.00);border-width:0px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">READ MORE </div>
								</li> --}}
								<!-- SLIDE  -->
								{{-- <li data-index="rs-3241" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slide10.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
									<!-- MAIN IMAGE -->
									<img src="{{ asset('/images/user_images/hospital_img1.jpg') }}"  alt=""  data-lazyload="/images/user_images/hospital_img1.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="3" class="rev-slidebg" data-no-retina>
									<!-- LAYERS -->
									<div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-3"
									data-x="['center','center','center','center']"
									data-hoffset="['0','0','0','0']"
									data-y="['middle','middle','middle','middle']"
									data-voffset="['0','0','0','0']"
									data-width="full" data-height="full"
									data-whitespace="nowrap"
									data-type="shape"
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"
									data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
									data-textAlign="['left','left','left','left']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 2;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>
									<!-- LAYER NR. 7 -->
									<div class="tp-caption   rs-parallaxlevel-4"
										 id="slide-3241-layer-1"
										 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										 data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-100']"
													data-fontsize="['60','60','40','20']"
										data-lineheight="['70','70','50','30']"
										data-width="['720','640','480','300']"
										data-height="none"
										data-whitespace="normal"

										data-type="text"
										data-responsive_offset="off"
										data-responsive="off"
										data-frames='[{"from":"y:20px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
										data-textAlign="['center','center','center','center']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 11; min-width: 720px; max-width: 720px; white-space: normal; font-size: 60px; line-height: 70px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family:'Raleway',sans-serif;border-width:0px;letter-spacing:10px;">WELCOME<br/>
							 TO ABC HOSPITAL </div>

									<!-- LAYER NR. 8 -->
									<div class="tp-caption   rs-parallaxlevel-4"
										 id="slide-3241-layer-2"
										 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										 data-y="['middle','middle','middle','middle']" data-voffset="['44','57','39','0']"
													data-fontsize="['17','17','17','15']"
										data-lineheight="['26','26','26','24']"
										data-width="['720','480','480','300']"
										data-height="none"
										data-whitespace="normal"

										data-type="text"
										data-responsive_offset="off"
										data-responsive="off"
										data-frames='[{"from":"y:10px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
										data-textAlign="['center','center','center','center']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[0,0,0,0]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[0,0,0,0]"

										style="z-index: 12; min-width: 720px; max-width: 720px; white-space: normal; font-size: 17px; line-height: 26px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:'Raleway',sans-serif;border-width:0px;">Post-ironic authentic drinking vinegar chambray quinoa. VHS letterpress sriracha, tacos skateboard migas farm-to-table artisan kombucha.  </div>

									<!-- LAYER NR. 9 -->
									<div class="tp-caption rev-btn  rs-parallaxlevel-4"
										 id="slide-3241-layer-4"
										 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
										 data-y="['middle','middle','middle','middle']" data-voffset="['133','159','141','102']"
													data-width="none"
										data-height="none"
										data-whitespace="nowrap"

										data-type="button"
										data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
										data-responsive_offset="off"
										data-responsive="off"
										data-frames='[{"from":"y:20px;sX:0.9;sY:0.9;opacity:0;","speed":1000,"to":"o:1;","delay":900,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(238, 238, 238, 1.00);bs:solid;"}]'
										data-textAlign="['left','left','left','left']"
										data-paddingtop="[0,0,0,0]"
										data-paddingright="[30,30,30,30]"
										data-paddingbottom="[0,0,0,0]"
										data-paddingleft="[30,30,30,30]"

										style="z-index: 13; white-space: nowrap; font-size: 15px; line-height: 40px; font-weight: 700; color: rgba(0, 0, 0, 1.00);font-family:'Raleway',sans-serif;background-color:rgba(255, 255, 255, 1.00);border-color:rgba(0, 0, 0, 1.00);border-width:0px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">READ MORE </div>
								</li> --}}
							</ul>
							<div class="tp-bannertimer" style="height: 8px; background-color: rgba(255, 255, 255, 0.25);"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Slider END -->
    <!-- Testimoniyal -->
<div class="section-full content-inner-1 bg-white">
        <div class="container">
    <div class="section-head text-center ">
                <h3 class="h3 text-uppercase">What <span class="text-primary"> Patients Says</span></h3>
      <p>{{ $data['hospital']->description }}</p>
    </div>
    <div class="section-content">
      <div class="owl-carousel testimonial-three1 owl-theme owl-btn-3 owl-btn-center-lr owl-dots-black-full">
        <div class="item">
          <div class="testimonial-2">
            <div class="testimonial-text">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
            </div>
            <div class="testimonial-detail clearfix">
              <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset('images/user_images/testimonials/pic1.jpg') }}" alt="" width="100" height="100"></div>
              <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial-2">
            <div class="testimonial-text">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
            </div>
            <div class="testimonial-detail clearfix">
              <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset('images/user_images/testimonials/pic2.jpg') }}" alt="" width="100" height="100"></div>
              <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial-2">
            <div class="testimonial-text">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
            </div>
            <div class="testimonial-detail clearfix">
              <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset('images/user_images/testimonials/pic3.jpg') }}" alt="" width="100" height="100"></div>
              <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial-2">
            <div class="testimonial-text">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
            </div>
            <div class="testimonial-detail clearfix">
              <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset('images/user_images/testimonials/pic1.jpg') }}" alt="" width="100" height="100"></div>
              <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial-2">
            <div class="testimonial-text">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
            </div>
            <div class="testimonial-detail clearfix">
              <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset('images/user_images/testimonials/pic2.jpg') }}" alt="" width="100" height="100"></div>
              <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial-2">
            <div class="testimonial-text">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
            </div>
            <div class="testimonial-detail clearfix">
              <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset('images/user_images/testimonials/pic3.jpg') }}" alt="" width="100" height="100"></div>
              <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial-2">
            <div class="testimonial-text">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
            </div>
            <div class="testimonial-detail clearfix">
              <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset('images/user_images/testimonials/pic1.jpg') }}" alt="" width="100" height="100"></div>
              <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial-2">
            <div class="testimonial-text">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
            </div>
            <div class="testimonial-detail clearfix">
              <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset('images/user_images/testimonials/pic2.jpg') }}" alt="" width="100" height="100"></div>
              <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimonial-2">
            <div class="testimonial-text">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an printer took a galley of type and scrambled it to make [...]</p>
            </div>
            <div class="testimonial-detail clearfix">
              <div class="testimonial-pic quote-left radius shadow"><img src="{{ asset('images/user_images/testimonials/pic3.jpg') }}" alt="" width="100" height="100"></div>
              <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimoniyal End -->
</div>

        <!-- About Company -->
		{{-- <div class="section-full  bg-white content-inner text-center">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 m-b30">
                            <div class="dez-box">
                                <div class="dez-media">
									<a href="#" class="dez-media dez-img-overlay4 btn-block"><img src="{{ asset('images/user_images/our-services/pic1.jpg') }}" alt=""></a>
								</div>
                                <div class="dez-info p-a30 border-1">
                                    <h4 class="dez-title m-t0"><a href="#">Specialty Services</a></h4>
                                    <p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
                                    <a href="#" class="site-button">Read More</a>
								</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 m-b30">
                            <div class="dez-box">
                                <div class="dez-media">
									<a href="#" class="dez-media dez-img-overlay4 btn-block"><img src="{{ asset('images/user_images/our-services/pic2.jpg') }}" alt=""></a>
								</div>
                                <div class="dez-info p-a30 border-1">
                                    <h4 class="dez-title m-t0"><a href="#">Problems in Healthcare</a></h4>
                                    <p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...]</p>
                                    <a href="#" class="site-button">Read More</a>
								</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 m-b10">
                            <div class="dez-box">
                                <div class="dez-media">
									<a href="#" class="dez-media dez-img-overlay4 btn-block"><img src="{{ asset('images/user_images/our-services/pic4.jpg') }}" alt=""></a>
								</div>
                                <div class="dez-info p-a30 border-1">
                                    <h4 class="dez-title m-t0"><a href="#">Women Health</a></h4>
                                    <p>Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...] </p>
                                    <a href="#" class="site-button">Read More</a>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}



		<!-- Why Choose Us  -->
        <div class="section-full bg-img-fix content-inner overlay-primary-dark text-white"
              style="background-image:url($hospital->image_path);">
            <div class="container">
                <div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="counter-style-1 m-b30">
							<div class="">
								<i class="icon flaticon-bar-chart text-white"></i>
								{{-- <span class="counter">{{ $departments->count }}</span> --}}
								<span class="counter">{{ $data['departments'] }}</span>
							</div>
							<span class="counter-text">DEPARTMENTS</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="counter-style-1 m-b30">
							<div class="">
								<i class="icon flaticon-social text-white"></i>
								{{-- <span class="counter">{{ $doctorCount->count }}</span> --}}
								<span class="counter">{{ $data['doctorCount'] }}</span>
							</div>
							<span class="counter-text">DOCTORS</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="counter-style-1 m-b30">
							<div class="">
								<i class="icon flaticon-file text-white"></i>
								<span class="counter">7</span>
							</div>
							<span class="counter-text">BRANCHES</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="counter-style-1 m-b30">
							<div class="">
								<i class="icon flaticon-pencil text-white"></i>
								<span class="counter">2</span>
							</div>
							<span class="counter-text">AVAILABLE DOCTORS</span>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!-- Why Choose Us END -->
        <div class="section-full bg-white content-inner-1 bg-img-fix overlay-black-dark"
              style="background-image:url({{ $data['hospital']->image_path }});">
                <div class="container">
                    <div class="section-head text-center text-white">
                        <h3 class="h3 text-uppercase">Available Doctors</h3>
                        <p>{{ $data['hospital']->description }}</p>
                    </div>
                    <div class="section-content">
                        <div class="owl-carousel blog-carousel owl-btn-3 btn-white owl-btn-center-lr owl-theme">
                          @foreach ($data['doctors'] as $doctor)
                            <div class="item">
    							            <div class="dez-box">
    								            <div class="dez-media">
    									            <a href="#"><img src="{{ asset($doctor->image_path) }}" alt=""></a>
    								             </div>
    								             <div class="dez-info p-a20 border-1 bg-white">
    									             <h4 class="dez-title m-t15">{{ $doctor->first_name }} {{ $doctor->last_name }}</h4>
    									             <h4 class="dez-title m-t15">{{ $doctor->email }}</h4>
    									             <h4 class="dez-title m-t15">{{ $doctor->specialization }}</h4>
    									             <h4 class="dez-title m-t15">{{ $doctor->qualification }}</h4>
    									             <h4 class="dez-title m-t15">{{ $doctor->experience }}</h4>
    									             {{-- <p class="m-b10">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem ipsum dolor consectetur Fusce varius [...]</p> --}}
    									             {{-- <a href="#" class="site-button-link black m-b10">Read More</a> --}}
    									             <div class="dez-divider bg-gray m10"><i class="icon-dot c-square"></i></div>
    									             {{-- <div class="dez-post-meta ">
                                     <ul>
                                       <li class=""> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                       <li class="post-author"><i class="fa fa-user"></i>By <a href="#">Jone</a> </li>
                                       <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0</a> </li>
                                     </ul>
                                   </div> --}}
    								             </div>
    							              </div>
    						            </div>
                          @endforeach

                        </div>
                    </div>
                </div>
            </div>
        <!-- About Company -->
        {{-- <div class="section-full content-inner bg-white">
            <div class="container">
                <div class="section-content">
                    <div class="row">
						<div class="col-lg-5 align-self-end m-b30">
                            <div class="dez-thum d-sm-none d-lg-block"><img src="{{ asset('images/user_images/worker.png') }}" alt=""></div>
                        </div>
                        <div class="col-lg-7 m-b30">
                            <h3 class="h3 text-uppercase">Make An <span class="text-primary"> Appointment</span></h3>
                            <p class="m-b10"><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown...</strong></p>
                            <p class="m-b30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                            <div class="clearfix bg-primary text-white p-a30 about-appoint">
								<div class="dzFormMsg"></div>
								<form method="post" class="dzForm" action="http://medico.dexignlab.com/xhtml/script/contact.php">
								<input type="hidden" value="Contact" name="dzToDo" >
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<input name="dzName" type="text" required class="form-control" placeholder="Your Name">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<input name="dzEmail" type="email" class="form-control" required  placeholder="Your Email Id" >
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<input name="dzOther[Phone]" type="text" required class="form-control" placeholder="Phone">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<div class="input-group">
													<input name="dzOther[Subject]" type="text" required class="form-control" placeholder="Subject">
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<div class="input-group">
													<textarea name="dzMessage" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<div class="input-group">
													<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
													<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<button name="submit" type="submit" value="Submit" class="site-button white outline"> <span>Make An Appointment</span> </button>
										</div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- About Company END -->

		<!-- Latest Blog -->

        <!-- Latest Blog END -->

    <!-- Content END-->


@endsection
