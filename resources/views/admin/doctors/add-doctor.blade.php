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
                                    <input type="text" class="form-control"first name="first_name" id="first_name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control"last name="last_name" id="last_name" required>
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
                                    <input type="radio" name="gender" value="1" required> <b>Male</b> <br>
                                    <input type="radio" name="gender" value="2" required> <b>Female</b> <br>
                                    <input type="radio" name="gender" value="3" required> <b>Other</b> <br>
                                </div>
                                {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="i-checks pull-left">
                                        <label>
                                          <input type="radio" value="option1" name="a"> <i></i> Option one
                                        </label>
                                    </div>
                                </div> --}}
                                <div class="form-group col-lg-6">
                                    <label>Joining Date</label>
                                    <input type="date" class="form-control"first name="joining_date" id="joining_date" required>
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
                                <div class="form-group col-lg-6">
                                {{-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> --}}
                                <label>Doctor Picture</label>
                                  <div class="file-upload-inner file-upload-inner-right ts-forms">
                                    <div class="input append-small-btn">
                                        <div class="file-button">Browse
                                          <input type="file" onchange="document.getElementById('append-small-btn').value = this.value;" name="image">
                                        </div>
                                        <input type="text" id="append-small-btn" placeholder="no file selected">
                                      </div>
                                    </div>
                                {{-- </div> --}}
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">ADD DOCTOR</button>
                            </div><br>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
