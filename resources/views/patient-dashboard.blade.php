@include('layouts.header')

<div class="breadcrumb-bar-two">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <h2 class="breadcrumb-title">Dashboard</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('index') }}">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<div class="content">
    <div class="container">
        <div class="row">

            <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                @include('layouts.patient_dashboard_sidebar')
                {{-- <div class="profile-sidebar">
                            <div class="widget-profile pro-widget-content">
                                <div class="profile-info-widget">
                                    <a href="javascript:;" class="booking-doc-img">
                                        <img src="assets/img/patients/patient.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3>Richard Wilson</h3>
                                        <div class="patient-details">
                                            <h5><i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38 years</h5>
                                            <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-widget">
                                <nav class="dashboard-menu">
                                    <ul>
                                        <li class="active">
                                            <a href="patient-dashboard.html">
                                                <i class="fas fa-columns"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>


                                        <li class>
                                            <a href="{{Route('chat')}}">
                                                <i class="fas fa-comments"></i>
                                                <span>Message</span>
                                                <small class="unread-msg">23</small>
                                            </a>
                                        </li>




                                        <li class>
                                            <a href="{{Route('profile')}}">
                                                <i class="fas fa-user-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="{{Route('change_password_patient')}}">
                                                <i class="fas fa-lock"></i>
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{Route('logout')}}">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div> --}}
            </div>

            <div class="col-md-7 col-lg-8 col-xl-9">
                {{-- <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="mb-3">
                                            <img src="assets/img/specialities/pt-dashboard-01.png" alt="heart-image"
                                                width="55">
                                        </div>
                                        <h5>Heart Rate</h5>
                                        <h6>12 <sub>bpm</sub></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="mb-3">
                                            <img src="assets/img/specialities/pt-dashboard-02.png"
                                                alt="thermometer-image" width="55">
                                        </div>
                                        <h5>Body Temperature</h5>
                                        <h6>18 <sub>C</sub></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="mb-3">
                                            <img src="assets/img/specialities/pt-dashboard-03.png"
                                                alt="hospital-equipment" width="55">
                                        </div>
                                        <h5>Glucose Level</h5>
                                        <h6>70 - 90</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-dashboard-top">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="mb-3">
                                            <img src="assets/img/specialities/pt-dashboard-04.png"
                                                alt="hospital-equipment" width="55">
                                        </div>
                                        <h5>Blood Pressure</h5>
                                        <h6>202/90 <sub>mg/dl</sub></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row patient-graph-col">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Graph Status</h4>
                                    </div>
                                    <div class="card-body pt-2 pb-2 mt-1 mb-1">
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
                                                <a href="javascript:;" class="graph-box" data-bs-toggle="modal"
                                                    data-bs-target="#graph1">
                                                    <div>
                                                        <h4>BMI Status</h4>
                                                    </div>
                                                    <div class="graph-img">
                                                        <img src="assets/img/shapes/graph-01.png" alt="shapes-icon">
                                                    </div>
                                                    <div class="graph-status-result mt-3">
                                                        <span class="graph-update-date">Last Update 6d</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
                                                <a href="javascript:;" class="graph-box pink-graph"
                                                    data-bs-toggle="modal" data-bs-target="#graph2">
                                                    <div>
                                                        <h4>Heart Rate Status</h4>
                                                    </div>
                                                    <div class="graph-img">
                                                        <img src="assets/img/shapes/graph-02.png" alt="graph-icon">
                                                    </div>
                                                    <div class="graph-status-result mt-3">
                                                        <span class="graph-update-date">Last Update 2d</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
                                                <a href="javascript:;" class="graph-box sky-blue-graph"
                                                    data-bs-toggle="modal" data-bs-target="#graph3">
                                                    <div>
                                                        <h4>FBC Status</h4>
                                                    </div>
                                                    <div class="graph-img">
                                                        <img src="assets/img/shapes/graph-03.png" alt="chart-icon">
                                                    </div>
                                                    <div class="graph-status-result mt-3">
                                                        <span class="graph-update-date">Last Update 5d</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 patient-graph-box">
                                                <a href="javascript:;" class="graph-box orange-graph"
                                                    data-bs-toggle="modal" data-bs-target="#graph4">
                                                    <div>
                                                        <h4>Weight Status</h4>
                                                    </div>
                                                    <div class="graph-img">
                                                        <img src="assets/img/shapes/graph-04.png" alt="chart-icon">
                                                    </div>
                                                    <div class="graph-status-result mt-3">
                                                        <span class="graph-update-date">Last Update 3d</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                <div class="card">
                    <div class="card-body pt-0">

                        <nav class="user-tabs mb-4">
                            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#pat_appointments"
                                        data-bs-toggle="tab">Appointments</a>
                                </li>
                                {{-- <li class="nav-item">
                                            <a class="nav-link" href="#pat_prescriptions"
                                                data-bs-toggle="tab">Prescriptions</a>
                                        </li> --}}
                                {{-- <li class="nav-item">
                                            <a class="nav-link" href="#pat_medical_records"
                                                data-bs-toggle="tab"><span class="med-records">Medical
                                                    Records</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#pat_billing" data-bs-toggle="tab">Billing</a>
                                        </li> --}}
                            </ul>
                        </nav>


                        <div class="tab-content pt-0">

                            <div id="pat_appointments" class="tab-pane fade show active">
                                <div class="card card-table mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-center mb-0"
                                                id="patient-dashboard_data">
                                                <thead>
                                                    <tr>
                                                        <th>Doctor</th>
                                                        <th>Appt Date</th>
                                                        <th>time</th>
                                                        <th>Amount</th>

                                                        <th>Status</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($appointments as $appointment)
                                                        <tr>
                                                            <td>{{ $appointment->doctor_name }}</td>
                                                            <td>{{ $appointment->date }}</td>
                                                            <td>{{ $appointment->time }}</td>
                                                            <td>$100</td>
                                                             @if ($appointment->status === 'pending')

                                                             <td>
                                                                 <button
                                                                 class="btn btn-sm bg-warning-light m-2">
                                                                 <i class="alert-circle"></i>
                                                                 Pending</button>
                                                                </td>
                                                                @endif
                                                            @if ($appointment->status === 'Confirmed')
                                                                <td>
                                                                    <button class="btn btn-sm bg-success-light m-2">
                                                                        <i class="fas fa-check "></i> Confirmed
                                                                    </button>
                                                                </td>
                                                            @elseif($appointment->status === 'Canceled')
                                                                <td>
                                                                    <button class="btn btn-sm bg-danger-light m-2">
                                                                        <i class="fas fa-times"></i> Canceled
                                                                    </button>
                                                                </td>
                                                            @endif


                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="pat_prescriptions">
                                <div class="card card-table mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-center mb-0"
                                                id="patient-dashboard-prescription_data">
                                                <thead>
                                                    <tr>
                                                        <th>Date </th>
                                                        <th>Name</th>
                                                        <th>Created by </th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="pat_medical_records" class="tab-pane fade">
                                <div class="card card-table mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-center mb-0"
                                                id="patient-dashboard-medical_data">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Date </th>
                                                        <th>Description</th>
                                                        <th>Attachment</th>
                                                        <th>Created</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="pat_billing" class="tab-pane fade">
                                <div class="card card-table mb-0">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-center mb-0" id="pat_billing_table">
                                                <thead>
                                                    <tr>
                                                        <th>Invoice No</th>
                                                        <th>Doctor</th>
                                                        <th>Amount</th>
                                                        <th>Paid On</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
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


@include('layouts.footer')
