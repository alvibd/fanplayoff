<div class="show-off-canvas-menu-shade"></div>

@includeWhen(!Auth::check(), 'partials.auth')

<!-- RESPONSIVE MENU START -->
<div class="responsive-menu">
    <ul>
        <!-- <li><a href="#">Home</a></li> -->
        <!-- <li><a href="#">Watch List</a></li> -->
        <li><a href="#">How to play</a></li>
        <!-- <li><a href="#">Tips &amp; Tricks</a></li> -->
    </ul>
    <div class="menu-divider"></div>
    <ul>
        <li><a href="#">FAQ</a></li>
        @guest
            <li><a href="#" class="colored-menu login-btn">Log In / Register</a></li>
        @else
            <li><a href="#" class="colored-menu logout" id="logout">Logout</a></li>
            <form class="logout-form" method="post" action="{{ route('logout') }}" style="display: none">
                {{ csrf_field() }}
            </form>
        @endguest
    </ul>
</div>
<!-- RESPONSIVE MENU END -->


<!-- HEADER AREA START -->
<div class="header-area header-absolute">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 width-40">
                <div class="menu-left">
                    <ul>
                        @if(Auth::check())
                            <li><a href="{{ route('index') }}">Home</a></li>
                        @endif
                        <!-- <li><a href="#">Watch List</a></li> -->
                        <li><a href="#">How to play</a></li>
                        <!-- <li><a href="#">Tips &amp; Tricks</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-md-4 width-20">
                <div class="logo">
                    <a href="{{ route('index') }}"><img src="{{ asset('/img/logo.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-md-4 width-40 text-right">
                <div class="menu-right">
                    <ul>
                        @if(Auth::check())
                            <li><a href="{{ route('show.profile') }}">My Account</a></li>
                            <li><a href="join-league.html">Join A League</a></li>
                            <li><a href="{{ route('create.league') }}">Create A League</a></li>
                            <li><a href="{{ route('logout') }}" class="colored-menu logout">Logout</a></li>
                            <form class="logout-form" method="post" action="{{ route('logout') }}" style="display: none">
                                {{ csrf_field() }}
                            </form>
                        @else
                            <li><a href="#">FAQ</a></li>
                            <li><a href="" class="colored-menu login-btn">Log In / Register</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- HEADER AREA END -->