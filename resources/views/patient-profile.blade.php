@include('layouts.header')
        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title">Profile</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="https://doccure-laravel.dreamguystech.com/template/public">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar dct-dashbd-lft">

                        <div class="card widget-profile pat-widget-profile">
                            <div class="card-body">
                                <div class="pro-widget-content">
                                    <div class="profile-info-widget">
                                        <a href="javascript:;" class="booking-doc-img">
                                            <img src="assets/img/patients/patient.jpg" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3>Richard Wilson</h3>
                                            <div class="patient-details">
                                                <h5><b>Patient ID :</b> PT0016</h5>
                                                <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork,
                                                    United States
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="patient-info">
                                    <ul>
                                        <li>Phone <span>+1 952 001 8563</span></li>
                                        <li>Age <span>38 Years, Male</span></li>
                                        <li>Blood Group <span>AB+</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Last Booking</h4>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="media align-items-center d-flex">
                                        <div class="me-3 flex-shrink-0">
                                            <img alt="Image placeholder" src="assets/img/doctors/doctor-thumb-02.jpg"
                                                class="avatar  rounded-circle">
                                        </div>
                                        <div class="media-body flex-grow-1">
                                            <h5 class="d-block mb-0">Dr. Darren Elder </h5>
                                            <span class="d-block text-sm text-muted">Dentist</span>
                                            <span class="d-block text-sm text-muted">14 Jul 2023 5.00 PM</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media align-items-center d-flex">
                                        <div class="me-3 flex-shrink-0">
                                            <img alt="Image placeholder" src="assets/img/doctors/doctor-thumb-02.jpg"
                                                class="avatar  rounded-circle">
                                        </div>
                                        <div class="media-body flex-grow-1">
                                            <h5 class="d-block mb-0">Dr. Darren Elder </h5>
                                            <span class="d-block text-sm text-muted">Dentist</span>
                                            <span class="d-block text-sm text-muted">12 Jul 2023 11.00 AM</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-7 col-lg-8 col-xl-9 dct-appoinment">
                        <div class="card">
                            <div class="card-body pt-0">
                                <div class="user-tabs">
                                    <ul class="nav nav-tabs nav-tabs-bottom nav-justified flex-wrap">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#pat_appointments"
                                                data-bs-toggle="tab">Appointments</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#pres"
                                                data-bs-toggle="tab"><span>Prescription</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#medical" data-bs-toggle="tab"><span
                                                    class="med-records">Medical Records</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#billing"
                                                data-bs-toggle="tab"><span>Billing</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">

                                    <div id="pat_appointments" class="tab-pane fade show active">
                                        <div class="card card-table mb-0">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-center mb-0"
                                                        id="patient-profile_data">
                                                        <thead>
                                                            <tr>
                                                                <th>Doctor</th>
                                                                <th>Appt Date</th>
                                                                <th>Booking Date</th>
                                                                <th>Amount</th>
                                                                <th>Follow Up</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="pres">
                                        <div>
                                            <a href="add-prescription.html" class="add-new-btn">Add Prescription</a>
                                        </div>
                                        <div class="card card-table mb-0">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Date </th>
                                                                <th>Name</th>
                                                                <th>Created by </th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>14 Nov 2023</td>
                                                                <td>Prescription 1</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-01.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. Ruby Perrin
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>13 Nov 2023</td>
                                                                <td>Prescription 2</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-02.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. Darren Elder
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="edit-prescription.html"
                                                                            class="btn btn-sm bg-success-light">
                                                                            <i class="fas fa-edit"></i> Edit
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-danger-light">
                                                                            <i class="far fa-trash-alt"></i> Delete
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>12 Nov 2023</td>
                                                                <td>Prescription 3</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-03.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. Deborah Angel
                                                                            <span>Cardiology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>11 Nov 2023</td>
                                                                <td>Prescription 4</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-04.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. Sofia Brient
                                                                            <span>Urology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>10 Nov 2023</td>
                                                                <td>Prescription 5</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-05.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. Marvin
                                                                            Campbell <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>9 Nov 2023</td>
                                                                <td>Prescription 6</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-06.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. Katharine
                                                                            Berthold <span>Orthopaedics</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>8 Nov 2023</td>
                                                                <td>Prescription 7</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-07.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. Linda Tobin
                                                                            <span>Neurology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>7 Nov 2023</td>
                                                                <td>Prescription 8</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-08.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. Paul Richard
                                                                            <span>Dermatology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>6 Nov 2023</td>
                                                                <td>Prescription 9</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-09.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. John Gibbs
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>5 Nov 2023</td>
                                                                <td>Prescription 10</td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-10.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. Olga Barlow
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="medical">
                                        <div>
                                            <a href="javascript:;" class="add-new-btn" data-bs-toggle="modal"
                                                data-bs-target="#add_medical_records">Add Medical Records</a>
                                        </div>
                                        <div class="card card-table mb-0">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-center mb-0"
                                                        id="patient-profile-medical_data">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Date </th>
                                                                <th>Description</th>
                                                                <th>Attachment</th>
                                                                <th>Created</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody></tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane" id="billing">
                                        <div>
                                            <a class="add-new-btn" href="add-billing.html">Add Billing</a>
                                        </div>
                                        <div class="card card-table mb-0">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Invoice No</th>
                                                                <th>Doctor</th>
                                                                <th>Amount</th>
                                                                <th>Paid On</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <a href="invoice-view.html">#INV-0010</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-01.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Ruby Perrin
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$450</td>
                                                                <td>14 Nov 2023</td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="invoice-view.html">#INV-0009</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-02.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. Darren Elder
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$300</td>
                                                                <td>13 Nov 2023</td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                        <a href="edit-billing.html"
                                                                            class="btn btn-sm bg-success-light">
                                                                            <i class="fas fa-edit"></i> Edit
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-danger-light">
                                                                            <i class="far fa-trash-alt"></i> Delete
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="invoice-view.html">#INV-0008</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-03.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. Deborah Angel
                                                                            <span>Cardiology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$150</td>
                                                                <td>12 Nov 2023</td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="invoice-view.html">#INV-0007</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-04.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. Sofia Brient
                                                                            <span>Urology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$50</td>
                                                                <td>11 Nov 2023</td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="invoice-view.html">#INV-0006</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-05.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. Marvin
                                                                            Campbell <span>Ophthalmology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$600</td>
                                                                <td>10 Nov 2023</td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="invoice-view.html">#INV-0005</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-06.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. Katharine
                                                                            Berthold <span>Orthopaedics</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$200</td>
                                                                <td>9 Nov 2023</td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="invoice-view.html">#INV-0004</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-07.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. Linda Tobin
                                                                            <span>Neurology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$100</td>
                                                                <td>8 Nov 2023</td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="invoice-view.html">#INV-0003</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-08.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. Paul Richard
                                                                            <span>Dermatology</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$250</td>
                                                                <td>7 Nov 2023</td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="invoice-view.html">#INV-0002</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-09.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. John Gibbs
                                                                            <span>Dental</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$175</td>
                                                                <td>6 Nov 2023</td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a href="invoice-view.html">#INV-0001</a>
                                                                </td>
                                                                <td>
                                                                    <h2 class="table-avatar">
                                                                        <a href="doctor-profile.html"
                                                                            class="avatar avatar-sm me-2">
                                                                            <img class="avatar-img rounded-circle"
                                                                                src="assets/img/doctors/doctor-thumb-10.jpg"
                                                                                alt="User Image">
                                                                        </a>
                                                                        <a href="doctor-profile.html">Dr. Olga Barlow
                                                                            <span>#0010</span></a>
                                                                    </h2>
                                                                </td>
                                                                <td>$550</td>
                                                                <td>5 Nov 2023</td>
                                                                <td>
                                                                    <div class="table-action">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-primary-light">
                                                                            <i class="fas fa-print"></i> Print
                                                                        </a>
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-sm bg-info-light">
                                                                            <i class="far fa-eye"></i> View
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
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
                </div>
            </div>
        </div>


       @include('layouts.footer')
