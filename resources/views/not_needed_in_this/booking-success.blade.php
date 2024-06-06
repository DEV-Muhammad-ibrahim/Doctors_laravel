@include('layouts.header')


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title">Booking</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="{{Route('index')}}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Booking</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <div class="content success-page-cont">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">

                        <div class="card success-card">
                            <div class="card-body">
                                <div class="success-cont">
                                    <i class="fas fa-check"></i>
                                    <h3>Appointment booked Successfully!</h3>
                                    <p>Appointment booked with <strong>{{$doctor}}</strong><br> on <strong>{{$date}}

                                            {{$time}}</strong></p>
                                    {{-- <a href="invoice-view.html" class="btn btn-primary view-inv-btn">View Invoice</a> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        @include('layouts.footer')
