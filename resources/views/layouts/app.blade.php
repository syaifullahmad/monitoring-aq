<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Sistem pengaduan online DITRESKRIMSUS POLDA JATENG Unit Cyber Crime">
    <meta name="keywords" content="SILATIP (Sistem Informasi Laporan Tindak Pidana)">
    <title>@yield('judul')</title>

    <!-- Favicons-->
    <link rel="icon" href="{{asset('storage/images/logo/favicon.ico')}}" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="{{asset('storage/images/logo/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{{asset('storage/images/logo/favicon.ico')}}">

    <!-- CORE CSS-->
    <link href="{{ asset('css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('css/style.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom/custom.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('css/layouts/page-center.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('js/plugins/prism/prism.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('js/plugins/sweetalert/sweetalert.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
<!-- Di dalam <head> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    
    <!-- Di dalam <body> sebelum </body> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <style>
        /* Make header sticky */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background-color: #004d40; /* Dark teal background for header */
            padding: 0 20px;
        }

        .navbar {
            background-color: #00796b; /* Slightly lighter teal for the navbar */
        }

        .navbar-brand {
            color: #ffffff; /* White color for brand text */
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            color: #ffffff; /* White color for menu items */
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #ffeb3b; /* Yellow color on hover and active */
        }

        .sidenav {
            background-color: #00796b; /* Mobile menu background color */
        }

        .sidenav a {
            color: #ffffff; /* Mobile menu link color */
        }

        .sidenav a:hover {
            color: #ffeb3b; /* Mobile menu link hover color */
        }

        body {
            padding-top: 70px; /* Adjust this value to match the height of your header */
        }

        footer {
            background-color: #004d40; /* Dark teal background for footer */
            color: #ffffff; /* White text color */
            padding: 20px 0;
            text-align: center;
        }

        footer a {
            color: #ffeb3b; /* Yellow color for links in footer */
        }

        footer a:hover {
            color: #ffffff; /* White color on hover */
        }
    </style>
</head>
@yield('css')

<body class="abu">
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('landing') }}">Sistem Pemantauan Kualitas Udara</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::routeIs('landing') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('landing') }}">Home</a>
                </li>
                <li class="nav-item {{ Request::routeIs('login') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item {{ Request::routeIs('allnews.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('allnews.index') }}">Berita</a>
                </li>
                <li class="nav-item {{ Request::routeIs('ttg.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('ttg.index') }}">Tentang</a>
                </li>
                <li class="nav-item {{ Request::routeIs('ktg.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('ktg.index') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        @yield('content')
    </div>
</div>

<!-- Footer -->
<footer>
    <p>&copy; {{ date('Y') }} Sistem Pemantauan Kualitas Udara. All rights reserved.</p>
    <p><a href="{{ route('ktg.index') }}">Contact Us</a></p>
</footer>

<!-- Scripts -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/prism/prism.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/sweetalert/sweetalert.min.js') }}"></script>
<script src="https://js.pusher.com/3.1/pusher.min.js"></script>
<script type="text/javascript" src="{{ asset('js/plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom-script.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jquery-validation/additional-methods.min.js') }}"></script>
@yield('js_lib')
<script>
    @yield('js')
</script>

</body>
</html>
