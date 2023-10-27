<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
</head>
<body>
<body>
  <div class="menu-container" id="menu-container">
    <div id="hamburger" class="hamburger">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <div class="sidebar" id="sidebar">
        <ul class="nav__items">
            <li class="nav-items__item"><a href="{{ route('home') }}">HOME</a></li>
            <li class="nav-items__item"><a href="{{ route('accounts_list') }}">アカウント一覧</a></li>
            <li class="nav-items__item"><a href="{{ route('contacts') }}">お問い合わせ一覧</a></li>
        </ul>
    </div>
</div>
<div class="admin_backgraund">
<div class="admin">管理者</div>
</div>
     @yield('content')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const sidebar = document.getElementById('sidebar');
    const HOME = document.getElementById('HOME');
    const box = document.getElementById('box');
    const table = document.getElementById('table');

    hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('active');
        sidebar.classList.toggle('active');
        HOME.classList.toggle('active');
        box.classList.toggle('active');
        table.classList.toggle('active');
    });
});
</script>
</body>
</body>
</html>
