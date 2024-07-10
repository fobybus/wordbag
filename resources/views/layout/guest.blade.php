<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('build/assets/logo-B02QUcVt.png') }}">
    @php
        $theme = $_COOKIE['theme'];
    @endphp
    @if($theme=='day')
    <link rel="stylesheet" href="{{ asset('build/assets/root-day-CDYMKnvQ.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/component-day-DJZPeAJH.css') }}">
    @else 
    <link rel="stylesheet" href="{{ asset('build/assets/root-BPYJc0Yv.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/component-DKHGv6HG.css') }}">
    @endif
    <script defer src={{ asset('build/assets/root.js') }}></script>
    <title>word bag</title>
</head>

<body>
    <nav>
        <div class="header gust-header">
            <div class="left" href="goo.co">
                <span class="logo">&#128717; </span>
                <a href="{{route('dashboard')}}">Word bag </a>
            </div>
        </div>
    </nav>
    <main>
        <div class="form-container">
            @yield('main')
        </div>
    </main>
</body>

</html>
