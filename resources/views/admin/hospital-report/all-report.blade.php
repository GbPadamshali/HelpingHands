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
                              <!-- <button type="button" class="btn btn-custon-rounded-four btn-primary" onclick="location.href='{{ url('/admin/add-report') }}'">ADD REPORT</button> -->
                          </div>
                      </div>
                      <div class="sparkline13-graph">
                          <div class="datatable-dashv1-list custom-datatable-overright">
                              <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                  data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                  <thead>
                                      <tr>
                                          <th data-field="hospital_id" data-editable="false">Hospital ID</th>
                                          <th data-field="report_name">REPORT NAME</th>
                                          <th data-field="name" data-editable="false">Name</th>
                                          <th data-field="type" data-editable="false">TYPE</th>
                                          <th data-field="issued_on" data-editable="false">ISSSUEDD ON</th>
                                          <th data-field="supervisor_name" data-editable="false">SUPERVISOR NAME</th>
                                          {{-- <th data-field="file" data-editable="false">FILE</th> --}}
                                          <th data-field="action">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($reports as $report)
                                      <tr>
                                          <td>{{ $report->hospital_id }}</td>
                                          <td>{{ $report->report_name }}</td>
                                          <td>{{ $report->patient_name }}</td>
                                          <td>{{ $report->report_type }}</td>
                                          <td>{{ $report->issued_on }}</td>
                                          <td>{{ $report->supervisor_name }}</td>
                                          {{-- <td>regular</td> --}}
                                          <td>
                                            <a class="btn btn-primary" href='{{ url('#') }}'>View</a><Hr>
                                            <a href="{{ url($report->file_path) }}" class="btn btn-danger" download>Download</a>
                                          </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                              {{ $reports->links() }}
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
