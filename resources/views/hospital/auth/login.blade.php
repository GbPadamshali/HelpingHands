<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin Template">
	<meta name="author" content="Bootlab">

	<title>HelpingHands</title>

	<link href="{{ asset('css/hospital_css/app.css') }}" rel="stylesheet">

</head>

<body>
	<main class="main h-100 w-100">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Sign in to your account to continue </h1>
							<p class="lead">

							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									{{-- <div class="text-center">
										<img src="{{ asset('images/hospital_images/avatars/avatar.jpg') }}" alt="Andrew Jones" class="img-fluid rounded-circle" width="132" height="132" />
									</div> --}}
									<form method="post" action="{{ url('ho-admin/login') }}"> {{ Csrf_field() }}
										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" required />
										</div>
										<div class="form-group">
											<label>Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" required />
											<small>
            {{-- <a href="{{ url('#') }}">Forgot password?</a> --}}
          </small>
										</div>
										{{-- <div>
											<div class="custom-control custom-checkbox align-items-center">
												<input type="checkbox" class="custom-control-input" value="remember-me" name="remember-me" checked>
												<label class="custom-control-label text-small">Remember me next time</label>
											</div>
										</div> --}}
										<div class="text-center mt-3">
											<input type="submit" value="Sign In" class="btn btn-lg btn-primary">
											{{-- <a href="{{ url('/hospital/dashboard') }}" class="btn btn-lg btn-primary">Sign in</a> --}}
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										{{-- </div>
                    <div class="text-center mt-3">
											<a href="{{ url('/hospital/register') }}" class="btn btn-lg btn-primary">New Register</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div> --}}
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

<script src="{{ asset('js/hospital_js/app.js') }}"></script>
</body>

</html>
