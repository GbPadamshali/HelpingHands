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
                              <h1>ALL <span class="table-project-n">REPORT TYPE</span></h1>
                              <a class="btn btn-custon-rounded-four btn-primary" href='{{ route('ad-report-types.create') }}'>ADD REPORT TYPE </a>
                          </div>
                      </div>
                      <div class="sparkline13-graph">
                          <div class="datatable-dashv1-list custom-datatable-overright">
                              <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                  data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                  <thead>
                                      <tr>
                                          <th data-field="report name">REPORT NAME</th>
                                          <th data-field="description" data-editable="false">DESCRIPTION</th>
                                          <th data-field="action">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($reports as $report)
                                      <tr>
                                          <td>{{ $report->report_name }}</td>
                                          <td>{{ $report->description }}</td>
                                          <td>
                                            <button type="button" class="btn btn-primary" onclick="location.href='{{ route('ad-report-types.edit', $report->id) }}'">Edit</button><hr>
                                            <button type="button" class="btn btn-danger" onclick="location.href='{{ route('ad-report-types.destroy', $report->id) }}'">Delete</button>
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
