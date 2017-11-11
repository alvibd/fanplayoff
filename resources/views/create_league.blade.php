@extends('layouts.base')

@section('page_title', 'FANPLAY off| Create a League')

@section('content')
    <!-- VIEW SCORING POPUP START -->
    <div class="view-scoring-popup-menu">
        <div class="view-scoring-header-area">
            <span class="menu-close"><img src="{{ asset('img/menu-close.png') }}" alt=""></span>
        </div>
        <div class="view-scoring-content-wrapper">
            <form action="">
                <table cellspacing="0" class="view-scoring-table">
                    <thead>
                    <tr>
                        <th>Scoring</th>
                        <th>Default</th>
                        <th class="custom-view-scoring hidden">Custom</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <p class="scroring-checkbox"><input type="checkbox" id="c2"><label for="c2">Passing yards
                                    (YDS)</label></p>
                        </td>
                        <td>1</td>
                        <td class="custom-view-scoring hidden">
                            <select class="custom-select">
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="scroring-checkbox"><input type="checkbox" id="c3"><label for="c3">Passing
                                    touchdowns (TD)</label></p>
                        </td>
                        <td>2</td>
                        <td class="custom-view-scoring hidden">
                            <select class="custom-select">
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="scroring-checkbox"><input type="checkbox" id="c4"><label for="c4">Rushing
                                    yards</label></p>
                        </td>
                        <td>3</td>
                        <td class="custom-view-scoring hidden">
                            <select class="custom-select">
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="scroring-checkbox"><input type="checkbox" id="c5"><label for="c5">Rushing
                                    touchdowns</label></p>
                        </td>
                        <td>4</td>
                        <td class="custom-view-scoring hidden">
                            <select class="custom-select">
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="scroring-checkbox"><input type="checkbox" id="c6"><label
                                        for="c6">Receptions</label></p>
                        </td>
                        <td>5</td>
                        <td class="custom-view-scoring hidden">
                            <select class="custom-select">
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="scroring-checkbox"><input type="checkbox" id="c7"><label for="c7">Receiving
                                    yards</label></p>
                        </td>
                        <td>6</td>
                        <td class="custom-view-scoring hidden">
                            <select class="custom-select">
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="scroring-checkbox"><input type="checkbox" id="c8"><label for="c8">Receiving
                                    touchdowns</label></p>
                        </td>
                        <td>7</td>
                        <td class="custom-view-scoring hidden">
                            <select class="custom-select">
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="scroring-checkbox"><input type="checkbox" id="c9"><label for="c9">Points
                                    allowed/games played</label></p>
                        </td>
                        <td>8</td>
                        <td class="custom-view-scoring hidden">
                            <select class="custom-select">
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="scroring-checkbox"><input type="checkbox" id="c10"><label for="c10">Points
                                    allowed</label></p>
                        </td>
                        <td>8</td>
                        <td class="custom-view-scoring hidden">
                            <select class="custom-select">
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="scroring-checkbox"><input type="checkbox" id="c11"><label for="c11">Points
                                    allowed/games </label></p>
                        </td>
                        <td>8</td>
                        <td class="custom-view-scoring hidden">
                            <select class="custom-select">
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="scroring-checkbox"><input type="checkbox" id="c12"><label for="c12">Points not
                                    allowed</label></p>
                        </td>
                        <td>8</td>
                        <td class="custom-view-scoring hidden">
                            <select class="custom-select">
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="scroring-checkbox"><input type="checkbox" id="c13"><label for="c13">Games
                                    played</label></p>
                        </td>
                        <td>8</td>
                        <td class="custom-view-scoring hidden">
                            <select class="custom-select">
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="scroring-checkbox"><input type="checkbox" id="c14"><label for="c14">Games not
                                    played</label></p>
                        </td>
                        <td>8</td>
                        <td class="custom-view-scoring hidden">
                            <select class="custom-select">
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                                <option class="custom-option" value=""></option>
                            </select>
                        </td>
                    </tr>
                    </tbody>
                </table>

                <p class="sign-up-btn sign-up-btn-custom">Sign up</p>
            </form>
        </div>
    </div>
    <!-- VIEW SCORING POPUP END -->

    <!-- HERO AREA START -->
    <div class="hero-area padding-bottom-less padding-top-less hero-area-bg c-l-hero-area">
        <p class="subtitle">CREATE YOUR OWN LEAGUE</p>
    </div>
    <!-- HERO AREA END -->

    <!-- CREATE YOUR OWN LEAGUE AREA START -->
    <div class="c-l-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ddf">
                    <div class="c-l-top-data">
                        <div class="col-md-8 col-md-offset-4">

                            <div class="single-data s-d-1">
                                <h2>league name</h2>
                                <div class="c-l-input">
                                    <input type="text" name="" id="">
                                </div>
                            </div>

                            <div class="single-data single-data-btn s-d-2">
                                <h2>number of teams</h2>
                                <form action="">
                                    <div class="three-section-btn">
                                        <a class="incx" onclick="decrementValue()">-</a>
                                        <input class="counter-result" type="text" id="number" value="3" max="5" min="3"
                                               disabled>
                                        <a class="decx" onclick="incrementValue()">+</a>
                                    </div>
                                </form>
                            </div>


                            <div class="single-data single-data-btn s-d-2">
                                <h2>League Type</h2>
                                <form action="">
                                    <p class="form-input-radio">
                                        <input type="radio" id="test3" name="radio-group" checked>
                                        <label for="test3" class="option3">Public</label>

                                        <input type="radio" id="test4" name="radio-group">
                                        <label for="test4" class="option4">Private</label>
                                    </p>
                                </form>
                            </div>

                            <div class="single-data single-data-btn s-d-3">
                                <h2>draft date</h2>

                                <form action="">


                                    <div class="form-group">
                                        <div class="input-group date form_datetime col-md-5 d-p"
                                             data-date="1979-09-16T05:25:07Z" data-date-format="dd M yy - HH:ii p"
                                             data-link-field="dtp_input1">
                                            <input class="form-control" size="16" type="text"
                                                   value="pick date &amp; time" readonly>
                                            <span class="input-group-addon dp-x">
                                                <span class="glyphicon glyphicon-th">
                                                    <img src="{{ asset('img/calendar-icon.png') }}" alt="">
                                                </span>

                                            </span>
                                        </div>
                                        <input type="hidden" id="dtp_input1" value=""/>
                                        <br/>
                                    </div>


                                </form>

                            </div>


                            <div class="single-data single-data-btn s-d-4">
                                <h2>draft order</h2>

                                <form action="">
                                    <p class="form-input-radio">
                                        <input type="radio" id="test3r" name="radio-group" checked>
                                        <label for="test3r" class="option3r">Random</label>

                                        <input type="radio" id="test4r" name="radio-group">
                                        <label for="test4r" class="option4r">Custom</label>
                                    </p>
                                </form>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="c-l-middle-data">
        <div class="container-fluid">
            <div class="row">
                <!-- <div class="col-md-12"> -->
                <div class="col-md-5">
                    <div class="roster">
                        <div class="single-data-rosetr">
                            <h3>roster size
                                <input type="text" value="0" id="roster-data-f" disabled>
                            </h3>

                        </div>

                        <div class="single-data-rosetr">
                            <h3>total starters
                                <input type="text" value="0" id="starters-data-f" disabled>
                            </h3>
                        </div>

                        <div class="single-data-rosetr">
                            <h3>total on bench
                                <input type="text" value="0" id="bench-data-f" disabled>
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="position-starters">
                        <table cellspacing="30" class="position-starters-stats-table">
                            <thead>
                            <tr>
                                <th>
                                    <h2>Position</h2>
                                </th>
                                <th>
                                    <h2>starters</h2>
                                </th>
                                <!-- <th><h2>starters</h2></th> -->
                            </tr>
                            </thead>

                            <tbody>

                            <tr>
                                <td>
                                    <h3>qb</h3>
                                </td>
                                <td>
                                    <div class="range-slider">
                                        <input class="range-slider__range" type="range" value="0" max="5" min="0"
                                               id="qb-id" onclick="qbValue()">
                                        <div class="data-count">
                                            <!-- <span class="range-slider__value" id="bench-data" value="0">0</span> -->

                                            <input class="range-slider__value" id="qb-data" value="0" disabled>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <h3>rb</h3>
                                </td>
                                <td>
                                    <div class="range-slider">
                                        <input class="range-slider__range" type="range" value="0" max="5" min="0"
                                               id="rb-id" onclick="rbValue()">
                                        <div class="data-count">
                                            <!-- <span class="range-slider__value" id="bench-data" value="0">0</span> -->

                                            <input class="range-slider__value" id="rb-data" value="0" disabled>
                                        </div>
                                    </div>

                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <h3>wr</h3>
                                </td>
                                <td>
                                    <div class="range-slider">
                                        <input class="range-slider__range" type="range" value="0" max="5" min="0"
                                               id="wr-id" onclick="wrValue()">
                                        <div class="data-count">
                                            <!-- <span class="range-slider__value" id="bench-data" value="0">0</span> -->

                                            <input class="range-slider__value" id="wr-data" value="0" disabled>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <h3>te</h3>
                                </td>
                                <td>
                                    <div class="range-slider">
                                        <input class="range-slider__range" type="range" value="0" max="5" min="0"
                                               id="te-id" onclick="teValue()">
                                        <div class="data-count">

                                            <input class="range-slider__value" id="te-data" value="0" disabled>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <h3>flex</h3>
                                </td>
                                <td>
                                    <div class="range-slider">
                                        <input class="range-slider__range" type="range" value="0" max="5" min="0"
                                               id="flex" onclick="flexValue()">
                                        <div class="data-count">
                                            <!-- <span class="range-slider__value" id="bench-data" value="0">0</span> -->

                                            <input class="range-slider__value" id="flex-data" value="0" disabled>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <h3>def</h3>
                                </td>
                                <td>
                                    <div class="range-slider">
                                        <input class="range-slider__range" type="range" value="0" max="5" min="0"
                                               id="def" onclick="defValue()">
                                        <div class="data-count">
                                            <!-- <span class="range-slider__value" id="bench-data" value="0">0</span> -->

                                            <input class="range-slider__value" id="def-data" value="0" disabled>
                                        </div>
                                    </div>

                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <h3>k</h3>
                                </td>
                                <td>
                                    <div class="range-slider">
                                        <input class="range-slider__range" type="range" value="0" max="5" min="0"
                                               id="k-id" onclick="kValue()">
                                        <div class="data-count">
                                            <!-- <span class="range-slider__value" id="bench-data" value="0">0</span> -->

                                            <input class="range-slider__value" id="k-data" value="0" disabled>
                                        </div>

                                    </div>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <h3>be</h3>
                                </td>
                                <td>
                                    <!-- <div class="progress range-slider">
                                        <input class="range-slider__range" type="range" value="100" min="0" max="10">
                                    </div>
                                    <div class="data-count">
                                        <span class="range-slider__value">0</span>
                                    </div> -->


                                    <div class="range-slider">
                                        <input class="range-slider__range" type="range" value="0" max="10" min="0"
                                               id="bench" onclick="benchValue()">

                                        <!-- <input type="text" name="" id="benci"> -->
                                        <div class="data-count">
                                            <!-- <span class="range-slider__value" id="bench-data" value="0">0</span> -->

                                            <input class="range-slider__value" id="bench-data" value="0" disabled>
                                        </div>

                                    </div>


                                </td>
                            </tr>


                            </tbody>

                        </table>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>


    <div class="c-l-bottom-area">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="c-l-bottom-header">
                        <div class="hexagon-out">
                        </div>
                        <div class="hexagon">
                            <h3>scoring</h3>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-5">
                        <div class="c-l-bottom-buttons">

                            <div class="c-l-bottom-toggle-button">
                                <form action="">
                                    <p class="form-input-radio bottom-toggle">
                                        <input type="radio" id="test3x" name="radio-group" checked>
                                        <label for="test3x" class="option3x">Default</label>

                                        <input type="radio" id="test4x" name="radio-group">
                                        <label for="test4x" class="option4x">custom</label>
                                    </p>
                                </form>
                            </div>

                            <!-- <div class="c-l-bottom-normal-button">
                                <a href="#" class="cl-btn-normal">snake</a>
                            </div> -->
                            <div class="col-md-6 col-md-offset-4">
                                <div class="c-l-bottom-normal-button">
                                    <a href="#" class="cl-btn-normal">view scoring</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="c-l-bottom-grdient-bg">
                    </div>
                </div>
            </div> -->


        </div>
    </div>


    <div class="c-l-bottom-gradient-bg">
        <div class="conatiner-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 col-md-offset-5">
                        <div class="c-l-btn">
                            <a href="#">Create League</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- CREATE YOUR OWN LEAGUE AREA END -->
@endsection

@push('push_stylesheets')
    <link href="{{ asset('css/c-l.css') }}" rel="stylesheet">
    <link href="{{ asset('css/c-l-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" type="text/css" rel="stylesheet">
@endpush

@push('push_javascripts')
    <script src="{{ asset('js/bootstrap-datetimepicker.js') }}" charset="UTF-8"></script>
    <script src="{{ asset('js/c-l.js') }}"></script>
    <script src="{{ asset('js/ranger.js') }}"></script>
    <script>
        var rangeSlider = function () {
            var slider = $('.range-slider'),
                range = $('.range-slider__range'),
                value = $('.range-slider__value');

            slider.each(function () {

                value.each(function () {
                    var value = $(this).prev().attr('value');
                    $(this).html(value);
                });

                range.on('input', function () {
                    $(this).next(value).html(this.value);

                });
            });


        };


        rangeSlider();

        $('.form_datetime').datetimepicker({
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1,
            startDate: new Date(),
            pickerPosition: "bottom-left"
        });
    </script>
    <script src="{{ asset('js/view-scoring.js') }}"></script>
@endpush