@extends('layouts.base')

@section('page_title', 'FANPLAYoff | League Home')
@section('content')
    <!-- HERO AREA START -->
    <div class="hero-area padding-bottom-less padding-top-less padding-bottom-0 hero-area-bg">
        <p class="subtitle">League Home</p>
        <div class="secondary-menu-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="secondary-menu">
                            <ul>
                                <li><a href="{{ route('league.home', ['id' => $league->id]) }}">League Home</a></li>
                                <li><a href="message-board.html">Message Board</a></li>
                                <li><a href="email-league.html">Email League</a></li>
                                <li><a href="managers.html">Managers</a></li>
                                <li><a href="roster.html">Rosters</a></li>
                                <li><a href="settings.html">Settings</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- HERO AREA END -->

    <!-- LEAGUE HOME AREA START -->
    <div class="league-home-area">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">


                    <table cellspacing="0" class="league-home-table">
                        <thead>
                        <tr>
                            <th>TEAM NAME</th>
                            <th>Wild Card</th>
                            <th>Divisional</th>
                            <th>Conference Championship</th>
                            <th>Super Bowl</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($league->teams()->get() as $team)
                            <tr>
                                <td><a href="">{{ $team->name }}</a></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="league-settings-overview">
                        <div class="row">

                            <div class="col-sm-4">
                                <div class="invite-manager-heading">
                                    <h3>Invite Managers</h3>
                                </div>
                                <div class="invite-manager-body">
                                    <p><strong>Reminder:</strong> You must fill your league prior to your draft. Your league will not draft if it is not full one hour before the scheduled draft time.</p>
                                    <a href="" class="invite-manager-btn">Invite</a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="league-settings-overview-heading">
                                    <h3>LEAGUE SETTINGS OVERVIEW</h3>
                                </div>
                                <div class="invite-manager-body">
                                    <p><strong>Teams in League:</strong> {{ $league->teams()->count() }}</p>
                                    <p class="margin-bottom-0"><strong>Roster Size:</strong>  {{ $league->roster_size }} ({{ $league->total_starters }} starters, {{ $league->total_on_bench }} bench)</p>
                                    <p class="league-special-text"><strong>Offense ({{ $league->roster_size }}):</strong> 
                                        @foreach($league->leagueRosters()->get() as $roster)
                                            @for($i= 0; $i<$roster->players_allowed; $i++)
                                                {{ $roster->position }},
                                            @endfor
                                        @endforeach
                                    </p>
                                    <p><strong>Stat Categories:</strong>  {{ $league->leagueScorings()->count() }}</p>
                                    <p class="league-special-text">
                                        @foreach($league->leagueScorings()->get() as $scoring)
                                            {{ $scoring->scoringCriteria()->first()->name }}({{ $scoring->custom_point }}pts) {{ $loop->last? '': ',' }}
                                        @endforeach
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- LEAGUE HOME AREA END -->
@endsection