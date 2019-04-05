@extends('hospital.layout.design')
@section('content')

<div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ route('ho-services.create') }}">Add Service</a> <br><br>
    <table id="datatables-basic" class="table table-striped" style="width:100%">
      <thead>
        <tr>
              <th>Service Name</th>
              <th>Description</th>
              <th>Actions</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($services as $service)
          <tr>
            <td>{{ $service->service }}</td>
            <td>{{ $service->description }}</td>
            <td>
              <a href="{{ route('ho-services.edit', $service->id) }}">EDIT</a>/
              <a href="{{ route('ho-services.destroy', $service->id) }}" style="color: #ff1717;">DELETE</a>
            </td>
          </tr>
        @endforeach


      </tbody>
    </table>
    {{ $services->links() }}
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
