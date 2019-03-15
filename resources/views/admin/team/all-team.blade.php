@extends('admin_layout.design')
@section('content')
  <!-- Static Table Start -->
  <div class="data-table-area mg-b-15">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="sparkline13-list">
                      <div class="sparkline13-hd">
                          <div class="main-sparkline13-hd">
                              <h1>ALL <span class="table-project-n">TEAMS</span></h1>
                              <button type="button" class="btn btn-custon-rounded-four btn-primary" onclick="location.href='{{ url('#') }}'">Add Team</button>
                          </div>
                      </div>
                      <div class="sparkline13-graph">
                          <div class="datatable-dashv1-list custom-datatable-overright">
                              <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                  data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                  <thead>
                                      <tr>
                                          <th data-field="id">ID</th>
                                          <th data-field="team_name" data-editable="false">Team Name</th>
                                          <th data-field="players" data-editable="false">Players</th>
                                          <th data-field="short_name" data-editable="false">Short Name</th>
                                          <th data-field="captain_name" data-editable="false">Captain Name</th>
                                          <th data-field="logo" data-editable="false">logo</th>
                                          <th data-field="tournament_id" data-editable="false">Tournament</th>
                                          <th data-field="action">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($teams as $team)
                                      <tr>
                                          <td>{{ $team->id }}</td>
                                          <td>{{ $team->team_name }}</td>
                                          <td>{{ $team->players }}</td>
                                          <td>{{ $team->short_name }}</td>
                                          <td>{{ $team->captain_name }}</td>
                                          {{-- <td>{{ $team->logo }}</td> --}}
                                          <td><img src="{{ asset($team->logo_path) }}" width="100px" alt="No Logo Found"></td>
                                          <td>{{ $team->tournament_id }}</td>
                                          <td>
                                            <button type="button" class="btn btn-primary" onclick="location.href='{{ route('teams.show', $team->id) }}'">Edit</button><hr>
                                            <button type="button" class="btn btn-danger" onclick="location.href='{{ route('teams.destroy', $team->id) }}'">Delete</button>
                                          </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                      {{ $teams->links() }}
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
