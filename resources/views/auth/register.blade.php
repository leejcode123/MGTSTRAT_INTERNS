@extends('layouts.app')
@section('content')
    <div id="auth">
        <div class="row h-100">

            <section>
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-10 col-lg-7 col-xl-6">
                            <div class="card text-black" style="border-radius: 25px;">
                                <div class="card-body p-md-5">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12 col-lg-12 col-xl-12 order-2 order-lg-1">

                                            {{-- <a href="{{ route('login') }}" class="font-bold text-start btn btn-dark">
                                                <i class="bi bi-arrow-left-circle-fill"
                                                    style="vertical-align: middle; font-size:15px;"></i>
                                                Back</a> --}}
                                            <a href="{{ route('login') }}" class="font-bold text-start">
                                                <i class="bi bi-arrow-left-circle-fill fa-2x btn" title="Back"></i>
                                            </a>

                                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                            <form class="mx-1 mx-md-6" method="POST" action="{{ route('register') }}">
                                                @csrf

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="role_name">Role Name</label>
                                                        <select class="form-select @error('role_name') is-invalid @enderror"
                                                            name="role_name" id="role_name">
                                                            <option selected disabled>Select Role Name</option>
                                                            <option value="Admin">Admin</option>
                                                            <option value="Normal User">Normal User</option>
                                                        </select>
                                                    </div>
                                                    @error('role_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="reg_name">Your Name</label>
                                                        <input type="text" id="reg_name"
                                                            class="form-control  @error('name') is-invalid @enderror"
                                                            name="name" value="{{ old('name') }}"
                                                            placeholder="Enter Your Name" />

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- insert defaults --}}
                                                <input type="hidden" class="image" name="image"
                                                    value="photo_defaults.jpg">
                                                <input type="hidden" class="form-control" name="status" value="Active">

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="reg_email">Your
                                                            Email</label>
                                                        <input type="email" id="reg_email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}"
                                                            placeholder="Enter Your Email" />

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label @error('password') is-invalid @enderror"
                                                            for="reg_password">Password</label>
                                                        <input type="password" id="reg_password" class="form-control"
                                                            name="password" placeholder="Choose Password" />

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <div class="form-outline flex-fill mb-0">
                                                        <label class="form-label" for="reg_password">Repeat your
                                                            password</label>
                                                        <input type="password" id="reg_password"
                                                            name="password_confirmation"
                                                            placeholder="Choose Confirm Password" class="form-control" />
                                                    </div>
                                                </div>

                                                <div class="form-check d-flex justify-content-center mb-5">
                                                    <input class="form-check-input me-2" type="checkbox" value=""
                                                        id="form2Example3c" required />
                                                    <label class="form-check-label" for="form2Example3">
                                                        I agree all statements in <a href="#!">Terms of service</a>
                                                    </label>
                                                </div>

                                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                    <button class="btn btn-primary btn-lg">Register</button>
                                                </div>

                                            </form>

                                        </div>
                                        {{-- <div
                                            class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                                class="img-fluid" alt="Sample image">

                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
