<div class="header">

    <div class="header-left">
        <a href="{{Route('admin_dashboard')}}" class="logo">
            <img src="{{asset('../assets/img/logo.png')}}" alt="Logo">
        </a>
        <a href="{{Route('admin_dashboard')}}" class="logo logo-small">
            <img src="../assets_admin/img/logo-small.png" alt="Logo" width="30" height="30">
        </a>
    </div>

    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fe fe-text-align-left"></i>
    </a>
    {{-- <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div> --}}

    <a class="mobile_btn" id="mobile_btn">
        <i class="fa fa-bars"></i>
    </a>


    <ul class="nav user-menu">

        {{-- <li class="nav-item dropdown noti-dropdown">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <i class="fe fe-bell"></i> <span class="badge rounded-pill">3</span>
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="#">
                                <div class="notify-block d-flex">
                                    <span class="avatar avatar-sm flex-shrink-0">
                                        <img class="avatar-img rounded-circle" alt="User Image"
                                            src="../assets_admin/img/doctors/doctor-thumb-01.jpg">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">Dr. Ruby
                                                Perrin</span> Schedule <span class="noti-title">her
                                                appointment</span></p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="notify-block d-flex">
                                    <span class="avatar avatar-sm flex-shrink-0">
                                        <img class="avatar-img rounded-circle" alt="User Image"
                                            src="../assets_admin/img/patients/patient1.jpg">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">Charlene Reed</span>
                                            has booked her appointment to <span class="noti-title">Dr. Ruby
                                                Perrin</span></p>
                                        <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="notify-block d-flex">
                                    <span class="avatar avatar-sm flex-shrink-0">
                                        <img class="avatar-img rounded-circle" alt="User Image"
                                            src="../assets_admin/img/patients/patient2.jpg">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">Travis Trimble</span>
                                            sent a amount of $210 for his <span
                                                class="noti-title">appointment</span></p>
                                        <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="notify-block d-flex">
                                    <span class="avatar avatar-sm flex-shrink-0">
                                        <img class="avatar-img rounded-circle" alt="User Image"
                                            src="../assets_admin/img/patients/patient3.jpg">
                                    </span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">Carl Kelly</span>
                                            send a message <span class="noti-title"> to his doctor</span></p>
                                        <p class="noti-time"><span class="notification-time">12 mins
                                                ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="#">View all Notifications</a>
                </div>
            </div>
        </li> --}}


        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <span class="user-img"><img class="rounded-circle"
                        src="../assets_admin/img/profiles/avatar-01.jpg" width="31"
                        alt="Ryan Taylor"></span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="../assets_admin/img/profiles/avatar-01.jpg" alt="User Image"
                            class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6>Ryan Taylor</h6>
                        <p class="text-muted mb-0">Administrator</p>
                    </div>
                </div>
                {{-- <a class="dropdown-item" href="profile.html">My Profile</a>
                <a class="dropdown-item" href="settings.html">Settings</a> --}}
                <a class="dropdown-item" href="{{Route('logout_admin')}}">Logout</a>
            </div>
        </li>

    </ul>

</div>


<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="active">
                    <a href="{{Route('admin_dashboard')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>
                <li class>
                    <a href="{{Route('admin_appointments')}}"><i class="fe fe-layout"></i>
                        <span>Appointments</span></a>
                </li>
                {{-- <li class>
                    <a href="specialities.html"><i class="fe fe-users"></i> <span>Specialities</span></a>
                </li> --}}
                <li class>
                    <a href="{{Route('admin_doctors')}}"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
                </li>
                <li class>
                    <a href="{{Route('admin_patients')}}"><i class="fe fe-user"></i> <span>Patients</span></a>
                </li>
                {{-- <li class>
                    <a href="reviews.html"><i class="fe fe-star-o"></i> <span>Reviews</span></a>
                </li> --}}
                {{-- <li class>
                    <a href="transactions-list.html"><i class="fe fe-activity"></i>
                        <span>Transactions</span></a>
                </li> --}}
                {{-- <li class>
                    <a href="settings.html"><i class="fe fe-vector"></i> <span>Settings</span></a>
                </li> --}}
                {{-- <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Reports</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class href="invoice-report.html">Invoice Reports</a></li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Pages</span>
                </li>
                <li class>
                    <a href="profile.html"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Authentication </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class href="login.html"> Login </a></li>
                        <li><a class href="register.html"> Register </a></li>
                        <li><a class href="forgot-password.html"> Forgot Password </a></li>
                        <li><a class href="lock-screen.html"> Lock Screen </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-warning"></i> <span> Error Pages </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class href="error-404.html">404 Error </a></li>
                        <li><a class href="error-500.html">500 Error </a></li>
                    </ul>
                </li>
                <li>
                    <a class href="blank-page.html"><i class="fe fe-file"></i> <span>Blank Page</span></a>
                </li>
                <li class="menu-title">
                    <span>UI Interface</span>
                </li>
                <li class>
                    <a class href="components.html"><i class="fe fe-vector"></i> <span>Components</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-layout"></i> <span> Forms </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class href="form-basic-inputs.html">Basic Inputs </a></li>
                        <li><a class href="form-input-groups.html">Input Groups </a></li>
                        <li><a class href="form-horizontal.html">Horizontal Form</a></li>
                        <li><a class href="form-vertical.html"> Vertical Form </a></li>
                        <li><a class href="form-mask.html"> Form Mask </a></li>
                        <li><a class href="form-validation.html"> Form Validation </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-table"></i> <span> Tables </span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class href="tables-basic.html">Basic Tables </a></li>
                        <li><a class href="data-tables.html">Data Table </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fe fe-code"></i> <span>Multi Level</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li class="submenu">
                            <a href="javascript:void(0);"> <span>Level 1</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span> Level 2</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);">Level 3</a></li>
                                        <li><a href="javascript:void(0);">Level 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);"> <span>Level 1</span></a>
                        </li>
                    </ul> --}}
                </li>
            </ul>
        </div>
    </div>
</div>
