
<div class="profile-sidebar">
    <div class="widget-profile pro-widget-content">
        <div class="profile-info-widget">
            <a href="javascript:;" class="booking-doc-img">
                <img src="{{asset('assets/img/patients/patient.jpg')}}" alt="User Image">
            </a>
            <div class="profile-det-info">
                <h3>{{ auth()->user()->name }}</h3>
                <div class="patient-details">
                    {{-- <h5><i class="fas fa-birthday-cake"></i> 24 Jul 1983, 38 years</h5>
                    <h5 class="mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</h5> --}}
                </div>
            </div>
        </div>
    </div>


<div class="dashboard-widget">
    <nav class="dashboard-menu">
        <ul>
            <li class="active">
                <a href="{{Route('dashboard')}}">
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

            {{-- <li class>
                <a href="{{Route('add_medical')}}">
                    <i class="fas fa-clipboard"></i>
                    <span>Add Medical Records</span>
                </a>
            </li> --}}
            {{-- <li class>
                <a href="{{Route('medical_view')}}">
                    <i class="fas fa-file-medical-alt"></i>
                    <span>Medical Details</span>
                </a>
            </li> --}}
            <li class="">
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
</div>



