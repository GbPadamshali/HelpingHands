@extends('hospital.layout.design')
@section('content')
  <div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ route('ho-pharmacy-staff.create') }}">Add Pharmacist</a> <br><br>
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
        @foreach ($pharmacists as $pharmacist)
          <tr>
            <td>{{ $pharmacist->first_name }}</td>
            <td>{{ $pharmacist->last_name }}</td>
            <td>{{ $pharmacist->email }}</td>
            <td>{{ $pharmacist->joining_date }}</td>
            <td>{{ $pharmacist->qualification }}</td>
            <td>{{ $pharmacist->experience }}</td>
            @if ($pharmacist->status == 1)
              <td>WORKING</td>
            @elseif ($pharmacist->status == 2)
              <td>LEFT</td>
            @elseif ($pharmacist->status == 3)
              <td>ON HOLD</td>
            @elseif ($pharmacist->status == 4)
              <td>ON LEAVE</td>
            @endif
            <td>{{ $pharmacist->mobile }}</td>
            <td>
              <a href="{{ route('ho-pharmacy-staff.edit', $pharmacist->id) }}">EDIT</a>/
              <a href="{{ route('ho-pharmacy-staff.destroy', $pharmacist->id) }}" style="color: #ff1717;">DELETE</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $pharmacists->links() }}
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
