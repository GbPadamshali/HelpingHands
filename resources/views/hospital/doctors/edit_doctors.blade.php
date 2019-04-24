@extends('hospital.layout.design')
@section('content')
<div class="row">
  <div class="content-error">
    <div class="hpanel" style=" margin-left: 20px;margin-Top:20px;">
      <h1 class="h2">EDIT DOCTOR </h1>
    </div>
    <div class="panel-body">
      <form id="validation-form" method="post" enctype="multipart/form-data" action="{{ route('doctors.update', $doctor->id) }}"> {{ csrf_field() }}
        <div class="row">
          <div class="form-group col-lg-5" style=" margin-left: 20px;">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="Name" value="{{ $doctor->first_name }}" required>
          </div>
          <div class="form-group col-lg-5">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ $doctor->last_name }}" required>
         </div>
         <div div class="form-group col-lg-5" style=" margin-left: 20px;">
           <label class="form-label">Qualifiaction</label>
           <input type="text" class="form-control" name="qualifiaction" placeholder="qualifiaction" value="{{ $doctor->qualifiaction }}" required>
         </div>
         <div class="form-group col-lg-5">
           <label class="form-label">Specialization</label>
           <input type="text" class="form-control" name="specialization" placeholder="specialization" value="{{ $doctor->specialization }}" required>
         </div>
         <div class="form-group col-lg-5" style=" margin-left: 20px;">
           <label class="form-label">Experience</label>
           <input type="text" class="form-control" name="experience" placeholder="experience" value="{{ $doctor->experience }}" required>
         </div>
         <div class="form-group col-lg-5">
           <label class="form-label">Select</label>
           <select class="form-control" name="department_id" required>
             <option value>Select Departmnet...</option>
              {{-- <optgroup label="Department"> --}}
             <option value="OPD">OPD</WARDoption>
             <option value="ICU">ICU</option>
             <option value="Laboratry">Laboratry</option>
             <option value="WARD">WARD</option>
             <option value="Laboratry">Laboratry</option>
             {{-- </optgroup> --}}
           </select>
         </div>
         <div class="form-group col-lg-10" style=" margin-left: 20px;">
           <label class="form-label">Address</label>
           <textarea class="form-control" name="address" required>{{ $doctor->address }}</textarea>
         </div>
         <div class="form-group col-lg-10" style=" margin-left: 20px;">
           <label class="form-label">Image</label>
             <div>
               <input type="file" class="validation-file form-control" accept=".jpg,.png,.gif"  name="image" required>
             </div>
          </div>
          <input type="submit" value="Submit" class="btn btn-primary" style=" margin-left: 500px; margin-bottom:20px;" />
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
