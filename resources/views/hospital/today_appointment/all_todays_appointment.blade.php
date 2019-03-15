@extends('hospital.layout.design')
@section('content')

<div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ url('hospital/add-appointment') }}">Add Appointment</a> <br><br>
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

          <tr>
            <td>appointment_id </td>
            <td>patient_name </td>
            <td>visiting_Doctor </td>
            <td>visiting_time_from </td>
            <td>visiting_time_to </td>
            <td>disease </td>
            <td>remark </td>

            <td>
                  <a   href="{{ url('hospital/view-today-appointment') }}"class="btn btn-success">Taken</a>
                  <a  class="btn btn-success">Process</a>
                  <a  class="btn btn-warning">Cancel</a>
            </td>
          </tr>
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
