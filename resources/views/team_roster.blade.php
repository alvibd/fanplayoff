@extends('layouts.base')

@section('page_title', 'FANPLAYoff | Team Roster')

@section('content')
    <!-- SWITCH POPUP START -->
    <div class="switch-popup-menu switch-account">
        <div class="logo-area">
            <div class="menu-logo"><a href="{{ route('index') }}"><img src="{{ asset('img/logo-white.png') }}" alt=""></a></div>
            <span class="menu-close"><img src="{{ asset('img/menu-close.png') }}" alt=""></span>
        </div>
        <div class="form-area">
            <h4>Switch Player</h4>

            <table class="roster-starter-table3" cellspacing="0" >
                <thead>
                <tr>
                    <th>Pos</th>
                    <th>NAME</th>
                    <th>SWITCH</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td> <div class="pos-red-bg">QB</div> </td>
                    <td>Aaron Rodgers</td>
                    <td><a href="" class="switch-btn">switch</a></td>
                </tr>
                <tr>
                    <td><div class="pos-red-bg">QB</div></td>
                    <td>Aaron Rodgers</td>
                    <td><a href="" class="switch-btn">switch</a></td>
                </tr>
                <tr>
                    <td> <div class="pos-red-bg">QB</div> </td>
                    <td>Aaron Rodgers</td>
                    <td><a href="" class="switch-btn">switch</a></td>
                </tr>
                <tr>
                    <td><div class="pos-red-bg">QB</div></td>
                    <td>Aaron Rodgers</td>
                    <td><a href="" class="switch-btn">switch</a></td>
                </tr>
                <tr>
                    <td> <div class="pos-red-bg">QB</div> </td>
                    <td>Aaron Rodgers</td>
                    <td><a href="" class="switch-btn">switch</a></td>
                </tr>
                <tr>
                    <td><div class="pos-red-bg">QB</div></td>
                    <td>Aaron Rodgers</td>
                    <td><a href="" class="switch-btn">switch</a></td>
                </tr>
                <tr>
                    <td> <div class="pos-red-bg">QB</div> </td>
                    <td>Aaron Rodgers</td>
                    <td><a href="" class="switch-btn">switch</a></td>
                </tr>
                <tr>
                    <td><div class="pos-red-bg">QB</div></td>
                    <td>Aaron Rodgers</td>
                    <td><a href="" class="switch-btn">switch</a></td>
                </tr>
                <tr>
                    <td> <div class="pos-red-bg">QB</div> </td>
                    <td>Aaron Rodgers</td>
                    <td><a href="" class="switch-btn">switch</a></td>
                </tr>
                <tr>
                    <td><div class="pos-red-bg">QB</div></td>
                    <td>Aaron Rodgers</td>
                    <td><a href="" class="switch-btn">switch</a></td>
                </tr>

                </tbody>
            </table>

        </div>
    </div>
    <!-- SWITCH POPUP END -->

    <!-- HERO AREA START -->
    <div class="hero-area padding-bottom-less padding-top-less padding-bottom-0 hero-area-bg">
        <p class="subtitle">Managers</p>
        <div class="secondary-menu-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="secondary-menu">
                            <ul>
                                <li><a href="league-home.html">League Home</a></li>
                                <li><a href="message-board.html">Message Board</a></li>
                                <li><a href="email-league.html">Email League</a></li>
                                <li><a href="managers.html">Managers</a></li>
                                <li><a href="league-home.html">Rosters</a></li>
                                <li><a href="settings.html">Settings</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- HERO AREA END -->


    <!-- ROSTER PROFILE AREA START -->
    <div class="roster-profile-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="roster-profile-wrapper">
                        <div class="roster-profile-img">
                            <img src="{{ asset('img/roster-profile-img.png') }}" alt="">
                        </div>
                        <div class="roster-profile-name">
                            <select class="custom-select-roster">
                                <option class="custom-option-roster" value="Joey’s Standout Team">Joey’s Standout Team</option>
                                <option class="custom-option-roster" value="Joey’s Standout Team">Joey’s Standout Team</option>
                                <option class="custom-option-roster" value="Joey’s Standout Team">Joey’s Standout Team</option>
                            </select>
                        </div>
                        <div class="roster-profile-status">
                            <span class="status">Standing</span>
                            <span class="date">2nd (16th)</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ROSTER PROFILE AREA END -->

    <!-- ROSTER AREA START -->
    <div class="roster-area">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="roster-table-name-header">
                        <h3>STARTER</h3>
                        <select class="custom-select-roster-week text-right">
                            <option class="custom-option-roster-week" value="WEEK 1">WEEK 1</option>
                            <option class="custom-option-roster-week" value="WEEK 2">WEEK 1</option>
                            <option class="custom-option-roster-week" value="WEEK 3">WEEK 1</option>
                        </select>
                    </div>

                    <table class="roster-starter-table" cellspacing="0" >
                        <thead>
                        <tr>
                            <th>Pos</th>
                            <th>NAME</th>
                            <th>Total points</th>
                            <th>SWITCH</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">WR</div></td>
                            <td>Aaron Rodgers</td>
                            <td>75 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">WR</div></td>
                            <td>Aaron Rodgers</td>
                            <td>75 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">WR</div></td>
                            <td>Aaron Rodgers</td>
                            <td>75 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">WR</div></td>
                            <td>Aaron Rodgers</td>
                            <td>75 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">WR</div></td>
                            <td>Aaron Rodgers</td>
                            <td>75 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">WR</div></td>
                            <td>Aaron Rodgers</td>
                            <td>75 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">WR</div></td>
                            <td>Aaron Rodgers</td>
                            <td>75 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">WR</div></td>
                            <td>Aaron Rodgers</td>
                            <td>75 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">WR</div></td>
                            <td>Aaron Rodgers</td>
                            <td>75 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">WR</div></td>
                            <td>Aaron Rodgers</td>
                            <td>75 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">WR</div></td>
                            <td>Aaron Rodgers</td>
                            <td>75 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">WR</div></td>
                            <td>Aaron Rodgers</td>
                            <td>75 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">WR</div></td>
                            <td>Aaron Rodgers</td>
                            <td>75 PTS</td>
                            <td><span class="switch-btn">switch</span></td>
                        </tr>



                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="roster-table-name-header mt-30">
                        <h3>BENCH</h3>
                    </div>

                    <table class="roster-starter-table2" cellspacing="0" >
                        <thead>
                        <tr>
                            <th>Pos</th>
                            <th>NAME</th>
                            <th>Total points</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">QB</div></td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">QB</div></td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">QB</div></td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">QB</div></td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">QB</div></td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">QB</div></td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">QB</div></td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">QB</div></td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">QB</div></td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td> <div class="pos-red-bg">QB</div> </td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        <tr>
                            <td><div class="pos-red-bg">QB</div></td>
                            <td>Aaron Rodgers</td>
                            <td>125 PTS</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ROSTER AREA END -->
@endsection

@push('push_javascripts')
    <script src="{{ asset('js/roster.js') }}"></script>
@endpush