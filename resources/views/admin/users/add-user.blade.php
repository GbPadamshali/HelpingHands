@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ url('#') }}" id="loginForm" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>ADD USER</u></h3>
                          </di>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Name</label>
                                    <input class="form-control" name="name" id="name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email</label>
                                    <input class="form-control" name="email" id="email" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Mobile</label>
                                    <input class="form-control" name="mobile" id="mobile" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input class="form-control" name="password" id="password" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">ADD USER</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
