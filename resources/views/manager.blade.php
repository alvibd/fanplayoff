@extends('layouts.base')

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
                                <li><a href="#">League Home</a></li>
                                <li><a href="message-board.html">Message Board</a></li>
                                <li><a href="email-league.html">Email League</a></li>
                                <li><a href="managers.html">Managers</a></li>
                                <li><a href="">Rosters</a></li>
                                <li><a href="">Settings</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- HERO AREA END -->

    <!-- JOIN LEAGUE AREA START -->
    <div class="manager-area">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="manager-header">
                        <h3>Owner Info</h3>
                    </div>
                    <form class="manager-input-table" action="">
                        <table cellspacing="0" class="owner-info-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th></th>
                                <th>TEAM NAME</th>
                                <th>OWNER NAME</th>
                                <th>EMAIL</th>
                                <th>status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>SIDD</td>
                                <td>12 Angry Men</td>
                                <td>David Johnson</td>
                                <td> <a href="">Send Email</a> </td>
                                <td>Joined</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>DHKH</td>
                                <td>Dhaka Hotspur</td>
                                <td>David Johnson</td>
                                <td> <a href="">Send Email</a> </td>
                                <td>Joined</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>tm3</td>
                                <td>Team 3</td>
                                <td><input type="text"></td>
                                <td><input type="email"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>tm4</td>
                                <td>Team 4</td>
                                <td><input type="text"></td>
                                <td><input type="email"></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="space-between-tables"></div>

                        <table cellspacing="0" class="invite-info-table">
                            <thead>
                            <tr>
                                <th>INVITE OPTIONS</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Send Invites to:</td>
                                <td class="radio-btn-style-2">
                                    <p>
                                        <input type="radio" id="test7" name="radio-group" checked>
                                        <label for="test7">Owners who have not joined</label>
                                    </p>
                                    <p>
                                        <input type="radio" id="test8" name="radio-group">
                                        <label for="test8">Nobody</label>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>Send me a copy of each invite:</td>
                                <td>
                                    <select class="custom-select">
                                        <option class="custom-option" value="Yes">Yes</option>
                                        <option class="custom-option" value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Add custom message:</td>
                                <td>
                                    <select class="custom-select">
                                        <option class="custom-option" value="Yes">Yes</option>
                                        <option class="custom-option" value="No">No</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-with-btn">
                                    Custom message:
                                    <input type="submit" class="submit-invite-btn" value="Submit Owner info/Send Invites">
                                </td>
                                <td>
                                    <textarea name="" id=""></textarea>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- JOIN LEAGUE AREA END -->
@endsection