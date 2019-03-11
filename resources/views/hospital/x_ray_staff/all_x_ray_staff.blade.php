@extends('hospital.layout.design')
@section('content')
  <div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ route('ho-x-ray-techs.create') }}">Add Technician</a> <br><br>
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
        @foreach ($x_ray_techs as $x_ray_tech)
          <tr>
            <td>{{ $x_ray_tech->first_name }}</td>
            <td>{{ $x_ray_tech->last_name }}</td>
            <td>{{ $x_ray_tech->email }}</td>
            <td>{{ $x_ray_tech->joining_date }}</td>
            <td>{{ $x_ray_tech->qualification }}</td>
            <td>{{ $x_ray_tech->experience }}</td>
            @if ($x_ray_tech->status == 1)
              <td>WORKING</td>
            @elseif ($x_ray_tech->status == 2)
              <td>LEFT</td>
            @elseif ($x_ray_tech->status == 3)
              <td>ON HOLD</td>
            @elseif ($x_ray_tech->status == 4)
              <td>ON LEAVE</td>
            @endif
            <td>{{ $x_ray_tech->mobile }}</td>
            <td>
              <a href="{{ route('ho-x-ray-techs.edit', $x_ray_tech->id) }}">EDIT</a>/
              <a href="{{ route('ho-x-ray-techs.destroy', $x_ray_tech->id) }}" style="color: #ff1717;">DELETE</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $x_ray_techs->links() }}
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
