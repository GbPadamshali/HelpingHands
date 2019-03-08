@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ url('#') }}" id="loginForm" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>ALL DEPARTMENT</u></h3>
                          </di>
                            <div class="row">
                              <div class="form-group col-lg-6">
                                  <label>Id</label>
                                  <input class="form-control"name="id" id="id" required>
                              </div>
                                <div class="form-group col-lg-6">
                                    <label>Hospital Id</label>
                                    <input class="form-control"name="hopital id" id="hospital id" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Role</label>
                                    <input class="form-control"name="department" id="role" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Desciption</label>
                                    <input class="form-control" name="description" id="description" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">ALL DEPARTMENT</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
