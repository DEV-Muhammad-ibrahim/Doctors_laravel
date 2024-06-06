@include('layouts.header')


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title">Appointments</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="{{Route('index')}}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Appointments</li>
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
                        <div class="appointments">

                            @foreach ($appointments as $appointment)

                            <div class="appointment-list">
                                <div class="profile-info-widget">
                                    <a href="patient-profile.html" class="booking-doc-img">
                                        <img src="{{asset('assets/img/patients/patient.jpg')}}" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3><a href="patient-profile.html">{{$appointment->patient_name}}</a></h3>
                                        <div class="patient-details">
                                            <h5><i class="far fa-clock"></i>{{$appointment->date}},{{$appointment->time}}</h5>
                                            {{-- <h5><i class="fas fa-map-marker-alt"></i> Newyork, United States</h5>
                                            <h5><i class="fas fa-envelope"></i> <a
                                                href=""
                                                class="__cf_email__"
                                                    data-cfemail="acdec5cfc4cddec8ecc9d4cdc1dcc0c982cfc3c1">[email&#160;protected]</a>
                                                </h5>
                                            <h5 class="mb-0"><i class="fas fa-phone"></i> +1 923 782 4575</h5> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="appointment-action">
                                    @if ($appointment->status === 'pending')

                                        <div class="table-action">
                                            <form action="{{ route('appointments.updateStatus', ['id' => $appointment->id]) }}" method="POST">
                                             @method('PUT')
                                             @csrf
                                             <input type="hidden" name="status" value="Confirmed">
                                             <button type="submit" class="btn btn-sm bg-success-light m-2">
                                                 <i class="fas fa-check"></i> Accept
                                                 </button>
                                             </form>
                                             <form action="{{ route('patient_profile_view', ['id' => $appointment->patient_id]) }}" >
                                                {{-- @method('POST') --}}
                                                @csrf
                                                {{-- <input type="hidden" name="status" value="Confirmed"> --}}
                                                <button type="submit" class="btn btn-sm bg-primary-light m-2">
                                                    <i class="fas fa-check"></i> View
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

                                     @endif
                                     @if($appointment->status === 'Confirmed')
                                     <button  class="btn btn-sm bg-success-light m-2">
                                         <i class="fas fa-check"></i> Confirmed
                                         </button>

                                     @elseif ( $appointment->status === 'Canceled')

                                         <button type="submit" class="btn btn-sm bg-danger-light m-2">
                                             <i class="fas fa-times"></i> Canceled
                                         </button>

                                     @endif

                                </div>
                            </div>
                            @endforeach




                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('layouts.footer')
