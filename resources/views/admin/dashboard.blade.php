@extends('admin.layout.design')
@section('content')
    <aside class="right-side right-padding">

        <section class="content-header">
            <div class="row">
                <div class="col-md-6 col-6">
                    <div class="header-data">
                        <h1>Dashboard</h1>
                        <p>Welcome To Core Plus</p>
                    </div>
                </div>
                <div class="col-md-6 col-6">
                    <div class="header-charts">
                        <div class="sparkline-chart pull-right d-none d-md-block">
                            <div class="number" id="sparkline_line"></div>
                            <small class="server-title">Server Load:</small>
                        </div>
                        <div class="sparkline-chart pull-right">
                            <div class="number" id="sparkline_bar"></div>
                            <small class="sales-title">Daily Sales:</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header sales-header">
                            <h3 class="heading_text card-title d-inline-block">Sales</h3>
                            <span class="pull-right line-bar-charts">
                                <button class="btn btn-sm btn-link chart_switch" data-chart="bar">Bar Chart</button>
                                <button class="btn btn-sm btn-default chart_switch" data-chart="line">Line Chart
                                </button>
                            </span>
                        </div>
                        <div class="card-body">
                            <div id="sales-line-bar" style="height:280px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card weather-widget mt-1">
                        <div class="row weather-data">
                            <div class="col-md-12 temperature">
                                <h2>19<sup><sup>o</sup><sub>c</sub></sup></h2>
                                <p class="location"><i class="fa fa-map-marker text-default" aria-hidden="true"></i>
                                    Hong Kong, China</p>
                                <p>Showers till tomorrow morning</p>
                                <i class="wi wi-night-rain icon"></i>
                            </div>
                        </div>
                        <div class="weather-footer">
                            <div class="text-center row">
                                <div class="col-lg-3 col-2 popup popup1 pr-0">
                                    <h5>MON</h5>
                                    <i class="wi wi-day-lightning"></i>
                                    <p>21<sup>o<sub>c</sub></sup></p>
                                </div>
                                <div class="col-lg-3 col-2 popup pr-0">
                                    <h5>TUE</h5>
                                    <i class="wi wi-cloudy"></i>
                                    <p>28<sup>o<sub>c</sub></sup></p>
                                </div>
                                <div class="col-lg-3 col-2 popup pr-0">
                                    <h5>WED</h5>
                                    <i class="wi wi-night-rain-mix"></i>
                                    <p>26<sup>o<sub>c</sub></sup></p>
                                </div>
                                <div class="col-lg-3 col-2 popup pr-0">
                                    <h5>THU</h5>
                                    <i class="wi wi-day-sunny"></i>
                                    <p>31<sup>o<sub>c</sub></sup></p>
                                </div>
                                <div class="col-2 d-xl-none d-lg-none d-md-block d-sm-block d-block popup pr-0">
                                    <h5>FRI</h5>
                                    <i class="wi wi-day-lightning"></i>
                                    <p>24<sup>o<sub>c</sub></sup></p>
                                </div>
                                <div class="col-2 d-xl-none d-lg-none d-md-block d-sm-block d-block popup pl-0">
                                    <h5>SAT</h5>
                                    <i class="wi wi-night-alt-snow"></i>
                                    <p>25<sup>o<sub>c</sub></sup></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header d-inline-block">
                            <h3 class="card-title">Live Views</h3>
                        </div>
                        <div class="card-body real-time">
                            <div class="total-visits">
                                <span>238</span>
                                <small>visitors On-line</small>
                                <div class="progress">
                                    <div role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"
                                         style="width: 23%;" class="progress-bar bg-info">
                                    </div>
                                </div>
                            </div>
                            <div class="visit-source">
                                <div class="visit-count pull-left">
                                    <small>82 <span>Direct</span></small>
                                    <div class="progress">
                                        <div role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 29.1%;" class="progress-bar bg-primary">
                                        </div>
                                    </div>
                                </div>
                                <div class="visit-count pull-left">
                                    <small>156 <span>Search</span></small>
                                    <div class="progress">
                                        <div role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 70.9%;" class="progress-bar bg-danger">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="visitors-os pull-left text-center">
                                    <p>43.4%</p>
                                    <span>Windows</span>
                                </div>
                                <div class="visitors-os pull-left text-center">
                                    <p>32.4%</p>
                                    <span>Mac Os</span>
                                </div>
                                <div class="visitors-os pull-left text-center">
                                    <p>34.2%</p>
                                    <span>Others</span>
                                </div>
                            </div>
                            <div id='chart-live' class='chart half with-transitions'>
                                <svg></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card panel-widget">
                        <div class="card-header">
                            <h3 class="card-title">Daily Traffic</h3>
                        </div>
                        <div class="card-header d-inline-block">
                            <ul class="basic-list">
                                <li><img src="{{ asset('images/admin_images/chrome.png') }}" alt="chrome"> Chrome
                                    <span class="right label bg-success pull-right">42.8%</span></li>
                                <li><img src="{{ asset('images/admin_images/firefox.png') }}" alt="firefox">Firefox
                                    <span class="right label bg-danger pull-right">16.9%</span></li>
                                <li><img src="{{ asset('images/admin_images/safari.png') }}" alt="safari">Safari
                                    <span class="right label bg-primary pull-right">15.5%</span></li>
                                <li><img src="{{ asset('images/admin_images/opera.png') }}" alt="opera">Opera
                                    <span class="right label bg-info pull-right">11.8%</span></li>
                                <li><img src="{{ asset('images/admin_images/Ie.png') }}" alt="Internet Explorer">IE
                                    <span class="right label bg-danger pull-right">3.2%</span></li>
                                <li><img src="{{ asset('images/admin_images/mobile.png') }}" alt="mobile">Mobile
                                    <span class="right label bg-warning pull-right">3%</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header d-inline-block">
                            <h3 class="card-title">Recent Activities</h3>
                        </div>
                        <div class="card-body">
                            <ul class="auto-update">
                                <li>
                                    <div class="activity">
                                        <div class="activity-image pull-left">
                                            <img src="{{ asset('images/admin_images/authors/avatar.jpg') }}" alt="profile-image"
                                                 class="rounded-circle media-image">
                                        </div>
                                        <div class="activity-content pull-left">
                                            <h5 class="heading text-primary">Praesent ornare nisl lorem</h5>
                                            <p class="text-muted">
                                                <small>7 min ago</small>
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="activity">
                                        <div class="activity-image pull-left">
                                            <img src="{{ asset('images/admin_images/authors/avatar2.jpg') }}" alt="profile-image"
                                                 class="rounded-circle media-image">
                                        </div>
                                        <div class="activity-content pull-left">
                                            <h5 class="heading text-primary">Nunc ultrices</h5>
                                            <p class="text-muted">
                                                <small>10 min ago</small>
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="activity">
                                        <div class="activity-image pull-left">
                                            <img src="{{ asset('images/admin_images/authors/avatar3.jpg') }}" alt="profile-image"
                                                 class="rounded-circle media-image">
                                        </div>
                                        <div class="activity-content pull-left">
                                            <h5 class="heading text-primary">Praesent ornare nisl</h5>
                                            <p class="text-muted">
                                                <small>Yesterday at 10:20pm</small>
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="activity">
                                        <div class="activity-image pull-left">
                                            <img src="{{ asset('images/admin_images/authors/avatar4.jpg') }}" alt="profile-image"
                                                 class="rounded-circle media-image">
                                        </div>
                                        <div class="activity-content pull-left">
                                            <h5 class="heading text-primary">Nunc ultrices tortor eu</h5>
                                            <p class="text-muted">
                                                <small>2 days ago at 1:20pm</small>
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="activity">
                                        <div class="activity-image pull-left">
                                            <img src="{{ asset('images/admin_images/authors/avatar5.jpg') }}" alt="profile-image"
                                                 class="rounded-circle media-image">
                                        </div>
                                        <div class="activity-content pull-left">
                                            <h5 class="heading text-primary">Praesent ornare nisl</h5>
                                            <p class="text-muted">
                                                <small>Just now</small>
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="activity">
                                        <div class="activity-image pull-left">
                                            <img src="{{ asset('images/admin_images/authors/avatar7.jpg') }}" alt="profile-image"
                                                 class="rounded-circle media-image">
                                        </div>
                                        <div class="activity-content pull-left">
                                            <h5 class="heading text-primary">Nunc ultrices tortor eu massa</h5>
                                            <p class="text-muted">
                                                <small>2 min ago</small>
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Server Load</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="load-measure">
                                    <h5>CPU Load:</h5>
                                    <canvas id="cpu-load" height="300" width="300"></canvas>
                                </div>
                                <div class="load-measure">
                                    <h5>Disk Space Used:</h5>
                                    <canvas id="space-used" height="300" width="300"></canvas>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                    <div class="card panel-widget">
                        <div class="card-header">
                            <h3 class="card-title">To Do List</h3>
                        </div>
                        <div class="card-body tasks_list task-row">
                            <form class="row list_of_items">
                                <div class="todolist_list showactions">
                                    <div class="col-md-9 col-sm-9 col-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck checkbox checkbox-info">
                                            <input type="checkbox" class="striked styled">
                                            <label>
                                            </label>
                                        </div>
                                        <div class="todotext  todoitemjs"> The Passage has a strong culture of volunteering
                                        </div>
                                    </div>
                                    <div class="col-md-2  col-sm-2 col-3 todoitembtns">
                                        <a href="#" class="tododelete redcolor pull-right">
                                            <i class="fa fa-times showbtns" aria-hidden="true"></i>
                                        </a>
                                        <span class="striks pull-right showbtns">|</span>
                                        <a href="#" class="todoedit pull-right">
                                            <i class="fa fa-pencil showbtns" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="un-do pull-right" hidden>
                                            <i class="fa fa-repeat showbtns" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="todolist_list showactions">
                                    <div class="col-md-9 col-sm-9 col-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck checkbox checkbox-info">
                                            <input type="checkbox" class="striked">
                                            <label>
                                            </label>
                                        </div>
                                        <div class="todotext  todoitemjs">There are many variations of passages here
                                        </div>
                                    </div>
                                    <div class="col-md-2  col-sm-2 col-3 todoitembtns">
                                        <a href="#" class="tododelete redcolor pull-right">
                                            <i class="fa fa-times showbtns" aria-hidden="true"></i>
                                        </a>
                                        <span class="striks pull-right showbtns">|</span>
                                        <a href="#" class="todoedit pull-right">
                                            <i class="fa fa-pencil showbtns" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="un-do pull-right" hidden>
                                            <i class="fa fa-repeat showbtns" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="todolist_list showactions">
                                    <div class="col-md-9 col-sm-9 col-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck checkbox checkbox-info">
                                            <input type="checkbox" class="striked">
                                            <label>
                                            </label>
                                        </div>
                                        <div class="todotext  todoitemjs">It has roots in a piece of classical Latin
                                        </div>
                                    </div>
                                    <div class="col-md-2  col-sm-2 col-3 todoitembtns">
                                        <a href="#" class="tododelete redcolor pull-right">
                                            <i class="fa fa-times showbtns" aria-hidden="true"></i>
                                        </a>
                                        <span class="striks pull-right showbtns">|</span>
                                        <a href="#" class="todoedit pull-right">
                                            <i class="fa fa-pencil showbtns" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="un-do pull-right" hidden>
                                            <i class="fa fa-repeat showbtns" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="todolist_list showactions">
                                    <div class="col-md-9 col-sm-9 col-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck checkbox checkbox-info">
                                            <input type="checkbox" class="striked">
                                            <label>
                                            </label>
                                        </div>
                                        <div class="todotext  todoitemjs">Combined with a handful of model sentence
                                        </div>
                                    </div>
                                    <div class="col-md-2  col-sm-2 col-3 todoitembtns">
                                        <a href="#" class="tododelete redcolor pull-right">
                                            <i class="fa fa-times showbtns" aria-hidden="true"></i>
                                        </a>
                                        <span class="striks pull-right showbtns">|</span>
                                        <a href="#" class="todoedit pull-right">
                                            <i class="fa fa-pencil showbtns" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="un-do pull-right" hidden>
                                            <i class="fa fa-repeat showbtns" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <div class="todolist_list adds task add_new">

                                <form id="main_input_box" class="col-12 my-2 my-lg-0">
                                    <div class="row">
                                        <div class="form-group pull-left col-lg-9 col-md-8 col-sm-7 pr-md-0 col-12">
                                            <label class="control-label sr-only" for="custom_textbox">Add Task</label>
                                            <input id="custom_textbox" name="item" type="text" required
                                                   placeholder="Add list item here" class="form-control mr-sm-2" aria-label="text"/>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-3 pl-md-0  col-12">
                                            <input type="submit" value="Add Task"
                                                   class="btn btn-primary add_button add_task"/>
                                            <input type="button" value="Save" class="btn btn-info save_todo"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row social_popup">
                <div class="col-11 col-sm-10 col-md-6 offset-md-2 social_popup_icons">
                    <div class="social-icons">
                        <div><i class="fa fa-google google" aria-hidden="true"></i></div>
                        <div><i class="fa fa-facebook facebook" aria-hidden="true"></i></div>
                        <div><i class="fa fa-twitter twitter" aria-hidden="true"></i></div>
                        <div><i class="fa fa-linkedin linkedin" aria-hidden="true"></i></div>
                        <div><i class="fa fa-youtube-square youtube" aria-hidden="true"></i></div>
                        <div><i class="fa fa-dribbble dribbble" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div id="right">
                <div id="slim2">
                    <div class="rightsidebar-right">
                        <div class="rightsidebar-right-content">
                            <h5 class="rightsidebar-right-heading rightsidebar-right-heading-first text-uppercase text-xs">
                                <i class="menu-icon  fa fa-fw fa-paw"></i> Contacts
                            </h5>
                            <ul class="list-unstyled margin-none">
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="{{ asset('images/admin_images/authors/avatar1.jpg') }}" height="20" width="20"
                                             class="rounded-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-primary"></i> Alanis
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="{{ asset('images/admin_images/authors/avatar.jpg') }}" height="20" width="20"
                                             class="rounded-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-primary"></i> Rolando
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="{{ asset('images/admin_images/authors/avatar2.jpg') }}" height="20" width="20"
                                             class="rounded-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-primary"></i> Marlee
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="{{ asset('images/admin_images/authors/avatar3.jpg') }}" height="20" width="20"
                                             class="rounded-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-warning"></i> Marlee
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="{{ asset('images/admin_images/authors/avatar4.jpg') }}" height="20" width="20"
                                             class="rounded-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-danger"></i> Kamryn
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="{{ asset('images/admin_images/authors/avatar5.jpg') }}" height="20" width="20"
                                             class="rounded-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-muted"></i> Cielo
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="{{ asset('images/admin_images/authors/avatar7.jpg') }}" height="20" width="20"
                                             class="rounded-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-muted"></i> Charlene
                                    </a>
                                </li>
                            </ul>
                            <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                <i class="fa fa-fw fa-tasks"></i> Tasks
                            </h5>
                            <ul class="list-unstyled m-t-25">
                                <li>
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <small class="pull-right text-muted">
                                                40% Complete
                                            </small>
                                        </p>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 40%">
                                                    <span class="sr-only">
                                                        40% Complete (success)
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <small class="pull-right text-muted">
                                                20% Complete
                                            </small>
                                        </p>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 20%">
                                                    <span class="sr-only">
                                                        20% Complete
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <small class="pull-right text-muted">
                                                60% Complete
                                            </small>
                                        </p>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 60%">
                                                    <span class="sr-only">
                                                        60% Complete (warning)
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <small class="pull-right text-muted">
                                                80% Complete
                                            </small>
                                        </p>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-danger" role="progressbar"
                                                 aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 80%">
                                                    <span class="sr-only">
                                                        80% Complete (danger)
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                <i class="fa fa-fw fa-group"></i> Recent Activities
                            </h5>
                            <div>
                                <ul class="list-unstyled">
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-comment fa-fw text-primary"></i> New Comment
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-twitter fa-fw text-success"></i> 3 New Followers
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-envelope fa-fw text-info"></i> Message Sent
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-tasks fa-fw text-warning"></i> New Task
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-upload fa-fw text-danger"></i> Server Rebooted
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-warning fa-fw text-primary"></i> Server Not Responding
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-shopping-cart fa-fw text-success"></i> New Order Placed
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-money fa-fw text-info"></i> Payment Received
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- right side bar end -->
        </section>
        <!-- /.content --> </aside>
    <!-- /.right-side --> </div>
<!-- ./wrapper -->
@endsection
