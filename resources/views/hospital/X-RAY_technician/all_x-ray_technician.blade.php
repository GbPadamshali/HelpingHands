@extends('hospital.layout.design')
@section('content')
  <div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ url('/add_nureses') }}">Add_nureses</a>
    <table id="datatables-basic" class="table table-striped" style="width:100%">
      <thead>
        <tr>
              <th>first_nameD</th>
              <th>last_name</th>
              <th>email</th>
              <th>birthdate</th>
              <th>address</th>
              <th>joining_date</th>
              <th>qualification</th></th>
              <th>left_date</th>
              <th>gender</th>
              <th>experience</th>
              <th>status</th>
              <th>mobile</th>
              <th>maritial_status</th>
              <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Tiger Nixon</td>
          <td>Architect</td>
          <td>abc@gmail.com</td>
          <td>01/01/2101</td>
          <td>ahmedabad</td>
          <td>12/2/2017</td>
          <td>xyz</td>
          <td>4/5/2019</td>
          <td>male</td>
          <td>xyz</td>
          <td>xyz</td>
          <td>xyz</td>
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
