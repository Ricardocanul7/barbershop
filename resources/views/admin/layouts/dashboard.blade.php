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

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- SASS Compiled file -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <nav class="nav-top">
        <div class="burger-menu">
            <button id="open-burger-button" class="burger-button">
                <ion-icon name="menu-outline"></ion-icon>
            </button>
        </div>
        <ul>
            <li>
                <a href="#" class="messages-notification">Mensajes</a>
            </li>
            <li>
                <a href="#" class="profile-section">
                    <img src="{{asset('img/ROW_BARBERSHOP_LOGO_TRASPARENT.png')}}" alt="" class="avatar">
                </a>
            </li>
        </ul>
    </nav>

    <div class="content-area">
        <aside>
            <div class="aside-content">
                <input type="checkbox" id="aside-open-check" checked="true" hidden="hidden">
                <div class="navbar-area">
                    <button id="close-burger-button" class="close-button">
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>
                <div class="profile-section">
                    <img src="{{asset('img/ROW_BARBERSHOP_LOGO_TRASPARENT.png')}}" alt="" class="avatar">
                    <div class="username">
                        Juanito Sanchez
                    </div>
                </div>
                <ul class="aside-section-links">
                    <li>
                        <a href=" {{ url('admin/clients') }} ">Clientes</a>
                    </li>
                    <li>
                        <a href=" {{ url('admin/services') }} ">Servicios</a>
                    </li>
                </ul>
            </div>
        </aside>

        <main>
            @yield('contenido')
        </main>
    </div>

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.js"></script>
    <!-- Compiled asset -->
    <script src="{{asset('js/app.js')}}"></script>

    <script src=" {{asset('js/dashboard.js')}} "></script>
</body>
</html>
