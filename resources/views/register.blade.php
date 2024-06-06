@include('layouts.header')
<div class="content top-space">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <div class="account-content">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 col-lg-6 login-left">
                            <img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">
                        </div>
                        <div class="col-md-12 col-lg-6 login-right">
                            <div class="login-header">
                                <h3>Patient Register <a href="{{ Route('registerDoctor') }}">Are you a Doctor?</a></h3>
                            </div>

                            <form action="{{ Route('register_patient') }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="mb-3 form-focus">
                                    <input type="text" class="form-control floating" name="name" id="name">
                                    <label class="focus-label">Name</label>
                                </div>
                                <div class="mb-3 form-focus">
                                    <input type="email" class="form-control floating" name="email" id="number">
                                    <label class="focus-label">Email</label>
                                </div>
                                <div class="mb-3 form-focus">
                                    <label class="focus-label">Create Password</label>
                                    <div class="pass-group">
                                        <input class="form-control pass-input floating" type="password" name="password"
                                            id="password">
                                    </div>
                                </div>
                                <div class="text-end">
                                    <a class="forgot-link" href="{{ Route('login') }}">Already have an account?</a>
                                </div>
                                <button class="btn btn-primary w-100 btn-lg login-btn" type="submit"
                                    name="submit">Signup</button>

                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
