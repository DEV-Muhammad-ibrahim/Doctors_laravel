<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccure-laravel.dreamguystech.com/template/public/admin/index_admin by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 20:51:43 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta name="keywords"
        content="practo clone, doccure, doctor appointment, Practo clone html template, doctor booking template">
    <meta name="author" content="Practo Clone HTML Template - Doctor Booking Template">
    <meta property="og:url" content="https://doccure.dreamguystech.com/html/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Doctors Appointment HTML Website Templates | Doccure">
    <meta property="og:description"
        content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta property="og:image" content="assets/img/preview-banner.html">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="https://doccure.dreamguystech.com/html/">
    <meta property="twitter:url" content="https://doccure.dreamguystech.com/html/">
    <meta name="twitter:title" content="Doctors Appointment HTML Website Templates | Doccure">
    <meta name="twitter:description"
        content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
    <meta name="twitter:image" content="assets/img/preview-banner.html">
    <title>Doccure - Dashboard</title>

    <link rel="shortcut icon" type="image/x-icon" href="../assets_admin/img/favicon.png">

    <link rel="stylesheet" href="../assets_admin/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets_admin/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets_admin/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="../assets_admin/css/feather.css">

    <link rel="stylesheet" href="../assets_admin/css/feathericon.min.css">
    <link rel="stylesheet" href="../assets_admin/plugins/morris/morris.css">

    <link rel="stylesheet" href="../assets_admin/css/select2.min.css">

    <link rel="stylesheet" href="../assets_admin/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="../assets_admin/plugins/fullcalendar/fullcalendar.min.css">

    <link rel="stylesheet" href="../assets_admin/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="../assets_admin/css/custom.css">
</head>

