<div class="nav_container" id="nav_dark_skip"> <!--nav_container start-->
    <div class="nav_logo"> <!--nav_logo start-->
        <h1><a style="text-decoration: none;color: black" href="{{route('home')}}">Responzív webfejlesztés</a></h1>
    </div> <!--nav_logo end-->


    <div class="search"> <!--search start-->
        <form method="POST" action="{{route('search.index')}}" id="search-bar">
            @csrf
            <input id="search" type="text" placeholder="Search..." onfocus="this.placeholder = ''"
                   onblur="this.placeholder = 'Search...'" name="search" class="search_box">
            <a onclick="event.preventDefault();
                               document.getElementById('search-bar').submit()"
               style="color: black"> <i class="fas fa-search" id="search_icon"></i></a>

        </form>

    </div> <!--search end-->


    <div class="language_container"> <!-- language_container start-->
        <div class="language_icon"> <!--language start-->
            <i class="fas fa-language" id="change_language" data-toggle="collapse" data-target="#language"></i>
        </div> <!--language end-->
        <div id="language" class="collapse" aria-expanded="false"> <!-- language start-->
            <ul style="display: flex; flex-direction: column; position: fixed">
                <li>
                    <label id="en">English</label>
                </li>
                <li>
                    <label id="nether">Netherland</label>
                </li>
                <li>
                    <label id="hu">Hungarian</label>
                </li>
            </ul>
        </div> <!-- language end-->
    </div> <!-- language_container end-->


    <div class="acount"> <!--acount start-->
        @guest
            <i class="fas fa-sign-in-alt" id="login" data-toggle="modal" data-target="#loginModal"></i>

        @else
            <i class="fas fa-user-alt" data-toggle="collapse" data-target="#show-profile"></i>
            <div class="collapse" id="show-profile" aria-expanded="false">
                <ul style="display: flex; flex-direction: column; position: fixed">
                    <li><a href="" onclick="event.preventDefault();
                                                     document.getElementById('profile-form').submit();">
                            Profile
                        </a>
                        <form id="profile-form" action="{{ route('profile') }}" method="GET" class="d-none">
                            @csrf
                        </form>
                    </li>
                    <li><a href=""
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
        @auth
            <form id='cart_form' action="{{route('cart.show', auth()->id())}}" method="POST">
                @csrf
            </form>
        @else
            <form id='cart_form' action="{{route('profile')}}" method="GET">

            </form>
        @endauth
        <a onclick="document.getElementById('cart_form').submit();" style="color: black">
            <i class="fas fa-shopping-cart"></i>
        </a>
        </form>


    </div> <!--cart end -->
</div> <!--nav_container end-->
