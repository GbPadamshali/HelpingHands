@extends('hospital.layout.design')
@section('content')
  <div class="row">
    <div class="content-error">
      <div class="hpanel" style=" margin-left: 20px;margin-Top:20px;">
        <h3>ADD FACILITY </h3>
      </div>
      <div class="panel-body">
        <form id="validation-form" action="{{ route('ho-facilities.store') }}" method="post">
          {{ csrf_field() }}
          <div class="row">
            <div class="form-group col-lg-12" style=" margin-left: 20px;">
                <label>Facility Name</label>
                <input type="text" class="form-control" name="facility" id="facility" required>
            </div>
            <div class="form-group col-lg-12" style=" margin-left: 20px;">
               <label>Description</label>
               <textarea class="form-control" rows="5" name="description" id="description" required></textarea>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary" style=" margin-left: 500px; margin-bottom:20px;" />
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
