@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ route('ad-doctors.update', $doctor->id) }}" id="loginForm" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>EDIT DOCTOR</u></h3>
                          </di>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>First Name</label>
                                    <input class="form-control"first name="first name" id="first name" value="{{ $doctor->first_name }}" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Last Name</label>
                                    <input class="form-control"last name="last name" id="last name" required value="{{ $doctor->last_name }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email</label>
                                    <input class="form-control" name="email" id="email" required disabled value="{{ $doctor->email }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Birthdate</label>
                                    <input class="form-control" name="birthdate" id="birthdate" required disabled value="{{ $doctor->birthdate }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Gender</label>
                                    <input class="form-control" name="gender" genderid="" required disabled value="{{ $doctor->gender }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Joining Date</label>
                                    <input class="form-control" name="Joining date" id="joining date" required disabled value="{{ $doctor->joining_date }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Qualification</label>
                                    <input class="form-control" name="qualifiaction" id="qualification" required value="{{ $doctor->qualifiaction }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Specializtion</label>
                                    <input class="form-control" name="specialization" id="specialization" required value="{{ $doctor->specialization }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Experience</label>
                                    <input class="form-control" name="experience" id="experience" required value="{{ $doctor->experience }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Address</label>
                                    <input class="form-control" name="address" id="address" required value="{{ $doctor->address }}">
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-success loginbtn" value="EDIT DOCTOR" />
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
