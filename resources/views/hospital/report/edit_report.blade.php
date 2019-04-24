@extends('hospital.layout.design')
@section('content')
  <div class="row">
    <div class="content-error">
      <div class="hpanel" style=" margin-left: 20px;margin-Top:20px;">
        <h1 class="h2">EDIT REPORT</h1>
      </div>
      <div class="panel-body">
        <form id="validation-form" method="post" action="{{ route('ho-reports.update', $report->id) }}" enctype="multipart/form-data" >
          {{ csrf_field() }}
          <div class="row">
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Patient ID</label>
              <input type="text" class="form-control" name="patient_id" value="{{ $report->patient_id }}" disabled required>
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Patient Name</label>
              <input type="text" class="form-control" name="patient_name" value="{{ $report->patient_name }}" disabled required>
            </div>
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Report Name</label>
              <input type="text" class="form-control" name="report_name" value="{{ $report->report_name }}" required>
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Report Type</label>
              <select class="form-control" name="report_type"  required>
                <option disabled selected>Select Type...</option>
                {{-- <optgroup label="Department"> --}}
                <option value="Blood Report">Blood Report</option>)
                <option value="X-RAY Report">X-RAY Report</option>
                <option value="ECG Report">ECG Report</option>
                <option value="Body profile">Body profile</option>
                <option value="RBS Report">RBS Report</option>
                <option value="TSH Report"> TSH Report</option>
                <option value="CBC/SGPT Report">CBC/SGPT Report</option>
                <option value="Sodium/Potesium Report">Sodium/Potesium Report</option>
                <option value="Fever Profil">Fever Profil</option>
                <option value="Dariya Profile"> Dariya Profile</option>
                <option value="Dangue Profile">Dangue Profile</option>
                <option value="Stool Examination">Stool Examination</option>
                <option value="Urin Examination">Urin Examination</option>
                <option value="USG Report">USG Report</option>
                <option value="Other">Other</option>
                {{-- </optgroup> --}}
              </select>
            </div>
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Supervisor Name</label>
              <input type="text" class="form-control" name="supervisor_name" id="supervisor_name" value="{{ $report->supervisor_name }}" required>
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Report File Upload</label>
              <div>
                <input type="file" class="validation-file" name="file"  id="file" value="{{ $report->file_name }}">
              </div>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary" style=" margin-left: 500px; margin-bottom:20px;" />
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
