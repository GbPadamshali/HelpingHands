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
							<h1 class="h2"> Hospital Registration </h1>
							<p class="lead">
								Start creating the filling hospital details
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form  id="validation-form">
										<div class="form-group">
											<label>Name</label>
											<input class="form-control form-control-lg" type="text" name="hospital name" placeholder="Enter your hospital name"  required/>
										</div>
										 <div class="form-group">
                                    <label >Text area</label>

                                        <textarea class="form-control" rows="5" name="hospital address" placeholder="Enter your hospital address"  required></textarea>
                                    </div>
										<div class="form-group">
											<label>Registration no.</label>
											<input class="form-control form-control-lg" type="text" name="reg.no." placeholder="Enter your hospital gov registration number" required/>
										</div>
										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" required/>
										</div>
										<div class="form-group">
											<label>Phone No.</label>
											<input class="form-control form-control-lg" type="tel" name="phoneno." placeholder="Enter your phone number" required/>
										</div>

										<div class="form-group">
											<label>Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" required/>
										</div>
										<label>comformPassword</label>
										 <div class="form-group">
                                            <input class="form-control" type="password" required="" placeholder="Confirm Password" required>
                                         </div>
                                   </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
                            </di
										<div class="text-center mt-3">
											<a href="{{ url('/hospital/login') }}" class="btn btn-lg btn-primary">Sign up</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
										</div>
									</form>
								</div>
							</div>
						</div>
						<script>
							document.addEventListener("DOMContentLoaded", function(event) {
								// Initialize Select2 select box
								$('select[name="validation-select2"]').select2({
									allowClear: true,
									placeholder: 'Select gear...',
								}).change(function() {
									$(this).valid();
								});
								// Initialize Select2 multiselect box
								$('select[name="validation-select2-multi"]').select2({
									placeholder: 'Select gear...',
								}).change(function() {
									$(this).valid();
								});
								// Trigger validation on tagsinput change
								$('input[name="validation-bs-tagsinput"]').on('itemAdded itemRemoved', function() {
									$(this).valid();
								});
								// Initialize validation
								$('#validation-form').validate({
									ignore: '.ignore, .select2-input',
									focusInvalid: false,
									rules: {
										'email': {
											required: true,
											email: true
										},
										'password': {
											required: true,
											minlength: 6,
											maxlength: 20
										},
										'password-confirmation': {
											required: true,
											minlength: 6,
											equalTo: 'input[name="validation-password"]'
										},
										'validation-required': {
											required: true
										},
										'validation-url': {
											required: true,
											url: true
										},
										'validation-select': {
											required: true
										},
										'validation-multiselect': {
											required: true,
											minlength: 2
										},
										'validation-select2': {
											required: true
										},
										'validation-select2-multi': {
											required: true,
											minlength: 2
										},
										'validation-text': {
											required: true
										},
										'validation-file': {
											required: true
										},
										'validation-radios': {
											required: true
										},
										'validation-radios-custom': {
											required: true
										},
										'validation-checkbox': {
											required: true
										},
										'validation-checkbox-custom': {
											required: true
										},
										'validation-checkbox-group-1': {
											require_from_group: [1, 'input[name="validation-checkbox-group-1"], input[name="validation-checkbox-group-2"]']
										},
										'validation-checkbox-group-2': {
											require_from_group: [1, 'input[name="validation-checkbox-group-1"], input[name="validation-checkbox-group-2"]']
										},
										'validation-checkbox-custom-group-1': {
											require_from_group: [1, 'input[name="validation-checkbox-custom-group-1"], input[name="validation-checkbox-custom-group-2"]']
										},
										'validation-checkbox-custom-group-2': {
											require_from_group: [1, 'input[name="validation-checkbox-custom-group-1"], input[name="validation-checkbox-custom-group-2"]']
										}
									},
									// Errors
									errorPlacement: function errorPlacement(error, element) {
										var $parent = $(element).parents('.form-group');
										// Do not duplicate errors
										if ($parent.find('.jquery-validation-error').length) {
											return;
										}
										$parent.append(
											error.addClass('jquery-validation-error small form-text invalid-feedback')
										);
									},
									highlight: function(element) {
										var $el = $(element);
										var $parent = $el.parents('.form-group');
										$el.addClass('is-invalid');
										// Select2 and Tagsinput
										if ($el.hasClass('select2-hidden-accessible') || $el.attr('data-role') === 'tagsinput') {
											$el.parent().addClass('is-invalid');
										}
									},
									unhighlight: function(element) {
										$(element).parents('.form-group').find('.is-invalid').removeClass('is-invalid');
									}
								});
							});
						</script>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="{{ asset('js/hospital_js/app.js') }}"></script>
</body>

</html>
