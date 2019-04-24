@extends('hospital.layout.design')
@section('content')
  <div class="row">
    <div class="content-error">
      <div class="hpanel" style=" margin-left: 20px;margin-Top:20px;">
        <h3 class="h2">EDIT UPCOMING EVENT </h3>
      </div>
      <div class="panel-body">
        <form id="validation-form" action="{{ route('ho-events.update', $event->id) }}" method="post" enctype="multipart/form-data" >
          {{ csrf_field() }}
          <div class="row">
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Event Name</label>
              <input type="text" class="form-control" name="event_name" id="event_name" value="{{ $event->event_name }}" required>
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Event type</label>
              <input type="text" class="form-control" name="event_type" id="event_type" value="{{ $event->type }}" required>
            </div>
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Event date</label>
              <input type="date" class="form-control" name="event_date" id="event_date" value="{{ $event->date }}" required>
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Event Banner</label>
              <div>
                <input type="file" class="validation-file" name="event_banner"  id="event_banner" value="{{ $event->banner_name }}">
              </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Submit" style=" margin-left: 500px; margin-bottom:20px;" />
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
