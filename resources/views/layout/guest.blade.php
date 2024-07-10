<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('build/assets/root-MriMMzvk.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/component-B5Ih6gIL.css') }}">
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
