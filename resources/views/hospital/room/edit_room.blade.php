@extends('hospital.layout.design')
@section('content')
<div class="d-table-cell align-middle">

  <div class="text-center mt-4">
    <h3 class="h2">EDIT ROOM </h3>

  </div>
<div class="card-body">
<form id="validation-form" method="post" enctype="multipart/form-data" >



  <div class="form-group">
    <label class="form-label">Patient name</label>
    <input type="text" class="form-control" name="patient_name" id="patient_name" required>
</div>


<div class="form-group">
  <label class="form-label">Room types</label>
  <select class="form-control" name="room_type" required>
    <option value>Select types...</option>
    {{-- <optgroup label="Department"> --}}
    <option value="Deluxe Room" id="1">Deluxe Room</option>)
    <option value="Semi-Deluxe Room" id="2">Semi-Deluxe Room</option>
    <option value="Isolation Room" id="3">Isolation Room</option>
    <option value="ICU" id="4">ICU</option>

    {{-- </optgroup> --}}

  </select>
</div>
   <div class="form-group">
    <label class="form-label">Allocate date</label>
    <input type="datetime-local" class="form-control" name="allocate_date" id="allocate_date" required>
  </div>
  <div class="form-group">
    <label class="form-label">Allocate up-to</label>
    <input type="datetime-local" class="form-control" name="allocate_up-to" id="allocate_up-to" required>
  </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
</div>
@endsection
