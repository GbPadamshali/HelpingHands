@extends('hospital.layout.design')
@section('content')

<div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ route('ho-appointments.create') }}">Add Appointment</a> <br><br>
    <table id="datatables-basic" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>Appointment id</th>
          <th>Patient id</th>
          <th>Patient name</th>
          <th>Visiting Doctor</th>
          <th>Visiting Date</th>
          <th>Visiting time from</th>
          <th>Visiting time to</th>
          <th>Disease</th>
          <th>Remark</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($appointments as $appointment)
          <tr>
            <td>{{ $appointment->appointment_id }}</td>
            <td>{{ $appointment->patient_id }}</td>
            <td>{{ $appointment->patient_name }}</td>
            <td>{{ $appointment->visiting_doctor }}</td>
            <td>{{ $appointment->visiting_date }}</td>
            <td>{{ $appointment->visiting_from }}</td>
            <td>{{ $appointment->visiting_to }}</td>
            <td>{{ $appointment->diseases }}</td>
            <td>{{ $appointment->remark }}</td>
            <td>
              <a href="{{ route('ho-appointments.edit', $appointment->id) }}">EDIT</a>/
              <a href="{{ route('ho-appointments.destroy', $appointment->id) }}" style="color: #ff1717;">DELETE</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $appointments->links() }}
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
