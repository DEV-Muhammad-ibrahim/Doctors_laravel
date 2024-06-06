

@include('layouts.header')

<div class="breadcrumb-bar-two">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <h2 class="breadcrumb-title">Dashboard</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a
                            href="{{Route('index')}}">Home</a></li>
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


 @include('layouts.doctor_dashboard_sidebar')
            </div>
            <div class="col-md-7 col-lg-8 col-xl-9">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card dash-card">
                            {{-- <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-4">
                                        <div class="dash-widget dct-border-rht">
                                            <div class="circle-bar circle-bar1">
                                                <div class="circle-graph1" data-percent="75">
                                                    <img src="{{asset('assets/img/icon-01.png')}}" class="img-fluid" alt="patient">
                                                </div>
                                            </div>
                                            {{-- <div class="dash-widget-info">
                                                <h6>Total Patient</h6>
                                                <h3>1500</h3>
                                                <p class="text-muted">Till Today</p>
                                            </div> --}}
                                        {{-- </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="dash-widget dct-border-rht">
                                            <div class="circle-bar circle-bar2">
                                                <div class="circle-graph2" data-percent="65">
                                                    <img src="{{asset('assets/img/icon-02.png')}}" class="img-fluid" alt="Patient">
                                                </div>
                                            </div> --}}
                                            {{-- <div class="dash-widget-info">
                                                <h6>Today Patient</h6>
                                                <h3>160</h3>
                                                <p class="text-muted">06, Nov 2023</p>
                                            </div> --}}
                                        {{-- </div>
                                    </div>
                                    <div class="col-md-12 col-lg-4">
                                        <div class="dash-widget">
                                            <div class="circle-bar circle-bar3">
                                                <div class="circle-graph3" data-percent="50">
                                                    <img src="{{asset('assets/img/icon-03.png')}}" class="img-fluid" alt="Patient">
                                                </div>
                                            </div> --}}
                                            {{-- <div class="dash-widget-info">
                                                <h6>Appoinments</h6>
                                                <h3>85</h3>
                                                <p class="text-muted">06, Apr 2023</p>
                                            </div> --}}
                                        {{-- </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="mb-4">Patient Appoinment</h4>
                        <div class="appointment-tab">

                            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#upcoming-appointments"
                                        data-bs-toggle="tab">Upcoming</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#today-appointments" data-bs-toggle="tab">Today</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane show active" id="upcoming-appointments">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-hover table-center mb-0 doctor-dashboard_data">
                                                    <thead>
                                                        <tr>
                                                            <th>Patient Name</th>
                                                            <th>Appt Date</th>
                                                            <th>Purpose</th>

                                                            <th>Paid Amount</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach ($appointments as $appointment)

                                                        <tr>
                                                            <td>
                                                                <h2 class="table-avatar">
                                                                    <a href="patient-profile"
                                                                        class="avatar avatar-sm me-2"><img
                                                                            class="avatar-img rounded-circle"
                                                                            src="{{asset('assets/img/patients/patient.jpg')}}"
                                                                            alt="User Image"></a>
                                                                            <a href="patient-profile">{{$appointment->patient_name}}
                                                                        <span>#{{$appointment->patient_id}}</span></a>
                                                                </h2>
                                                            </td>
                                                            <td>{{$appointment->date}} <span class="d-block text-info">{{$appointment->time}}
                                                                </span></td>
                                                            <td>{{$appointment->purpose}}</td>

                                                            <td>$100</td>
                                                           @if ($appointment->status === 'pending')

                                                           <td>
                                                               <div class="table-action">
                                                                   <form action="{{ route('appointments.updateStatus', ['id' => $appointment->id]) }}" method="POST">
                                                                    @method('PUT')
                                                                    @csrf
                                                                    <input type="hidden" name="status" value="Confirmed">
                                                                    <button type="submit" class="btn btn-sm bg-success-light m-2">
                                                                        <i class="fas fa-check"></i> Accept
                                                                        </button>
                                                                    </form>

                                                                    <form action="{{ route('appointments.updateStatus', ['id' => $appointment->id]) }}" method="POST">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <input type="hidden" name="status" value="Canceled">
                                                                        <button type="submit" class="btn btn-sm bg-danger-light m-2">
                                                                            <i class="fas fa-times"></i> Cancel
                                                                        </button>
                                                                    </form>
                                                                </form>
                                                                </div>
                                                            </td>
                                                            @endif
                                                            @if($appointment->status === 'Confirmed')
                                                            <td><button  class="btn btn-sm bg-success-light m-2">
                                                                <i class="fas fa-check"></i> Confirmed
                                                                </button></td>

                                                            @elseif ( $appointment->status === 'Canceled')
                                                            <td>
                                                                <button type="submit" class="btn btn-sm bg-danger-light m-2">
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


                                <div class="tab-pane" id="today-appointments">
                                    <div class="card card-table mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-hover table-center mb-0 doctor-dashboard_data_2">
                                                    <thead>
                                                        <tr>
                                                            <th>Patient Name</th>
                                                            <th>Appt Date</th>
                                                            <th>Purpose</th>
                                                            <th>Type</th>
                                                            <th>Paid Amount</th>
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





@include('layouts.footer')

