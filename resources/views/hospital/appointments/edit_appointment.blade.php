@extends('hospital.layout.design')
@section('content')

  <div class="d-table-cell align-middle">

    <div class="text-center mt-4">
      <h3 class="h2">EDIT APPOINTMENT </h3>

    </div>
<div class="card-body">
<center>
  <form id="validation-form" method="post" action="{{ route('ho-appointments.update', $appointment->id) }}" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <div class="form-group">
      <label class="form-label">Appointment id</label>
      <input type="text" class="form-control" name="appointment_id" id="appointment_id" value="{{ $appointment->appointment_id }}" required>
    </div>
    <div class="form-group">
      <label class="form-label">Patient id</label>
      <input type="text" class="form-control" name="patient_id" id="patient_id" value="{{ $appointment->patient_id }}" required>
    </div>
    <div class="form-group">
      <label class="form-label">Patient name</label>
      <input type="text" class="form-control" name="patient_name" id="patient_name" value="{{ $appointment->patient_name }}" required>
    </div>
    <div class="form-group">
      <label class="form-label">Visiting Doctor</label>
      <input type="text" class="form-control" name="visiting_doctor" id="visiting_doctor" value="{{ $appointment->visiting_doctor }}" required>
    </div>
    <div class="form-group">
      <label class="form-label">Visiting Date</label>
      <input type="date" class="form-control" name="visiting_date" id="visiting_date" value="{{ $appointment->visiting_date }}" required>
    </div>
    <div class="form-group">
      <label class="form-label">Visiting time from</label>
      <input type="time" class="form-control" name="visiting_from" id="visiting_from" value="{{ $appointment->visiting_from }}" required>
    </div>
    <div class="form-group">
      <label class="form-label">Visiting time to</label>
      <input type="time" class="form-control" name="visiting_to" id="visiting_to" value="{{ $appointment->visiting_to }}" required>
    </div>
    <div class="form-group">
      <label class="form-label">Diseases</label>
      <input type="text" class="form-control" name="diseases" id="diseases" value="{{ $appointment->diseases }}">
    </div>
    <div class="form-group">
      <label class="form-label">Remark</label>
      <input type="text" class="form-control" name="remark" id="remark" value="{{ $appointment->remark }}">
    </div>
    </div>
      <input type="submit" class="btn btn-primary" value="Submit" />
  </form>
</div>
</div>
@endsection
