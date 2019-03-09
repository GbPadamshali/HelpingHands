@extends('hospital.layout.design')
@section('content')
  <div class="d-table-cell align-middle">

    <div class="text-center mt-4">
      <h1 class="h2">ADD DOCTOR </h1>

    </div>
<div class="card-body">
  <form id="validation-form" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label class="form-label">First name</label>
      <input type="text" class="form-control" name="first_name" id="first name" required>

    </div>
    <div class="form-group">
      <label class="form-label">Last name</label>
      <input type="text" class="form-control" name="last_name" id="last name" required>
    </div>
    <div class="form-group">
      <label class="form-label">Email</label>
      <input type="text" class="form-control" name="email" id="email" required>

    </div>
    <div class="form-group">
      <label class="form-label">Birthdate</label>
      <input type="date" class="form-control" name="birthdate" id="age" required>
    </div>
    <div class="form-group">
      <label class="form-label">Gender</label>
      <div class="form-check">
        <label class="form-check-label">
<input class="form-check-input" type="radio" name="gender" id="1" required>Male
</label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
<input class="form-check-input" type="radio" name="gender" id="2" required>Female
</label>
      </div>
      <div class="form-check disabled">
        <label class="form-check-label">
<input class="form-check-input" type="radio" name="gender" id="3" required>Other
</label>
      </div>
      </div>
    <div class="form-group">
      <label class="form-label">Joining date</label>
      <input type="date" class="form-control" name="joining_date" id="joining date" required>
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
</div>
@endsection
