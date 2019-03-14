<nav class="sidebar sidebar-sticky">
  <div class="sidebar-content  js-simplebar">
    <a class="sidebar-brand" href="{{ url('hospital/dashboard') }}">
      <img src="{{ asset('images/user_images/logo.png') }}" style="height: 80px; width: 100px;" alt=""/>
      <span class="align-middle">HelpingHands</span>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-header">
        Main
      </li>
        <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/hospital/dashboard') }}"><i class="align-middle" data-feather="home"></i>Dashboard</a></li>
        <li class="sidebar-item"><a class="sidebar-link" href="{{ route('doctors.index') }}"><i class="align-middle" data-feather="user"></i>Doctor</a></li>
      <li class="sidebar-item active">
        <a href="#" data-toggle="collapse" class="font-weight-bold sidebar-link">
          <i class="align-middle" data-feather="users"></i> <span class="align-middle">Staff</span>
        </a>
        <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse show">
          <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-nurses.index') }}"><i class="align-middle" data-feather="smile"></i>Nursing</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-x-ray-techs.index') }}"><i class="align-middle" data-feather="user"></i>X-RAY Technician</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-receptionists.index') }}"><i class="align-middle" data-feather="user"></i>Receptionist</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-sweepers.index') }}"><i class="align-middle" data-feather="user"></i>Sweeper</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-wardboys.index') }}"><i class="align-middle" data-feather="user"></i>Wardboy</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="{{ route('ho-pharmacy-staff.index') }}"><i class="align-middle" data-feather="user"></i>Pharmacy Staff</a></li>
        </ul>
        </li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ route('departments.index') }}"><i class="align-middle" data-feather="command"></i>Department</a></li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/hospital/all_report') }}"><i class="align-middle" data-feather="file-text"></i>Report</a></li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ url('hospital/all-room') }}"><i class="align-middle" data-feather="home"></i>Room</a></li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ url('hospital/all-upcoming-event') }}"><i class="align-middle" data-feather="eye"></i>Upcoming Event</a></li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ url('hospital/all-patient') }}"><i class="align-middle" data-feather="home"></i>Patient</a></li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ url('hospital/all-appointment') }}"><i class="align-middle" data-feather="thermometer"></i> Appointments</a></li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ url('hospital/all-today-appointment') }}"><i class="align-middle" data-feather="thermometer"></i> Today's appointments</a></li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ url('hospital/all-facility') }}"><i class="align-middle" data-feather="feather"></i> Facility</a></li>
           <li class="sidebar-item"><a class="sidebar-link" href="{{ url('hospital/all-service') }}"><i class="align-middle" data-feather="star"></i> Service</a></li>
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
