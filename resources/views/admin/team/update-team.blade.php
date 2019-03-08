@extends('admin_layout.design')
@section('content')
    <div class="row">
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{ route('teams.update', $teams->id) }}" id="loginForm" method="post"> {{ csrf_field() }}
                          <div class="text-left">
                            <h3><u>{{ $teams->team_name }}</u></h3>
                          </di>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Team Name</label>
                                    <input class="form-control" name="team_name" id="team_name" value="{{ $teams->team_name }}" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Players</label>
                                    <input class="form-control" name="players" id="players" required value="{{ $teams->players }}">
                                </div>
                                <div class="form-group   col-lg-6">
                                    <label>Short Name</label>
                                    <input class="form-control" name="short_name" id="short_name" required value="{{ $teams->short_name }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Captain Name</label>
                                    <input class="form-control" name="captain_name" id="captain_name" required value="{{ $teams->captain_name }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>logo</label>
                                    <input class="form-control" name="logo" id="logo" required value="{{ $teams->logo }}">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Tournament</label>
                                    <input class="form-control" name="tournament_id" id="tournament_id" required value="{{ $teams->tournament_id }}">
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success loginbtn">UPDATE Team</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>
  </div>
@endsection
