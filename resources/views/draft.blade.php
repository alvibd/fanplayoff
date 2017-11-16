@push('push_stylesheets')
    <!-- OWL CAROUSEL CSS -->
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <!-- MAIN CSS -->
    <link href="{{ asset('css/draftstyle.css') }}" rel="stylesheet">
@endpush

@extends('layouts.base')

@section('content')


    <div class="heading-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="logo-text-left-side">
                        <div class="logo">
                            <img src="assets/img/draft/logo-draft.png" alt="">
                        </div>
                        <div class="draft-name">
                            <h2>Snake draft</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="player-details-right-side">
                        <div class="brief-details">
                            <h4>Welcome,
                                <span class="player-name top-name">joey levy</span>
                            </h4>
                            <p>Your league:
                                <span class="league-name">8-Team PPR Mock 22548792</span>
                            </p>

                            <div class="bottom-settings">
                                <ul>
                                    <li>
                                        <a href="#">Connection: </a>
                                        <span class="top-icon">
                                            <i class="fa fa-signal"></i>
                                        </span>
                                    </li>


                                    <li>
                                        <a href="#">Mute: </a>
                                        <span class="top-icon">
                                            <i class="fa fa-volume-up"></i>
                                        </span>
                                    </li>


                                    <li>
                                        <a href="#">Submit Feedback</a>
                                    </li>




                                </ul>
                            </div>

                        </div>

                        <div class="player-img">
                            <img src="assets/img/draft/header-profile-image.png" alt="">
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-slider-countdown-timer">
                        <div class="slider-carousel-wrap">



                            <div class="single-player">
                                <h4>Now Picking</h4>
                                <img src="assets/img/draft/team-profile-1.png" alt="">
                                <p>Team Leavy</p>
                            </div>

                            <div class="single-player">
                                <h4>2nd</h4>
                                <img src="assets/img/draft/team-profile-2.png" alt="">
                                <p>Team Mora</p>
                            </div>

                            <div class="single-player">
                                <h4>3rd</h4>
                                <img src="assets/img/draft/team-profile-3.png" alt="">
                                <p>Team Mora</p>
                            </div>

                            <div class="single-player">
                                <h4>4th</h4>
                                <img src="assets/img/draft/team-profile-4.png" alt="">
                                <p>Team Mora</p>
                            </div>


                            <div class="single-player">
                                <h4>5th</h4>
                                <img src="assets/img/draft/team-profile-5.png" alt="">
                                <p>Team Mora</p>
                            </div>




                            <!-- <div class="single-player round-2-indicator">
                                <h3>Round-2</h3>

                            </div> -->

                            <!-- <div class="single-player round-2">
                                <h4>round-2</h4>
                            </div> -->

                            <div class="single-player round-2-header">
                                <h4>6th</h4>
                                <img src="assets/img/draft/team-profile-6.png" alt="">
                                <p>Team Mora</p>
                            </div>

                            <div class="single-player">
                                <h4>7th</h4>
                                <img src="assets/img/draft/team-profile-7.png" alt="">
                                <p>Team Mora</p>
                            </div>

                            <div class="single-player">
                                <h4>8th</h4>
                                <img src="assets/img/draft/team-profile-8.png" alt="">
                                <p>Team Mora</p>
                            </div>


                            <div class="single-player">
                                <h4>9th</h4>
                                <img src="assets/img/draft/team-profile-3.png" alt="">
                                <p>Team Mora</p>
                            </div>

                            <div class="single-player">
                                <h4>10th</h4>
                                <img src="assets/img/draft/team-profile-4.png" alt="">
                                <p>Team Mora</p>
                            </div>

                            <div class="single-player">
                                <h4>11th</h4>
                                <img src="assets/img/draft/team-profile-5.png" alt="">
                                <p>Team Mora</p>
                            </div>

                            <div class="single-player">
                                <h4>12th</h4>
                                <img src="assets/img/draft/team-profile-6.png" alt="">
                                <p>Team Mora</p>
                            </div>

                            <div class="single-player">
                                <h4>13th</h4>
                                <img src="assets/img/draft/team-profile-7.png" alt="">
                                <p>Team Mora</p>
                            </div>

                            <div class="single-player">
                                <h4>14th</h4>
                                <img src="assets/img/draft/team-profile-8.png" alt="">
                                <p>Team Mora</p>
                            </div>

                            <div class="single-player">
                                <h4>15th</h4>
                                <img src="assets/img/draft/team-profile-3.png" alt="">
                                <p>Team Mora</p>
                            </div>

                            <div class="single-player">
                                <h4>16th</h4>
                                <img src="assets/img/draft/team-profile-4.png" alt="">
                                <p>Team Mora</p>
                            </div>




                        </div>

                        <div class="countdown-timer">
                            <h4>Draft begins in</h4>
                            <div class="count">
                                <!-- <p>00
                                    <span class="color-count">:90</span>
                                </p> -->

                                <input type="hidden" id="total-sec" value="600">
                                <p id="timer-clock"></p>

                            </div>
                            <div class="bottom-settings-2">
                                <i class="fa fa-gear"></i>
                                <p> Autopick </p>
                                <input type="checkbox">
                            </div>
                        </div>

                    </div>
                    <div class="selected-player">
                        <div class="selected-player-header">
                            <h4>Selected player</h4>
                            <p>The Draft begins at
                                <span class="draft-begins-time"> 9:30pm</span>
                            </p>
                        </div>
                        <div class="selected-player-details">
                            <div class="s-p-img">
                                <img src="assets/img/draft/selected-player.png" alt="">
                            </div>
                            <div class="s-p-details">
                                <h4>David Johnson, Ari RB</h4>
                                <p>Your pre-draft rank: 1, bye week: 8</p>
                            </div>
                            <div class="s-p-history">
                                <p>2017 Projected:
                                    <span class="projected-details">1228 YDS, 11TDS, 368 PTS</span>
                                </p>
                                <p>2017 Session:
                                    <span class="projected-details">1239 YDS, 16 TDS, 13 PTS</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="draft-details-table-wrap">
                        <div class="draft-big-table-info">
                            <ul class="nav nav-tabs draft-nav">
                                <li class="active">
                                    <a data-toggle="tab" href="#home">Players</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#menu1">Rules</a>
                                </li>

                            </ul>

                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="filters">
                                        <div class="filter-1">
                                            Position
                                            <select class="custom-select">
                                                <option class="custom-option" value="Yes">Yes</option>
                                                <option class="custom-option" value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="filter-1">
                                            Team
                                            <select class="custom-select">
                                                <option class="custom-option" value="Yes">Yes</option>
                                                <option class="custom-option" value="No">No</option>
                                            </select>
                                        </div>
                                        <div class="filter-1 filter-right">
                                            Show
                                            <select class="custom-select">
                                                <option class="custom-option" value="Yes">Yes</option>
                                                <option class="custom-option" value="No">No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <table class="players-table" cellspacing="0" >
                                        <thead>
                                            <tr>
                                                <th>Rank</th>
                                                <th>Player</th>
                                                <th>Pts</th>
                                                <th>Com</th>
                                                <th>Att</th>
                                                <th>Payd</th>
                                                <th>Payd</th>
                                                <th>Int</th>
                                                <th>Rush</th>
                                                <th>Ruyd</th>
                                                <th>Rutd</th>
                                                <th>Rec</th>
                                                <th>Reyd</th>
                                                <th>Retd</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td> 1 </td>
                                                <td> <div class="player-name">Aaron Rodgers</div> Ari, RB </td>
                                                <td>435</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>435</td>
                                                <td>6435</td>
                                                <td>45</td>
                                                <td>35</td>
                                                <td>35</td>
                                                <td>5</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <div class="show-and-search">
                                        <div class="show-available">
                                            <form action="">
                                                <input type="checkbox" id="c1"><label class="checkbox-new-custom" for="c1">Show Password</label>
                                            </form>
                                        </div>

                                        <div class="search">
                                            <form action="">
                                                <input type="search">
                                                <input type="submit" value="Search">
                                                <input type="reset" value="Clear">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <h3>Menu 1</h3>
                                    <p>Some content in menu 1.</p>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="welcome-footer">
                        <div class="welcome-footer-text">
                            <p>***WELCOME TO THE FANPLAYOFF.COM FANTASY DRAFT***</p>
                            <p>Team Leavy (J.Levy) his joined the draft 6:46pm</p>
                        </div>
                        <div class="search">
                            <form action="">
                                <input type="search">
                                <input type="submit" value="Search">
                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="draft-summary-table-wrap">
                        <div class="draft-summary-header">
                            <h3>Draft Summary</h3>
                        </div>
                        <form action="">
                            <div class="draft-summary-body">
                                <p>Select Team</p>
                                <select class="custom-select">
                                    <option class="custom-option" value="Yes">Team Leavy</option>
                                    <option class="custom-option" value="No">Team Mora</option>
                                </select>

                                <p class="draft-show">Show By:
                                    <input type="radio" id="test21" name="radio-group" checked>
                                    <label for="test21">Roster</label>

                                    <input type="radio" id="test22" name="radio-group">
                                    <label for="test22">Selection</label>
                                </p>

                                <div class="team-info">
                                    <div class="team-avater">
                                        <img src="assets/img/draft/team-profile-avater.png" alt="">
                                    </div>
                                    <div class="team-info-details">
                                        <h5>Team Leavy</h5>
                                        <p>Joey Leavy</p>
                                    </div>
                                </div>

                                <table class="draft-summary-table" cellspacing="0" >
                                    <thead>
                                        <tr>
                                            <th>Pos</th>
                                            <th>Player</th>
                                            <th>Bye</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                        <tr>
                                            <td> QB </td>
                                            <td>Aaron Rodgers</td>
                                            <td>8</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="rostar-tally">
                                    Rostrer Tally: 0 of 16
                                </div>
                                <div class="draft-help">
                                    <div class="draft-queue-1">
                                        <p>QR:0/4</p>
                                        <p>QR:0/4</p>
                                    </div>
                                    <div class="draft-queue-1">
                                        <p>QR:0/4</p>
                                        <p>QR:0/4</p>
                                    </div>
                                    <div class="draft-queue-1">
                                        <p>QR:0/4</p>
                                        <p>QR:0/4</p>
                                    </div>
                                    <div class="draft-queue-1">
                                        <p>QR:0/4</p>
                                        <p>QR:0/4</p>
                                    </div>
                                    <div class="draft-help-btn-wrap">
                                        <input type="submit" value="Draft Help">
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="pick-history-table-wrap">
                        <div class="pick-history-header">
                            <h3>Pick History</h3>
                        </div>
                        <div class="draft-summary-body pick-history-body">

                            <table class="pick-history-table" cellspacing="0" >
                                <thead>
                                    <tr>
                                        <th>PK</th>
                                        <th>Player</th>
                                        <th>Bye</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>13. </td>
                                        <td>Aaron Rodgers</td>
                                        <td>8</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('push_javascripts')

    <!-- JQUERY JS -->
    <script src="{{ asset('js/jq.min.js') }}"></script>

    <!-- OWL CAROUSEL JS -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/draft.js') }}"></script>

    <!-- Timer JS -->
    <script src="{{ asset('js/timer.js') }}"></script>

    <!-- DRAFT PAGE JS -->
    <script src="{{ asset('js/draft-r.js') }}"></script>
    @endpush
