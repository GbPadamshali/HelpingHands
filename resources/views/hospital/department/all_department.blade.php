@extends('hospital.layout.design')
@section('content')
  <div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ route('departments.create') }}">ADD DEPARTMENT</a><br><br>
    <table id="datatables-basic" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>Department</th>
          <th>Describtion</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($departments as $department)
          <tr>
            <td>{{ $department->department }}</td>
            <td>{{ $department->description }}</td>
            <td>	<a class="btn btn-outline-primary btn-sm" href="{{ route('departments.edit', $department->id) }}">EDIT</a>  <hr>  <a class="btn btn-outline-primary btn-sm" href="{{ route('departments.destroy', $department->id) }}">DELETE</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $departments->links() }}
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
