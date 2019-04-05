@extends('hospital.layout.design')
@section('content')
  <div class="card-body">
      			<a class="btn btn-outline-primary btn-sm" href="{{ route('ho-rooms.create') }}">Add Room</a> <br><br>
      <table id="datatables-basic" class="table table-striped" style="width:100%">
        <thead>
          <tr>
            <th>Patient Id</th>
            <th>Patient Name</th>
            <th>Room No</th>
            <th>Room Types</th>
            <th>Allocation From</th>
            <th>Allocation To</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $room)
              <tr>
                <td>{{ $room->patient_id }}</td>
                <td>{{ $room->patient_name }}</td>
                <td>{{ $room->room_no }}</td>
                <td>{{ $room->room_type }}</td>
                <td>{{ $room->allocation_from }}</td>
                <td>{{ $room->allocation_to }}</td>
                <td>
                  <a href="{{ route('ho-rooms.edit', $room->id) }}">EDIT</a>/
                  <a href="{{ route('ho-rooms.destroy', $room->id) }}" style="color: #ff1717;">DELETE</a>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>

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
