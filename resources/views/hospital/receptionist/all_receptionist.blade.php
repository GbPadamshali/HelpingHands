@extends('hospital.layout.design')
@section('content')
  <div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ route('ho-receptionists.create') }}">Add Receptionist</a> <br><br>
    <table id="datatables-basic" class="table table-striped" style="width:100%">
      <thead>
        <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Joining Date</th>
              <th>Qualification</th>
              <th>Experience</th>
              <th>Status</th>
              <th>Mobile</th>
              <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($receptionists as $receptionist)
          <tr>
            <td>{{ $receptionist->first_name }}</td>
            <td>{{ $receptionist->last_name }}</td>
            <td>{{ $receptionist->email }}</td>
            <td>{{ $receptionist->joining_date }}</td>
            <td>{{ $receptionist->qualification }}</td>
            <td>{{ $receptionist->experience }}</td>
            @if ($receptionist->status == 1)
              <td>WORKING</td>
            @elseif ($receptionist->status == 2)
              <td>LEFT</td>
            @elseif ($receptionist->status == 3)
              <td>ON HOLD</td>
            @elseif ($receptionist->status == 4)
              <td>ON LEAVE</td>
            @endif
            <td>{{ $receptionist->mobile }}</td>
            <td>
              <a href="{{ route('ho-receptionists.edit', $receptionist->id) }}">EDIT</a>/
              <a href="{{ route('ho-receptionists.destroy', $receptionist->id) }}" style="color: #ff1717;">DELETE</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $receptionists->links() }}
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
