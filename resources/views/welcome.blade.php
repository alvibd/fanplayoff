@extends('layouts.base')

@section('page_title', 'FANPLAY off')

@section('content')
    <div class="responsive-header">
        <div class="logo-responsive">
            <a href="{{ route('index') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
        </div>
        <div class="header-content">
            <h1>post-season Fantasy Sports</h1>
            <a href="#" class="boxed-btn">CREATE a LEAGUE</a>
            <a href="{{ route('join.league') }}" class="boxed-btn">JOIN A LEAGUE</a>
        </div>
        <div class="mobile-menu-bar active"><img src="{{ asset('img/menu-bar.png') }}" alt=""></div>
        <div class="mobile-menu-close"><img src="{{ asset('img/menu-close-responsive.png') }}" alt=""></div>
    </div>
    <!-- HERO AREA START -->
    <div class="hero-area hero-area-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="header-content">
                        <h1>post-season Fantasy Sports</h1>
                        <a href="{{ route('create.league') }}" class="boxed-btn">CREATE a LEAGUE</a>
                        <a href="{{ route('join.league') }}" class="boxed-btn">JOIN A LEAGUE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HERO AREA END -->

    <!-- HOW TO PLAY AREA START -->
    <div class="how-to-play-area how-to-play-area-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="how-to-play-title">
                        <h1>HOW TO PLAY</h1>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-7 text-right">
                    <div class="how-to-play-image"><img src="{{ asset('img/how-to-play-image.png') }}" alt=""></div>
                </div>
                <div class="col-md-5">
                    <div class="how-to-play-text">
                        <p><img src="{{ asset('img/how-to-play-icon-1.png') }}" alt=""> Create a league, <br>or join an
                            existing one.</p>
                        <p><img src="{{ asset('img/how-to-play-icon-2.png') }}" alt=""> Participate in a live snake <br>or
                            auction draft.</p>
                        <p><img src="{{ asset('img/how-to-play-icon-3.png') }}" alt=""> Score the most rotisserie points
                            <br>through the Super Bowl and win!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOW TO PLAY AREA END -->

    <!-- ABOUT AREA START -->
    <div class="about-area about-area-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-image">
                        <div class="about-image-inner">
                            <a href="https://www.youtube.com/watch?v=WokdWEYZ7GU" class="video-play-btn mfp-iframe"><i
                                        class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <h1>INTRODUCING FANPLAYOFF</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilisis
                            eros. Sed erat. In in velit quis arcu ornare laoreet. Curabitur adipiscing luctus massa.<br><br>
                            Integer ut purus ac augue commodo commodo. Nunc nec mi eu justo tempor consectetuer. Etiam
                            vitae nisl. In dignissim lacus ut ante. Cras elit lectus, bibendum a, adipiscing vitae,
                            commodo et, dui.<br><br>
                            Ut tincidunt tortor. Donec nonummy, enim in lacinia pulvinar, velit tellus scelerisque
                            augue, ac posuere libero urna eget neque. Cras ipsum. Vestibulum pretium, lectus nec
                            venenatis volutpat, purus lectus ultrices risus, a condimentum risus mi et quam.
                            Pellentesque auctor fringilla neque. Duis eu massa ut lorem iaculis vestibulum. Maecenas
                            facilisis elit sed justo. Quisque volutpat malesuada velit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT AREA END -->

    <!-- HOW IT WORKS AREA START -->
    <div class="how-it-works-area">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-6">
                    <div class="how-it-works-text">
                        <h1>HOW IT WORKS</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilisis eros. Sed erat. In in velit quis arcu ornare laoreet. Curabitur adipiscing luctus massa. Integer ut purus ac augue commodo commodo. Nunc nec mi eu justo tempor consectetuer. Etiam vitae nisl. In dignissim lacus ut ante. Cras elit lectus, bibendum a, adipiscing vitae, commodo et, dui. Ut tincidunt tortor. Donec nonummy, enim in lacinia pulvinar, velit tellus scelerisque augue, ac posuere libero urna eget neque. Cras ipsum. Vestibulum pretivum, lectus nec venenatis volutpat, purus lectus ultrices risus, a condimentum risus mi et quam. Pellentesque auctor fringilla neque. Duis eu massa ut lorem iaculis vestibulum. Maecenas facilisis elit sed justo. Quisque volutpat malesuada velit.<br><br>
                        ac posuere libero urna eget neque. Cras ipsum. Vestibulum pretium, lectus nec venenatis volutpat, purus lectus ultrices risus, a condimentum risus mi et quam. Pellentesque auctor fringilla neque. Duis eu massa ut lorem iaculis vestibulum. Maecenas facilisis elit sed justo. Quisque volutpat malesuada velit.</p>
                    </div>
                </div> -->
                <!-- <div class="col-md-6 text-center">
                    <div class="tips-text">
                        <h1>Tips</h1>
                        <p class="gradient-bg">Lorem ipsum dolor sit amet consectetuer adipiscing</p>
                        <p class="gradient-bg">Lorem ipsum dolor sit amet consectetuer adipiscing</p>
                        <p class="gradient-bg">Lorem ipsum dolor sit amet consectetuer adipiscing</p>
                        <a href="" class="bordered-btn">MORE TIPS</a>
                    </div>
                </div> -->
                <div class="col-md-12">
                    <div class="how-it-works-text text-center">
                        <h1>PARTNERS</h1>
                    </div>
                </div>
                <div class="col-md-12" class="menu-logo">
                    <div class="col-md-3">
                        <a href="#"><img src="{{ asset('img/logo-dummy.png') }}" alt="Partner 1"></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="{{ asset('img/logo-dummy.png') }}" alt="Partner 2"></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="{{ asset('img/logo-dummy.png') }}" alt="Partner 3"></a>
                    </div>
                    <div class="col-md-3">
                        <a href="#"><img src="{{ asset('img/logo-dummy.png') }}" alt="Partner 4"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOW IT WORKS AREA END -->
@endsection