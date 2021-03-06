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
                              <h1>ALL <span class="table-project-n">DOCTORS</span></h1>
                              <button type="button" class="btn btn-custon-rounded-four btn-primary" onclick="location.href='{{ route('ad-doctors.create') }}'">ALL DOCTOR</button>
                          </div>
                      </div>
                      <div class="sparkline13-graph">
                          <div class="datatable-dashv1-list custom-datatable-overright">
                              <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                  data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                  <thead>
                                      <tr>
                                          <th data-field="id">ID</th>
                                          <th data-field="first name" data-editable="false">First Name</th>
                                          <th data-field="last name" data-editable="false">Last Name</th>
                                          <th data-field="email" data-editable="false">Email</th>
                                          <th data-field="birthdate" data-editable="false">Birthdate</th>
                                          <th data-field="qualification" data-editable="false">Qualification</th>
                                          <th data-field="specializtion" data-editable="false">Specialization</th>
                                          <th data-field="address" data-editable="false">Address</th>
                                          <th data-field="action">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($doctors as $doctor)

                                    @endforeach
                                      <tr>
                                        <td>{{ $doctor->id }}</td>
                                        <td>{{ $doctor->first_name }}</td>
                                        <td>{{ $doctor->last_name }}</td>
                                        <td>{{ $doctor->email }}</td>
                                        <td>{{ $doctor->birthdate }}</td>
                                        <td>{{ $doctor->qualifiaction }}</td>
                                        <td>{{ $doctor->specialization }}</td>
                                        <td>{{ $doctor->address }}</td>
                                          <td>
                                            <button type="button" class="btn btn-primary" onclick="location.href='{{ route('ad-doctors.edit', $doctor->id) }}'">Edit</button><hr>
                                            <button type="button" class="btn btn-danger" onclick="location.href='{{ route('ad-doctors.destroy', $doctor->id) }}'">Delete</button>
                                          </td>
                                      </tr>

                                  </tbody>
                                  {{ $doctors->links() }}
                              </table>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
