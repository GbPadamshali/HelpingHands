@extends('hospital.layout.design')
@section('content')
  <div class="col-sm-12">
    <div class="panel panel-bd lobidrag">

        <h3 class="h2">EDIT SERVICE </h3>


            <div class="panel-body">
                <form class="col-sm-6" action="{{ route('ho-services.update', $service->id) }}" method="post">
                  {{ csrf_field() }}
                    <div class="form-group">
                        <label>Service Name</label>
                        <input type="text" class="form-control" name="service" id="service" value="{{ $service->service }}" required>
                    </div>
                    <div class="form-group">
                       <label>Description</label>
                       <textarea class="form-control" rows="5" name="description" id="description" required>{{ $service->description }}</textarea>
                    </div>
                    <div class="reset-button">
                      <input type="reset" class="btn btn-warning" value="Reset">
                      <input type="submit" class="btn btn-success" value="Submit">
                    {{-- <a href="#" class="btn btn-warning">Reset</a>
                    <a href="#" class="btn btn-success">Save</a> --}}
                    </div>
                </form>
            </div>
     </div>
  @endsection
