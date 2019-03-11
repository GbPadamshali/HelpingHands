@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ route('ad-departments.store') }}" id="loginForm" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>ADD DEPARTMENT</u></h3>
                          </di>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Hospital Id</label>
                                    <input class="form-control"name="hospital_id" id="hospital_id" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Department</label>
                                    <input class="form-control"name="department" id="department" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Description</label>
                                    <input class="form-control" name="description" id="description" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-success loginbtn" value="ADD DEPARTMENT">
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
