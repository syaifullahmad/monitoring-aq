<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Monitoring Air Quality">
    <meta name="keywords" content="Monitoring Air Quality">
    <title>@yield('judul')</title>

    <!-- Favicons-->
    <link rel="icon" href="{{asset('storage/images/logo/favicon.ico')}}" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="{{asset('storage/images/logo/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="{{asset('storage/images/logo/favicon.ico')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- CORE CSS-->
    <link href="{{ asset('css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('css/style.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('css/custom/custom.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{ asset('js/plugins/prism/prism.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('js/plugins/data-tables/css/jquery.dataTables.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('js/plugins/dropify/css/dropify.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

    @yield('css_lib')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>

<body>

<!-- //////////////////////////////////////////////////////////////////////////// -->

@yield('preloader')

<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="navbar-color teal darken-2">
            <div class="nav-wrapper">
                <ul class="left">
                    <li><h1 class="logo-wrapper"></h1></li>
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation teal lighten-4">
                <li class="user-details teal darken-2">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="{{asset('images/avatar.png')}}" alt="" class="circle responsive-img valign profile-image">
                        </div>
                        <div class="col col s8 m8 l8">
                            <p class="user-roal">{{\Auth::user()->name}}</i></p>
                            <p class="user-roal">Admin</p>
                        </div>
                    </div>
                </li>
                <li class="li-hover"><div class="divider"></div></li>
                <li class="li-hover"><p class="ultra-small margin more-text">Menu</p></li>
                <li class="bold">
                    <a class="dropdown-trigger waves-effect waves-cyan" href="#" data-target="data-dropdown">
                        <i class="mdi-action-dashboard"></i> Real-Time Monitoring
                    </a>
                </li>
                <!-- Dropdown Structure -->
                <ul id="data-dropdown" class="dropdown-content custom-dropdown">
                    <li class="@yield('dashboard')"><a href="/dashboard">AQ Data</a></li>
                    <li class="@yield('co')"><a href="/co">CO2 Data</a></li>
                    <li class="@yield('carbon')"><a href="/carbon">CO Data</a></li>
                    <li class="@yield('smoke')"><a href="/smoke">Smoke Data</a></li>
                </ul>
                <li class="bold @yield('history')"><a href="/history" class="waves-effect waves-cyan"><i class="fa-solid fa-clock-rotate-left"></i> History</a></li>
                <li class="bold @yield('about')"><a href="/about" class="waves-effect waves-cyan"><i class="fa-solid fa-address-book"></i> About</a></li>
                <li class="bold @yield('landing')"><a href="/" class="waves-effect waves-cyan"><i class="fa-solid fa-right-from-bracket"></i> Exit</a></li>
                <br><br><br>
            </ul>
        </aside>
        <!-- END LEFT SIDEBAR NAV-->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
        @yield('content')
        <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>
    <!-- END WRAPPER -->
</div>
<!-- END MAIN -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START FOOTER -->
<footer class="page-footer teal darken-2">
    <div class="footer-copyright">
        <div class="container">
            <span>Copyright © <?php echo date("Y"); ?> <a class="grey-text text-lighten-4" href="#">Tugas Akhir 20670116 - Ahmad Syaifulloh</a></span>
            <span class="right"></span>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems, { hover: true, coverTrigger: false });
    });
</script>

<!-- ================================================
Scripts
================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="{{ asset('js/plugins/jquery-1.11.2.min.js') }}"></script>
<!-- Materialize JS -->
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<!-- Additional Scripts -->
<script type="text/javascript" src="{{ asset('js/plugins/dropify/js/dropify.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/prism/prism.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/data-tables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/data-tables/data-tables-script.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/chartjs/chart-script.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/chartjs/util.js') }}"></script>

@yield('js_lib')

<script type="text/javascript" src="{{ asset('js/custom-script.js') }}"></script>

<script type="text/javascript">
    $(".button-collapse").sideNav();
    @yield('js')
</script>
</body>
</html>