<body>

    <div class="main-wrapper">

        @include('layouts.admin_dashboard_sidebar')


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Welcome Admin!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-primary border-primary">
                                        <i class="fe fe-users"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>168</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h6 class="text-muted">Doctors</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-primary w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-success">
                                        <i class="fe fe-credit-card"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>487</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h6 class="text-muted">Patients</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-danger border-danger">
                                        <i class="fe fe-money"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>485</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h6 class="text-muted">Appointment</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-warning border-warning">
                                        <i class="fe fe-folder"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>$62523</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h6 class="text-muted">Revenue</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6">

                        <div class="card card-chart">
                            <div class="card-header">
                                <h4 class="card-title">Revenue</h4>
                            </div>
                            <div class="card-body">
                                <div id="morrisArea"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 col-lg-6">

                        <div class="card card-chart">
                            <div class="card-header">
                                <h4 class="card-title">Status</h4>
                            </div>
                            <div class="card-body">
                                <div id="morrisLine"></div>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-6 d-flex">

                        <div class="card card-table flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">Doctors List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Doctor Name</th>
                                                <th>Speciality</th>
                                                <th>Earned</th>
                                                <th>Reviews</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                                class="avatar-img rounded-circle"
                                                                src="../assets_admin/img/doctors/doctor-thumb-01.jpg"
                                                                alt="User Image"></a>
                                                        <a href="profile.html">Dr. Ruby Perrin</a>
                                                    </h2>
                                                </td>
                                                <td>Dental</td>
                                                <td>$3200.00</td>
                                                <td>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star-o text-secondary"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                                class="avatar-img rounded-circle"
                                                                src="../assets_admin/img/doctors/doctor-thumb-02.jpg"
                                                                alt="User Image"></a>
                                                        <a href="profile.html">Dr. Darren Elder</a>
                                                    </h2>
                                                </td>
                                                <td>Dental</td>
                                                <td>$3100.00</td>
                                                <td>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star-o text-secondary"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                                class="avatar-img rounded-circle"
                                                                src="../assets_admin/img/doctors/doctor-thumb-03.jpg"
                                                                alt="User Image"></a>
                                                        <a href="profile.html">Dr. Deborah Angel</a>
                                                    </h2>
                                                </td>
                                                <td>Cardiology</td>
                                                <td>$4000.00</td>
                                                <td>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star-o text-secondary"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                                class="avatar-img rounded-circle"
                                                                src="../assets_admin/img/doctors/doctor-thumb-04.jpg"
                                                                alt="User Image"></a>
                                                        <a href="profile.html">Dr. Sofia Brient</a>
                                                    </h2>
                                                </td>
                                                <td>Urology</td>
                                                <td>$3200.00</td>
                                                <td>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star-o text-secondary"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                                class="avatar-img rounded-circle"
                                                                src="../assets_admin/img/doctors/doctor-thumb-05.jpg"
                                                                alt="User Image"></a>
                                                        <a href="profile.html">Dr. Marvin Campbell</a>
                                                    </h2>
                                                </td>
                                                <td>Orthopaedics</td>
                                                <td>$3500.00</td>
                                                <td>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star text-warning"></i>
                                                    <i class="fe fe-star-o text-secondary"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 d-flex">

                        <div class="card  card-table flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">Patients List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Patient Name</th>
                                                <th>Phone</th>
                                                <th>Last Visit</th>
                                                <th>Paid</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                                class="avatar-img rounded-circle"
                                                                src="../assets_admin/img/patients/patient1.jpg"
                                                                alt="User Image"></a>
                                                        <a href="profile.html">Charlene Reed </a>
                                                    </h2>
                                                </td>
                                                <td>8286329170</td>
                                                <td>20 Oct 2023</td>
                                                <td>$100.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                                class="avatar-img rounded-circle"
                                                                src="../assets_admin/img/patients/patient2.jpg"
                                                                alt="User Image"></a>
                                                        <a href="profile.html">Travis Trimble </a>
                                                    </h2>
                                                </td>
                                                <td>2077299974</td>
                                                <td>22 Oct 2023</td>
                                                <td>$200.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                                class="avatar-img rounded-circle"
                                                                src="../assets_admin/img/patients/patient3.jpg"
                                                                alt="User Image"></a>
                                                        <a href="profile.html">Carl Kelly</a>
                                                    </h2>
                                                </td>
                                                <td>2607247769</td>
                                                <td>21 Oct 2023</td>
                                                <td>$250.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                                class="avatar-img rounded-circle"
                                                                src="../assets_admin/img/patients/patient4.jpg"
                                                                alt="User Image"></a>
                                                        <a href="profile.html"> Michelle Fairfax</a>
                                                    </h2>
                                                </td>
                                                <td>5043686874</td>
                                                <td>21 Sep 2023</td>
                                                <td>$150.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="profile.html" class="avatar avatar-sm me-2"><img
                                                                class="avatar-img rounded-circle"
                                                                src="../assets_admin/img/patients/patient5.jpg"
                                                                alt="User Image"></a>
                                                        <a href="profile.html">Gina Moore</a>
                                                    </h2>
                                                </td>
                                                <td>9548207887</td>
                                                <td>18 Sep 2023</td>
                                                <td>$350.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> --}}
                {{-- <div class="row">
                    <div class="col-md-12">

                        <div class="card card-table">
                            <div class="card-header">
                                <h4 class="card-title">Appointment List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0" id="index_admin_data">
                                        <thead>
                                            <tr>
                                                <th>Doctor Name</th>
                                                <th>Speciality</th>
                                                <th>Patient Name</th>
                                                <th>Apointment Time</th>
                                                <th>Status</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> --}}
            </div>
        </div>

    </div>


    <script src="../assets_admin/js/jquery-3.7.0.min.js"></script>

    <script src="../assets_admin/js/bootstrap.bundle.min.js"></script>

    <script src="../assets_admin/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../assets_admin/plugins/raphael/raphael.min.js"></script>
    <script src="../assets_admin/plugins/morris/morris.min.js"></script>
    <script src="../assets_admin/js/chart.morris.js"></script>

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
    <script src="../assets_admin/js/appointment.js"></script>

    <script src="../assets_admin/js/script.js"></script>
</body>

<!-- Mirrored from doccure-laravel.dreamguystech.com/template/public/admin/index_admin by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 20:52:27 GMT -->

</html>
