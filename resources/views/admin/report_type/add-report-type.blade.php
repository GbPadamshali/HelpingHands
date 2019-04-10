@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ route('ad-report-types.store') }}" id="loginForm" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>ADD REPORT TYPE</u></h3>
                          </di>
                            <div class="row">
                              <div class="form-group col-lg-6">
                                  <label>Report Name</label>
                                  <input class="form-control" name="report_name" required>
                              </div>
                                <div class="form-group col-lg-6">
                                    <label>Description</label>
                                    <input class="form-control" name="description" id="description" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <!-- <button class="btn btn-success loginbtn">ADD REPORT TYPE</button> -->
                                <input type="submit" class="btn btn-success loginbtn" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
