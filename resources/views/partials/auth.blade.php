<!-- CREATE ACCOUNT POPUP START -->
<div class="create-account-popup-menu create-account">
    <div class="logo-area">
        <div class="menu-logo"><a href="{{ route('index') }}"><img src="{{ asset('img/logo-white.png') }}" alt=""></a>
        </div>
        <span class="menu-close"><img src="{{ asset('img/menu-close.png') }}" alt=""></span>
    </div>
    <div class="form-area">
        <h4>Create Account</h4>

        <p class="terms-and-condition">By creating an account, I agree to the <a href="">Terms of Use</a> and
            acknowledge that I have read the <a href="">Privacy Policy</a>.</p>
        <p><a href="" class="sign-with-mail"><img src="{{ asset('img/mail-icon.png') }}" alt=""> Sign up with Email</a>
        </p>
        <p><a href="" class="sign-with-facebook"><img src="{{ asset('img/facebook-icon.png') }}" alt=""> Sign up with
                Facebook</a></p>
        <p class="divider divider-margin">Already have an account? <span class="login-popup">Log In</span></p>

    </div>
</div>
<!-- CREATE ACCOUNT POPUP END -->

<!-- LOGIN POPUP START -->
<div class="login-popup-menu login-popup-custom">
    <div class="logo-area">
        <div class="menu-logo"><a href="{{ route('index') }}"><img src="{{ asset('img/logo-white.png') }}" alt=""></a>
        </div>
        <span class="menu-close"><img src="{{ asset('img/menu-close.png') }}" alt=""></span>
    </div>
    <div class="form-area padding-top-custom">

        <form action="{{ route('login') }}" method="post">
            {{ csrf_field() }}
            <p><input type="text" placeholder="Username or Email Address" name="username" required value="{{ old('username') }}"></p>
            @if ($errors->has('username'))
                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
            <p><input type="password" placeholder="Password" name="password" required></p>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <input type="checkbox" name="remember" checked style="display: none">
            <p class="padding-top-10"><input type="submit" value="Log In"></p>
        </form>

        <p class="terms-and-condition padding-bottom-custom">Forgot <a href="">username</a> or <a href="">password</a>?
        </p>
        <p><a href="" class="sign-with-facebook"><img src="{{ asset('img/facebook-icon.png') }}" alt=""> Log In with
                Facebook</a></p>

        <p class="sign-up-btn">Sign up</p>
    </div>
</div>
<!-- LOGIN POPUP END -->


<!-- SIGNUP POPUP START -->
<div class="signup-popup-menu">
    <div class="logo-area">
        <div class="menu-logo"><a href="{{ route('index') }}"><img src="{{ asset('img/logo-white.png') }}" alt=""></a>
        </div>
        <span class="menu-close"><img src="{{ asset('img/menu-close.png') }}" alt=""></span>
    </div>
    <div class="form-area">
        <h4>Create Account</h4>

        <form action="{{ route('register') }}" method="post">
            {{ csrf_field() }}
            <p><input type="text" placeholder="First Name" name="first_name" required value="{{ old('first_name') }}">
            </p>
            @if ($errors->has('first_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('first_name') }}</strong>
                </span>
            @endif
            <p><input type="text" placeholder="Last Name" name="last_name" required value="{{ old('last_name') }}"></p>
            @if ($errors->has('last_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
            @endif
            <p><input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required></p>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <p><input type="password" id="signup-email" placeholder="Password" name="password" required></p>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <p class="checkbox-new"><input type="checkbox" id="c1"><label for="c1">Show Password</label></p>
            <p><input class="datepicker" type="text" data-date-format="yyyy/mm/dd" name="date_of_birth"
                      placeholder="Birth Day: yyyy/mm/dd"
                      required value="{{ old('date_of_birth') }}">
            </p>
            @if ($errors->has('date_of_birth'))
                <span class="help-block">
                    <strong>{{ $errors->first('date_of_birth') }}</strong>
                </span>
            @endif
            <p class="divider"><input type="submit" value="Sign Up"></p>
        </form>
    </div>
</div>
<!-- SIGNUP POPUP END -->