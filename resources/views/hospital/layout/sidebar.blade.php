<nav class="sidebar sidebar-sticky">
  <div class="sidebar-content  js-simplebar">
    <a class="sidebar-brand" href="{{ url('hospital/dashboard') }}">
      <img src="{{ asset('images/user_images/hospital_logo/logo1.png') }}" style="height: 80px; width: 100px;" alt=""/>
    </br>
      <span class="align-middle">ABC Hospital</span>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-header">
        Main
      </li>
        <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/ho-admin/dashboard') }}"><i class="align-middle" data-feather="home"></i>Dashboard</a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="{{ route('doctors.index') }}"><i class="align-middle" data-feather="user"></i>Doctor</a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="{{ route('departments.index') }}"><i class="align-middle" data-feather="command"></i>Department</a></li>
        <li class="sidebar-item">
          <a href="#layouts" data-toggle="collapse" class="font-weight-bold sidebar-link collapsed">
            <i class="align-middle" data-feather="sidebar"></i> <span class="align-middle">Staff</span>
          </a>
          <ul id="layouts" class="sidebar-dropdown list-unstyled collapse ">
          <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-nurses.index') }}"><i class="align-middle" data-feather="smile"></i>Nursing</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-x-ray-techs.index') }}"><i class="align-middle" data-feather="user"></i>X-RAY Technician</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-receptionists.index') }}"><i class="align-middle" data-feather="user"></i>Receptionist</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-sweepers.index') }}"><i class="align-middle" data-feather="user"></i>Sweeper</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-wardboys.index') }}"><i class="align-middle" data-feather="user"></i>Wardboy</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-pharmacy-staff.index') }}"><i class="align-middle" data-feather="user"></i>Pharmacy Staff</a></li>
        </ul>
        </li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ route('departments.index') }}"><i class="align-middle" data-feather="command"></i>Departments</a></li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-reports.index') }}"><i class="align-middle" data-feather="file-text"></i>Reports</a></li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-rooms.index') }}"><i class="align-middle" data-feather="home"></i>Rooms</a></li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-events.index') }}"><i class="align-middle" data-feather="eye"></i>Upcoming Events</a></li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-patients.index') }}"><i class="align-middle" data-feather="user"></i>Patients</a></li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-appointments.index') }}"><i class="align-middle" data-feather="thermometer"></i> Appointments</a></li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ url('ho-admin/ho-today-appointments') }}"><i class="align-middle" data-feather="thermometer"></i> Today's appointments</a></li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-facilities.index') }}"><i class="align-middle" data-feather="feather"></i> Facility</a></li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-services.index') }}"><i class="align-middle" data-feather="star"></i> Service</a></li>
    {{-- <div class="sidebar-cta">
      <button type="button" class="close sidebar-cta-close" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="sidebar-cta-content">
        <strong class="d-inline-block mb-1">Upgrade to pro</strong>
        <div class="mb-2">
          Showcase your work with our interactive portfolio on your custom domain
        </div>
        <a href="#" class="btn btn-outline-primary">Upgrade</a>
      </div>
    </div> --}}
  </div>
</nav>
