@include('layouts.header')

            <div class="content top-space">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">

                            <div class="account-content">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-md-7 col-lg-6 login-left">
                                        <img src="{{ asset('assets/img/login-banner.png') }}" class="img-fluid"
                                            alt="Login Banner">
                                    </div>
                                    <div class="col-md-12 col-lg-6 login-right">
                                        <div class="login-header">
                                            <h3>Doctor Register <a href="{{Route('register')}}">Not a Doctor?</a></h3>
                                        </div>

                                        <form
                                            action="{{Route('doctor_register')}}"
                                            method="POST">
                                            @csrf
                                            @method('POST')
                                            <div class="mb-3 form-focus">
                                                <input type="text" class="form-control floating" name="name">
                                                <label class="focus-label">Name</label>
                                            </div>
                                            <div class="mb-3 form-focus">
                                                <input type="email" class="form-control floating" name="email">
                                                <label class="focus-label">Email</label>
                                            </div>
                                            <div class="mb-3 form-focus">
                                                <input class="form-control pass-input floating" type="password" name="password">
                                                <label class="focus-label">Create Password</label>
                                            </div>
                                            <div class="text-end">
                                                <a class="forgot-link" href="{{Route('login')}}">Already have an account?</a>
                                            </div>
                                            <button class="btn btn-primary w-100 btn-lg login-btn"
                                                type="submit">Signup</button>
                                            {{-- <div class="login-or">
                                                <span class="or-line"></span>
                                                <span class="span-or">or</span>
                                            </div>
                                            <div class="row social-login">
                                                <div class="col-6">
                                                    <a href="javascript:;" class="btn btn-facebook w-100"><i
                                                            class="fab fa-facebook-f me-1"></i> Login</a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="javascript:;" class="btn btn-google w-100"><i
                                                            class="fab fa-google me-1"></i> Login</a>
                                                </div>
                                            </div> --}}
                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


           @include('layouts.footer')
