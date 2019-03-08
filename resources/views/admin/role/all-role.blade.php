@extends('admin.layout.design')
@section('content')
  <!-- Static Table Start -->
  <div class="data-table-area mg-b-15">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="sparkline13-list">
                      <div class="sparkline13-hd">
                          <div class="main-sparkline13-hd">
                              <h1>ALL <span class="table-project-n">ROLE</span></h1>
                              <button type="button" class="btn btn-custon-rounded-four btn-primary" onclick="location.href='{{ url('#') }}'">All ROLE</button>
                          </div>
                      </div>
                      <div class="sparkline13-graph">
                          <div class="datatable-dashv1-list custom-datatable-overright">
                              <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                  data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                  <thead>
                                      <tr>
                                          <th data-field="id" data-editable="false">Id
                                          <th data-field="hospital id" data-editable="false">Hospital Id
                                          <th data-field="role" data-editable="false">Role</th>
                                          <th data-field="description" data-editable="false">Description</th>
                                          <th data-field="action">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <tr>
                                        <td>govind9686</td>
                                        <td>hsk12344566</td>
                                        <td>compounder</td>
                                        <td>describe an description in detail</td>
                                          <td>
                                            <button type="button" class="btn btn-primary" onclick="location.href='{{ url('#') }}'">Edit</button><hr>
                                            <button type="button" class="btn btn-danger" onclick="location.href='{{ url('#') }}'">Delete</button>
                                          </td>
                                      </tr>

                                  </tbody>
                              </table>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
