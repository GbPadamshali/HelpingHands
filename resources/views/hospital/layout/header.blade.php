<div class="main">
  <nav class="navbar navbar-expand navbar-light bg-white sticky-top">
  <a class="sidebar-toggle d-flex mr-3">
    <i class="align-self-center" data-feather="menu"></i>
  </a>

  <form class="form-inline d-none d-sm-inline-block">
    <input class="form-control form-control-no-border navbar-search mr-sm-2" type="text" placeholder="Search topics..." aria-label="Search">
  </form>

  <div class="navbar-collapse collapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-icon dropdown-toggle ml-2 d-inline-block d-sm-none" href="#" data-toggle="dropdown">
          <div class="position-relative">
            <i class="align-middle mt-n1" data-feather="settings"></i>
          </div>
        </a>
        <a class="nav-link nav-link-user dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
          <img src="{{ asset('images/hospital_images/avatars/avatar-5.jpg' )}}" class="avatar img-fluid rounded mr-1" alt="Kathy Davis" /> <span class="text-dark">Kathy Davis</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="pages-profile.html">Profile</a>
          <a class="dropdown-item" href="#">Analytics</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="pages-settings.html">Settings & Privacy</a>
          <a class="dropdown-item" href="#">Help</a>
          <a class="dropdown-item" href="#">Sign out</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-icon dropdown-toggle ml-2" href="#" data-toggle="dropdown">
          <div class="position-relative">
            <i class="align-middle" data-feather="message-square"></i>
            <span class="indicator">4</span>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0">
          <div class="dropdown-menu-header">
            <div class="position-relative">
              4 New Messages
            </div>
          </div>
          <div class="list-group">
            <a href="#" class="list-group-item">
              <div class="row no-gutters align-items-center">
                <div class="col-2">
                  <img src="{{ asset('images/hospital_images/avatars/avatar-5.jpg') }}" class="avatar img-fluid rounded-circle" alt="Kathy Davis">
                </div>
                <div class="col-10 pl-2">
                  <div class="text-dark">Kathy Davis</div>
                  <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                  <div class="text-muted small mt-1">15m ago</div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="row no-gutters align-items-center">
                <div class="col-2">
                  <img src="{{ asset('images/hospital_images/avatars/avatar-2.jpg') }}" class="avatar img-fluid rounded-circle" alt="John Smith">
                </div>
                <div class="col-10 pl-2">
                  <div class="text-dark">John Smith</div>
                  <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
                  <div class="text-muted small mt-1">2h ago</div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="row no-gutters align-items-center">
                <div class="col-2">
                  <img src="{{ asset('images/hospital_images/avatars/avatar-4.jpg') }}" class="avatar img-fluid rounded-circle" alt="Marie Salter">
                </div>
                <div class="col-10 pl-2">
                  <div class="text-dark">Marie Salter</div>
                  <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                  <div class="text-muted small mt-1">4h ago</div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="row no-gutters align-items-center">
                <div class="col-2">
                  <img src="{{ asset('images/hospital_images/avatars/avatar-3.jpg') }}" class="avatar img-fluid rounded-circle" alt="Teresa Lessard">
                </div>
                <div class="col-10 pl-2">
                  <div class="text-dark">Teresa Lessard</div>
                  <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
                  <div class="text-muted small mt-1">5h ago</div>
                </div>
              </div>
            </a>
          </div>
          <div class="dropdown-menu-footer">
            <a href="#" class="text-muted">Show all messages</a>
          </div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-icon dropdown-toggle ml-2" href="#" id="alertsDropdown" data-toggle="dropdown">
          <div class="position-relative">
            <i class="align-middle" data-feather="bell"></i>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
          <div class="dropdown-menu-header">
            4 New Notifications
          </div>
          <div class="list-group">
            <a href="#" class="list-group-item">
              <div class="row no-gutters align-items-center">
                <div class="col-2">
                  <i class="text-danger" data-feather="alert-circle"></i>
                </div>
                <div class="col-10">
                  <div class="text-dark">Update completed</div>
                  <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                  <div class="text-muted small mt-1">2h ago</div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="row no-gutters align-items-center">
                <div class="col-2">
                  <i class="text-warning" data-feather="bell"></i>
                </div>
                <div class="col-10">
                  <div class="text-dark">Lorem ipsum</div>
                  <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                  <div class="text-muted small mt-1">6h ago</div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="row no-gutters align-items-center">
                <div class="col-2">
                  <i class="text-primary" data-feather="home"></i>
                </div>
                <div class="col-10">
                  <div class="text-dark">Login from 192.186.1.1</div>
                  <div class="text-muted small mt-1">8h ago</div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="row no-gutters align-items-center">
                <div class="col-2">
                  <i class="text-success" data-feather="user-plus"></i>
                </div>
                <div class="col-10">
                  <div class="text-dark">New connection</div>
                  <div class="text-muted small mt-1">Anna accepted your request.</div>
                  <div class="text-muted small mt-1">12h ago</div>
                </div>
              </div>
            </a>
          </div>
          <div class="dropdown-menu-footer">
            <a href="#" class="text-muted">Show all notifications</a>
          </div>
        </div>
      </li>

    </ul>
  </div>
</nav>
