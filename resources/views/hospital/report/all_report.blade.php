@extends('hospital.layout.design')
@section('content')
  <div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ route('ho-reports.create') }}">Add Report</a> <br> <br>
    <table id="datatables-basic" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>Patient Id</th>
          <th>Patient Name</th>
          <th>Report Name</th>
          <th>Report Type</th>
          <th>Issued On</th>
          <th>Supervisor Name</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($reports as $report)
          <tr>
            <td>{{ $report->patient_id }}</td>
            <td>{{ $report->patient_name }}</td>
            <td>{{ $report->report_name }}</td>
            <td>{{ $report->report_type }}</td>
            <td>{{ $report->issued_on }}</td>
            <td>{{ $report->supervisor_name }}</td>
            <td>
              <a href="{{ url($report->file_path) }}" download>Download</a>
              <a href="{{ route('ho-reports.edit', $report->id) }}">Edit</a>
              <a href="{{ route('ho-reports.destroy', $report->id) }}">Delete</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{ $reports->links() }}
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
