@include('layouts.header')


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main</span>
                        </li>
                        <li class>
                            <a href="index_admin.html"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                        </li>
                        <li class>
                            <a href="appointment-list.html"><i class="fe fe-layout"></i>
                                <span>Appointments</span></a>
                        </li>
                        <li class>
                            <a href="specialities.html"><i class="fe fe-users"></i> <span>Specialities</span></a>
                        </li>
                        <li class>
                            <a href="doctor-list.html"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
                        </li>
                        <li class>
                            <a href="patient-list.html"><i class="fe fe-user"></i> <span>Patients</span></a>
                        </li>
                        <li class>
                            <a href="reviews.html"><i class="fe fe-star-o"></i> <span>Reviews</span></a>
                        </li>
                        <li class>
                            <a href="transactions-list.html"><i class="fe fe-activity"></i>
                                <span>Transactions</span></a>
                        </li>
                        <li class>
                            <a href="settings.html"><i class="fe fe-vector"></i> <span>Settings</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fe fe-document"></i> <span> Reports</span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a class href="invoice-report.html">Invoice Reports</a></li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <span>Pages</span>
                        </li>
                        <li class="active">
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
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Profile</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index_admin.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-header">
                            <div class="row align-items-center">
                                <div class="col-auto profile-image">
                                    <a href="javascript:;">
                                        <img class="rounded-circle" alt="User Image"
                                            src="../assets_admin/img/profiles/avatar-01.jpg">
                                    </a>
                                </div>
                                <div class="col ml-md-n2 profile-user-info">
                                    <h4 class="user-name mb-0">Ryan Taylor</h4>
                                    <h6 class="text-muted"><a
                                            href="https://doccure-laravel.dreamguystech.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="cfbdb6aea1bbaeb6a3a0bd8faeaba2a6a1e1aca0a2">[email&#160;protected]</a>
                                    </h6>
                                    <div class="user-Location"><i class="fa-solid fa-location-dot"></i> Florida,
                                        United States
                                    </div>
                                    <div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                </div>
                                <div class="col-auto profile-btn">
                                    <a href class="btn btn-primary">
                                        Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="profile-menu">
                            <ul class="nav nav-tabs nav-tabs-solid">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content profile-tab-cont">

                            <div class="tab-pane fade show active" id="per_details_tab">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>Personal Details</span>
                                                    <a class="edit-link" data-bs-toggle="modal"
                                                        href="#edit_personal_details"><i
                                                            class="fa fa-edit me-1"></i>Edit</a>
                                                </h5>
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                                                    <p class="col-sm-10">John Doe</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Date of
                                                        Birth</p>
                                                    <p class="col-sm-10">24 Jul 1983</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email ID
                                                    </p>
                                                    <p class="col-sm-10"><a
                                                            href="https://doccure-laravel.dreamguystech.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="f2989d9a9c969d97b2978a939f829e97dc919d9f">[email&#160;protected]</a>
                                                    </p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Mobile
                                                    </p>
                                                    <p class="col-sm-10">305-310-5857</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted text-sm-right mb-0">Address</p>
                                                    <p class="col-sm-10 mb-0">4663 Agriculture Lane,<br>
                                                        Miami,<br>
                                                        Florida - 33165,<br>
                                                        United States.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="edit_personal_details" aria-hidden="true"
                                            role="dialog">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Personal Details</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="mb-3">
                                                                        <label class="mb-2">First Name</label>
                                                                        <input type="text" class="form-control"
                                                                            value="John">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="mb-3">
                                                                        <label class="mb-2">Last Name</label>
                                                                        <input type="text" class="form-control"
                                                                            value="Doe">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label class="mb-2">Date of Birth</label>
                                                                        <div class="cal-icon">
                                                                            <input type="text"
                                                                                class="form-control datetimepicker"
                                                                                value="24-07-1983">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="mb-3">
                                                                        <label class="mb-2">Email ID</label>
                                                                        <input type="email" class="form-control"
                                                                            value="johndoe@example.com">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="mb-3">
                                                                        <label class="mb-2">Mobile</label>
                                                                        <input type="text" value="+1 202-555-0125"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <h5 class="form-title"><span>Address</span></h5>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label class="mb-2">Address</label>
                                                                        <input type="text" class="form-control"
                                                                            value="4663 Agriculture Lane">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="mb-3">
                                                                        <label class="mb-2">City</label>
                                                                        <input type="text" class="form-control"
                                                                            value="Miami">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="mb-3">
                                                                        <label class="mb-2">State</label>
                                                                        <input type="text" class="form-control"
                                                                            value="Florida">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="mb-3">
                                                                        <label class="mb-2">Zip Code</label>
                                                                        <input type="text" class="form-control"
                                                                            value="22434">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="mb-3">
                                                                        <label class="mb-2">Country</label>
                                                                        <input type="text" class="form-control"
                                                                            value="United States">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary w-100">Save
                                                                Changes</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>


                            <div id="password_tab" class="tab-pane fade">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Change Password</h5>
                                        <div class="row">
                                            <div class="col-md-10 col-lg-6">
                                                <form>
                                                    <div class="mb-3">
                                                        <label class="mb-2">Old Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="mb-2">New Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="mb-2">Confirm Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Save
                                                        Changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../assets_admin/js/jquery-3.7.0.min.js"></script>

    <script src="../assets_admin/js/bootstrap.bundle.min.js"></script>

    <script src="../assets_admin/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="../assets_admin/js/form-validation.js"></script>

    <script src="../assets_admin/js/jquery.maskedinput.min.js"></script>
    <script src="../assets_admin/js/mask.js"></script>

    <script src="../assets_admin/js/select2.min.js"></script>

    <script src="../assets_admin/js/moment.min.js"></script>
    <script src="../assets_admin/js/bootstrap-datetimepicker.min.js"></script>

    <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="../assets/plugins/fullcalendar/fullcalendar.min.js"></script>
    <script src="../assets/plugins/fullcalendar/jquery.fullcalendar.js"></script>

    <script src="../assets_admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets_admin/plugins/datatables/datatables.min.js"></script>

    <script src="../assets_admin/js/script.js"></script>
</body>

<!-- Mirrored from doccure-laravel.dreamguystech.com/template/public/admin/profile by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 20:53:50 GMT -->

</html>
