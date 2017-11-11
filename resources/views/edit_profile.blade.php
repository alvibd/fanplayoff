@extends('layouts.base')

@section('page_title', 'FANPLAY off| Edit Profile')

@section('content')
{{--    <!-- HERO AREA START -->
    <div class="hero-area padding-bottom-less hero-area-bg"></div>
    <!-- HERO AREA END -->

    <!-- PROFILE AREA START -->
    <div class="profile-area edit-profile-pb-150 profile-area-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="profile-breadcumb">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">My Account</a></li>
                            <li><a href="">Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-1">
                    <div class="profile-title">
                        <h2>My Profile</h2>
                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <a href="" class="delete-account">Delete Account</a>
                </div>
            </div>

            <form class="row"action="{{ route('edit.user') }}" method="post">
                {{ csrf_field() }}
                <div class="col-md-5 col-md-offset-1">
                    <div class="edit-profile">
                        <h3>Update Your Account</h3>
                            <div class="form-group">
                                <p class="form-label">Email Address</p>
                                <p class="form-input"><input type="email" placeholder="Email Address"
                                                             value="{{ $user->email }}" name="email"></p>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <p class="form-label">Date of Birth</p>
                                <p><input class="datepicker" type="text" data-date-format="yyyy/mm/dd"
                                          placeholder="Birth Day: yyyy/mm/dd" value="{{ $user->date_of_birth }}"
                                          name="date_of_birth"></p>
                                @if ($errors->has('date_of_birth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <p class="form-label">FANPLAYoff Name</p>
                                <p class="form-input"><input type="text" placeholder="FANPLAYoff Name"
                                                             value="{{ $user->username }}" disabled></p>
                            </div>
                    </div>

                    <div class="edit-profile">
                        <h3>Personal Information</h3>
                            <div class="form-group">
                                <p class="form-label">First Name</p>
                                <p class="form-input"><input type="text" placeholder="First Name"
                                                             value="{{ $user->first_name }}" name="first_name"></p>
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <p class="form-label">Last Name</p>
                                <p class="form-input"><input type="text" placeholder="Last Name"
                                                             value="{{ $user->last_name }}" name="last_name"></p>
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <p class="form-label">Gender(Optional)</p>
                                <p class="form-input">
                                    <input type="radio" id="test1" value="{{ App\Model\User::GENDER['male'] }}"
                                           name="gender" {{$user->gender == 'Male'? 'checked': ''}}>
                                    <label for="test1" class="option1">Male</label>

                                    <input type="radio" id="test2" value="{{ App\Model\User::GENDER['female'] }}"
                                           name="gender" {{$user->gender == 'Female'? 'checked': ''}}>
                                    <label for="test2" class="option2">Female</label>
                                </p>
                            </div>
                            <div class="form-group d-none">
                                <p class="form-input"><input type="submit" value="Edit"></p>
                            </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="edit-profile">
                        <h3>Change Password</h3>
                            <div class="form-group">
                                <p class="form-label">Current password</p>
                                <p class="form-input"><input type="password" name="password"></p>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <p class="form-label">New Password</p>
                                <p class="form-input"><input type="password" id="signup-email" name="new_password"></p>
                                @if ($errors->has('new_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <p class="checkbox-new"><input type="checkbox" id="c1"><label class="checkbox-new-custom"
                                                                                          for="c1">Show Password</label>
                            </p>
                            <p class="agree-text">FANPLAYoff treats this information with care and respect.For Details
                                review our Privacy Policy</p>

                            <div class="form-group">
                                <p class="form-input"><input type="submit" value="Update Profile"></p>
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- PROFILE AREA END -->--}}

<!-- HERO AREA START -->
<div class="hero-area padding-bottom-less hero-area-bg"></div>
<!-- HERO AREA END -->

<!-- PROFILE AREA START -->
<div class="profile-area edit-profile-pb-150 profile-area-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="profile-breadcumb">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">My Account</a></li>
                        <li><a href="">Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-offset-1">
                <div class="profile-title">
                    <h2>My Profile</h2>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 text-right">
                <a href="" class="delete-account">Delete Account</a>
            </div>
        </div>

        <div class="row">
            <form action="{{ route('edit.user') }}" method="POST">
                {{ csrf_field() }}
                <div class="col-md-5 col-md-offset-1">
                    <div class="edit-profile">
                        <h3>Update Your Account</h3>
                        <div class="form-group">
                            <p class="form-label">Email Address</p>
                            <p class="form-input"><input type="email" placeholder="Email Address" name="email" value="{{ $user->email }}"></p>
                        </div>
                        <div class="form-group">
                            <p class="form-label">Date of Birth</p>
                            <p><input class="datepicker" type="text" data-date-format="yyyy/mm/dd" placeholder="Birth Day: yyyy/mm/dd" value="{{ $user->date_of_birth }}" name="date_of_birth" value="17 July 1994"></p>
                        </div>
                        <div class="form-group">
                            <p class="form-label">FANPLAYoff Name</p>
                            <p class="form-input"><input type="text" placeholder="FANPLAYoff Name" name="username" value="{{ $user->username }}" disabled></p>
                        </div>

                    </div>

                    <div class="edit-profile">
                        <h3>Personal Information</h3>

                        <div class="form-group">
                            <p class="form-label">First Name</p>
                            <p class="form-input"><input type="text" placeholder="First Name" name="first_name" value="{{ $user->first_name }}"></p>
                        </div>
                        <div class="form-group">
                            <p class="form-label">Last Name</p>
                            <p class="form-input"><input type="text" placeholder="Last Name" value="{{ $user->last_name }}" name="last_name"></p>
                        </div>
                        <div class="form-group">
                            <p class="form-label">Gender(Optional)</p>
                            <p class="form-input">
                                <input type="radio" id="test1" name="gender" value="{{ App\Model\User::GENDER['male'] }}" {{$user->gender == 'Male'? 'checked': ''}}>
                                <label for="test1" class="option1">Male</label>

                                <input type="radio" id="test2" name="gender" value="{{ App\Model\User::GENDER['female'] }}" {{$user->gender == 'Female'? 'checked': ''}}>
                                <label for="test2" class="option2">Female</label>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="edit-profile">
                        <h3 class="mobile-mt-90">Change Password</h3>

                        <div class="form-group">
                            <p class="form-label">Current password</p>
                            <p class="form-input"><input type="password" name="password"></p>
                        </div>
                        <div class="form-group">
                            <p class="form-label">New Password</p>
                            <p class="form-input"><input type="password" name="new_password" class="signup-email"></p>
                        </div>
                        <p class="checkbox-new"><input type="checkbox" id="c1"><label class="checkbox-new-custom" for="c1">Show Password</label></p>
                        <p class="agree-text">FANPLAYoff treats this information with care and respect.For Details review our Privacy Policy</p>

                        <div class="form-group">
                            <p class="form-input"><input type="submit" value="Update Profile"></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- PROFILE AREA END -->
@endsection