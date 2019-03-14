@extends('hospital.layout.design')
@section('content')

  <div class="d-table-cell align-middle">

    <div class="text-center mt-4">
      <h3 class="h2">EDIT UPCOMING EVENT </h3>

    </div>
<div class="card-body">
  <form id="validation-form" method="post" enctype="multipart/form-data" >

    <div class="form-group">
      <label class="form-label">Event Name</label>
      <input type="text" class="form-control" name="event_name" id="event_name"required>
    </div>
    <div class="form-group">
      <label class="form-label">Event type</label>
      <input type="text" class="form-control" name="event_type" id="event_type"required>
    </div>
    <div class="form-group">
      <label class="form-label">Event date</label>
      <input type="date" class="form-control" name="event_date" id="event_date" required>
    </div>
    <div class="form-group">
      <label class="form-label">Event banner</label>
      <div>
        <input type="file" class="validation-file" name="event_banner"  id="event_banner" required>
      </div>
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
</div>
@endsection