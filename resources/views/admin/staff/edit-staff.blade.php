@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ url('#') }}" id="loginForm" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>EDIT STAFF</u></h3>
                          </di>
                            <div class="row">
                              <div class="form-group col-lg-6">
                                  <label>ID</label>
                                  <input class="form-control"name="id" id="id" required>
                              </div>
                                <div class="form-group col-lg-6">
                                    <label>First Name</label>
                                    <input class="form-control"first name="first name" id="first name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Last Name</label>
                                    <input class="form-control"last name="last name" id="last name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email</label>
                                    <input class="form-control" name="email" id="email" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>MOBILE</label>
                                    <input class="form-control" name="mobile" id="mobile" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>STAFF ROLE</label>
                                    <input class="form-control" name="staff role" id="staff role" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Birthdate</label>
                                    <input class="form-control" name="birthdate" id="birthdate" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Gender</label>
                                    <input class="form-control" name="gender" genderid="" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>MARITAL STATUS</label>
                                    <input class="form-control" name="marital status" id="marital status" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Qualification</label>
                                    <input class="form-control"name="qualifiaction" id="qualification" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Experience</label>
                                    <input class="form-control"name="experience" id="experience" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Address</label>
                                    <input class="form-control"name="address" id="address" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Joining Date</label>
                                    <input class="form-control"name="Joining date" id="joining date" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>LEFT DATE</label>
                                    <input class="form-control"name="left date" id="left date" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>status</label>
                                    <input class="form-control"name="status" id="status" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">EDIT STAFF</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
