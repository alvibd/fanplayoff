@extends('layouts.base')

@section('content')
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
                    <div class="league-option">
                        <div class="league-search">
                            <form action="">
                                <p>
                                    <input type="search" name="" id="" placeholder="Search League">
                                    <button type="submit"><img src="assets/img/search-icon.png" alt=""></button>
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
                                <!-- <p class="custom-radio-container">
                                    <input type="radio" id="test1" name="radio-group" checked>
                                    <label for="test1">Default</label>

                                    <input type="radio" id="test2" name="radio-group">
                                    <label for="test2">Custom</label>
                                </p> -->
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
                                <th style="width:25%;">NAME</th>
                                <th style="width:15%;">FORMAR</th>
                                <th style="width:10%;">ACCESS</th>
                                <th style="width:20%;">DRAFT DATE</th>
                                <th style="width:13%;">MEMBERS</th>
                                <th style="width:17%;">JOIN LEAGUE</th>
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
                            <tr>
                                <td>Sfro</td>
                                <td>Custom</td>
                                <td>Private</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 12</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>All Due Respect</td>
                                <td>Standard</td>
                                <td>Private</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 10</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Comms Yard</td>
                                <td>Custom</td>
                                <td>Public</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 8</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Disciples of Roger</td>
                                <td>Standard</td>
                                <td>Private</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 14</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>West Coast Best Coast</td>
                                <td>Custom</td>
                                <td>Public</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 10</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>AJG Cleveland</td>
                                <td>Custom</td>
                                <td>Private</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 12</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>The League</td>
                                <td>Custom</td>
                                <td>Public</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 16</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Wentztastic Season 2</td>
                                <td>Custom</td>
                                <td>Private</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 17</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>777</td>
                                <td>Standard</td>
                                <td>Public</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 14</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>DYNASTY KEY</td>
                                <td>Custom</td>
                                <td>Public</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 20</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Meme</td>
                                <td>Custom</td>
                                <td>Public</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 18</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Texas Custom Patios</td>
                                <td>Custom</td>
                                <td>Private</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 9</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Meme</td>
                                <td>Standard</td>
                                <td>Public</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 10</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Winter is coming...</td>
                                <td>Custom</td>
                                <td>Public</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 12</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>LL of Produce n Peons</td>
                                <td>Standard</td>
                                <td>Public</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 12</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Custom test</td>
                                <td>Custom</td>
                                <td>Private</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 12</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Dynasty league</td>
                                <td>Custom</td>
                                <td>Private</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 2</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Average Joe's</td>
                                <td>Standard</td>
                                <td>Private</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 13</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Sfro</td>
                                <td>Custom</td>
                                <td>Private</td>
                                <td>Thu, Sep 21 6:00 PM</td>
                                <td>1 / 12</td>
                                <td style="text-align: center">
                                    <a href="" class="join-btn">join</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JOIN LEAGUE AREA END -->
@endsection