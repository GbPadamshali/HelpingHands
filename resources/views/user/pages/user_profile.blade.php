@extends('user.layout.design')
@section('content')

					<!-- Our Awesome Services -->
					<div class="section-full bg-white content-inner">
							<div class="container">
									<div class="section-content">
											<div class="row">
													<div class="col-lg-12 text-center section-head">
							<h3 class="h3">Edit profile</h3>
							<div class="login-form relative z-index3 ">
			            <div class="tab-content nav">
			                <div id="developement-1" >
			                    <form class="p-a30 dez-form text-center" method="post" enctype="multipart/form-data" action="{{ url('/sign-up-post') }}"> {{ csrf_field() }}
															{{-- <img src="{{ asset('images/user_images/logo.png') }}" style="width: 150px; height: 150px;"></img> --}}
			                        {{-- <h3 class="form-title m-t0">Edit Profile</h3> --}}
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
							        </div>
							    </div>
							</div>
					</div>
					<!-- Our Awesome Services END -->







@endsection
