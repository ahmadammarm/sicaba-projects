<!DOCTYPE html>
<html lang="en">

<head>
    <title>SICABA | Katering</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="{{ asset('pacific/img/logoFix.png') }}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('pacific/css/animate.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('pacific/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('pacific/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('pacific/css/magnific-popup.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('pacific/css/bootstrap-datepicker.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('pacific/css/jquery.timepicker.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('pacific/css/flaticon.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('pacific/css/style.css') }}" rel="stylesheet">

    <style>
        #nav-beranda,
        #nav-tentang,
        #nav-paket,
        #nav-voucher,
        #menu-button {
            color: #000 !important;
            font-style: bold;
        }
    </style>
</head>

<body>
	<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light bg-body" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{ asset('pacific/img/logoFix.png') }}" alt="SICABA" style="width: 80px; height: 80px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation" id="menu-button">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @yield('menuHome')"><a href={{url('/')}} class="nav-link" id="nav-beranda">Beranda</a></li>
                    <li class="nav-item @yield('menuAbout')"><a href={{url('tentangkami')}} class="nav-link" id="nav-tentang">Tentang Kami</a></li>
                    <li class="nav-item @yield('menuPaket')"><a href={{url('paketmakanan')}} class="nav-link" id="nav-paket">Paket Makanan</a></li>
                    <li class="nav-item @yield('menuVoucher')"><a href={{url('voucher')}} class="nav-link" id="nav-voucher">Voucher</a></li>
                    <li class="nav-item @yield('menuTroli')">
                        <a href="{{url('troli')}}" class="nav-link">
                            <img src="{{ asset('pacific/img/keranjang.png') }}" alt="Troli" style="width: 25px; height: auto;">
                        </a>
                    </li>

                    @guest
                    <li class="nav-item @yield('menuLogin')">
                        @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                        @endif
                    </li>
                    @endguest
                    @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    @yield('content')

    {{-- Fotter START --}}
    <div class="container-fluid bg-pooter footer pt-0 mt-02 wow fadeIn" data-wow-delay="0.1s"
        style="background-color: #D6613D;">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <p class="colornew"> &copy; <span class="colornew">2023 SICABA | Katering Bu Aini</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- Fotter END --}}

    <!-- Loader START -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>
    {{-- Loader END --}}

    {{-- Script  --}}
    <script src="{{ asset('pacific/js/jquery.min.js') }}"></script>
    <script src="{{ asset('pacific/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('pacific/js/popper.min.js') }}"></script>
    <script src="{{ asset('pacific/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('pacific/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('pacific/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('pacific/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('pacific/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('pacific/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('pacific/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('pacific/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('pacific/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('pacific/js/google-map.js') }}"></script>
    <script src="{{ asset('pacific/js/main.js') }}"></script>

    {{-- SVG --}}
    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-archive" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
        <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
        <path d="M10 12l4 0" />
    </svg> --}}
</body>

</html>
