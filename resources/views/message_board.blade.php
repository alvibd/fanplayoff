@extends('layouts.base')

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
    <div class="message-board-area">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="message-board-header"></div>
                    <form class="message-board-input-form" action="">
                        <table cellspacing="0" class="message-board-input-table">
                            <tbody>
                            <tr>
                                <td class="td-left vertical-align-middle">Subject</td>
                                <td class="td-right">
                                    <input type="text">
                                </td>
                            </tr>
                            <tr>
                                <td class="td-left">
                                    <p>Quick Tags</p>
                                    <button class="bold-btn" type="button">b</button>
                                    <button class="italic-btn" type="button"> <i>i</i> </button>
                                    <button class="underline-btn" type="button">u</button>
                                    <button class="image-btn" type="button">image</button>
                                    <button class="link-btn" type="button"><img src="assets/img/youtube-icon.png" alt=""> youtube</button>
                                </td>
                                <td class="td-right">
                                    <div id='fake_textarea' contenteditable>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="td-left"></td>
                                <td class="td-right">
                                    <input type="submit" class="submit-message-btn" value="Submit Massage">
                                    <input type="submit" class="cancel-btn" value="Cancel">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="recent-message-area recent-post-bg">
                        <h3>Recent Messages</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="topic-header">
                                    <h3>Topic</h3>
                                </div>
                                <div class="gradient-divider-1"></div>
                                <div class="topic-body position-1 recent-post-bg">
                                    <p>No topic on this league message board</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="topic-header">
                                    <h3>Post</h3>
                                </div>
                                <div class="gradient-divider-2"></div>
                                <div class="topic-body position-2 recent-post-bg">
                                    <p>No messages on this league message board</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JOIN LEAGUE AREA END -->
@endsection