@include('layouts.header')


        <div class="breadcrumb-bar-two">
            <div class="container">
                <div class="row align-items-center inner-banner">
                    <div class="col-md-12 col-12 text-center">
                        <h2 class="breadcrumb-title">Patient Profile</h2>
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="{{Route('index')}}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Patient Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="container">

                <div class="card">
                    <div class="card-body">
                        <div class="doctor-widget">
                            <div class="doc-info-left">
                                <div class="doctor-img">
                                    <img src="{{asset('assets/img/patients/patient.jpg')}}" class="img-fluid"
                                        alt="User Image">
                                </div>
                                <div class="doc-info-cont">
                                    <h4 class="doc-name">{{$patient->first_name}}.{{$patient->last_name}}</h4>
                                    <p class="doc-speciality">{{$patient->email}}</p>
                                    <p class="doc-department">{{$patient->blood_group}}</p>
                                    {{-- <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">(35)</span>
                                    </div> --}}
                                    <div class="clinic-details">
                                        <p class="doc-location"><i class="fas fa-map-marker-alt"></i>{{$patient->city}},
                                            {{$patient->address}}
                                            </p>
                                        <ul class="clinic-gallery">
                                            <div wire:id="YPKJfOg5qgEBnxLPmqwz"
                                                wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;YPKJfOg5qgEBnxLPmqwz&quot;,&quot;name&quot;:&quot;fancybox-component&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;doctor-profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;3e994cc8&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;20996bcd20e637ca53c0a72f6e2bcd7f57acb71e4c85dd5ee05306b1fda86af6&quot;}}">
                                                <li>
                                                    <a data-fancybox="gallery"
                                                        href="assets/img/features/feature-01.jpg">
                                                        <img src="{{asset('assets/img/features/feature-01.jpg')}}"
                                                            alt="Product Image">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-fancybox="gallery"
                                                        href="assets/img/features/feature-02.jpg">
                                                        <img src="{{asset('assets/img/features/feature-02.jpg')}}"
                                                            alt="Product Image">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-fancybox="gallery"
                                                        href="assets/img/features/feature-03.jpg">
                                                        <img src="{{asset('assets/img/features/feature-03.jpg')}}"
                                                            alt="Product Image">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-fancybox="gallery"
                                                        href="assets/img/features/feature-04.jpg">
                                                        <img src="{{asset('assets/img/features/feature-04.jpg')}}"
                                                            alt="Product Image">
                                                    </a>
                                                </li>
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="clinic-services">
                                        <span>{{$patient->phone}}</span>

                                    </div>
                                </div>
                            </div>
                            {{-- <div class="doc-info-right">
                                <div class="clini-infos">
                                    <ul>
                                        <li><i class="far fa-thumbs-up"></i> 99%</li>
                                        <li><i class="far fa-comment"></i> 35 Feedback</li>
                                        <li><i class="fas fa-map-marker-alt"></i> Newyork, USA</li>
                                        <li><i class="far fa-money-bill-alt"></i> $100 per hour </li>
                                    </ul>
                                </div>
                                <div class="doctor-action">
                                    <a href="javascript:void(0)" class="btn btn-white fav-btn">
                                        <i class="far fa-bookmark"></i>
                                    </a>
                                    <a href="chat.html" class="btn btn-white msg-btn">
                                        <i class="far fa-comment-alt"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-white call-btn"
                                        data-bs-toggle="modal" data-bs-target="#voice_call">
                                        <i class="fas fa-phone"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-white call-btn"
                                        data-bs-toggle="modal" data-bs-target="#video_call">
                                        <i class="fas fa-video"></i>
                                    </a>
                                </div>
                                <div class="clinic-booking">
                                    <a class="apt-btn" href="{{ route('search')}}">Book Appointment</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>


                {{-- <div class="card">
                    <div class="card-body pt-0">

                        <nav class="user-tabs mb-4">
                            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#doc_overview" data-bs-toggle="tab">Overview</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="#doc_locations" data-bs-toggle="tab">Locations</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#doc_reviews" data-bs-toggle="tab">Reviews</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#doc_business_hours" data-bs-toggle="tab">Business
                                        Hours</a>
                                </li> --}}
                            {{-- </ul>
                        </nav>



                    </div>
                </div> --}}

            </div>
        </div>


        @include('layouts.footer')
