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
                              <h1>ALL <span class="table-project-n">REPORT</span></h1>
                              <button type="button" class="btn btn-custon-rounded-four btn-primary" onclick="location.href='{{ url('#') }}'">ALL REPORT</button>
                          </div>
                      </div>
                      <div class="sparkline13-graph">
                          <div class="datatable-dashv1-list custom-datatable-overright">
                              <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                  data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                  <thead>
                                      <tr>
                                          <th data-field="report name">REPORT NAME</th>
                                          <th data-field="name" data-editable="false">Name</th>
                                          <th data-field="type" data-editable="false">TYPE</th>
                                          <th data-field="issued on" data-editable="false">ISSSUEDD ON</th>
                                          <th data-field="supervisor name" data-editable="false">SUPERVISOR NAME</th>
                                          <th data-field="patient id" data-editable="false">PATIENT ID</th>
                                          <th data-field="file" data-editable="false">FILE</th>
                                          <th data-field="action">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <tr>
                                          <td>thyroid</td>
                                          <td>Govinda</td>
                                          <td>blood report</td>
                                          <td>26/02/2001</td>
                                          <td>akash</td>
                                          <td>2546358</td>
                                          <td>regular</td>

                                          <td>
                                            <button type="button" class="btn btn-primary" onclick="location.href='{{ url('#') }}'">Edit</button>
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
