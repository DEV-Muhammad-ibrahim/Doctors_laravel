

@include('layouts.header')
<section class="section section-search">
    <div class="container-fluid">
        <div class="banner-wrapper">
            <div class="banner-header text-center aos" data-aos="fade-up">
                <h1>Search Doctor, Make an Appointment</h1>
                <p>Discover the best doctors, clinic & hospital the city nearest to you.</p>
            </div>

            <div class="search-box">
                <form action="{{Route('search')}}" method="get">
                    @csrf
                    @method('get')
                    <div class="mb-3 search-location aos" data-aos="fade-up">
                        <input type="text" class="form-control" placeholder="Search State" name="location">
                        <span class="form-text">Based on your State</span>
                    </div>
                    <div class="mb-3 search-info aos" data-aos="fade-up">
                        <input type="text" class="form-control"
                            placeholder="Search Doctors, Clinics, Hospitals, Diseases Etc" name="specialization">
                        <span class="form-text">Ex : Urology or Dermatology</span>
                    </div>
                    <button type="submit" class="btn btn-primary search-btn mt-0 aos" data-aos="fade-up"><i
                            class="fas fa-search"></i> <span>Search</span></button>
                </form>
            </div>

        </div>
    </div>
</section>



<section class="section section-specialities">
    <div class="container-fluid">
        <div class="section-header text-center aos" data-aos="fade-up">
            <h2>Clinic and Specialities</h2>
            <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9 aos" data-aos="fade-up">

                <div class="specialities-slider slider">

                    <div class="speicality-item text-center">
                        <div class="speicality-img">
                            <img src="assets/img/specialities/specialities-01.png" class="img-fluid" alt="Speciality">
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                        </div>
                        <p>Urology</p>
                    </div>


                    <div class="speicality-item text-center">
                        <div class="speicality-img">
                            <img src="assets/img/specialities/specialities-02.png" class="img-fluid" alt="Speciality">
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                        </div>
                        <p>Neurology</p>
                    </div>


                    <div class="speicality-item text-center">
                        <div class="speicality-img">
                            <img src="assets/img/specialities/specialities-03.png" class="img-fluid" alt="Speciality">
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                        </div>
                        <p>Orthopedic</p>
                    </div>


                    <div class="speicality-item text-center">
                        <div class="speicality-img">
                            <img src="assets/img/specialities/specialities-04.png" class="img-fluid" alt="Speciality">
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                        </div>
                        <p>Cardiologist</p>
                    </div>


                    <div class="speicality-item text-center">
                        <div class="speicality-img">
                            <img src="assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality">
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                        </div>
                        <p>Dentist</p>
                    </div>


                    <div class="speicality-item text-center">
                        <div class="speicality-img">
                            <img src="assets/img/specialities/specialities-01.png" class="img-fluid" alt="Speciality">
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                        </div>
                        <p>Immunology</p>
                    </div>


                    <div class="speicality-item text-center">
                        <div class="speicality-img">
                            <img src="assets/img/specialities/specialities-02.png" class="img-fluid" alt="Speciality">
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                        </div>
                        <p>Dermatology</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>


