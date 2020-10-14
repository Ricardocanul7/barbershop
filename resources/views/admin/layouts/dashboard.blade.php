<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/Dashboard.ico')}}" type="image/ico" />

    <title>Dashboard | {{ config('app.name', 'Laravel') }}</title>

    <!-- SASS Compiled file -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <nav>
        <div class="burger-menu">
            <a href="#" class="burger-button"></a>
        </div>
        <ul>
            <li>
                <a href="#" class="messages-notification"></a>
            </li>
            <li>
                <a href="#" class="profile-section"></a>
            </li>
        </ul>
    </nav>
    <main>
        @yield('contenido')
    </main>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
