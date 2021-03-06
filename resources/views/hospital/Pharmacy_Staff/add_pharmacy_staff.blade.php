@extends('hospital.layout.design')
@section('content')
  <div class="row">
    <div class="content-error">
    {{-- <div class="text-center mt-4">
      <h1 class="h2">ADD NURSES </h1>
    </div> --}}
      <div class="panel-body">
        <form id="validation-form" method="post" action="{{ route('ho-pharmacy-staff.store') }}" enctype="multipart/form-data" >
          {{ csrf_field() }}
          <input type="hidden" value="2" name="staff_role"/>
          <div class="row">
          <div class="form-group col-lg-5" style=" margin-left: 20px;margin-Top:20px;">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" required>
         </div>
         <div class="form-group col-lg-5" style=" margin-Top:20px;">
           <label class="form-label">Last Name</label>
           <input type="text" class="form-control" name="last_name" id="last_name" required>
         </div>
         <div class="form-group col-lg-10" style=" margin-left: 20px;">
           <label class="form-label">Email</label>
           <input type="email" class="form-control" name="email" id="email" required>
         </div>
         <div class="form-group col-lg-5" style=" margin-left: 20px;">
           <label class="form-label">Birthdate</label>
           <input type="date" class="form-control" name="birthdate" id="birthdate" required>
         </div>
         <div class="form-group col-lg-5" >
           <label class="form-label">Joining Date</label>
           <input type="date" class="form-control" name="joining_date" id="joining_date" required>
         </div>
          <div class="form-group col-lg-10" style=" margin-left: 20px;">
           <label class="form-label">Address</label>
           <textarea class="form-control" name="address" required id="address"></textarea>
         </div>
         <div class="form-group col-lg-5" style=" margin-left: 20px;">
           <label class="form-label">Qualification</label>
           <input type="text" class="form-control" name="qualification" id="qualification" required>
         </div>
        <div class="form-group col-lg-5" >
           <label class="form-label">Left Date</label>
           <input type="date" class="form-control" name="left_date" id="left_date">
         </div>
         <div class="form-group col-lg-5" style=" margin-left: 20px;">
           <label class="form-label">Experience</label>
           <input type="text" class="form-control" name="experience" id="experince" required>
         </div>
         <div class="form-group col-lg-5" >
           <label class="form-label">Mobile</label>
           <input type="text" class="form-control" name="mobile" id="mobile" required>
         </div>
         <div class="form-group col-lg-5" style=" margin-left: 20px;">
           <label class="form-label">Marital Status</label><br>
           {{-- <textarea class="form-control" name="maritial_status" required id="maritial_status"> --}}
           Married <input type="radio" name="marital_status" value="1"><br>
           Unmarried <input type="radio" name="marital_status" value="2"><br>
           Divorsed <input type="radio" name="marital_status" value="3"><br>
           Not Specified <input type="radio" name="marital_status" value="4"><br><br>
         </div>
         <div class="form-group col-lg-5" >
           <label class="form-label">Gender</label> <br>
           Male <input type="radio" name="gender" value="1"><br>
           Female <input type="radio" name="gender" value="2"><br>
           Other <input type="radio" name="gender" value="3"><br>
         </div>
         </div>
         {{-- <div class="form-group">
           <label class="form-label"> maritial_status</label>
           <input type="text" class="form-control" name="maritial_status" id=" maritial_status" required>
         </div> --}}
         <input type="submit" class="btn btn-primary" value="Submit" style=" margin-left: 500px; margin-bottom:20px;"/>
         {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
     </form>
   </div>
 </div>
</div>
@endsection
