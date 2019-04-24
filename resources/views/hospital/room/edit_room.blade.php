@extends('hospital.layout.design')
@section('content')
  <div class="row">
    <div class="content-error">
      <div class="hpanel" style=" margin-left: 20px;margin-Top:20px;">
        <h3 class="h2">EDIT ROOM </h3>
      </div>
      <div class="panel-body">
        <form id="validation-form" action="{{ route('ho-rooms.update', $room->id) }}" method="post" enctype="multipart/form-data" >
          {{ csrf_field() }}
          <div class="row">
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Patient id</label>
              <input type="text" class="form-control" name="patient_id" id="patient_id" value="{{ $room->patient_id }}" disabled>
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Patient name</label>
              <input type="text" class="form-control" name="patient_name" id="patient_name" required value="{{ $room->patient_name }}">
            </div>
            <div class="form-group col-lg-10" style=" margin-left: 20px;">
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
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Allocation from</label>
              <input type="datetime-local" class="form-control" name="allocation_from" id="allocation_from" value="{{ $room->allocation_from }}" required>
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Allocation to</label>
              <input type="datetime-local" class="form-control" name="allocation_to" id="allocation_to" value="{{ $room->allocation_to }}">
            </div>
            <input type="submit" class="btn btn-primary" value="Submit" style=" margin-left: 550px; margin-bottom:20px;" />
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
