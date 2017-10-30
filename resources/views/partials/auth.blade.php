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
            {{-- todo make username login as well --}}
            <p><input type="email" placeholder="Username or Email Address" name="email" required></p>
            <p><input type="password" placeholder="Password" name="password" required></p>
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

        <form action="">
            <p><input type="text" placeholder="Frist Name" required></p>
            <p><input type="text" placeholder="Last Name" required></p>
            <p><input type="email" placeholder="Email Address" required></p>
            <p><input type="password" placeholder="Password" required></p>
            <p class="checkbox-new"><input type="checkbox" id="c1"><label for="c1">Show Password</label></p>
            <p><input class="datepicker" type="text" data-date-format="mm/dd/yyyy" placeholder="Birth Day: mm/dd/yy"
                      required></p>
            <p class="divider"><input type="submit" value="Sign Up"></p>
        </form>
    </div>
</div>
<!-- SIGNUP POPUP END -->