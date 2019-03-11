@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ route('ad-doctors.store') }}" id="loginForm" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>ADD DOCTOR</u></h3>
                          </di>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>First Name</label>
                                    <input type="text" class="form-control"first name="first name" id="first name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control"last name="last name" id="last name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Birthdate</label>
                                    <input type="date" class="form-control" name="birthdate" id="birthdate" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Gender</label><br>
                                    <input type="radio" name="gender" value="1" required>Male <br>
                                    <input type="radio" name="gender" value="2" required>Female <br>
                                    <input type="radio" name="gender" value="3" required>Other <br>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Joining Date</label>
                                    <input type="date" class="form-control"first name="joining_date" id="joining date" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Qualification</label>
                                    <input type="text" class="form-control"first name="qualifiaction" id="qualification" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Specializtion</label>
                                    <input type="text" class="form-control"first name="specialization" id="specialization" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Experience</label>
                                    <input type="text" class="form-control"first name="experience" id="experience" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Address</label>
                                    <input type="textarea" class="form-control"first name="address" id="address" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">ADD DOCTOR</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
