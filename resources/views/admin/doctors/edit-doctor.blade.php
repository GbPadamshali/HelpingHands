@extends('admin.layout.design')
@section('content')
<div class="card-body">
  <form id="validation-form" method="post" enctype="multipart/form-data" action="{{ route('doctors.store') }}"> {{ csrf_field() }}
    <div class="form-group">
      <label class="form-label">First name</label>
      <input type="text" class="form-control" name="first_name" id="first name" required>

    </div>
    <div class="form-group">
      <label class="form-label">Last name</label>
      <input type="text" class="form-control" name="last_name" id="last name" required>
    </div>

    <div class="form-group">
      <label class="form-label">Qualifiaction</label>
      <input type="text" class="form-control" name="qualifiaction" id="qualifiaction" required>
    </div>
    <div class="form-group">
      <label class="form-label">Specialization</label>
      <input type="text" class="form-control" name="specialization" id="specialization"required>
    </div>
    <div class="form-group">
      <label class="form-label">Experience</label>
      <input type="text" class="form-control" name="experience" id="experince" required>
    </div>
    <div class="form-group">
      <label class="form-label">Select</label>
      <select class="form-control" name="department id"  required>
        <option value>Select Departmnet...</option>
        {{-- <optgroup label="Department"> --}}
        <option value="OPD" id="1">OPD</option>
        <option value="ICU" id="2">ICU</option>
        <option value="Laboratry" id="3">Laboratry</option>
        <option value="WARD" id="4">WARD</option>
        <option value="Laboratry" id="5">Laboratry</option>
        {{-- </optgroup> --}}
      </select>
    </div>
    <div class="form-group">
      <label class="form-label">Address</label>
      <textarea class="form-control" name="address" required   id="address"></textarea>
    </div>
    <div class="form-group">
      <label class="form-label">Image</label>
      <div>
        <input type="file" class="validation-file" name="image"  id="image" required>
      </div>
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
