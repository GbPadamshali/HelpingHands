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
                              <h1>ALL <span class="table-project-n">DEPARTMENT</span></h1>
                              <button type="button" class="btn btn-custon-rounded-four btn-primary" onclick="location.href='{{ url('/admin/add-department') }}'">ADD DEPARTMENT</button>
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
                                          <th data-field="role" data-editable="false">department</th>
                                          <th data-field="description" data-editable="false">Description</th>
                                          <th data-field="action">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($departments as $department)
                                      <tr>
                                        <td>{{ $department->id }}</td>
                                        <td>{{ $department->hospital_id }}</td>
                                        <td>{{ $department->department }}</td>
                                        <td>{{ $department->description }}</td>
                                          <td>
                                            <button type="button" class="btn btn-primary" onclick="location.href='{{ route('ad-departments.edit', $department->id) }}'">Edit</button><hr>
                                            <button type="button" class="btn btn-danger" onclick="location.href='{{ route('ad-departments.destroy', $department->id) }}'">Delete</button>
                                          </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                              {{ $departments->links() }}
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
