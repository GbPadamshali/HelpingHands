@extends('hospital.layout.design')
@section('content')
  <div class="d-table-cell align-middle">

    <div class="text-center mt-4">
      <h1 class="h2">EDIT X-RAY TECHNICIAN </h1>

    </div>
<div class="card-body">
  <form id="validation-form" method="post" enctype="multipart/form-data" >

    <div class="form-group">
      <label class="form-label">First name</label>
      <input type="text" class="form-control" name="first_name" id="first name" required>

    </div>
    <div class="form-group">
      <label class="form-label">Last name</label>
      <input type="text" class="form-control" name="last_name" id="last name" required>
    </div>

    <div class="form-group">
      <label class="form-label">Address</label>
      <textarea class="form-control" name="address" required   id="address"></textarea>
    </div>


    <div class="form-group">
      <label class="form-label">Qualifiaction</label>
      <input type="text" class="form-control" name="qualifiaction" id="qualifiaction" required>
    </div>
    <div class="form-group">

    <div class="form-group">
      <label class="form-label">Experience</label>
      <input type="text" class="form-control" name="experience" id="experince" required>
    </div>
  {{--   <div class="form-group">
      <label class="form-label">Select</label>
      <select class="form-control" name="department id"  required>
        <option value>Select Departmnet...</option>
        {{-- <optgroup label="Department"> --}}
    {{--    <option value="OPD" id="1">OPD</option>
        <option value="ICU" id="2">ICU</option>
        <option value="Laboratry" id="3">Laboratry</option>
        <option value="WARD" id="4">WARD</option>
        <option value="Laboratry" id="5">Laboratry</option> --}}
        {{-- </optgroup>

     </select>--}}
    </div>

    <div class="form-group">
      <label class="form-label">status</label>
      <textarea class="form-control" name="status" required   id="status"></textarea>
      <div class="form-group">
        <label class="form-label">Mobile</label>
        <input type="text" class="form-control" name="mobile" id="mobile" required>
      </div>
      <div class="form-group">
        <label class="form-label"> maritial_status
</label>
        <input type="text" class="form-control" name=" maritial_status
" id=" maritial_status
" required>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
</div>
@endsection
