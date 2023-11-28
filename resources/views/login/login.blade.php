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
                            <div class="col-12">
                                @if (session()->has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if (session()->has('loginError'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('loginError') }}
                                    </div>
                                @endif
                            </div>

                            <div class="col-9">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="pb-2">
                                            <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        </div>

                                        <form class="row g-3" action="/login" method="post">
                                            @csrf
                                            <div class="col-12">
                                                <label for="email" class="form-label">Email Address</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                                            class="bi bi-envelope"></i></span>
                                                    <input type="email" name="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        id="email" required autocomplete="off" autofocus required
                                                        value="{{ old('email') }}" placeholder="Enter your email address!">
                                                    @error('email')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label for="password" class="form-label">Password</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                                            class="bi bi-lock"></i></span>
                                                    <input type="password" name="password" class="form-control"
                                                        id="password" required placeholder="Enter your password!">
                                                    <div class="invalid-feedback">Please enter your password.</div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button class="btn btn-primary w-100" type="submit">Login</button>
                                            </div>
                                            <div class="col-12 text-center">
                                                <p class="small mb-0">Don't have account? <a href="/register">Create
                                                        an account</a></p>
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
