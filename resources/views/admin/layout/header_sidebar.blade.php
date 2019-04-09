
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Start Left menu area -->
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header"
            <a href="{{ url('admin/dashboard') }}"><img class="main-logo img-responsive" src="{{ asset('images/user_images/logo.png') }}" alt="" style="height: 70px; width: 70px;"/></a>
            <strong><a href="{{ url('admin/dashboard') }}"><img src="{{ asset('images/user_images/logo.png')}}" alt="" style="height: 70px; width: 70px;"/></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li>
                        <a title="Dashboard" href="{{ url('/admin/dashboard') }}" aria-expanded="false">
                          <span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span>
                          <span class="mini-click-non">Dashboard</span></a>
                    </li>
                    {{-- <li>
                        <a title="Players" href="{{ route('players.index') }}" aria-expanded="false">
                          <span class="educate-icon educate-student icon-wrap sub-icon-mg" aria-hidden="true"></span>
                          <span class="mini-click-non">Players</span></a>
                    </li> --}}
                    <!-- <li>
                        <a title="Teams" href="{{ url('#') }}" aria-expanded="false">
                          <span class="educate-icon educate-student icon-wrap sub-icon-mg" aria-hidden="true"></span>
                          <span class="mini-click-non">Teams</span></a>
                    </li> -->
                    <li>
                        <a title="Teams" href="{{ route('ad-doctors.index') }}" aria-expanded="false">
                          <span class="educate-icon educate-student icon-wrap sub-icon-mg" aria-hidden="true"></span>
                          <span class="mini-click-non">Doctors</span></a>
                    </li>
                    <li>
                        <a title="User" href="{{ url('admin/all-user') }}" aria-expanded="false">
                          <span class="educate-icon educate-student icon-wrap sub-icon-mg" aria-hidden="true"></span>
                          <span class="mini-click-non">User</span></a>
                    </li>
                    {{-- <li>
                        <a title="Tournaments" href="{{ route('tournaments.index') }}" aria-expanded="false">
                          <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                          <span class="mini-click-non">Tournament</span></a>
                    </li>
                    <li>
                        <a title="Matches" href="{{ route('match.index') }}" aria-expanded="false">
                          <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                          <span class="mini-click-non">Matches</span></a>
                    </li>
                    <li>
                        <a title="Matches" href="{{ route('sponsors.index') }}" aria-expanded="false">
                          <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                          <span class="mini-click-non">Sponsors</span></a>
                    </li> --}}
                    <li>
                        <a title="Matches" href="{{ url('admin/all-admin') }}" aria-expanded="false">
                          <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                          <span class="mini-click-non">Admins </span></a>
                    </li>

                    <li>
                        <a title="Matches" href="{{ route('ad-hospital-reports.index') }}" aria-expanded="false">
                          <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                          <span class="mini-click-non">Hospital-Reports</span></a>
                    </li>
                    <li>
                        <a title="Matches" href="{{ url('/admin/all-department') }}" aria-expanded="false">
                          <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                          <span class="mini-click-non">Departments</span></a>
                    </li>
                    <li>
                        <a title="Matches" href="{{ url('/admin/all-report-type') }}" aria-expanded="false">
                          <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                          <span class="mini-click-non">Report type</span></a>
                    </li>
                    <li>
                        <a title="Matches" href="{{ url('/admin/all-reports') }}" aria-expanded="false">
                          <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                          <span class="mini-click-non">Reports</span></a>
                    </li>
                    <li>
                        <a title="Matches" href="{{ url('/admin/all-role') }}" aria-expanded="false">
                          <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                          <span class="mini-click-non">Role</span></a>
                    </li>
                    <li>
                        <a title="Matches" href="{{ url('/admin/all-staff') }}" aria-expanded="false">
                          <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                          <span class="mini-click-non">Staff</span></a>
                    </li>
                    <li>
                        <a title="Matches" href="{{ route('ad-upcoming-events.index') }}" aria-expanded="false">
                          <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                          <span class="mini-click-non">Upcoming Event</span></a>
                    </li>
                    <li>
                        <a title="Logout" href="{{ route('admin.logout') }}" aria-expanded="false">
                          <span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span>
                          <span class="mini-click-non">Logout</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="index.html"><img class="main-logo" src="{{ asset('images/admin_images/logo/01.png') }}" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                      <i class="educate-icon educate-nav"></i>
                    </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">
                                        <ul class="nav navbar-nav mai-top-nav">
                                            <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                                            </li>
                                            {{-- <li class="nav-item"><a href="{{ route('players.index') }}" class="nav-link">Players</a>
                                            </li> --}}
                                            <li class="nav-item"><a href="{{ url('#') }}" class="nav-link">Teams</a>
                                            </li>
                                            <li class="nav-item"><a href="{{ url('admin/all-user') }}" class="nav-link">Users</a>
                                            </li>
                                            {{-- <li class="nav-item"><a href="{{ route('tournaments.index') }}" class="nav-link">Tournament</a>
                                            </li>
                                            <li class="nav-item"><a href="{{ route('match.index') }}" class="nav-link">Matches</a>
                                            </li> --}}
                                            <li class="nav-item"><a href="{{ route('admin.logout') }}" class="nav-link">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item dropdown">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                    <div class="message-single-top">
                                                        <h1>Message</h1>
                                                    </div>
                                                    <ul class="message-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="{{ asset('images/admin_images/contact/1.jpg') }}" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="{{ asset('images/admin_images/contact/4.jpg') }}" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="{{ asset('images/admin_images/contact/3.jpg') }}" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="message-img">
                                                                    <img src="{{ asset('images/admin_images/contact/2.jpg') }}" alt="">
                                                                </div>
                                                                <div class="message-content">
                                                                    <span class="message-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="message-view">
                                                        <a href="#">View All Messages</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                    <div class="notification-single-top">
                                                        <h1>Notifications</h1>
                                                    </div>
                                                    <ul class="notification-menu">
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Advanda Cro</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Sulaiman din</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="notification-icon">
                                                                    <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                                </div>
                                                                <div class="notification-content">
                                                                    <span class="notification-date">16 Sept</span>
                                                                    <h2>Victor Jara</h2>
                                                                    <p>Please done this project as soon possible.</p>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="notification-view">
                                                        <a href="#">View All Notification</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                          <img src="{{ asset('images/admin_images/product/pro4.jpg') }}" alt="" />

                          <span class="admin-name">XYZ</span>
                          <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                        </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                    </li>
                                                    <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                    </li>
                                                    <li><a href="#"><span class="edu-icon edu-money author-log-ic"></span>User Billing</a>
                                                    </li>
                                                    <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                    </li>
                                                    <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-menu"></i></a>

                                                <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                    <ul class="nav nav-tabs custon-set-tab">
                                                        <li class="active"><a data-toggle="tab" href="#Notes">Notes</a>
                                                        </li>
                                                        <li><a data-toggle="tab" href="#Projects">Projects</a>
                                                        </li>
                                                        <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content custom-bdr-nt">
                                                        <div id="Notes" class="tab-pane fade in active">
                                                            <div class="notes-area-wrap">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="fa fa-comments-o"></i> Latest Notes</h2>
                                                                    <p>You have 10 new message.</p>
                                                                </div>
                                                                <div class="notes-list-area notes-menu-scrollbar">
                                                                    <ul class="notes-menu-list">
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('images/admin_images/contact/4.jpg') }}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('images/admin_images/contact/1.jpg') }}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('images/admin_images/contact/2.jpg') }}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('images/admin_images/contact/3.jpg') }}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('images/admin_images/contact/4.jpg')}}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('images/admin_images/contact/1.jpg') }}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('images/admin_images/contact/2.jpg') }}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('images/admin_images/contact/1.jpg') }}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('images/admin_images/contact/2.jpg') }}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="notes-list-flow">
                                                                                    <div class="notes-img">
                                                                                        <img src="{{ asset('images/admin_images/contact/3.jpg') }}" alt="" />
                                                                                    </div>
                                                                                    <div class="notes-content">
                                                                                        <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                        <span>Yesterday 2:45 pm</span>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Projects" class="tab-pane fade">
                                                            <div class="projects-settings-wrap">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="fa fa-cube"></i> Latest projects</h2>
                                                                    <p> You have 20 projects. 5 not completed.</p>
                                                                </div>
                                                                <div class="project-st-list-area project-st-menu-scrollbar">
                                                                    <ul class="projects-st-menu-list">
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Web Development</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">1 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content">
                                                                                        <p>Completion with: 28%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-1"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Software Development</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">2 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content project-rating-cl">
                                                                                        <p>Completion with: 68%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 68%;" class="progress-bar hd-tp-2"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Graphic Design</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">3 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content">
                                                                                        <p>Completion with: 78%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 78%;" class="progress-bar hd-tp-3"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Web Design</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">4 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content project-rating-cl2">
                                                                                        <p>Completion with: 38%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 38%;" class="progress-bar progress-bar-danger hd-tp-4"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Business Card</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">5 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content">
                                                                                        <p>Completion with: 28%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-5"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Ecommerce Business</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">6 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content project-rating-cl">
                                                                                        <p>Completion with: 68%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 68%;" class="progress-bar hd-tp-6"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Woocommerce Plugin</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">7 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content">
                                                                                        <p>Completion with: 78%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 78%;" class="progress-bar"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">
                                                                                <div class="project-list-flow">
                                                                                    <div class="projects-st-heading">
                                                                                        <h2>Wordpress Theme</h2>
                                                                                        <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                        <span class="project-st-time">9 hours ago</span>
                                                                                    </div>
                                                                                    <div class="projects-st-content project-rating-cl2">
                                                                                        <p>Completion with: 38%</p>
                                                                                        <div class="progress progress-mini">
                                                                                            <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                                                                        </div>
                                                                                        <p>Project end: 4:00 pm - 12.06.2014</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Settings" class="tab-pane fade">
                                                            <div class="setting-panel-area">
                                                                <div class="note-heading-indicate">
                                                                    <h2><i class="fa fa-gears"></i> Settings Panel</h2>
                                                                    <p> You have 20 Settings. 5 not completed.</p>
                                                                </div>
                                                                <ul class="setting-panel-list">
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Show notifications</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                        <label class="onoffswitch-label" for="example">
                                              <span class="onoffswitch-inner"></span>
                                              <span class="onoffswitch-switch"></span>
                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Disable Chat</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                                                                        <label class="onoffswitch-label" for="example3">
                                              <span class="onoffswitch-inner"></span>
                                              <span class="onoffswitch-switch"></span>
                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Enable history</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                                        <label class="onoffswitch-label" for="example4">
                                              <span class="onoffswitch-inner"></span>
                                              <span class="onoffswitch-switch"></span>
                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Show charts</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                                                                        <label class="onoffswitch-label" for="example7">
                                              <span class="onoffswitch-inner"></span>
                                              <span class="onoffswitch-switch"></span>
                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Update everyday</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                                                                        <label class="onoffswitch-label" for="example2">
                                              <span class="onoffswitch-inner"></span>
                                              <span class="onoffswitch-switch"></span>
                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Global search</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">
                                                                                        <label class="onoffswitch-label" for="example6">
                                              <span class="onoffswitch-inner"></span>
                                              <span class="onoffswitch-switch"></span>
                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="checkbox-setting-pro">
                                                                            <div class="checkbox-title-pro">
                                                                                <h2>Offline users</h2>
                                                                                <div class="ts-custom-check">
                                                                                    <div class="onoffswitch">
                                                                                        <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                                                                        <label class="onoffswitch-label" for="example5">
                                              <span class="onoffswitch-inner"></span>
                                              <span class="onoffswitch-switch"></span>
                                            </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                    {{-- <li><a href="{{ route('players.index') }}">Players</a></li> --}}
                                    <li><a href="{{ url('#') }}">Teams</a></li>
                                    <li><a href="{{ url('admin/all-user') }}">Users</a></li>
                                    {{-- <li><a href="{{ route('tournaments.index') }}">Tournaments</a></li>
                                    <li><a href="{{ route('match.index') }}">Matches</a></li> --}}
                                    <li><a href="{{ route('admin.logout') }}">Logout</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="breadcome-heading">
                                        <form role="search" class="sr-input-func">
                                            <input type="text" placeholder="Search..." class="search-int form-control">
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Dashboard V.1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
