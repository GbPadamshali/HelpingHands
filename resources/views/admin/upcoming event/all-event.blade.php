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
                              <h1>ALL <span class="table-project-n">EVENT</span></h1>
                              <button type="button" class="btn btn-custon-rounded-four btn-primary" onclick="location.href='{{ url('/admin/add-event') }}'">ADD EVENT</button>
                          </div>
                      </div>
                      <div class="sparkline13-graph">
                          <div class="datatable-dashv1-list custom-datatable-overright">
                              <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                  data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                  <thead>
                                      <tr>
                                          <th data-field="event name" data-editable="false">Event Name</th>
                                          <th data-field="event type" data-editable="false">Event Type</th>
                                          <th data-field="event date" data-editable="false">Event Date</th>
                                          <th data-field="event banner" data-editable="false">Event Banner</th>
                                          <th data-field="action">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      <tr>
                                          <td>Zegnite</td>
                                          <td>zonal level</td>
                                          <td>18/03/2019</td>
                                          <td>powered by helping hands</td>

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
