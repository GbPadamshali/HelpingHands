@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ route('ad-roles.store') }}" id="loginForm" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>ADD ROLE</u></h3>
                          </div>
                                <div class="form-group col-lg-6">
                                    <label>Hospital Id</label>
                                    <input class="form-control"name="hospital_id" id="hospital_id" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Role</label>
                                    <input class="form-control"name="role" id="role" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Desciption</label>
                                    <input class="form-control" name="description" id="description" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-success loginbtn" value="ADD ROLE" />
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
