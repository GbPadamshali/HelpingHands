@extends('hospital.layout.design')
@section('content')

<div class="card-body">
    			<a class="btn btn-outline-primary btn-sm" href="{{ route('ho-patients.create') }}">Add patient</a> <br><br>
    <table id="datatables-basic" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Blood group</th>
          <th>Alerigies</th>
          <th>Disease</th>
          <th>Medical History</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($patients as $patient)
          <tr>
            <td>{{ $patient->first_name }}</td>
            <td>{{ $patient->last_name }}</td>
            <td>{{ $patient->email }}</td>
            <td>{{ $patient->mobile }}</td>
            <td>{{ $patient->blood_group }}</td>
            <td>{{ $patient->allergies }}</td>
            <td>{{ $patient->diseases }}</td>
            <td>{{ $patient->medical_history }}</td>
            <td>
              <a href="{{ route('ho-patients.edit', $patient->id) }}">EDIT</a>/
              <a href="{{ route('ho-patients.destroy', $patient->id) }}" style="color: #ff1717;">DELETE</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
      {{ $patients->links() }}
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
