@extends('hospital.layout.design')
@section('content')
  <div class="d-table-cell align-middle">

<div class="card-body">
  <div class="text-center mt-4">
    <h3 class="h2">ADD ROOM </h3>
  </div>
  <form id="validation-form" method="post" action="{{ route('ho-rooms.store') }}" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <div class="form-group">
      <label class="form-label">Patient id</label>
      <input type="text" class="form-control" name="patient_id" id="patient_id"required>
    </div>
    <div class="form-group">
      <label class="form-label">Patient name</label>
      <input type="text" class="form-control" name="patient_name" id="patient_name" required>
    </div>
    <div class="form-group">
      <label class="form-label">Room no</label>
      <input type="text" class="form-control" name="room_no" id="room_no"required>
    </div>
   <div class="form-group">
    <label class="form-label">Room types</label>
    <select class="form-control" name="room_type" required>
      <option selected disabled>Select types...</option>
      {{-- <optgroup label="Department"> --}}
      <option value="Deluxe Room">Deluxe Room</option>)
      <option value="Semi-Deluxe Room">Semi-Deluxe Room</option>
      <option value="Isolation Room">Isolation Room</option>
      <option value="ICU">ICU</option>

      {{-- </optgroup> --}}

    </select>
  </div>
     <div class="form-group">
      <label class="form-label">Allocation From</label>
      <input type="datetime-local" class="form-control" name="allocation_from" id="allocation_from" required>
    </div>
    <div class="form-group">
      <label class="form-label">Allocation To</label>
      <input type="datetime-local" class="form-control" name="allocation_to" id="allocation_to">
    </div>
    <input type="submit" class="btn btn-primary" value="Submit" />
  </form>

</div>
</div>
@endsection
