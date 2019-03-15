@extends('hospital.layout.design')
@section('content')
  <div class="d-table-cell align-middle">

    <div class="text-center mt-4">
      <h1 class="h2">EDIT REPORT </h1>

    </div>
<div class="card-body">
  <form id="validation-form" method="post" enctype="multipart/form-data" >

    <div class="form-group">
      <label class="form-label">Report Name</label>
      <input type="text" class="form-control" name="report_name" id="report name" required>
  </div>
  <div class="form-group">
    <label class="form-label">Report Types</label>
    <select class="form-control" name="report types"  required>
      <option value>Select types...</option>
      {{-- <optgroup label="Department"> --}}
      <option value="Blood Report" id="1">Blood Report</option>)
      <option value="X-RAY Report" id="2">X-RAY Report</option>
      <option value="ECG Report" id="3">ECG Report</option>
      <option value="Body profile" id="4">Body profile</option>
      <option value="RBS Report" id="5">RBS Report</option>
      <option value=" TSH Report" id="6"> TSH Report</option>
      <option value="CBC/SGPT Report" id="7">CBC/SGPT Report</option>
      <option value="Sodium/Potesium Report" id="8">Sodium/Potesium Report</option>
      <option value="Fever Profil" id="9">Fever Profil</option>
      <option value=" Dariya Profile" id="10"> Dariya Profile</option>
      <option value="Dangue Profile" id="11">Dangue Profile</option>
      <option value="Stool Examination" id="12">Stool Examination</option>
      <option value="Urin Examination" id="13">Urin Examination</option>
      <option value="USG Report" id="14">USG Report</option>
      <option value="Other" id="15">Other</option>
      {{-- </optgroup> --}}

    </select>
  </div>

    <div class="form-group">
      <label class="form-label">Supervisor Name</label>
      <input type="text" class="form-control" name="supervisor" id="supervisor" required>
    </div>
    <div class="form-group">

    <div class="form-group">
      <label class="form-label">Report File Upload</label>
      <div>
        <input type="file" class="validation-file" name="file"  id="file" required>
      </div>
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
</div>
@endsection
