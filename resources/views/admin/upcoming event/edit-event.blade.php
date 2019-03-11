@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ url('#') }}" id="loginForm" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>EDIT EVENT</u></h3>
                          </di>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label> Event Name</label>
                                    <input class="form-control" name="event name" id="event name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Event type</label>
                                    <input class="form-control" name="event type" id="event type" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Event Date</label>
                                    <input class="form-control" name="event date" id="event date" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Event Banner</label>
                                    <input class="form-control" name="event banner" id="event banner" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">EDIT EVENT</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
