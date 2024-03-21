@extends('layouts.logregist-master')

@section('menuLogin', 'active')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Register | SICABA</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .register-btn {
            background-color: #D6613D !important;
            color: white !important;
        }
    </style>

</head>
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href={{asset("softui/css/nucleo-icons.css")}} rel="stylesheet" />
        <link href={{asset("softui/css/nucleo-svg.css")}} rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href={{asset("softui/css/nucleo-svg.css")}} rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href={{asset("softui/css/soft-ui-dashboard.css?v=1.0.3")}} rel="stylesheet" />
    </head>

    <body class="g-sidenav-show  bg-gray-100">
        <section class="min-vh-100 mb-8">
            <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
                style="background-image: url({{asset('pacific/img/ftmakanan26.png')}});">
                <span class="mask opacity-6"></span>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 text-center mx-auto">
                            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                            <p class="text-lead text-white">Use these awesome forms to login or create new account in your
                                project for free.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                    <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                        <div class="card z-index-0">
                            <div class="card-header text-center pt-4">
                                <h5>Register</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <!-- Name -->
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon" name="name" id="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                                        @error('name')
                                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Email Address -->
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon" name="email" id="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="password" id="password" required autocomplete="new-password">
                                        @error('password')
                                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="confirm-password-addon" name="password_confirmation" id="password_confirmation" required autocomplete="new-password">
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <a href="{{ route('login') }}" class="text-sm text-gray-600 underline">Already registered?</a>

                                        <button type="submit" class="register-btn btn w-100 my-4 mb-2">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
        <!--   Core JS Files   -->
        <script src={{asset("softui/js/core/popper.min.js")}}></script>
        <script src={{asset("softui/js/core/bootstrap.min.js")}}></script>
        <script src={{asset("softui/js/plugins/perfect-scrollbar.min.js")}}></script>
        <script src={{asset("softui/js/plugins/smooth-scrollbar.min.js")}}></script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src={{asset("softui/js/soft-ui-dashboard.min.js?v=1.0.3")}}></script>
    </body>

    </html>

    @endsection

