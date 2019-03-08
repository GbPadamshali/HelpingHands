@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ url('#') }}" id="loginForm" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>EDIT DOCTOR</u></h3>
                          </di>
                            <div class="row">
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
                                    <input class="form-control" name="email" id="email" required disabled>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Birthdate</label>
                                    <input class="form-control" name="birthdate" id="birthdate" required disabled>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Gender</label>
                                    <input class="form-control" name="gender" genderid="" required disabled>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Joining Date</label>
                                    <input class="form-control"first name="Joining date" id="joining date" required disabled>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Qualification</label>
                                    <input class="form-control"first name="qualifiaction" id="qualification" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Specializtion</label>
                                    <input class="form-control"first name="specialization" id="specialization" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Experience</label>
                                    <input class="form-control"first name="experience" id="experience" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Address</label>
                                    <input class="form-control"first name="address" id="address" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">EDIT DOCTOR</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
