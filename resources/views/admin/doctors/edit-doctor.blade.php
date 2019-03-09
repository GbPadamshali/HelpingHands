@extends('hospital.layout.design')
@section('content')
<<<<<<< HEAD
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
                                    <input class="form-control"name="email" id="email" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Birthdate</label>
                                    <input class="form-control"name="birthdate" id="birthdate" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Gender</label>
                                    <input class="form-control"name="gender" genderid="" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Joining Date</label>
                                    <input class="form-control"name="Joining date" id="joining date" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Qualification</label>
                                    <input class="form-control"name="qualifiaction" id="qualification" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Specializtion</label>
                                    <input class="form-control"name="specialization" id="specialization" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Experience</label>
                                    <input class="form-control"name="experience" id="experience" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Address</label>
                                    <input class="form-control"name="address" id="address" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">EDIT DOCTOR</button>
                            </div>
                        </form>
                    </div>
                </div>
=======
<div class="card-body">
  <form id="validation-form" method="post" enctype="multipart/form-data" action="{{ route('doctors.store') }}"> {{ csrf_field() }}

    <div class="form-group">
      <label class="form-label">First name</label>
      <input type="text" class="form-control" name="first_name" id="first name" required>

    </div>
    <div class="form-group">
      <label class="form-label">Last name</label>
      <input type="text" class="form-control" name="last_name" id="last name" required>
    </div>

    <div class="form-group">
      <label class="form-label">Qualifiaction</label>
      <input type="text" class="form-control" name="qualifiaction" id="qualifiaction" required>
    </div>
    <div class="form-group">
      <label class="form-label">Specialization</label>
      <input type="text" class="form-control" name="specialization" id="specialization"required>
    </div>
    <div class="form-group">
      <label class="form-label">Experience</label>
      <input type="text" class="form-control" name="experience" id="experince" required>
    </div>
    <div class="form-group">
      <label class="form-label">Select</label>
      <select class="form-control" name="department id"  required>
        <option value>Select Departmnet...</option>
        {{-- <optgroup label="Department"> --}}
        <option value="OPD" id="1">OPD</option>
        <option value="ICU" id="2">ICU</option>
        <option value="Laboratry" id="3">Laboratry</option>
        <option value="WARD" id="4">WARD</option>
        <option value="Laboratry" id="5">Laboratry</option>
        {{-- </optgroup> --}}

      </select>
    </div>

    <div class="form-group">
      <label class="form-label">Address</label>
      <textarea class="form-control" name="address" required   id="address"></textarea>
    </div>
    <div class="form-group">
      <label class="form-label">Image</label>
      <div>
        <input type="file" class="validation-file" name="image"  id="image" required>
>>>>>>> c4c693d835d555f7989ce69b156793afa5a88406
      </div>
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
@endsection
