@extends('admin.layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ url('#') }}" id="loginForm" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>ADD TEAM</u></h3>
                          </di>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Team Name</label>
                                    <input class="form-control" name="team_name" id="team_name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Players</label>
                                    <input class="form-control" name="players" id="players" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Short Name</label>
                                    <input class="form-control" name="short_name" id="short_name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Captain Name</label>
                                    <input class="form-control" name="captain_name" id="captain_name" required>
                                </div>
                                <div class="form-group   col-lg-6">
                                    <label>Logo</label>
                                    <input type="file" class="form-control" name="logo" id="logo" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Tournament Id</label>
                                    <input class="form-control" name="tournament_id" id="tournament_id" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">ADD TEAM</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
