<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


</head>

<body>

    <header>
        <nav>
            <ul class="menu" id="menu">
                <div class="logo">
                    <img src="{{ asset('imagenes/PublicidadSinHambrelogo.png') }}" alt="Logo Publicidad Sin Hambre">
                </div>

                <li><a href="{{ url('/inicio') }}"><i id="icon_home" class="fa-solid fa-house"></i></a></li>
                <div class="user">
                    <li><a href="{{ url('/ingresar') }}"><i id="icon_user" class="fa-solid fa-user"></i></a></li>
                </div>
                <div class="icons">
                    <li class="menu-item dropdown">
                        <a href="#" class="dropbtn" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></a>
                        <ul class="dropdown-content">
                            <li><a href="{{ url('/inicio') }}"><i id="icon_home" class="fa-solid fa-house"></i>Home</a></li>
                            <li><a href="{{ url('/register') }}"><i class="fa-solid fa-address-card"></i></i>Regístrate</a></li>
                            <li><a href="{{ url('/search') }}"><i class="fa-solid fa-magnifying-glass"></i>Buscar</a></li>
                            <li><a href="{{ url('/explorar') }}"><i class="fa-solid fa-globe"></i>Explorar</i></a></li>
                            <li><a href="{{ url('/ingresar') }}"><i class="fa-solid fa-user"></i>Ingresar</a></li>
                            <li><a href="{{ url('/contacto') }}"><i class="fa-solid fa-phone"></i>Contacto</a></li>
                            <li class="back-icon"><a href="#"><i class="fa-solid fa-arrow-left"></i></a></li>
                            <li class="submenu-item">
                                <a href="#"><i class="fa-solid fa-plus"></i></a>
                                <ul class="submenu">
                                    <li><a href="{{ url('/QS') }}">Quiénes Somos</a></li>
                                    <li><a href="{{ url('/faq') }}">Preguntas Frecuentes</a></li>
                                    <li><a href="{{ url('/regiones') }}">Regiones</a></li>
                                    <li><a href="{{ url('/search') }}">Asociaciones</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                </div>


                <li class="search-icon">
                    <a href="search"><i class="fas fa-search"></i></a>
                </li>


            </ul>
        </nav>

    </header>
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('content')

</body>
<footer>
    <div class="footer-container">
        <div class="footer-section">
            <div class="logo">
                <img src="{{URL::asset('/imagenes/g2.png')}}">
            </div>
        </div>
        <div class="footer-section">
            <h3>Contacto</h3>
            <p>Email: contact@publicidadsinhambre.com</p>
            <p>Teléfono: +123 456 789</p>
            <p>Dirección: Calle Nose 123, Ciudad Tangamandapio</p>
        </div>
        <div class="footer-section">
            <h3>Síguenos</h3>
            <div class="social-icons">
                <a href="#" class="social-btn facebook">Facebook</a>
                <a href="#" class="social-btn twitter">X</a>
                <a href="#" class="social-btn instagram">Instagram</a>
            </div>
        </div>
        <div class="footer-section">
            <h3>Enlaces útiles</h3>
            <ul>
                <li><a href="terms">Términos y Condiciones</a></li>
                <li><a href="privacy">Política de Privacidad</a></li>
                <li><a href="sup">Soporte</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-nav">
        <h3>Navegación rápida</h3>
        <ul>
            <li><a href="{{ url('/inicio') }}"><i id="icon_home" class="fa-solid fa-house"></i></a></li>
            <li><a href="{{ url('/register') }}"><i class="fa-solid fa-address-card"></i></i>Regístrate</a></li>
            <li><a href="{{ url('/explorar') }}"><i class="fa-solid fa-globe"></i>Explorar</i></a></li>
            <li><a href="{{ url('/ingresar') }}"><i class="fa-solid fa-user"></i>Ingresar</a></li>
            <li><a href="{{ url('/contacto') }}"><i class="fa-solid fa-phone"></i>Contacto</a></li>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 Publicidad Sin Hambre. Todos los derechos reservados.</p>
    </div>

</footer>

</html>