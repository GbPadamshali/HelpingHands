@extends('hospital.layout.design')
@section('content')
  <div class="d-table-cell align-middle">

<div class="card-body">
  <div class="text-left mt-4">
    <h3>ADD REPORT</h3>
  </div>
  <form id="validation-form" method="post" action="{{ route('ho-reports.store') }}" enctype="multipart/form-data" >
    {{ csrf_field() }}
    <div class="form-group">
      <label class="form-label">Patient ID</label>
      <input type="text" class="form-control" name="patient_id" id="patient_id"required>
    </div>
    <div class="form-group">
      <label class="form-label">Patient Name</label>
      <input type="text" class="form-control" name="patient_name" id="patient_name"required>
    </div>
    <div class="form-group">
      <label class="form-label">Report Name</label>
      <input type="text" class="form-control" name="report_name" id="report_name" required>
  </div>
  <div class="form-group">
    <label class="form-label">Report Type</label>
    <select class="form-control" name="report_type" required>
      <option value disabled selected>Select Type...</option>
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

    <div class="form-group">
      <label class="form-label">Issued On</label>
      <input type="date" class="form-control" name="issued_on" id="issued_on" required>
    </div>
    <div class="form-group">
      <label class="form-label">Supervisor Name</label>
      <input type="text" class="form-control" name="supervisor_name" id="supervisor_name" required>
    </div>

    <div class="form-group">
      <label class="form-label">Report file upload</label>
      <div>
        <input type="file" class="validation-file" name="file"  id="file" required>
      </div>
    </div>
      <input type="submit" value="Submit" class="btn btn-primary" />
  </form>

</div>
</div>
@endsection
