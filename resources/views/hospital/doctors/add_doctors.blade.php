@extends('hospital.layout.design')
@section('content')
<div class="card-body">
  <form id="validation-form">

    <div class="form-group">
      <label class="form-label">First_name</label>
      <input type="text" class="form-control" name="first_name" placeholder="Name">
      
    </div>
    <div class="form-group">
      <label class="form-label">Last_name</label>
      <input type="text" class="form-control" name="last_name" placeholder="Surname">
    </div>
    <div class="form-group">
      <label class="form-label">Email</label>
      <input type="text" class="form-control" name="email" placeholder="Email">

    </div>
    <div class="form-group">
      <label class="form-label">Birthdate</label>
      <input type="date" class="form-control" name="birthdate" placeholder="Age">
    </div>
    <div class="form-group">
      <label class="form-label">Gender</label>
      <div class="form-check">
        <label class="form-check-label">
<input class="form-check-input" type="radio" name="gender">Male
</label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
<input class="form-check-input" type="radio" name="gender">Female
</label>
      </div>
      <div class="form-check disabled">
        <label class="form-check-label">
<input class="form-check-input" type="radio" name="gender">Others
</label>
      </div>
    <div class="form-group">
      <label class="form-label">Joining date</label>
      <input type="date" class="form-control" name="joining_date" placeholder="joindate">
    </div>
    <div class="form-group">
      <label class="form-label">Qualifiaction</label>
      <input type="text" class="form-control" name="qualifiaction" placeholder="qualifiaction">
    </div>
    <div class="form-group">
      <label class="form-label">Specialization</label>
      <input type="text" class="form-control" name="specialization" placeholder="specialization">
    </div>
    <div class="form-group">
      <label class="form-label">Experience</label>
      <input type="text" class="form-control" name="experience" placeholder="experince">
    </div>
    <div class="form-group">
      <label class="form-label">Select</label>
      <select class="form-control" name="validation-select">
<option value>Select Departmnet...</option>
<optgroup label="Department">
<option value="pitons">OPD</option>
<option value="cams">ICU</option>
<option value="nuts">laboratry</option>
<option value="bolts">WARD</option>
<option value="stoppers">laboratry</option>
</optgroup>

</select>
    </div>

    <div class="form-group">
      <label class="form-label">Address</label>
      <textarea class="form-control" name="Address"></textarea>
    </div>
    <div class="form-group">
      <label class="form-label">photo</label>
      <div>
        <input type="file" class="validation-file" name="image">
      </div>
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>

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
  									'first_name': {
  										required: true,
  										minlength: 6,
  										maxlength: 20
  									},
  									'last_name': {
  										required: true,
  										minlength: 3,
  										maxlength: 20,
  									},
  									'birthdate': {
  										required: true
  									},
  									'gender': {
  										required: true,

  									},
  									'validation-select': {
  										required: true
  									},
  									'validation-multiselect': {
  										required: true,
  										minlength: 2
  									},
  									'address': {
  										required: true
  									},
  									'validation-select2-multi': {
  										required: true,
  										minlength: 2
  									},
  									'qualifiaction': {
  										required: true
  									},
  									'validation-file': {
  										required: true
  									},
  									'gender': {
  										required: true
  									},
  									'experience': {
  										required: true
  									},
                    'specialization': {
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
@endsection
