@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ url('#') }}" id="loginForm" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>ADD REPORT</u></h3>
                          </di>
                            <div class="row">
                              <div class="form-group col-lg-6">
                                  <label>Report Name</label>
                                  <input class="form-control"report name="name" id="report name" required>
                              </div>
                                <div class="form-group col-lg-6">
                                    <label>Name</label>
                                    <input class="form-control" name="name" id="patient_name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Type</label>
                                    <input class="form-control" name="type" id="type" required>


          <p>
             <label>Select list</label>
             <select id="myList" class="form-control custom-select-value col-lg-6">
               <option value = "1">one</option>
               <option value = "2">two</option>
               <option value = "3">three</option>
               <option value = "4">four</option>
             </select>
          </p>


                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Issued on</label>
                                    <input class="form-control" name="issued on" id="issued on" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Supervisor Name</label>
                                    <input class="form-control" name="supervisor name" id="supervisor name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Patient Id</label>
                                    <input class="form-control" name="patiengt id" id="patient id" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>File</label>
                                    <input class="form-control" name="file" id="file" required>
                                    <input type="file" name=fileToUpload id="fileToUpload">
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">ADD REPORT</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
