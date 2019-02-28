@extends('hospital.layout.design')
@section('content')
  <div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ ('/add_department') }}">Add_department</a>
    <table id="datatables-basic" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>Department Name</th>
          <th>Describtion</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Tiger Nixon</td>
          <td>this is highly equpment laboratry</td>
          <td><a href="#">edit</a>         \          <a href="#">delete</a></td>
        </tr>
        <tr>
          <td>Garrett Winters</td>
          <td>Accountant is my try </td>
          <td><a href="#">edit</a>         \          <a href="#">delete</a></td>
        </tr>

      </tbody>
      <tfoot>
        <tr>
          <th>Department Name</th>
          <th>Describtion</th>
           <th>Actions</th>
        </tr>
      </tfoot>
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
