<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v9.0" nonce="lwnCQF63"></script>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name', 'LSAPP')}}</title>
    <link rel="stylesheet" href="{{ asset('../../../css/app.css') }}"/>
    <link rel="stylesheet" href="{{ asset('../../../css/footer.css') }}"/>
    <script type="text/javascript" src="../../../js/index.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <header-transparent>
        <a class="logo" href="/"><img src='assets/logo.png' width="130px" height="130px" alt="logo"></a>
        <nav>
            <ul class="nav__links">
                <li><a href="#anchor-point-1">Over mij</a></li>
                <li><a href="/producten">Producten</a></li>
                <li><a href="/galerij">Galerij</a></li>
            </ul>
        </nav>
        <a class="cta" href="#">Contact</a>
        <p class="menu cta">Menu</p>
    </header-transparent>
</body>
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
                    <p><a href="tel:0625365788">+31 6 253 657 88</a><br></p>
                </li>
                <li>
                    <span><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
                    <p><a href="#">Klik hier</a></p>
                </li>
            </ul>
        </div>
    </div>
</footer>
<div class="copyrighttext">
    <p>Copyright © 2020 Lianne's Hairstyling. All rights Reserved.</p>
</div>
</div>
</body>
</html>