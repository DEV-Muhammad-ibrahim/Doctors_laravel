<div class="profile-sidebar">
    <div class="widget-profile pro-widget-content">
        <div class="profile-info-widget">
            <a href="javascript:;" class="booking-doc-img">
                <img src="{{asset('assets/img/doctors/doctor-thumb-02.jpg')}}" alt="User Image">
            </a>
            <div class="profile-det-info">
                <h3>{{Auth::user()->name;}}</h3>
                <div class="patient-details">
                    <h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="dashboard-widget">
        <nav class="dashboard-menu">
            <ul>
                <li class="active">
                    <a href="{{Route('doctor_dashboard')}}">
                        <i class="fas fa-columns"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class>
                    <a href="{{route('appointments')}}">
                        <i class="fas fa-calendar-check"></i>
                        <span>Appointments</span>
                    </a>
                </li>
                {{-- <li class>
                    <a href="{{Route('patients')}}">
                        <i class="fas fa-user-injured"></i>
                        <span>My Patients</span>
                    </a>
                </li> --}}

                <li class>
                    <a href="{{Route('available_timings')}}">
                        <i class="fas fa-clock"></i>
                        <span>Available Timings</span>
                    </a>
                </li>

                {{-- <li class>
                    <a href="{{route('reviews')}}">
                        <i class="fas fa-star"></i>
                        <span>Reviews</span>
                    </a>
                </li> --}}
                <li class>
                    <a href="{{Route('doctor_chat')}}">
                        <i class="fas fa-comments"></i>
                        <span>Message</span>
                        <small class="unread-msg">23</small>
                    </a>
                </li>
                <li class>
                    <a href="{{Route('doctor_profile')}}">
                        <i class="fas fa-user-cog"></i>
                        <span>Profile Settings</span>
                    </a>
                </li>

                <li class>
                    <a href="{{Route('change_password')}}">
                        <i class="fas fa-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>
                <li>
                    <a href="{{Route('logout_doctor')}}">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
