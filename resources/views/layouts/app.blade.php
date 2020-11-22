<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name', 'LSAPP')}}</title>
    <link rel="stylesheet" href="{{ asset('../../../css/app.css') }}"/>
</head>
<body>
    <header>
      <a class="logo" href="/"><img src='assets/logo.png' width="130px" height="130px" alt="logo"></a>
        <nav>
            <ul class="nav__links">
                <li><a href="/">Over mij</a></li>
                <li><a href="/producten">Producten</a></li>
                <li><a href="/galerij">Galerij</a></li>
            </ul>
        </nav>
        <a class="cta" href="#">Contact</a>
        <p class="menu cta">Menu</p>
    </header>
</body>
    @yield('content')
</body>
</html>