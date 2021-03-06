@extends('hospital.layout.design')
@section('content')
  <div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ route('ho-wardboys.create') }}">Add Technician</a> <br><br>
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
        @foreach ($wardboys as $wardboy)
          <tr>
            <td>{{ $wardboy->first_name }}</td>
            <td>{{ $wardboy->last_name }}</td>
            <td>{{ $wardboy->email }}</td>
            <td>{{ $wardboy->joining_date }}</td>
            <td>{{ $wardboy->qualification }}</td>
            <td>{{ $wardboy->experience }}</td>
            @if ($wardboy->status == 1)
              <td>WORKING</td>
            @elseif ($wardboy->status == 2)
              <td>LEFT</td>
            @elseif ($wardboy->status == 3)
              <td>ON HOLD</td>
            @elseif ($wardboy->status == 4)
              <td>ON LEAVE</td>
            @endif
            <td>{{ $wardboy->mobile }}</td>
            <td>
              <a href="{{ route('ho-wardboys.edit', $wardboy->id) }}">EDIT</a>/
              <a href="{{ route('ho-wardboys.destroy', $wardboy->id) }}" style="color: #ff1717;">DELETE</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $wardboys->links() }}
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
