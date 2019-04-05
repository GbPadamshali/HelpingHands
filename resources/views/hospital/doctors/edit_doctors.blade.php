@extends('hospital.layout.design')
@section('content')
  <div class="d-table-cell align-middle">

    <div class="text-center mt-4">
      <h1 class="h2">EDIT DOCTOR </h1>

    </div>
<div class="card-body">
  <form id="validation-form" method="post" enctype="multipart/form-data" action="{{ route('doctors.update', $doctor->id) }}"> {{ csrf_field() }}

    <div class="form-group">
      <label class="form-label">First Name</label>
      <input type="text" class="form-control" name="first_name" placeholder="Name" value="{{ $doctor->first_name }}">

    </div>
    <div class="form-group">
      <label class="form-label">Last Name</label>
      <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ $doctor->last_name }}">
    </div>
    <div class="form-group">
      <label class="form-label">Qualifiaction</label>
      <input type="text" class="form-control" name="qualifiaction" placeholder="qualifiaction" value="{{ $doctor->qualifiaction }}">
    </div>
    <div class="form-group">
      <label class="form-label">Specialization</label>
      <input type="text" class="form-control" name="specialization" placeholder="specialization" value="{{ $doctor->specialization }}">
    </div>
    <div class="form-group">
      <label class="form-label">Experience</label>
      <input type="text" class="form-control" name="experience" placeholder="experience" value="{{ $doctor->experience }}">
    </div>
    <div class="form-group">
      <label class="form-label">Select</label>
      <select class="form-control" name="department_id">
        <option value>Select Departmnet...</option>
        {{-- <optgroup label="Department"> --}}
        <option value="OPD">OPD</WARDoption>
        <option value="ICU">ICU</option>
        <option value="Laboratry">Laboratry</option>
        <option value="WARD">WARD</option>
        <option value="Laboratry">Laboratry</option>
      {{-- </optgroup> --}}

    </select>
    </div>

    <div class="form-group">
      <label class="form-label">Address</label>
      <textarea class="form-control" name="address">{{ $doctor->address }}</textarea>
    </div>
    <div class="form-group">
      <label class="form-label">Image</label>
      <div>
        <input type="file" class="validation-file form-control" name="image">
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
  									'validation-salary': {
  										required: true,

  									},
  									'department_id': {
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
  									'address': {
  										required: true
  									},
  									'validation-file': {
  										required: true
  									},
  									'gender': {
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
@endsection
