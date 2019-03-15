@extends('hospital.layout.design')
@section('content')
  <div class="col-sm-12">
                             <div class="panel panel-bd lobidrag">

                                 <h3 class="h2">ADD PATIENT </h3>


                                     <div class="panel-body">
                                         <form class="col-sm-6">
                                             <div class="form-group">
                                                 <label>First Name</label>
                                                 <input type="text" class="form-control" name="first_name" id="first_name" required>
                                             </div>
                                             <div class="form-group">
                                                 <label>Last Name</label>
                                                 <input type="text" class="form-control" name="last_name"  id="last_name" required>
                                             </div>
                                             <div class="form-group">
                                                 <label>Email</label>
                                                 <input type="email" class="form-control" name="email" id="email" required>
                                             </div>
                                             <div class="form-group">
                                                 <label>Mobile</label>
                                                 <input type="number" class="form-control" name="mobile" id="mobile" required>
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
                                             <div class="form-group">
                                                 <label>Blood group</label>
                                                 <select class="form-control" name="blood_group" required>
                                                     <option id="1">A+</option>
                                                     <option id="2">AB+</option>
                                                     <option id="3">O+</option>
                                                     <option id="4">AB-</option>
                                                     <option id="5">B+</option>
                                                     <option id="6">A-</option>
                                                     <option id="7">B-</option>
                                                     <option id="8">O-</option>
                                                 </select>
                                             </div>
                                             <div class="form-group">
                                                 <label>Alerigies</label>
                                                 <input type="text" class="form-control" name="alerigies"  id="alerigies" >
                                             </div>
                                             <div class="form-group">
                                                 <label>Dieases</label>
                                                 <input type="text" class="form-control" name="disease"  id="disease" >
                                             </div>


                                       <div class="form-group">
                                         <label>Medical History</label>
                                         <textarea class="form-control" rows="3" name="medical_history" id="medical_history" ></textarea>
                                     </div>
                                     <div class="reset-button">
                                      <a href="#" class="btn btn-warning">Reset</a>
                                      <a href="#" class="btn btn-success">Save</a>
                                  </div>
                              </form>
                          </div>
                      </div>
  @endsection
