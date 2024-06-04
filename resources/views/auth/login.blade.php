@extends('layouts.auth')

@section('content')
    <!-- Sign in Start -->
    @include('layouts.dashboard.navbar')
    <section class="sign-in-page bg-white center-content ">
        <div class="container-fluid ">
            <div class="row no-gutters justify-content-center center-content">
                <div class="col-sm-6 align-self-center">
                    <div class="sign-in-from">
                        <h1 class="mb-0">Login</h1>
                        <p>Enter your email address and password to access admin panel.</p>

                        @include('layouts.dashboard.alerts.danger-alert')

                        <form class="mt-4" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input name="email" type="email" class="form-control mb-0" id="exampleInputEmail1"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <a href="#" class="float-right">Forgot password?</a>
                                <input name="password" type="password" class="form-control mb-0" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <div class="d-inline-block w-100">
                                <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                    <input name="remember" type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Login</button>
                            </div>
                            <div class="sign-info">
                                <span class="dark-color d-inline-block line-height-2">Don't have an account? <a
                                        href="{{ route('register') }}">Register</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign in END -->
@endsection
