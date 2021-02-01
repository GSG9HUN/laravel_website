<html>
<head>
    <title>Weboldal címe</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="authors" content="Seres Tamas, Olah Sandor Lajos">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('css/sidebar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/pre_loader/pre_loader.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/Language/language.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font_awsome/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/image.css')}}">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Germania+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">

    <script src="{{asset('js/Language reminder/loader.js')}}"></script>
    <script src="{{asset('js/Language reminder/saver.js')}}"></script>
    <script src="{{URL::asset('js/script.js')}}"></script>
    <script src="{{asset('js/language_icon.js')}}"></script>
    <script src="{{asset('js/set_language.js')}}"></script>

</head>


<body class="nether">
<div class="holder">
    <div class="preloader">
        <div></div>
        <div></div>
    </div>
</div>

<div id="content_wrap_f_preloader"> <!--content_wrap_f_preloader start-->
    <div class="nav_container" id="nav_dark_skip"> <!--nav_container start-->
        <div class="nav_logo"> <!--nav_logo start-->
          {{--  <h1 style="opacity: 0">Best Shop EUNE (no yas mains pls)</h1>--}}
        </div> <!--nav_logo end-->

        <div class="search"> <!--search start-->
            <input type="text" placeholder="Search..." onfocus="this.placeholder = ''"
                   onblur="this.placeholder = 'Search...'" name="search" class="search_box">
            <i class="fas fa-search" id="search_icon"></i>
        </div> <!--search end-->

        <div class="language_container"> <!-- language_container start-->
            <div class="language_icon"> <!--language start-->
                <i class="fas fa-language" id="change_language"></i>
            </div> <!--language end-->
            <div id="language" style="display : none;"> <!-- language start-->
                <div>
                    <label id="en">English</label>
                </div>
                <div>
                    <label id="nether">Netherland</label>
                </div>
                <div>
                    <label id="hu">Hungarian</label>
                </div>
            </div> <!-- language end-->
        </div> <!-- language_container end-->

        <div class="acount"> <!--acount start-->
            @guest
                <i class="fas fa-sign-in-alt" id="login" data-toggle="modal" data-target="#loginModal"></i>

            @else
                <i class="fas fa-user-alt" data-toggle="collapse" data-target="#show-profile"></i>
                <div class="collapse" id="show-profile" aria-expanded="false" aria-controls="collapseExample" >
                    <ul style="display: flex; flex-direction: column; position: fixed">
                        <li><a href=""  onclick="event.preventDefault();
                                                     document.getElementById('profile-form').submit();">
                                Profile
                            </a>
                            <form id="profile-form" action="{{ route('profile') }}" method="GET" class="d-none">
                                @csrf
                            </form>
                        </li>
                        <li ><a href=""
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            @endguest

        </div> <!--acount end-->

        <div class="cart"> <!--cart start -->
            <a href="{{route('cart.show')}}" style="color: black">
            <i class="fas fa-shopping-cart"></i>
            </a>
        </div> <!--cart end -->
    </div> <!--nav_container end-->

@include('layouts.login_modal')
    <div class="bh_header_space"></div>



    @yield('sidebar')

    @yield('content')
    <div class="foot_spacer"></div>
    <div id="moving_footer"> <!-- moving_footer start -->
        <div id="dark_mode"> <!-- dark_mode start -->
            <i class="fas fa-adjust" id="darkmode"></i>
        </div> <!-- dark_mode end -->
        <div class="footer_up_arrow"> <!-- footer_up_arrow start -->
            <i class="fas fa-arrow-up" id="up_arrow"></i>
        </div> <!-- footer_up_arrow end -->
    </div> <!-- moving_footer end -->
</div> <!--content_wrap_f_preloader end-->




</body>
</html>
