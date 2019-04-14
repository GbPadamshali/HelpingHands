@extends('hospital.layout.design')
@section('content')
  <div class="row">
    <div class="content-error">
      <div class="hpanel" style=" margin-left: 20px;margin-Top:20px;">
        <h3 class="h2">EDIT APPOINTMENT </h3>
      </div>
      <div class="panel-body">
        <form id="validation-form" method="post" action="{{ route('ho-appointments.update', $appointment->id) }}" enctype="multipart/form-data" >
          {{ csrf_field() }}
          <div class="row">
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Appointment id</label>
              <input type="text" class="form-control" name="appointment_id" id="appointment_id" value="{{ $appointment->appointment_id }}" required>
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Patient id</label>
              <input type="text" class="form-control" name="patient_id" id="patient_id" value="{{ $appointment->patient_id }}" required>
            </div>
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Patient name</label>
              <input type="text" class="form-control" name="patient_name" id="patient_name" value="{{ $appointment->patient_name }}" required>
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Visiting Doctor</label>
              <input type="text" class="form-control" name="visiting_doctor" id="visiting_doctor" value="{{ $appointment->visiting_doctor }}" required>
            </div>
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Visiting Date</label>
              <input type="date" class="form-control" name="visiting_date" id="visiting_date" value="{{ $appointment->visiting_date }}" required>
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Visiting time from</label>
              <input type="time" class="form-control" name="visiting_from" id="visiting_from" value="{{ $appointment->visiting_from }}" required>
            </div>
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Diseases</label>
              <input type="text" class="form-control" name="diseases" id="diseases" value="{{ $appointment->diseases }}">
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Visiting time to</label>
              <input type="time" class="form-control" name="visiting_to" id="visiting_to" value="{{ $appointment->visiting_to }}" required>
            </div>
            <div class="form-group col-lg-10" style=" margin-left: 20px;">
              <label class="form-label">Remark</label>
              <input type="text" class="form-control" name="remark" id="remark" value="{{ $appointment->remark }}">
            </div>
            <input type="submit" class="btn btn-primary" value="Submit"  style=" margin-left: 500px; margin-bottom:20px;" />
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
