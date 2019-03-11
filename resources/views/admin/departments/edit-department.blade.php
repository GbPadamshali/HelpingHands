@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ route('ad-departments.update', $department->id) }}" id="loginForm" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>EDIT DEPARTMENT</u></h3>
                          </di>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Hospital Id</label>
                                    <input class="form-control"name="hospital_id" id="hospital_id" required value="{{ $department->hospital_id }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Department</label>
                                    <input class="form-control"name="department" id="role" value="{{ $department->department }}" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Desciption</label>
                                    <input class="form-control" name="description" id="description" required value="{{ $department->description }}">
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-success loginbtn" value="EDIT DEPARTMENT"/>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
