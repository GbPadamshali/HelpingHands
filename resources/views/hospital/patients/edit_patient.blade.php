@extends('hospital.layout.design')
@section('content')
  <div class="row">
    <div class="content-error">
      <div class="hpanel" style=" margin-left: 20px;margin-Top:20px;">
        <h3 class="h2">EDIT PATIENT </h3>
      </div>
      <div class="panel-body">
        <form id="validation-form" action="{{ route('ho-patients.update', $patient->id) }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="row">
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
                <label>First Name</label>
                <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $patient->first_name }}" required>
            </div>
            <div class="form-group col-lg-5" >
                <label>Last Name</label>
                <input type="text" class="form-control" name="last_name"  id="last_name" value="{{ $patient->last_name }}" required>
            </div>
            <div class="form-group col-lg-10" style=" margin-left: 20px;">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $patient->email }}" required>
            </div>
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
                <label>Mobile</label>
                <input type="text" class="form-control" name="mobile" id="mobile" {{ $patient->mobile }} required>
            </div>

               {{--    <div class="form-group">
                      <label>Picture upload</label>
                      <input type="file" name="picture">
                      <input type="hidden" name="old_picture">
                  </div>

                  <div class="form-group">
                      <label>Date of Birth</label>
                      <input name="date_of_birth" class="datepicker form-control hasDatepicker" type="text" placeholder="Date of Birth">
                  </div>  --}}
            <div class="form-group col-lg-5" >
             <label>Blood group</label>
             <select class="form-control" name="blood_group" required>
                 <option selected disabled>Selecte Your Blood Group...</option>
                 <option value="A+">A+</option>
                 <option value="AB+">AB+</option>
                 <option value="O+">O+</option>
                 <option value="AB-">AB-</option>
                 <option value="B+">B+</option>
                 <option value="A-">A-</option>
                 <option value="B-">B-</option>
                 <option value="O-">O-</option>
             </select>
            </div>
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
                <label>Allergies</label>
                <input type="text" class="form-control" name="allergies"  id="allergies" value="{{ $patient->allergies }}">
            </div>
            <div class="form-group col-lg-5" >
               <label>Diseases</label>
               <input type="text" class="form-control" name="diseases"  id="diseases" value="{{ $patient->diseases }}">
             </div>
             <div class="form-group col-lg-10" style=" margin-left: 20px;">
               <label>Medical History</label>
               <textarea class="form-control" rows="3" name="medical_history" id="medical_history">{{ $patient->medical_history }}</textarea>
             </div>
           <input type="submit" value="Submit" class="btn btn-primary" style=" margin-left: 500px; margin-bottom:20px;" />
         </div>
       </form>
     </div>
   </div>
  </div>
@endsection
