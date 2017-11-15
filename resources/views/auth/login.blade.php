@extends('layouts.base')

@section('page_title', 'FANPLAYoff | Login/Register')

@section('content')
    <!-- HERO AREA START -->
    <div class="hero-area padding-bottom-less padding-top-less hero-area-bg">

    </div>
    <!-- HERO AREA END -->

    <!-- BLANK AREA START -->
    <div class="extra-login">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-area">
                        <h4>Sign Up</h4>

                        <p class="terms-and-condition">By creating an account, I agree to the <a href="">Terms of Use</a> and acknowledge that I have read the <a href="">Privacy Policy</a>.</p>
                        <p><a href="" class="sign-with-mail"><img src="{{ asset('img/mail-icon.png') }}" alt=""> Sign up with Email</a></p>
                        <p><a href="" class="sign-with-facebook"><img src="{{ asset('img/facebook-icon.png') }}" alt=""> Sign up with Facebook</a></p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-area">
                        <h4>Sign In</h4>
                        <form action="{{ route('login') }}" method="post">
                            {{ csrf_field() }}
                            <p><input type="text" placeholder="Username or Email Address" name="username" required></p>
                            <p><input type="password" placeholder="Password" name="password" required></p>
                            <input type="checkbox" name="remember" checked style="display: none">
                            <p class="padding-top-10"><input type="submit" value="Log In"></p>
                        </form>

                        <p class="terms-and-condition padding-bottom-custom">Forgot <a href="">username</a> or <a href="">password</a>?</p>
                        <p><a href="" class="sign-with-facebook"><img src="{{ asset('img/facebook-icon.png') }}" alt=""> Log In with Facebook</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- BLANK AREA END -->
@endsection