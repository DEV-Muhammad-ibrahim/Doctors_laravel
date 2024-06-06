@include('layouts.header')


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title">Medical Details</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="{{Route('index')}}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Medical Details</li>
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
                                    <div class="card-header">
                                        <h4 class="card-title float-start pt-2">Medical details</h4>
                                        <a href="#modal_medical_form" class="btn btn-primary float-end"
                                            data-bs-toggle="modal">Add Details</a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card card-table mb-0">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-center mb-0"
                                                        id="medical-details_data">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Name</th>
                                                                <th>BMI</th>
                                                                <th class="text-center">Heart Rate</th>
                                                                <th class="text-center">FBC Status</th>
                                                                <th>Weight</th>
                                                                <th>Order date</th>
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


        @include('layouts.footer')
