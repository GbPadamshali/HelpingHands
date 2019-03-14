@extends('hospital.layout.design')
@section('content')

<div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ url('hospital/add-patient') }}">Add patient</a> <br><br>
    <table id="datatables-basic" class="table table-striped" style="width:100%">
      <thead>
        <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>Blood group</th>
              <th>Alerigies</th>
              <th>Disease</th>
              <th>Medical History</th>
              <th>Actions</th>

        </tr>
      </thead>
      <tbody>

          <tr>
            <td>first_name </td>
            <td> last_name </td>
            <td> email </td>
            <td>mobile </td>
            <td>blood_group </td>
            <td>alerigies </td>
            <td>disease </td>
            <td>medical_history </td>

            <td>  <a href="{{ url('hospital/edit-patient') }}">EDIT</a>/
              <a href="{{ url('#') }}" style="color: #ff1717;">DELETE</a>
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
