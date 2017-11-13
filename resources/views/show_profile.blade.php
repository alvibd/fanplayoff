@extends('layouts.base')

@section('page_title', 'FANPLAY off| Show Profile')

@section('content')
    <!-- HERO AREA START -->
    <div class="hero-area padding-bottom-less hero-area-bg"></div>
    <!-- HERO AREA END -->

    <!-- PROFILE AREA START -->
    <div class="profile-area profile-area-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="profile-breadcumb">
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('show.profile') }}">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="profile-title">
                        <h2>My Account</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7 col-md-offset-1">
                    <div class="common-bg">
                        <div class="row">
                            <div class="col-md-5 text-center">
                                <div class="profile-photo">
                                    @if($user->image_url == null)
                                        <img src="{{ asset('img/user.png') }}" alt="">
                                    @else
                                        <img src="{{ asset($user->image_url) }}" alt="">
                                    @endif
                                    <img src="{{asset('img/user-shadow.png')}}" class="user-shadow" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="profile-info text-center">
                                    <h2>{{$user->first_name.' '.$user->last_name}}</h2>
                                    <a href="{{ route('edit.user') }}" class="edit-profile-btn">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="profile-sign-up common-bg">
                        <p>Create League to FANPLAY or join to view your favorites</p>
                        <a href="{{ route('create.league') }}" class="create-league-btn">Create League</a>
                        <a href="{{ route('join.league') }}" class="join-league-btn">Join League</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="table-name">My Leagues</div>
                    <table id="data-table-simple" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="no-sort">Sl.</th>
                            <th>League Name</th>
                            <th class="no-sort">Status</th>
                            <th>League Standing</th>
                            <th class="no-sort">view League</th>
                        </tr>
                        </thead>

                        <tbody>
{{--                        {{ dump($user->leagues()->get()) }}--}}
                        @foreach($user->leagues()->get() as $league)
                            <tr>
                                <td class="serial-no">1.</td>
                                <td>{{ $league->name }}</td>
                                <td>Awaiting Draft</td>
                                <td>N/A</td>
                                <td>
                                    <a href="" class="view-btn">view</a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="table-footer mobile-display-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- PROFILE AREA END -->
@endsection