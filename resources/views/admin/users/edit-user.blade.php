@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ url('#') }}" id="loginForm" method="post"> {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>Edit User</u></h3>
                          </di>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Name</label>
                                    <input class="form-control"name="name" id="name" value="Katrina Kaif" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email</label>
                                    <input class="form-control"name="email" id="email" required value="katrinapadamshali@gmail.com">
                                </div>
                                <div class="form-group   col-lg-6">
                                    <label>Mobile</label>
                                    <input class="form-control" name="mobile" id="mobile" required value="9513572584">
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">EDIT-USER</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
