@extends('hospital.layout.design')
@section('content')
  <div class="col-sm-12">
    <div class="panel panel-bd lobidrag">

        <h3 class="h2">ADD SERVICE </h3>


            <div class="panel-body">
                <form class="col-sm-6">
                    <div class="form-group">
                        <label>Service Name</label>
                        <input type="text" class="form-control" name="service_name" id="service_name" required>
                    </div>
                    <div class="form-group">
                       <label>Description</label>
                       <textarea class="form-control" rows="5" name="description" id="description" required></textarea>
                    </div>
                    <div class="reset-button">
                    <a href="#" class="btn btn-warning">Reset</a>
                    <a href="#" class="btn btn-success">Save</a>
                    </div>
                </form>
            </div>
     </div>
  @endsection
