@include('layouts.header')


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title">Medical Records</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="https://doccure-laravel.dreamguystech.com/template/public">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Medical Records</li>
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

                    </div>

                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body pt-0">

                                        <nav class="user-tabs mb-4">
                                            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#pat_medicalrecords"
                                                        data-bs-toggle="tab">Medical Records</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#pat_prescription"
                                                        data-bs-toggle="tab">Prescription</a>
                                                </li>
                                            </ul>
                                        </nav>


                                        <div class="tab-content pt-0">

                                            <div id="pat_medicalrecords" class="tab-pane fade show active">
                                                <div class="text-end">
                                                    <a href="javascript:;" class="add-new-btn" data-bs-toggle="modal"
                                                        data-bs-target="#add_medical_records_modal">Add Medical
                                                        Records</a>
                                                </div>
                                                <div class="card card-table mb-0">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-center mb-0"
                                                                id="medical-records_data">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Name</th>
                                                                        <th>Date</th>
                                                                        <th>Description</th>
                                                                        <th>Attachment</th>
                                                                        <th>Orderd By</th>
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


                                            <div class="tab-pane fade" id="pat_prescription">
                                                <div class="card card-table mb-0">
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-center mb-0"
                                                                id="medical-records-prescription-data">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Date</th>
                                                                        <th>Name</th>
                                                                        <th>Doctor</th>
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
