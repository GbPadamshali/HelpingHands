@extends('hospital.layout.design')
@section('content')
<div class="card-body">
  <form id="validation-form">

    <div class="form-group">
      <label class="form-label">Name</label>
      <input type="text" class="form-control" name="validation-name" placeholder="Name">
      <small class="form-text text-muted">Example block-level help text here.</small>
    </div>
    <div class="form-group">
      <label class="form-label">Surname</label>
      <input type="text" class="form-control" name="validation-surname" placeholder="Surname">
    </div>
    <div class="form-group">
      <label class="form-label">Email</label>
      <input type="text" class="form-control" name="validation-email" placeholder="Email">
      <small class="form-text text-muted">Example block-level help text here.</small>
    </div>
    <div class="form-group">
      <label class="form-label">Age</label>
      <input type="number" class="form-control" name="validation-age" placeholder="Age">
    </div>
    <div class="form-group">
      <label class="form-label">Join date</label>
      <input type="date" class="form-control" name="validation-joindate" placeholder="joindate">
    </div>
    <div class="form-group">
      <label class="form-label">Salary</label>
      <input type="text" class="form-control" name="validation-salary" placeholder="salary">
    </div>
    <div class="form-group">
      <label class="form-label">Select</label>
      <select class="form-control" name="validation-select">
<option value>Select Departmnet...</option>
<optgroup label="Department">
<option value="pitons">OPD</option>
<option value="cams">ICU</option>
<option value="nuts">HELP DESK</option>
<option value="bolts">WARD</option>
<option value="stoppers">laboratry</option>
</optgroup>

</select>
    </div>

    <div class="form-group">
      <label class="form-label">Address</label>
      <textarea class="form-control" name="validation-Address"></textarea>
    </div>
    <div class="form-group">
      <label class="form-label">File</label>
      <div>
        <input type="file" class="validation-file" name="validation-file">
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
  									'validation-email': {
  										required: true,
  										email: true
  									},
  									'validation-name': {
  										required: true,
  										minlength: 6,
  										maxlength: 20
  									},
  									'validation-surname': {
  										required: true,
  										minlength: 6,
  										maxlength: 20,
  									},
  									'validation-age': {
  										required: true
  									},
  									'validation-salary': {
  										required: true,

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
@endsection
