@extends('hospital.layout.design')
@section('content')
  <div class="d-table-cell align-middle">
<div class="card-body">
  <div class="text-center mt-4">
    <h3 class="h2">ADD UPCOMING EVENT </h3>
  </div>
  <form id="validation-form" method="post" action="{{ route('ho-events.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="form-label">Event Name</label>
      <input type="text" class="form-control" name="event_name" id="event_name" required>
    </div>
    <div class="form-group">
      <label class="form-label">Event type</label>
      <input type="text" class="form-control" name="event_type" id="event_type" required>
    </div>
    <div class="form-group">
      <label class="form-label">Event date</label>
      <input type="date" class="form-control" name="event_date" id="event_date" required>
    </div>
    <div class="form-group">
      <label class="form-label">Event banner</label>
      <div>
        <input type="file" class="validation-file" name="banner" id="banner" required>
      </div>
    </div>
      <input type="submit" class="btn btn-primary" value="Submit" />
  </form>

</div>
</div>
@endsection
