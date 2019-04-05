@extends('hospital.layout.design')
@section('content')

<div class="card-body">
    			{{-- <a class="btn btn-outline-primary btn-sm" href="{{ url('hospital/add-appointment') }}">Add Appointment</a> <br><br> --}}
    <table id="datatables-basic" class="table table-striped" style="width:100%">
      <thead>
        <tr>
              <th>Appointment id</th>
              <th>Patient Name</th>
              <th>Visiting Doctor</th>
              <th>Visiting Time From</th>
              <th>Visiting Time To</th>
              <th>Disease</th>
              <th>Remark</th>
              <th>Actions</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($appointments as $appointment)
          <tr>
            <td>{{ $appointment->id }}</td>
            <td>{{ $appointment->patient_name }}</td>
            <td>{{ $appointment->visiting_doctor }}</td>
            <td>{{ $appointment->visiting_from }}</td>
            <td>{{ $appointment->visiting_to }}</td>
            <td>{{ $appointment->diseases }}</td>
            <td>{{ $appointment->remark }}</td>
            <td>
                  <a href="{{ url('ho-admin/ho-today-appointments/'.$appointment->id.'/taken') }}" class="btn btn-success">Taken</a>
                  <a class="btn btn-success" href="{{ url('ho-admin/ho-today-appointments/'.$appointment->id.'/inprocess') }}">Process</a>
                  <a class="btn btn-warning" href="{{ route('ho-appointments.destroy', $appointment->id) }}">Cancel</a>
                  <a href="{{ url('ho-admin/ho-today-appointments/'.$appointment->id.'/view') }}" class="btn btn-warning">view</a>
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
