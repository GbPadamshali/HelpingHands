@extends('hospital.layout.design')
@section('content')
  <div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ route('doctors.create') }}">ADD DOCTOR</a>
    <table id="datatables-basic" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>Name</th>
          <th>Surname</th>
          <th>Email</th>
          <th>Age</th>
          <th>Join date</th>
          <th>Salary</th>
          <th>Department</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Tiger Nixon</td>
          <td>System Architect</td>
          <td>Edinburgh</td>
          <td>61</td>
          <td>2011/04/25</td>
          <td>$320,800</td>
          <td>OPD</td>
          <td>	<a class="btn btn-outline-primary btn-sm" href="{{ url('#') }}">EDIT</a>    <a class="btn btn-outline-primary btn-sm" href="{{ url('#') }}">DELETE</a></td>
        </tr>
        <tr>
          <td>Garrett Winters</td>
          <td>Accountant</td>
          <td>Tokyo</td>
          <td>63</td>
          <td>2011/07/25</td>
          <td>$170,750</td>
          <td>OPD</td>
          <td><a class="btn btn-outline-primary btn-sm" href="{{ url('#') }}">EDIT</a>    <a class="btn btn-outline-primary btn-sm" href="{{ url('#') }}">DELETE</a></td>
        </tr>
        <tr>
          <td>Ashton Cox</td>
          <td>Junior Technical Author</td>
          <td>San Francisco</td>
          <td>66</td>
          <td>2009/01/12</td>
          <td>$86,000</td>
          <td>OPD</td>
          <td><a class="btn btn-outline-primary btn-sm" href="{{ url('#') }}">EDIT</a>     <a class="btn btn-outline-primary btn-sm" href="{{ url('#') }}">DELETE</a></td>
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
