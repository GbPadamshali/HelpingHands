@extends('user.hospital_layout.design')
@section('content')
  <div class="section-full bg-white content-inner">
      <div class="container">
          <div class="row">
                {{-- <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="dex-box text-primary border-2 counter-box m-b30">
                        <h1 class="text-uppercase m-a0 p-a15 "><i class="fa fa-building-o m-r20"></i> <span class="counter">1035</span></h1>
                        <h5 class="dez-tilte  text-uppercase m-a0"><span class="dez-tilte-inner skew-title text-white bg-primary p-lr15 p-tb10">Active Experts</span></h5>
                    </div>
                </div> --}}
              <div class="col-md-6 col-sm-6 col-lg-3">
                  <div class="dex-box text-primary border-2 counter-box m-b30">
                      <h1 class="text-uppercase m-a0 p-a15 "><i class="fa fa-group m-r20"></i> <span class="counter">20</span></h1>
                      <h5 class="dez-tilte  text-uppercase m-a0"><span class="dez-tilte-inner skew-title text-white bg-primary p-lr15 p-tb10">Available Appointments</span></h5>
                  </div>
              {{-- </div>
              <div class="col-md-6 col-sm-6 col-lg-3">
                  <div class="dex-box text-primary border-2 counter-box m-b30">
                      <h1 class="text-uppercase m-a0 p-a15 "><i class="fa fa-slideshare m-r20"></i> <span class="counter">1552</span></h1>
                      <h5 class="dez-tilte  text-uppercase m-a0"><span class="dez-tilte-inner skew-title text-white bg-primary p-lr15 p-tb10">Developer Hand</span></h5>
                  </div>
              </div> --}}
              {{-- <div class="col-md-6 col-sm-6 col-lg-3">
                  <div class="dex-box text-primary border-2 counter-box m-b10">
                      <h1 class="text-uppercase m-a0 p-a15 "><i class="fa fa-home m-r20"></i> <span class="counter">1156</span></h1>
                      <h5 class="dez-tilte  text-uppercase m-a0"><span class="dez-tilte-inner skew-title text-white bg-primary p-lr15 p-tb10">Completed Project</span></h5>
                  </div>
              </div> --}}
          </div>
      </div>
  </div>


  <div class="section-full content-inner bg-white">
      <div class="container">
          <div class="section-content">
              <div class="row">
      <div class="col-lg-5 align-self-end m-b30">
                      <div class="dez-thum d-sm-none d-lg-block"><img src="{{asset('/images/user_images/worker.png') }}" alt=""></div>
                  </div>
                  <div class="col-lg-7 m-b30">
                      <h3 class="h3 text-uppercase">Make An <span class="text-primary"> Appointment</span></h3>
                      <p class="m-b10"><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown...</strong></p>
                      <p class="m-b30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                      <div class="clearfix bg-primary text-white p-a30 about-appoint">
          <div class="dzFormMsg"></div>
          <form method="post" class="dzForm" action="#">
          <input type="hidden" value="Contact" name="dzToDo" >
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group">
                    <input name="patient_name" type="text" required class="form-control" placeholder="Full Name">
                  </div>
                </div>
              </div>
              <br>

              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group">
                    <input name="email" type="email" class="form-control" required  placeholder="Your Email Id" >
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group">
                    <input name="blood_group" type="text" required class="form-control" placeholder="Blood Group">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group">
                    <input name="allergies" type="text" required class="form-control" placeholder="Allergies">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group">
                    <input name="diseases" type="text" class="form-control" placeholder="Diseases">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group">
                    <input name="mobile" type="text" class="form-control" placeholder="Mobile No.">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group">
                    <input name="medical_history" type="text" required class="form-control" placeholder="Medical History">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-group">
                    <textarea name="addres" rows="4" class="form-control" required placeholder="Address"></textarea>
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
  </div>
  <!-- About Company END -->

@endsection
