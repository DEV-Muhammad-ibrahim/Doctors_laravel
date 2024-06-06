@include('layouts.header')


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title">Profile Settings</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="{{Route('index')}}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Profile Settings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="content">
            <div class="container">
                <div class="row">

                    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
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
                            </div> --}}
                            @include('layouts.patient_dashboard_sidebar')
                            {{-- <div class="dashboard-widget">
                                <nav class="dashboard-menu">
                                    <ul>
                                        <li class>
                                            <a href="patient-dashboard.html">
                                                <i class="fas fa-columns"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="favourites.html">
                                                <i class="fas fa-bookmark"></i>
                                                <span>Favourites</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="dependent.html">
                                                <i class="fas fa-users"></i>
                                                <span>Dependent</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="chat.html">
                                                <i class="fas fa-comments"></i>
                                                <span>Message</span>
                                                <small class="unread-msg">23</small>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="patient-accounts.html">
                                                <i class="fas fa-file-invoice-dollar"></i>
                                                <span>Accounts</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="orders-list.html">
                                                <i class="fas fa-list-alt"></i>
                                                <span>Orders</span>
                                                <small class="unread-msg">7</small>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="medical-records.html">
                                                <i class="fas fa-clipboard"></i>
                                                <span>Add Medical Records</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="medical-details.html">
                                                <i class="fas fa-file-medical-alt"></i>
                                                <span>Medical Details</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="profile-settings.html">
                                                <i class="fas fa-user-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                        <li class>
                                            <a href="change-password.html">
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
                            </div> --}}
                        {{-- </div> --}}
                    </div>

                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body">

                                <form action="{{Route('profile_create')}}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <div class="mb-3">
                                                <div class="change-avatar">
                                                    {{-- <div class="profile-img">
                                                        <img src="assets/img/patients/patient.jpg" alt="User Image">
                                                    </div> --}}
                                                    {{-- <div class="upload-img">
                                                        <div class="change-photo-btn">
                                                            <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                            <input type="file" class="upload">
                                                        </div>
                                                        <small class="form-text text-muted">Allowed JPG, GIF or PNG.
                                                            Max size of
                                                            2MB</small>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">First Name</label>
                                                <input type="text" class="form-control"  value="{{old('first_name')}}" name="first_name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Last Name</label>
                                                <input type="text" class="form-control"  value="{{old('last_name')}}" name="last_name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Date of Birth</label>
                                                <div class="cal-icon">
                                                    <input type="text" class="form-control datetimepicker"
                                                        value="{{old('date_of_birth')}}" name="date_of_birth">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Blood Group</label>
                                                <select class="form-select form-control select" name="blood_group" >
                                                    <option value="A-">A-</option>
                                                    <option value="A+">A+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="O-">O-</option>
                                                    <option value="O+">O+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Email ID</label>
                                                <input type="email" class="form-control"
                                                    name="email"  value="{{old('email')}}">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Mobile</label>
                                                <input type="text" value="{{old('phone')}}" class="form-control" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="mb-2">Address</label>
                                                <input type="text" class="form-control"
                                                value="{{old('address')}}" name="address">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">City</label>
                                                <input type="text" class="form-control" value="{{old('city')}}" name="city">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">State</label>
                                                <input type="text" class="form-control" value="{{old('state')}}" name="state">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Zip Code</label>
                                                <input type="text" class="form-control" value="{{old('zip_code')}}" name="zip_code">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Country</label>
                                                <input type="text" class="form-control" value="{{old('country')}}" name="country">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <input type="submit" class="btn btn-primary submit-btn" value="Save Changes">
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('layouts.footer')
