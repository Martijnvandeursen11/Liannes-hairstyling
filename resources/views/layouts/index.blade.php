<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v9.0" nonce="lwnCQF63"></script>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('../../../css/app.css') }}"/>
    <link rel="stylesheet" href="{{ asset('../../../css/footer.css') }}"/>
    <script type="text/javascript" src="../../../js/index.js"></script>

</head>

<body>
    <header-transparent>
       <a class="logo" href="/"> <img src="../../assets/logo.png" width="130px" height="130px" alt="logos"> </a>
        <nav style="margin-left: 19%;">
            <ul class="nav__links">
                <li><a href="/">Over mij</a></li>
                <li><a href="/producten">Producten</a></li>
                <li><a href="/galerij">Galerij</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                            
                            <li class="nav-item">
                                <a  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <a style="margin-left: 20px;" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
    </header-transparent>
</body>
    @include('inc.messages')
    @yield('content')

<div class="footercss">
<footer>
    <div class="container">
        <div class="sec aboutus">
            <h2>Over mij</h2>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>
            <div class="sci">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></i></a></li>
            </div>
        </div>
        <div class="sec quicklinks">
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Term and Conditions</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="sec contact">
            <h2>Contact</h2>
            <ul class="info">
                <li>
                    <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <p><a href="tel:0619827034">+31 6 19827034</a><br></p>
                </li>
                <li>
                    <span><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
                    <p><a href="https://wa.me/31625365788?text=djwia%0A%0AHello">Klik hier</a></p>
                </li>
            </ul>
        </div>
    </div>
</footer>
<div class="copyrighttext">
    <p>Copyright © 2020 Lianne's Hairstyling. All rights Reserved.</p>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>