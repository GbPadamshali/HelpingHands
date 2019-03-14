@extends('hospital.layout.design')
@section('content')

<div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ url('hospital/add-upcoming-event') }}">Add Event</a> <br><br>
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

          <tr>
            <td>event_name </td>
            <td>event_type </td>
            <td>event_date </td>
            <td>event_banner</td>
           <td>
              <a href="{{ url('hospital/edit-upcoming-event') }}">EDIT</a>/
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
