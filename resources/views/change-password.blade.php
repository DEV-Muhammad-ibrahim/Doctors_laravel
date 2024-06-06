@include('layouts.header')

        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title">Change Password</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="https://doccure-laravel.dreamguystech.com/template/public">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Change Password</li>
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

                        <div class="profile-sidebar">
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
                                        <li>
                                            <a href="{{Route('dashboard')}}">
                                                <i class="fas fa-columns"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>






                                        <li>
                                            <a href="medical-details.html">
                                                <i class="fas fa-file-medical-alt"></i>
                                                <span>Medical Details</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="profile-settings.html">
                                                <i class="fas fa-user-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="change-password.html">
                                                <i class="fas fa-lock"></i>
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://doccure-laravel.dreamguystech.com/template/public">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6">

                                        <form>
                                            <div class="mb-3">
                                                <label class="mb-2">Old Password</label>
                                                <div class="pass-group">
                                                    <input class="form-control pass-input" type="password">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-2">New Password</label>
                                                <div class="pass-group">
                                                    <input class="form-control pass-input-sub" type="password">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="mb-2">Confirm Password</label>
                                                <div class="pass-group">
                                                    <input class="form-control pass-new-input" type="password">
                                                </div>
                                            </div>
                                            <div class="submit-section">
                                                <button type="submit" class="btn btn-primary submit-btn">Save
                                                    Changes</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


       @include('layouts.footer')
