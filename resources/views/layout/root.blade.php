<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('build/assets/logo-B02QUcVt.png') }}">
    @php
        $theme = $_COOKIE['theme'];
    @endphp
    @if ($theme == 'day')
        <link rel="stylesheet" href="{{ asset('build/assets/root-day-CDYMKnvQ.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/component-day-DJZPeAJH.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('build/assets/root-BPYJc0Yv.css') }}">
        <link rel="stylesheet" href="{{ asset('build/assets/component-DKHGv6HG.css') }}">
    @endif
    <script defer src={{ asset('build/assets/root.js') }}></script>
    <title>Word Bag</title>
</head>

<body>
    <nav>
        <div class="header">
            <div class="left" href="goo.co">
                <span class="logo">&#128717; </span>
                <a href="{{ route('dashboard') }}">Word bag </a>
            </div>
            <div class="right">
                <a href="{{ route('profile') }}" class="profile">
                    <i class="profile-icon"></i>
                    <span>Profile</span>
                </a>
                <a href="{{ route('setting') }}" class="setting">
                    <span>&#9881;</span>
                    <span>Setting</span>
                </a>
                <a href="{{ route('logout') }}" class="logout">
                    <span>&#x1F6AA;</span>
                    <span>logout</span>
                </a>
                <div class="shift-theme" id="shift-theme">
                    @if ($theme == 'day')
                        &#127769;
                    @else
                        &#9737;
                    @endif
                </div>
            </div>

            <div class="drawer">
                <div class="drawer-container">
                    <label for="toggle" id="humberger">&#9776;</label>
                    <input type="checkbox" id="toggle"></input>
                    <div class="drawer-bar">
                        <div class="drawer-header">
                            <a href="#">
                                <span class="drawer-logo">Word bag</span>
                            </a>
                            <span class="drawer-logo" id="drawer-x">&times;</span>
                        </div>
                        <div class="drawer-content">
                            <a href="{{ route('profile') }}" class="profile">
                                <span>&#128100;</span>
                                <span>Profile</span>
                            </a>
                            <a href="{{ route('setting') }}" class="setting">
                                <span>&#9881;</span>
                                <span>Setting</span>
                            </a>
                            <a href="{{ route('logout') }}" class="logout">
                                <span>&#x1F6AA;</span>
                                <span>logout</span>
                            </a>
                            <div class="shift-theme drawer-switch">
                                <span>
                                    @if ($theme == 'day')
                                        &#127769;
                                    @else
                                        &#9737;
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main>
        @yield('main')
    </main>
</body>

</html>
