@extends('hospital.layout.design')
@section('content')

<div class="card-body">
    <a class="btn btn-outline-primary btn-sm" href="{{ route('ho-events.create') }}">Add Event</a> <br><br>
    <table id="datatables-basic" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>Event Name</th>
          <th>Event type</th>
          <th>Event date</th>
          <th>Event banner</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($events as $event)
            <tr>
              <td>{{ $event->event_name }}</td>
              <td>{{ $event->event_type }}</td>
              <td>{{ $event->event_date }}</td>
              <td><img src="{{ asset($event->banner_path) }}" style="width: 100px;"></td>
             <td>
                <a href="{{ route('ho-events.edit', $event->id) }}">EDIT</a>/
                <a href="{{ route('ho-events.destroy', $event->id) }}" style="color: #ff1717;">DELETE</a>
              </td>
            </tr>
          @endforeach
      </tbody>
    </table>
      {{ $events->links() }}
        <script>
            document.addEventListener("DOMContentLoaded", function(event) {
              // Datatables basic
              $('#datatables-basic').DataTable({
                responsive: true
              });
              // Datatables with Buttons
              var datatablesButtons = $('#datatables-buttons').DataTable({
                lengthChange: !1,
                buttons: ["copy", "print"],
                responsive: true
              });
              datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)")
            });
          </script>
</div>

@endsection
