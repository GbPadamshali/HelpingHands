@extends('hospital.layout.design')
@section('content')

  <div class="d-table-cell align-middle">

    <div class="text-center mt-4">
      <h3 class="h2">EDIT APPOINTMENT </h3>

    </div>
<div class="card-body">
  <form id="validation-form" method="post" enctype="multipart/form-data" >


    <div class="form-group">
      <label class="form-label">Patient Name</label>
      <input type="text" class="form-control" name="patient_name" id="patient_name" required>
  </div>
   <div class="form-group">
      <label class="form-label"> Visiting Doctor</label>
      <input type="text" class="form-control" name="visiting_doctor" id="visiting_doctor" required>
  </div>

    <div class="form-group">
      <label class="form-label">Visiting Time From</label>
      <input type="datetime-local" class="form-control" name="visiting_time_from" id="visiting_time_from" required>
    </div>
    <div class="form-group">
      <label class="form-label">Visiting Time To</label>
      <input type="datetime-local" class="form-control" name="visiting_time_to" id="visiting_time_to" required>
    </div>
    <div class="form-group">
      <label class="form-label">Disease</label>
      <input type="text" class="form-control" name="disease" id="disease" required>
    </div>
    <div class="form-group">
      <label class="form-label">Remark</label>
      <input type="text" class="form-control" name="remark" id="remark" >
    </div>


    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
</div>
@endsection
