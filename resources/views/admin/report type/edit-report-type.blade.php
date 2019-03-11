@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ url('#') }}" id="loginForm" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>EDIT REPORT TYPE</u></h3>
                          </di>
                            <div class="row">
                              <div class="form-group col-lg-6">
                                  <label>Report Name</label>
                                  <input class="form-control"report name="name" id="report name" required>
                              </div>
                                <div class="form-group col-lg-6">
                                    <label>Description</label>
                                    <input class="form-control" name="description" id="description" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">EDIT REPORT TYPE</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
