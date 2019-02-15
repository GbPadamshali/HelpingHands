<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="#">
                            <img src="{{ asset('images/admin_images/authors/avatar1.jpg') }}" class="rounded-circle" alt="User Image">
                        </a>
                        <div class="content-profile pl-3">
                            <h4 class="media-heading">
                                Nataliapery
                            </h4>
                            <ul class="icon-list list-inline">
                                <li>
                                    <a href="users.html">
                                        <i class="fa fa-fw fa-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen.html">
                                        <i class="fa fa-fw fa-lock"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="edit_user.html">
                                        <i class="fa fa-fw fa-gear"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="fa fa-fw fa-sign-out"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <li>
                        <a href="{{ url('/admin/dashboard') }}">
                            <i class="menu-icon fa fa-fw fa-tachometer"></i>
                            <span class="mm-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('#') }}">
                            <i class="menu-icon fa fa-user-secret"></i>
                            <span class="mm-text">Admins</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('#') }}">
                            <i class="menu-icon fa fa-university"></i>
                            <span class="mm-text">Hospitals</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('#') }}">
                            <i class="menu-icon fa fa-users"></i>
                            <span class="mm-text">Users</span>
                        </a>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-files-o"></i>
                            <span>Pages</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="lockscreen.html"> <i class="fa fa-fw fa-lock"></i> Lockscreen </a></li>
                            <li><a href="lockscreen2.html"> <i class="fa fa-fw fa-lock"></i> Lockscreen V2 </a></li>
                            <li><a href="invoice.html"> <i class="fa fa-fw fa-newspaper-o"></i> Invoice </a></li>
                        </ul>
                    </li>
                </ul>
                <!-- / .navigation --> </div>
            <!-- menu --> </section>
        <!-- /.sidebar --> </aside>
