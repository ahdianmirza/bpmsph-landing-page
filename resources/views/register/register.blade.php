@extends('layouts.login')

@section('container')
    <main>
        <div class="container-fluid">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <div class="container">
                    <div class="row">
                        <div class="col-6 min-vh-100 d-flex flex-column align-items-center pt-5">
                            <img src="{{ asset('assets/img/smartwait-banner.png') }}" style="width: 300px" class="mb-3"
                                alt="Logo Smart Wait">
                            <div class="col-10 bg-white d-flex flex-column justify-content-center align-items-start p-4"
                                style="border-radius: 8px">
                                <div class="d-flex flex-column align-items-start">
                                    <h2 class="fw-bold">Welcome</h2>
                                    <p>Login now to continue</p>
                                </div>
                                <img src="{{ asset('assets/img/bg-img.png') }}" class="mx-auto" alt="Banner Image">
                            </div>
                        </div>

                        <div class="col-6 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                            <div class="col-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="pb-2">
                                            <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                        </div>

                                        <form class="row g-3" action="/register" method="post">
                                            @csrf
                                            <div class="col-12">
                                                <label for="name" class="form-label">Full Name</label>
                                                <input type="text" name="name"
                                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                                    autofocus autocomplete="off" placeholder="Enter your full name!"
                                                    required value="{{ old('name') }}">
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                                    autocomplete="off" placeholder="Enter your email address!" required
                                                    value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" name="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    id="password" autocomplete="off" placeholder="Enter your password!"
                                                    required>
                                                @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                            </div>

                                            <div class="col-12 text-center">
                                                <p class="small mb-0">Already have an account? <a href="/login">Login</a>
                                                </p>
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
                </div>
            </section>

        </div>
    </main><!-- End #main -->
@endsection
