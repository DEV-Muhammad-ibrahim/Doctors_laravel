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

                        @include('layouts.doctor_dashboard_sidebar')

                    </div>
                    <div class="col-md-7 col-lg-8 col-xl-9">
                        <form action="{{Route('profile_create_doctor')}}" method="POST">
                            @csrf
                            @method('POST')

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic Information</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="change-avatar">
                                                {{-- <div class="profile-img">
                                                    <img src="assets/img/doctors/doctor-thumb-02.jpg"
                                                        alt="User Image">
                                                </div> --}}
                                                {{-- <div class="upload-img">
                                                    <div class="change-photo-btn">
                                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                                        <input type="file" class="upload">
                                                    </div>
                                                    <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max
                                                        size of
                                                        2MB</small>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="mb-2">Username <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">First Name <span
                                                class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">Last Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">Phone Number</label>
                                            <input type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">Gender</label>
                                            <select class="form-select form-control select" name="gender" value="{{ old('gender') }}">
                                                <option>Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">Date of Birth</label>
                                            <input type="text" class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">About Me</h4>
                                <div class="mb-3">
                                    <label class="mb-2">Biography</label>
                                    <textarea class="form-control" rows="5" name="biography" value="{{ old('biography') }}"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Clinic Info</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">Clinic Name</label>
                                            <input type="text" class="form-control" name="clinic_name" value="{{ old('clinic_name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">Clinic Address</label>
                                            <input type="text" class="form-control" name="clinic_address" value="{{ old('clinic_address') }}">
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="mb-2">Clinic Images</label>
                                            <form action="#" class="dropzone"></form>
                                        </div> --}}
                                        {{-- <div class="upload-wrap">
                                            <div class="upload-images">
                                                <img src="assets/img/features/feature-01.jpg" alt="Upload Image">
                                                <a href="javascript:void(0);"
                                                class="btn btn-icon btn-danger btn-sm"><i
                                                class="far fa-trash-alt"></i></a>
                                            </div>
                                            <div class="upload-images">
                                                <img src="assets/img/features/feature-02.jpg" alt="Upload Image">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-icon btn-danger btn-sm"><i
                                                        class="far fa-trash-alt"></i></a>
                                            </div>
                                        </div> --}}
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>


                        <div class="card ">
                            <div class="card-body">
                                <h4 class="card-title">Contact Details</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-2">Address Line 1</label>
                                            <input type="text" class="form-control" name="address_line_1" value="{{ old('address_line_1') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="control-label">Address Line 2</label>
                                            <input type="text" class="form-control" name="address_line_2" value="{{ old('address_line_2') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="control-label">City</label>
                                            <input type="text" class="form-control" name="city" value="{{ old('city') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="control-label">State / Province</label>
                                            <input type="text" class="form-control" name="state" value="{{ old('state') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="control-label">Country</label>
                                            <input type="text" class="form-control" name="country" value="{{ old('country') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="control-label">Postal Code</label>
                                            <input type="text" class="form-control" name="postal_code" value="{{ old('postal_code') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pricing</h4>
                                <div class="mb-3">
                                    <div id="pricing_select">
                                        <div class="custom-control form-check custom-control-inline">
                                            <input type="radio" id="price_free"
                                            class="form-check-input" value="free" checked name="pricing" >
                                            <label class="form-check-label" for="price_free">Free</label>
                                        </div>
                                            {{-- <script type="text/javascript">
                                                // JavaScript code goes here
                                                if (document.getElementById('price_custom').checked) {
                                                    document.getElementById('custom_price_cont').style.display = 'block';
                                                }
                                                else document.getElementById('custom_price_cont').style.display = 'none';
                                            </script> --}}
                                        <div class="custom-control form-check custom-control-inline">
                                            <input type="radio" id="price_custom"
                                            value="custom" class="form-check-input"  name="pricing">
                                            <label class="form-check-label" for="price_custom">Custom Price (per
                                                hour)</label>
                                            </div>
                                        </div>
                                </div>
                                {{-- <div class="row custom_price_cont" id="custom_price_cont" >
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="custom_rating_input"
                                        name="custom_rating_count" value placeholder="20">
                                        <small class="form-text text-muted">Custom price you can add</small>
                                    </div>
                                </div> --}}
                            </div>
                        </div>


                        <div class="card services-card">
                            <div class="card-body">
                                <h4 class="card-title">Services and Specialization</h4>
                                <div class="mb-3">
                                    <label class="mb-2">Services</label>
                                    <input type="text" data-role="tagsinput" class="input-tags form-control"
                                    placeholder="Enter Services" name="services" value="{{ old('services') }}"
                                        id="services">
                                        <small class="form-text text-muted">Note : Type & Press enter to add new
                                        services</small>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-2">Specialization</label>
                                    <select class="form-select form-control select" name="specialization" value="{{ old('specialization') }}">
                                        <option>Select</option>
                                        <option value="urology">Urology</option>
                                        <option value="neurology">Neurology</option>
                                        <option value="orthopedic">Orthopedic</option>
                                        <option value="cardiologist">Cardiologist</option>
                                        <option value="dentist">Dentist</option>
                                        <option value="dentist">Immunology</option>
                                        <option value="dermatology">Dermatology</option>
                                        <option value="radiology">Radiology</option>
                                    </select>
                                </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-body">
                                <h4 class="card-title">Education</h4>
                                <div class="education-info">
                                    <div class="row education-cont">
                                        <div class="col-12 col-md-10 col-lg-11">
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="mb-2">Degree</label>
                                                        <input type="text" class="form-control" name="degree" value="{{ old('degree') }}">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="mb-2">College/Institute</label>
                                                        <input type="text" class="form-control" name="college" value="{{ old('college') }}">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="mb-2">Year of Completion</label>
                                                        <input type="text" class="form-control" name="year_of_completion" value="{{ old('year_of_completion') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="add-more">
                                    <a href="javascript:void(0);" class="add-education"><i
                                        class="fa fa-plus-circle"></i> Add
                                        More</a>
                                </div> --}}
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Experience</h4>
                                <div class="experience-info">
                                    <div class="row experience-cont">
                                        <div class="col-12 col-md-10 col-lg-11">
                                            <div class="row">
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="mb-2">Hospital Name</label>
                                                        <input type="text" class="form-control" name="hospital_name" value="{{ old('hospital_name') }}">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="mb-2">From</label>
                                                        <input type="text" class="form-control" name="from" value="{{ old('from') }}">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="mb-2">To</label>
                                                        <input type="text" class="form-control" name="to" value="{{ old('to') }}">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-4">
                                                    <div class="mb-3">
                                                        <label class="mb-2">Designation</label>
                                                        <input type="text" class="form-control" name="designation" value="{{ old('designation') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="add-more">
                                    <a href="javascript:void(0);" class="add-experience"><i
                                        class="fa fa-plus-circle"></i>
                                        Add More</a>
                                    </div> --}}
                                </div>
                            </div>


                            {{-- <div class="card">
                                <div class="card-body">
                                <h4 class="card-title">Awards</h4>
                                <div class="awards-info">
                                    <div class="row awards-cont">
                                        <div class="col-12 col-md-5">
                                            <div class="mb-3">
                                                <label class="mb-2">Awards</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <div class="mb-3">
                                                <label class="mb-2">Year</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-more">
                                    <a href="javascript:void(0);" class="add-award"><i class="fa fa-plus-circle"></i>
                                        Add
                                        More</a>
                                    </div>
                                </div>
                            </div> --}}


                            {{-- <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Memberships</h4>
                                    <div class="membership-info">
                                        <div class="row membership-cont">
                                            <div class="col-12 col-md-10 col-lg-5">
                                                <div class="mb-3">
                                                    <label class="mb-2">Memberships</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="add-more">
                                    <a href="javascript:void(0);" class="add-membership"><i
                                        class="fa fa-plus-circle"></i>
                                        Add More</a>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Registrations</h4>
                                <div class="registrations-info">
                                    <div class="row reg-cont">
                                        <div class="col-12 col-md-5">
                                            <div class="mb-3">
                                                <label class="mb-2">Registrations</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <div class="mb-3">
                                                <label class="mb-2">Year</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-more">
                                    <a href="javascript:void(0);" class="add-reg"><i class="fa fa-plus-circle"></i>
                                        Add
                                        More</a>
                                    </div>
                                </div>
                        </div> --}}

                        <div class="submit-section submit-btn-bottom">
                            <input type="submit" class="btn btn-primary prime-btn" value="Save Changes">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>


        @include('layouts.footer')
