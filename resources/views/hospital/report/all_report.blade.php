@extends('hospital.layout.design')
@section('content')
  <div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ url('hospital/add_report') }}">Add Report</a>
    <table id="datatables-basic" class="table table-striped" style="width:100%">
      <thead>
        <tr>
              <th>Report name</th>
              <th>Report types</th>
              <th>Issued on</th>
              <th>Supervisor name</th>
              <th>Patient id</th>
              <th>Report file upload</th>
              <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>T</td>
          <td>Architect</td>
          <td>12/2/2017</td>
          <td>xyz</td>
          <td><a href="#">edit</a>         \          <a href="#">delete</a></td>
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
