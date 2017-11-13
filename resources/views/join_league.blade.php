@extends('layouts.base')

@section('content')


    @foreach($leagues as $league)
        @if(!$league->privacy)
            <!-- PUBLIC ACCESS POPUP START -->
            <div class="public-access-popup-menu public-access" id="{{ $league->id }}">
                <div class="logo-area">
                    <div class="menu-logo"><a href="{{ route('home') }}"><img src="{{ asset('img/logo-white.png') }}" alt=""></a></div>
                    <span class="menu-close"><img src="{{ asset('img/menu-close.png') }}" alt=""></span>
                </div>
                <div class="public-info-area">
                    <div class="info-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p><strong>League: </strong>{{ $league->name }}</p>
                                    <p><strong>Creator: </strong>{{ $league->creator()->first()->username }}</p>
                                    <p><strong>You are signed in as: </strong>{{ Auth::User()->username }}</p>
                                    <p><strong>Member Name: </strong>{{ $league->creator()->first()->username }}</p>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <form action="{{ route('store.team') }}" method="POST" class="join-league-form">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="league_id" value="{{$league->id}}">
                                        <p><input type="text" placeholder="Your Team" name="team_name" required></p>

                                        <p><input type="submit" value="Join This League"></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="responsive-table">
                        <table cellspacing="0" class="team-details-head">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th></th>
                                <th>Team Name</th>
                                <th>Manager Name</th>
                                <th>Status</th>

                            </tr>
                            </thead>
                        </table>
                        <table cellspacing="0" class="team-details-body">
                            <tbody>
                            @foreach($league->teams() as $team)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->owner()->username }}</td>
                                <td>Joined</td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="league-setting-header">LEAGUE SETTINGS OVERVIEW</div>
                    <div class="invite-manager-body">
                        <p><strong>Game Format: FANPLAYOFF Custom</strong> FANPLAYOFF Custom</p>
                        <p><strong>Draft Date: </strong> 21-SEP-2017</p>
                        <p><strong>Teams in League:</strong> 4</p>
                        <p><strong>Lineup Locktime:</strong>  Lock Individually at Scheduled Gametime</p>
                        <p class="margin-bottom-0"><strong>Roster Size:</strong>  16 (9 starters, 7 bench)</p>
                        <p class="league-special-text"><strong>Offense (16):</strong> QB, RB, RB, WR, WR, TE, FLEX, D/ST, K, BE, BE, BE, BE, BE, BE, NK</p>
                        <p><strong>Stat Categories:</strong>  52</p>
                        <p class="league-special-text">RTD(6pts), RTD(6pts),  RTD(6pts),  RTD(6pts),  RTD(6pts), RTD(6pts), RTD(6pts), RTD(6pts),  RTD(6pts),  RTD(6pts),  RTD(6pts), RTD(6pts), RTD(6pts), RTD(6pts),  RTD(6pts),  RTD(6pts),  RTD(6pts), RTD(6pts), RTD(6pts), RTD(6pts),  RTD(6pts),  RTD(6pts),  RTD(6pts), RTD(6pts), RTD(6pts), RTD(6pts),  RTD(6pts),  RTD(6pts),  RTD(6pts), RTD(6pts), RTD(6pts), RTD(6pts),  RTD(6pts),  RTD(6pts),  RTD(6pts), RTD(6pts), RTD(6pts), RTD(6pts),  RTD(6pts),  RTD(6pts),  RTD(6pts), RTD(6pts), RTD(6pts), RTD(6pts),  RTD(6pts),  RTD(6pts),  RTD(6pts), RTD(6pts), RTD(6pts), RTD(6pts),  RTD(6pts),  RTD(6pts),  RTD(6pts), RTD(6pts), RTD(6pts), RTD(6pts),</p>
                    </div>
                </div>
            </div>
            <!-- PUBLIC ACCESS POPUP END -->
        @else
            <!-- PRIVATE ACCESS POPUP START -->
            <div class="private-access-popup-menu private-access" id="{{ $league->id }}">
                <div class="logo-area">
                    <div class="menu-logo"><a href="{{ route('home') }}"><img src="{{ asset('img/logo-white.png') }}" alt=""></a></div>
                    <span class="menu-close"><img src="{{ asset('img/menu-close.png') }}" alt=""></span>
                </div>
                <div class="form-area">
                    <h4>LEAGUE</h4>
                    <p class="terms-and-condition">This League is Private. You need a password to view this league</p>

                    <form action="">
                        <a href="" class="request-access">Request Access</a>
                        <p><input type="password" class="text-center" placeholder="Password" required></p>

                        <p><input type="submit" class="view-league" value="View League"></p>
                    </form>
                </div>
            </div>
            <!-- PRIVATE ACCESS POPUP END -->
        @endif
    @endforeach

    <!-- HERO AREA START -->
    <div class="hero-area padding-bottom-less padding-top-less hero-area-bg">
        <p class="subtitle">JOIN A LEAGUE</p>
    </div>
    <!-- HERO AREA END -->

    <!-- JOIN LEAGUE AREA START -->
    <div class="join-league">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 custom-col-width-1">
                    <div class="league-title">
                        <h2>LEAGUE NAME</h2>
                    </div>
                    <div class="league-option league-option-bg-1">
                        <div class="league-search">
                            <form action="">
                                <p>
                                    <input type="search" name="" id="" placeholder="Search League">
                                    <button type="submit"><img src="{{ asset('img/search-icon.png') }}" alt=""></button>
                                </p>
                            </form>
                        </div>
                        <p class="filter-title">Filters</p>
                        <div class="filter-content">
                            <div class="each-filter">
                                <span class="filter-category">Access:</span>
                                <ul>
                                    <li><a href="">All</a></li>
                                    <li><a href="">Public</a></li>
                                    <li><a href="">Private</a></li>
                                </ul>
                            </div>
                            <div>
                                <span class="filter-category">League Size:</span>
                                <ul>
                                    <li><a href="">All</a></li>
                                    <li><a href="">3</a></li>
                                    <li><a href="">4</a></li>
                                    <li><a href="">5</a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="filter-title scoring-title">Scoring</p>
                        <div class="scoring-content scoring-content-bg">
                            <form action="">
                                <p class="form-input-radio">
                                    <input type="radio" id="test3" name="radio-group" checked>
                                    <label for="test3" class="option3">Default</label>

                                    <input type="radio" id="test4" name="radio-group" >
                                    <label for="test4" class="option4">Custom</label>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 custom-col-width-2">
                    <div class="league-title">
                        <h2>League</h2>
                    </div>
                    <div class="league-option league-option-bg">
                        <table cellspacing="0" class="league-details">
                            <thead>
                            <tr>
                                <th>NAME</th>
                                <th>FORMAT</th>
                                <th>ACCESS</th>
                                <th>DRAFT DATE</th>
                                <th>MEMBERS</th>
                                <th>JOIN LEAGUE</th>
                            </tr>
                            </thead>
                        </table>
                        <div class="height-20"></div>
                        <table cellspacing="0" class="league-details-body league-details-bg">
                            <thead class="mobile-display-block">
                            <tr>
                                <th style="width:25%;">NAME</th>
                                <th style="width:15%;">FORMAR</th>
                                <th style="width:10%;">ACCESS</th>
                                <th style="width:20%;">DRAFT DATE</th>
                                <th style="width:13%;">MEMBERS</th>
                                <th style="width:17%;">JOIN LEAGUE</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($leagues as $league)
                            <tr>
                                <td>{{ $league->name }}</td>
                                <td>{{ $league->draft_type }}</td>
                                @if($league->privacy)
                                    <td id="access-2">Private</td>
                                @else
                                    <td id="access-1">Public</td>
                                @endif
                                <td>{{ Carbon\Carbon::parse($league->draft_time)->format('d-m-Y') }}</td>
                                <td>{{ count($league->teams()->get()) }} / {{$league->no_of_teams}}</td>
                                <td style="text-align: center">
                                    <span class="join-btn {{ $league->privacy? 'join-btn-2': 'join-btn-1' }}" data-league-id="{{ $league->id }}">join</span>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JOIN LEAGUE AREA END -->
@endsection

@push('push_javascripts')
    <script src="{{ asset('js/join-league.js') }}"></script>
@endpush