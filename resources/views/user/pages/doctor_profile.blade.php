@extends('user.layout.design')
@section('content')

					<!-- Our Awesome Services -->
					<div class="section-full bg-white content-inner">
							<div class="container">
									<div class="section-content">
											<div class="row">
													<div class="col-lg-12 text-center section-head">
							<h3 class="h3">My profile</h3>
							<div class="login-form relative z-index3 ">
			            <div class="tab-content nav">
			                <div id="developement-1" >
			                    <form class="p-a30 dez-form text-center" method="post" enctype="multipart/form-data" action="{{ url('/sign-up-post') }}"> {{ csrf_field() }}
															<img src="{{ asset('images/user_images/demo_doc.jpg') }}" style="width: 150px; height: 150px;"></img>
			                        {{-- <h3 class="form-title m-t0">Edit Profile</h3> --}}
			                <p> <b>First Name</b>:- Sarah </p> <p> <b>Last Name</b>:- Corner </p>
											<p> <b>Email</b>:-Sarah123@gmail.com  </p>
											<p> <b>Date of birth</b>:- 1/11/1992</p>
											<p> <b>Joining Date</b>:-2/1/2013 </p>
											<p> <b>Qualification</b>:- </p>
											<p> <b>Specializtion</b>:- </p>
											<p> <b>Experience</b>:-2 years </p>
											
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
