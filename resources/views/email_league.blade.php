@extends('layouts.base')

@section('page_title', 'FANPLAY off')

@section('content')
    <!-- HERO AREA START -->
    <div class="hero-area padding-bottom-less padding-top-less padding-bottom-0 hero-area-bg">
        <p class="subtitle">Email League</p>
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
    <div class="email-league-area">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="email-header">
                        <h3>EMAIL LEAGUE </h3>
                    </div>
                    <form class="email-input-table" action="">
                        <table cellspacing="0">
                            <tbody>
                            <tr>
                                <td class="td-left">To:</td>
                                <td class="td-right">
                                    <select class="custom-select">
                                        <option class="custom-option" value="All League Members">All League Members</option>
                                        <option class="custom-option" value="All League Members 1">All League Members 1</option>
                                        <option class="custom-option" value="All League Members 2">All League Members 2</option>
                                        <option class="custom-option" value="All League Members 3">All League Members 3</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="td-left">Subject:</td>
                                <td class="td-right">
                                    <input type="text">
                                </td>
                            </tr>
                            <tr>
                                <td class="td-left">Massage:</td>
                                <td class="td-right">
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="td-left">
                                    <input type="submit" class="send-btn" value="Send">
                                </td>
                                <td class="td-right">
                                    <input type="submit" class="cancel-btn" value="Cancel">
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
