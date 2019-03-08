<nav class="sidebar sidebar-sticky">
  <div class="sidebar-content  js-simplebar">
    <a class="sidebar-brand" href="{{ url('hospital/dashboard') }}">
      <i class="align-middle" data-feather="layers"></i>
      <span class="align-middle">Vuze</span>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-header">
        Main
      </li>
      <li class="sidebar-item active">
        {{-- <a href="{{ url('/hospital/dashboard') }}" data-toggle="collapse" class="font-weight-bold sidebar-link">
          <i class="align-middle" data-feather="home"></i>
          {{-- <span class="align-middle">Dashboard</span>
          {{-- <span class="sidebar-badge badge badge-primary">14</span>
        </a> --}}
          <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/hospital/dashboard') }}"><i class="align-middle" data-feather="home"></i>Dashboard</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="{{ route('doctors.index') }}"><i class="align-middle" data-feather="user"></i>Doctor</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/hospital/all_nureses') }}"><i class="align-middle" data-feather="smile"></i>Nureses</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="{{ route('departments.index') }}"><i class="align-middle" data-feather="command"></i>Department</a></li>
          <li class="sidebar-item"><a class="sidebar-link" href="{{ url('/hospital/all_recetionist') }}"><i class="align-middle" data-feather="edit-3"></i>Receptionist</a></li>



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
