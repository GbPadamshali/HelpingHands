@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form id="loginForm" method="post" action="{{ route('ad-upcoming-events.update', $event->id) }}" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>ADD EVENT</u></h3>
                          </di>
                            <div class="row">
                              <div class="form-group col-lg-6">
                                  <label> Hospital ID</label>
                                  <input class="form-control" name="hospital_id" id="hospital_id" value="{{ $event->hospital_id }}" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label> Event Name</label>
                                    <input class="form-control" name="event_name" id="event_name" value="{{ $event->event_name }}" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Event type</label>
                                    <input class="form-control" name="event_type" id="event_type" value="{{ $event->event_type }}" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Event Date</label>
                                    <input type="date" class="form-control" name="event_date" id="event_date" value="{{ $event->event_date }}" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Event Banner</label>
                                    <input type="file" class="form-control" name="banner" id="banner" value="{{ $event->banner_name }}">
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">UPDATE EVENT</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
