@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ route('ad-hospital-reports.store') }}" id="loginForm" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>ADD REPORT</u></h3>
                          </di>
                            <div class="row">
                              <div class="form-group col-lg-6">
                                <label>Patient Id</label>
                                <input class="form-control" name="patient_id" id="patient_id" required>
                              </div>
                              <div class="form-group col-lg-6">
                                  <label>Patient Name</label>
                                  <input class="form-control" name="patient_name" id="patient_name" required>
                              </div>
                              <div class="form-group col-lg-6">
                                  <label>Report Name</label>
                                  <input class="form-control"report name="report_name" id="report_name" required>
                              </div>
                                {{-- <div class="form-group col-lg-6">
                                    <label>Type</label>
                                    <input class="form-control" name="type" id="type" required>
                                </div> --}}
                                  <p>
                                    <label>Report Type</label>
                                    <select id="report_type" class="form-control custom-select-value col-lg-6">
                                      <option value = "1">one</option>
                                      <option value = "2">two</option>
                                      <option value = "3">three</option>
                                      <option value = "4">four</option>
                                    </select>
                                  </p>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Issued on</label>
                                    <input type="date" class="form-control" name="issued_on" id="issued_on" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Supervisor Name</label>
                                    <input class="form-control" name="supervisor_name" id="supervisor_name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>File</label>
                                    {{-- <input class="form-control" name="file" id="file" required> --}}
                                    <input type="file" name=file_name id="file_name" required>
                                </div>
                            </div>
                            <div class="text-center">
                                {{-- <button class="btn btn-success loginbtn">ADD REPORT</button> --}}
                                <input type="submit" class="btn btn-success loginbtn" value="ADD REPORT" />
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
