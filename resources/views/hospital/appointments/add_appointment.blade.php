@extends('hospital.layout.design')
@section('content')
  <div class="row">
    <div class="content-error">
      <div class="hpanel" style=" margin-left: 20px;margin-Top:20px;">
        <h3 class="h2">ADD APPOINTMENT </h3>
      </div>
      <div class="panel-body">
        <form id="validation-form" method="post" action="{{ route('ho-appointments.store') }}" enctype="multipart/form-data" >
          {{ csrf_field() }}
          <div class="row">
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Appointment id</label>
              <input type="text" class="form-control" name="appointment_id" id="appointment_id" required>
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Patient id</label>
              <input type="text" class="form-control" name="patient_id" id="patient_id" required>
            </div>
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Patient Name</label>
              <input type="text" class="form-control" name="patient_name" id="patient_name" required>
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Visiting Doctor</label>
              <input type="text" class="form-control" name="visiting_doctor" id="visiting_doctor" required>
            </div>
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Visiting Date</label>
              <input type="date" class="form-control" name="visiting_date" id="visiting_date" required>
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Visiting time from</label>
              <input type="time" class="form-control" name="visiting_from" id="visiting_time_from" required>
            </div>
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Disease</label>
              <input type="text" class="form-control" name="diseases" id="diseases" required>
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Visiting time to</label>
              <input type="time" class="form-control" name="visiting_to" id="visiting_time_to" required>
            </div>
            <div class="form-group col-lg-10" style=" margin-left: 20px;">
              <label class="form-label">Remark</label>
              <input type="text" class="form-control" name="remark" id="remark" >
            </div>
            <input type="submit" class="btn btn-primary" value="Submit" style=" margin-left: 500px; margin-bottom:20px;" />
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
