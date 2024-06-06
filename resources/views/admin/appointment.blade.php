<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccure-laravel.dreamguystech.com/template/public/admin/appointment-list by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 20:53:51 GMT -->
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
    <title>Doccure - Appointment List Page</title>

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
                            <h3 class="page-title">Appointments</h3>
                            <ul class="breadcrumb">
                                {{-- <li class="breadcrumb-item"><a href="index_admin.html">Dashboard</a></li> --}}
                                {{-- <li class="breadcrumb-item active">Appointments</li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive" id="index_admin_table_wrapper">
                                    <table class="datatable table table-hover table-center mb-0"
                                        id="appointment_data">
                                        <thead>
                                            <tr>
                                                <th>Doctor Name</th>
                                                <th>Purpose</th>
                                                <th>Patient Name</th>
                                                <th>Apointment Time</th>
                                                <th>Status</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($appointments as $appointment)

                                            <tr>
                                                <td>{{$appointment->doctor_name}}</td>
                                                <td>{{$appointment->purpose}}</td>
                                                <td>{{$appointment->patient_name}}</td>
                                                <td>{{$appointment->time}}</td>
                                                <td>{{$appointment->status}}</td>
                                                <td>$100</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


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
    <script src="../assets_admin/js/appointment.js"></script>

    <script src="../assets_admin/js/script.js"></script>
</body>

<!-- Mirrored from doccure-laravel.dreamguystech.com/template/public/admin/appointment-list by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2023 20:53:51 GMT -->

</html>
