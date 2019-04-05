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
                              <button type="button" class="btn btn-custon-rounded-four btn-primary" onclick="location.href='{{ route('ad-upcoming-events.create') }}'">ADD EVENT</button>
                          </div>
                      </div>
                      <div class="sparkline13-graph">
                          <div class="datatable-dashv1-list custom-datatable-overright">
                              <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                  data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="true" data-toolbar="#toolbar">
                                  <thead>
                                      <tr>
                                          <th data-field="id" data-editable="false">ID</th>
                                          <th data-field="hospital_id" data-editable="false">Hospital ID</th>
                                          <th data-field="event name" data-editable="false">Event Name</th>
                                          <th data-field="event type" data-editable="false">Event Type</th>
                                          <th data-field="event date" data-editable="false">Event Date</th>
                                          <th data-field="event banner" data-editable="false">Event Banner</th>
                                          <th data-field="action">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($events as $event)
                                      <tr>
                                          <td>{{ $event->id }}</td>
                                          <td>{{ $event->hospital_id }}</td>
                                          <td>{{ $event->event_name }}</td>
                                          <td>{{ $event->event_type }}</td>
                                          <td>{{ $event->event_date }}</td>
                                          <td>{{ $event->banner_name }}</td>
                                          <td>
                                            <button type="button" class="btn btn-primary" onclick="location.href='{{ route('ad-upcoming-events.edit', $event->id) }}'">Edit</button>
                                            <button type="button" class="btn btn-danger" onclick="location.href='{{ route('ad-upcoming-events.destroy', $event->id) }}'">Delete</button>
                                          </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                              {{ $events->links() }}
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
