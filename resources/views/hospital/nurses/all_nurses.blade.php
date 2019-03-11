@extends('hospital.layout.design')
@section('content')
  <div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ route('ho-nurses.create') }}">Add Nurse</a> <br><br>
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
        @foreach ($nurses as $nurse)
          <tr>
            <td>{{ $nurse->first_name }}</td>
            <td>{{ $nurse->last_name }}</td>
            <td>{{ $nurse->email }}</td>
            <td>{{ $nurse->joining_date }}</td>
            <td>{{ $nurse->qualification }}</td>
            <td>{{ $nurse->experience }}</td>
            @if ($nurse->status == 1)
              <td>WORKING</td>
            @elseif ($nurse->status == 2)
              <td>LEFT</td>
            @elseif ($nurse->status == 3)
              <td>ON HOLD</td>
            @elseif ($nurse->status == 4)
              <td>ON LEAVE</td>
            @endif
            <td>{{ $nurse->mobile }}</td>
            <td>
              <a href="{{ route('ho-nurses.edit', $nurse->id) }}">EDIT</a>/
              <a href="{{ route('ho-nurses.destroy', $nurse->id) }}" style="color: #ff1717;">DELETE</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $nurses->links() }}
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
