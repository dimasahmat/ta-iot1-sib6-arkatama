@extends('layouts.auth')

@section('content')
    <!-- Sign in Start -->
    <section class="sign-in-page bg-white">
        <div class="container-fluid p-0">
            <div class="row no-gutters justify-content-center center-content">
                <div class="col-sm-6 align-self-center">
                    <div class="sign-in-from">
                        <h1 class="mb-0">Register</h1>
                        <p>Enter your email address and password to access admin panel.</p>
                        <form class="mt-4" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Full Name</label>
                                <input name="name" type="text" class="form-control mb-0" id="exampleInputEmail1"
                                    placeholder="Your Full Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Email address</label>
                                <input name="email" type="email" class="form-control mb-0" id="exampleInputEmail2"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="password" type="password" class="form-control mb-0" id="password"
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Password Confirmation</label>
                                <input name="password_confirmation" type="password" class="form-control mb-0"
                                    id="password_confirmation" placeholder="password confirmation">
                            </div>
                            <div class="d-inline-block w-100">
                                <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">I accept <a href="#">Terms
                                            and Conditions</a></label>
                                </div>
                                <button type="submit" class="btn btn-primary float-right">Register</button>
                            </div>
                            <div class="sign-info">
                                <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a
                                        href="{{ 'login' }}">Login</a></span>
                                <ul class="iq-social-media">
                                    <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                    <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                    <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign in END -->
@endsection
