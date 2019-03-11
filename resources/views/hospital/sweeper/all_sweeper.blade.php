@extends('hospital.layout.design')
@section('content')
  <div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ route('ho-sweepers.create') }}">Add Sweeper</a> <br><br>
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
        @foreach ($sweepers as $sweeper)
          <tr>
            <td>{{ $sweeper->first_name }}</td>
            <td>{{ $sweeper->last_name }}</td>
            <td>{{ $sweeper->email }}</td>
            <td>{{ $sweeper->joining_date }}</td>
            <td>{{ $sweeper->qualification }}</td>
            <td>{{ $sweeper->experience }}</td>
            @if ($sweeper->status == 1)
              <td>WORKING</td>
            @elseif ($sweeper->status == 2)
              <td>LEFT</td>
            @elseif ($sweeper->status == 3)
              <td>ON HOLD</td>
            @elseif ($sweeper->status == 4)
              <td>ON LEAVE</td>
            @endif
            <td>{{ $sweeper->mobile }}</td>
            <td>
              <a href="{{ route('ho-sweepers.edit', $sweeper->id) }}">EDIT</a>/
              <a href="{{ route('ho-sweepers.destroy', $sweeper->id) }}" style="color: #ff1717;">DELETE</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $sweepers->links() }}
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
