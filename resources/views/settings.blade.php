@extends('layouts.base')

@section('page_title', 'FANPLAY off')

@section('content')

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

        <!-- LEAGUE SETTINGS AREA START -->
        <div class="settings-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="settings-header">
                            <h3>Leauge Settings</h3>
                        </div>
                        <div class="summary-heading">
                            <h4>SUMMARY</h4>
                        </div>
                        <div class="settings-table-wrapper">
                            <table cellspacing="0" class="basic-settings-table">
                                <thead>
                                    <tr>
                                        <th>BESIC SETTINGS</th>
                                        <th class="position-relative">
                                            <img class="roster-edit" src="assets/img/custom-edit-btn.png" alt="">
                                            <button type="submit" class="roster-submit hidden" ><img class="roster-submit-img" src="assets/img/custom-submit-btn1.png" alt=""></button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Leauge Name</td>
                                        <td>
                                            <div class="roster-text">6 angry man</div>
                                            <div class="roster-input hidden"><input type="text"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nubers of Teams</td>
                                        <td>
                                            <div class="roster-text">6 angry man</div>
                                            <div class="roster-input hidden"><input type="text"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Draft Date:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Draft Order:</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="height-30"></div>
                            <form action="">
                                <table cellspacing="0" class="roster-settings-table-header">
                                    <thead>
                                        <tr>
                                            <th>ROSTER</th>
                                            <th> <a href=""><img src="assets/img/custom-edit-btn.png" alt=""></a> </th>
                                        </tr>
                                    </thead>
                                </table>
                                <div class="white-bg">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <p class="roster-text1 pl-10">Current Roster Size: 16</p>
                                            <p class="roster-text1 pl-10">Total Starters: 9</p>
                                            <p class="roster-text1 pl-10">Total On Bench: 7</p>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="secondary-table-wrapper">
                                                <table cellspacing="0" class="roster-settings-table">
                                                    <thead>
                                                        <tr>
                                                            <th>POSITION</th>
                                                            <th>STARTERS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <table cellspacing="0" class="scoring-settings-table">
                                <thead>
                                    <tr>
                                        <th>SCORING</th>
                                        <th> <a href=""><img src="assets/img/custom-edit-btn.png" alt=""></a> </th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="scoring-content-2">
                                <form action="">
                                    <p class="scroring-checkbox"><input type="checkbox" id="c2"><label for="c2">Passing yards (YDS)</label></p>
                                    <p class="scroring-checkbox"><input type="checkbox" id="c3"><label for="c3">Passing touchdowns (TD)</label></p>
                                    <p class="scroring-checkbox"><input type="checkbox" id="c4"><label for="c4">Rushing yards</label></p>
                                    <p class="scroring-checkbox"><input type="checkbox" id="c5"><label for="c5">Rushing touchdowns</label></p>
                                    <p class="scroring-checkbox"><input type="checkbox" id="c6"><label for="c6">Passing yards (YDS)</label></p>
                                    <p class="scroring-checkbox"><input type="checkbox" id="c7"><label for="c7">Passing touchdowns (TD)</label></p>
                                    <p class="scroring-checkbox"><input type="checkbox" id="c8"><label for="c8">Rushing yards</label></p>
                                    <p class="scroring-checkbox"><input type="checkbox" id="c9"><label for="c9">Rushing touchdowns</label></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- LEAGUE SETTINGS AREA END -->



        <!-- FOOTER AREA START -->
        <div class="footer-area-wrap">
            <div class="container">
                <div class="footer-area">
                <div class="row">
                    <!-- <div class="col-sm-5"> -->
                    <div class="col-sm-6">
                        <h3>COMPANY</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <p><a href="">About <span>fanplayOFF</span></a></p>
                                <p><a href="">Rules</a></p>
                                <!-- <p><a href="">Careers</a></p>
                                <p><a href="">Mobile Apps</a></p>
                                <p><a href="">Affiliates</a></p> -->
                                <p><a href="">Refer A Friend</a></p>
                                <p><a href="">Contact Us</a></p>
                            </div>
                            <!-- <div class="col-md-6">
                                <p><a href="">Terms of Use</a></p>
                                <p><a href="">Privacy Policy</a></p>
                                <p><a href="">Responsible Gaming</a></p>
                                <p><a href="">Account Security</a></p>
                                <p><a href="">Average Results</a></p>
                                <p><a href="">Legality</a></p>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="col-sm-2"> -->
                    <div class="col-sm-6">
                        <h3>SPORTS</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <p><a href="">NFL</a></p>
                                <p><a href="">NBA (Coming Soon!)</a></p>
                                <p><a href="">MLB (Coming Soon!)</a></p>
                                <p><a href="">NASCAR (Coming Soon!)</a></p>
                            </div>
                            <!-- <div class="col-md-6">
                                <p><a href="">NFL</a></p>
                                <p><a href="">NBA</a></p>
                                <p><a href="">MLB</a></p>
                                <p><a href="">GOLF</a></p>
                                <p><a href="">NHL</a></p>
                                <p><a href="">NAS</a></p>
                            </div>
                            <div class="col-md-6">
                                <p><a href="">MMA</a></p>
                                <p><a href="">SOC</a></p>
                                <p><a href="">CFL</a></p>
                                <p><a href="">LOL</a></p>
                                <p><a href="">Playbook</a></p>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="col-sm-4 col-sm-offset-1">
                        <h3>LOCATIONS</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <p><u>US Office</u></p>
                                <p>125 Summer St.</p>
                                <p>Floor 5</p>
                                <p>Boston, MA</p>
                                <p>02110</p>
                            </div>
                            <div class="col-md-6">
                                <p><u>UK Office</u></p>
                                <p>15 Ingestre Place</p>
                                <p>Suite 265</p>
                                <p>Soho, London</p>
                                <p>W1F OJH</p>
                            </div>
                        </div>
                    </div> -->
                </div>
                </div>
            </div>
@endsection
@push('push_javascripts')
    <script src="{{ asset('js/settings.js') }}"></script>
@endpush
