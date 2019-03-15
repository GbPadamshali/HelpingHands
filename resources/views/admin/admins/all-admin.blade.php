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
                              <h1>ALL <span class="table-project-n">ADMIN</span></h1>
                              <button type="button" class="btn btn-custon-rounded-four btn-primary" onclick="location.href='{{ url('/admin/add-admin') }}'">ADD ADMIN</button>
                          </div>
                      </div>
                      <div class="sparkline13-graph">
                          <div class="datatable-dashv1-list custom-datatable-overright">
                              <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                  data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                  <thead>
                                      <tr>
                                          <th data-field="id">ID</th>
                                          <th data-field="name" data-editable="false">Name</th>
                                          <th data-field="email" data-editable="false">Email</th>
                                          <th data-field="mobile" data-editable="false">Mobile</th>
                                          <th data-field="password" data-editable="false">Password</th>
                                          <th data-field="action">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <tr>
                                          <td>id</td>
                                          <td>Govinda</td>
                                          <td>gbpadamshali@gmail.com</td>
                                          <td>7016002663</td>
                                          <td>govinda7</td>

                                          <td>
                                            <button type="button" class="btn btn-primary" onclick="location.href='{{ url('#') }}'">Edit</button><Hr>
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
