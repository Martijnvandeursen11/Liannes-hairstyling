<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v9.0" nonce="lwnCQF63"></script>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name', 'LSAPP')}}</title>
    <link rel="stylesheet" href="{{ asset('../../../css/app.css') }}"/>
    <script type="text/javascript" src="../../../js/index.js"></script>
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
</body>
</html>