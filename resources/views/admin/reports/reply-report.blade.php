@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ url('#') }}" id="loginForm" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>REPLY REPORT</u></h3>
                          </di>
                            <div class="row">
                              <div class="form-group col-lg-6">
                                  <label>User Id</label>
                                  <input class="form-control"report name="user id" id="user id" required>
                              </div>
                                <div class="form-group col-lg-6">
                                    <label>Report Message</label>
                                    <input class="form-control" name="report message" id="report message" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Reply Message</label>
                                    <input class="form-control" name="reply message" id="reply message" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">REPLY REPORT</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
