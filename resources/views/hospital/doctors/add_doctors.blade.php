@extends('hospital.layout.design')
@section('content')
  <div class="row">
    <div class="content-error">
      <div class="hpanel" style=" margin-left: 20px;margin-Top:20px;">
        <h1 class="h2">ADD DOCTOR </h1>
      </div>
      <div class="panel-body">
        <form  id="validation-form" method="post" enctype="multipart/form-data" align="left" >
          <div class="row">
          <div class="form-group col-lg-5" style=" margin-left: 20px;">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" id="first name" required>
          </div>
            <div class="form-group col-lg-5" >
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last name" required>
          </div>
          <div class="form-group col-lg-10" style=" margin-left: 20px;">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" required>
         </div>
         <div class="form-group col-lg-5" style=" margin-left: 20px;">
           <label class="form-label">Birthdate</label>
           <input type="date" class="form-control" name="birthdate" id="age" required>
        </div>
        <div class="form-group col-lg-5">
          <label class="form-label">Joining Date</label>
          <input type="date" class="form-control" name="joining_date" id="joining date" required>
        </div>
        <div class="form-group col-lg-10" style=" margin-left: 20px;">
          <label class="form-label">Gender</label>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="gender" id="1" required>Male
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="gender" id="2" required>Female
              </label>
            </div>
            <div class="form-check disabled">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="gender" id="3" required>Other
              </label>
            </div>
         </div>
         <div class="form-group col-lg-5" style=" margin-left: 20px;">
           <label class="form-label">Qualifiaction</label>
           <input type="text" class="form-control" name="qualifiaction" id="qualifiaction" required>
        </div>
        <div class="form-group col-lg-5">
          <label class="form-label">Specialization</label>
          <input type="text" class="form-control" name="specialization" id="specialization"required>
        </div>
        <div class="form-group col-lg-5" style=" margin-left: 20px;">
          <label class="form-label">Experience</label>
          <input type="text" class="form-control" name="experience" id="experince" required>
        </div>
        <div class="form-group col-lg-5">
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
       <div class="form-group col-lg-10" style=" margin-left: 20px;">
         <label class="form-label">Address</label>
         <textarea class="form-control" name="address" required   id="address"></textarea>
      </div>
      <div class="form-group col-lg-12" style=" margin-left: 20px;">
        <label class="form-label">Image</label>
          <div>
            <input type="file" class="validation-file" name="image" accept=".jpg,.png,.gif"  id="image" required>
          </div>
       </div>
         <input type="submit" value="Submit" class="btn btn-primary" style=" margin-left: 500px; margin-bottom:20px;" />
       </div>
      </form>
    </div>
  </div>
</div>
@endsection
