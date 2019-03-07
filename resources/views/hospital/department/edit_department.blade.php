@extends('hospital.layout.design')
@section('content')
<div class="card-body">
  <form id="validation-form" method="post" action='{{ route('departments.update', $department->id) }}'> {{ csrf_field() }}

    <div class="form-group">
      <label class="form-label">Department</label>
      <input type="text" class="form-control" name="department" placeholder="Department" value="{{ $department->department }}">
      {{-- <small class="form-text text-muted">Example block-level help text here.</small> --}}
    </div>
    <div class="form-group">
      <label class="form-label">Description</label>
      <input type="textarea" class="form-control" name="description" placeholder="Description" value="{{ $department->description }}">
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
                      'department': {
                        required: true,
                      },
                      'description': {
                        required: true
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
