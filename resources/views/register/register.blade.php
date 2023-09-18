@extends('layouts.login')

@section('container')
    <main>
        <div class="container-fluid">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8 min-vh-100 d-flex flex-column align-items-start justify-content-center">
                            <h1>Hallo</h1>
                        </div>

                        <div class="col-4 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center pt-4 pb-2">
                                        <div class="logo d-flex align-items-center w-auto">
                                            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo BPMSPH">
                                        </div>
                                    </div><!-- End Logo -->

                                    <div class="pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate>
                                        <div class="col-12">
                                            <label for="name" class="form-label">Full Name</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                required autofocus autocomplete="off" placeholder="Enter your full name!">
                                            <div class="invalid-feedback">Please, enter your full name!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                required autocomplete="off" placeholder="Enter your email address!">
                                            <div class="invalid-feedback">Please, enter your email address!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                required autocomplete="off" placeholder="Enter your password!">
                                            <div class="invalid-feedback">Please, enter your email address!</div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                        </div>
                                        <div class="col-12 text-center">
                                            <p class="small mb-0">Already have an account? <a href="/login">Login</a></p>
                                        </div>
                                    </form>

                                    <div class="credits text-center pt-4 pb-0">
                                        Designed by <a href="https://www.instagram.com/chikaadesvii/">Chika Desvi</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main><!-- End #main -->
@endsection
