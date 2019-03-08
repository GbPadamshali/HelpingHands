@extends('hospital.layout.design')
@section('content')
  <div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ route('doctors.create') }}">ADD DOCTOR</a>
          <br><br>
    <table id="datatables-basic" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Birth Date</th>
          <th>Joining Date</th>
          <th>Qualification</th>
          <th>Department</th>
          <th>Specialization</th>
          <th>Experience</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($doctors as $doctor)
          <tr>
            <td>{{ $doctor->first_name }}</td>
            <td>{{ $doctor->last_name }}</td>
            <td>{{ $doctor->email }}</td>
            <td>{{ $doctor->birthdate }}</td>
            <td>{{ $doctor->joining_date }}</td>
            <td>{{ $doctor->qualifiaction }}</td>
            <td>{{ $doctor->department_id }}</td>
            <td>{{ $doctor->specialization }}</td>
            <td>{{ $doctor->experience }}</td>
            <td>	<a class="btn btn-outline-primary btn-sm" href="{{ route('doctors.edit', $doctor->id) }}">EDIT</a>  <hr>  <a class="btn btn-outline-primary btn-sm" href="{{ route('doctors.destroy', $doctor->id) }}">DELETE</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $doctors->links() }}
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