<section class="section section-doctor">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 aos" data-aos="fade-up">
                <div class="section-header ">
                    <h2>Book Our Doctor</h2>
                    <p>Lorem Ipsum is simply dummy text </p>
                </div>
                <div class="about-content">
                    <p>Seamlessly schedule your appointment with our experienced medical professionals. Your health is our priority, and booking with NexaCare's esteemed doctors is just a click away.</p>
                    <p>Take control of your well-being! Use our easy online booking system to secure a consultation with our specialized physicians. Quality care, personalized for you</p>
                    <a href="javascript:;">Read More..</a>
                </div>
            </div>
            <div class="col-lg-8 aos" data-aos="fade-up">
                <div class="doctor-slider slider">
                   @foreach ($doctors as $doctor)

                   <div class="profile-widget">
                       <div class="doc-img">
                            <a href="doctor-profile.html">
                                <img class="img-fluid" alt="User Image" src="{{asset('assets/img/doctors/doctor-01.jpg')}}">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>
                        <div class="pro-content">
                            <h3 class="title">
                                <a href="#">{{$doctor->first_name}}.{{$doctor->last_name}}</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">{{$doctor->specialization}}</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span class="d-inline-block average-rating">(17)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> {{$doctor->state}}, {{$doctor->country}}USA
                                </li>
                                {{-- <li>
                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                </li> --}}
                                <li>
                                    <i class="far fa-money-bill-alt"></i> $100
                                    <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="{{ route('profile_view', ['id' => $doctor->id]) }}" class="btn view-btn">View Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('booking', ['id' => $doctor->id]) }}" class="btn book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    {{-- <div class="profile-widget">
                        <div class="doc-img">
                            <a href="doctor-profile.html">
                                <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-02.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>
                        <div class="pro-content">
                            <h3 class="title">
                                <a href="doctor-profile.html">Darren Elder</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">BDS, MDS - Oral & Maxillofacial Surgery</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-rating">(35)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> Newyork, USA
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i> $50 - $300
                                    <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="booking.html" class="btn book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="profile-widget">
                        <div class="doc-img">
                            <a href="doctor-profile.html">
                                <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-03.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>
                        <div class="pro-content">
                            <h3 class="title">
                                <a href="doctor-profile.html">Deborah Angel</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DNB - Cardiology</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-rating">(27)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> Georgia, USA
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i> $100 - $400
                                    <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="booking.html" class="btn book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="profile-widget">
                        <div class="doc-img">
                            <a href="doctor-profile.html">
                                <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-04.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>
                        <div class="pro-content">
                            <h3 class="title">
                                <a href="doctor-profile.html">Sofia Brient</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MS - General Surgery, MCh - Urology</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-rating">(4)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> Louisiana, USA
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i> $150 - $250
                                    <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="booking.html" class="btn book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="profile-widget">
                        <div class="doc-img">
                            <a href="doctor-profile.html">
                                <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-05.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>
                        <div class="pro-content">
                            <h3 class="title">
                                <a href="doctor-profile.html">Marvin Campbell</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - Ophthalmology, DNB - Ophthalmology</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-rating">(66)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> Michigan, USA
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i> $50 - $700
                                    <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="booking.html" class="btn book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="profile-widget">
                        <div class="doc-img">
                            <a href="doctor-profile.html">
                                <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-06.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>
                        <div class="pro-content">
                            <h3 class="title">
                                <a href="doctor-profile.html">Katharine Berthold</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-rating">(52)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> Texas, USA
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i> $100 - $500
                                    <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="booking.html" class="btn book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="profile-widget">
                        <div class="doc-img">
                            <a href="doctor-profile.html">
                                <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-07.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>
                        <div class="pro-content">
                            <h3 class="title">
                                <a href="doctor-profile.html">Linda Tobin</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - General Medicine, DM - Neurology</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-rating">(43)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> Kansas, USA
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i> $100 - $1000
                                    <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="booking.html" class="btn book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="profile-widget">
                        <div class="doc-img">
                            <a href="doctor-profile.html">
                                <img class="img-fluid" alt="User Image" src="assets/img/doctors/doctor-08.jpg">
                            </a>
                            <a href="javascript:void(0)" class="fav-btn">
                                <i class="far fa-bookmark"></i>
                            </a>
                        </div>
                        <div class="pro-content">
                            <h3 class="title">
                                <a href="doctor-profile.html">Paul Richard</a>
                                <i class="fas fa-check-circle verified"></i>
                            </h3>
                            <p class="speciality">MBBS, MD - Dermatology , Venereology & Lepros</p>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="d-inline-block average-rating">(49)</span>
                            </div>
                            <ul class="available-info">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i> California, USA
                                </li>
                                <li>
                                    <i class="far fa-clock"></i> Available on Fri, 22 Mar
                                </li>
                                <li>
                                    <i class="far fa-money-bill-alt"></i> $100 - $400
                                    <i class="fas fa-info-circle" data-bs-toggle="tooltip" title="Lorem Ipsum"></i>
                                </li>
                            </ul>
                            <div class="row row-sm">
                                <div class="col-6">
                                    <a href="doctor-profile.html" class="btn view-btn">View Profile</a>
                                </div>
                                <div class="col-6">
                                    <a href="booking.html" class="btn book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</section>


<section class="section section-features">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 features-img aos" data-aos="fade-up">
                <img src="assets/img/features/feature.png" class="img-fluid" alt="Feature">
            </div>
            <div class="col-md-7 aos" data-aos="fade-up">
                <div class="section-header">
                    <h2 class="mt-2">Availabe Features In Our Clinic</h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of
                        a page when looking at its layout. </p>
                </div>
                <div class="features-slider slider">

                    <div class="feature-item text-center">
                        <img src="assets/img/features/feature-01.jpg" class="img-fluid" alt="Feature">
                        <p>Patient Ward</p>
                    </div>


                    <div class="feature-item text-center">
                        <img src="assets/img/features/feature-02.jpg" class="img-fluid" alt="Feature">
                        <p>Test Room</p>
                    </div>


                    <div class="feature-item text-center">
                        <img src="assets/img/features/feature-03.jpg" class="img-fluid" alt="Feature">
                        <p>ICU</p>
                    </div>


                    <div class="feature-item text-center">
                        <img src="assets/img/features/feature-04.jpg" class="img-fluid" alt="Feature">
                        <p>Laboratory</p>
                    </div>


                    <div class="feature-item text-center">
                        <img src="assets/img/features/feature-05.jpg" class="img-fluid" alt="Feature">
                        <p>Operation</p>
                    </div>


                    <div class="feature-item text-center">
                        <img src="assets/img/features/feature-06.jpg" class="img-fluid" alt="Feature">
                        <p>Medical</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>





<div class="progress-wrap active-progress">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
        </path>
    </svg>
</div>



@include('layouts.footer')
