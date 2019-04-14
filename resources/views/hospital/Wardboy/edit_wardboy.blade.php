@extends('hospital.layout.design')
@section('content')
  <div class="row">
    <div class="content-error">
      {{-- <div class="text-center mt-4">
      <h1 class="h2">ADD NURSES </h1>
      </div> --}}
      <div class="panel-body">
        <form id="validation-form" method="post" action="{{ route('ho-wardboys.update', $wardboy->id) }}" enctype="multipart/form-data" >
          {{ csrf_field() }}
          <input type="hidden" value="6" name="staff_role"/>
          <div class="row">
            <div class="form-group col-lg-5" style=" margin-left: 20px;margin-Top:20px;">
              <label class="form-label">First Name</label>
              <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $wardboy->first_name }}" required>
            </div>
            <div class="form-group col-lg-5" style=" margin-Top:20px;">
              <label class="form-label">Last Name</label>
              <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $wardboy->last_name }}" required>
            </div>
            <div class="form-group col-lg-10" style=" margin-left: 20px;">
              <label class="form-label">Email</label>
              <input type="text" class="form-control" name="email" id="email" value="{{ $wardboy->email }}" disabled required>
            </div>
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Birthdate</label>
              <input type="date" class="form-control" name="birthdate" id="birthdate" value="{{ $wardboy->birthdate }}" disabled required>
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Joining Date</label>
              <input type="date" class="form-control" name="joining_date" id="joining_date" value="{{ $wardboy->joining_date }}" disabled required>
            </div>
            <div class="form-group col-lg-10" style=" margin-left: 20px;">
              <label class="form-label">Address</label>
              <textarea class="form-control" name="address" required id="address">{{ $wardboy->address }}</textarea>
            </div>
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Qualification</label>
              <input type="text" class="form-control" name="qualification" id="qualification" value="{{ $wardboy->qualification }}" required>
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Left Date</label>
              <input type="date" class="form-control" name="left_date" id="left_date" value="{{ $wardboy->left_date }}" disabled>
            </div>
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Experience</label>
              <input type="text" class="form-control" name="experience" id="experince" value="{{ $wardboy->experience }}" disabled required>
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Mobile</label>
              <input type="text" class="form-control" name="mobile" id="mobile" value="{{ $wardboy->mobile }}" required>
            </div>
            <div class="form-group col-lg-5" style=" margin-left: 20px;">
              <label class="form-label">Marital Status</label><br>
              @if ($wardboy->marital_status == 1)
                Married <input type="radio" name="marital_status" value="1" checked><br>
                Unmarried <input type="radio" name="marital_status" value="2"><br>
                Divorsed <input type="radio" name="marital_status" value="3"><br>
                Not Specified <input type="radio" name="marital_status" value="4"><br><br>
              @elseif ($wardboy->marital_status == 2)
                Married <input type="radio" name="marital_status" value="1"><br>
                Unmarried <input type="radio" name="marital_status" value="2" checked><br>
                Divorsed <input type="radio" name="marital_status" value="3"><br>
                Not Specified <input type="radio" name="marital_status" value="4"><br><br>
              @elseif ($wardboy->marital_status == 3)
                Married <input type="radio" name="marital_status" value="1"><br>
                Unmarried <input type="radio" name="marital_status" value="2"><br>
                Divorsed <input type="radio" name="marital_status" value="3" checked><br>
                Not Specified <input type="radio" name="marital_status" value="4"><br><br>
              @else
                Married <input type="radio" name="marital_status" value="1"><br>
                Unmarried <input type="radio" name="marital_status" value="2"><br>
                Divorsed <input type="radio" name="marital_status" value="3"><br>
                Not Specified <input type="radio" name="marital_status" value="4" checked><br><br>
              @endif
            </div>
            <div class="form-group col-lg-5" >
              <label class="form-label">Gender</label> <br>
              @if ($wardboy->gender == 1)
                Male <input type="radio" name="gender" value="1" checked><br>
                Female <input type="radio" name="gender" value="2"><br>
                Other <input type="radio" name="gender" value="3"><br>
              @elseif ($wardboy->gender == 2)
                Male <input type="radio" name="gender" value="1"><br>
                Female <input type="radio" name="gender" value="2" checked><br>
                Other <input type="radio" name="gender" value="3"><br>
              @else
                Male <input type="radio" name="gender" value="1"><br>
                Female <input type="radio" name="gender" value="2"><br>
                Other <input type="radio" name="gender" value="3" checked><br>
              @endif
            </div>
              {{-- <div class="form-group">
                <label class="form-label"> maritial_status</label>
                <input type="text" class="form-control" name="maritial_status" id=" maritial_status" required>
              </div> --}}
              <input type="submit" class="btn btn-primary" value="Submit" style=" margin-left: 500px; margin-bottom:20px;" />
              {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
