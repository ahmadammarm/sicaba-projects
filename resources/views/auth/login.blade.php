@extends('layouts.logregist-master')

@section('menuLogin', 'active')
@section('content')
<style>
    .submit-btn {
        background-color: #D6613D !important;
        color: white !important;
    }
</style>
<section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
        style="background-image: url({{ asset('pacific/img/ftmakanan26.png') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                    <p class="text-lead text-white">these awesome forms to login or create new account in your
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
                        <h5>Sign in with</h5>
                    </div>
                    <div class="row px-xl-5 px-sm-4 px-3">
                        <div class="col-5 me-auto px-1">
                            <a class="btn btn-outline-light w-100" href="/auth/google/redirect">
                                <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Artboard" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="google-icon" transform="translate(3.000000, 2.000000)"
                                            fill-rule="nonzero">
                                            <path
                                                d="M57.8123233,30.1515267 C57.8123233,27.7263183 57.6155321,25.9565533 57.1896408,24.1212666 L29.4960833,24.1212666 L29.4960833,35.0674653 L45.7515771,35.0674653 C45.4239683,37.7877475 43.6542033,41.8844383 39.7213169,44.6372555 L39.6661883,45.0037254 L48.4223791,51.7870338 L49.0290201,51.8475849 C54.6004021,46.7020943 57.8123233,39.1313952 57.8123233,30.1515267"
                                                id="Path" fill="#4285F4"></path>
                                            <path
                                                d="M29.4960833,58.9921667 C37.4599129,58.9921667 44.1456164,56.3701671 49.0290201,51.8475849 L39.7213169,44.6372555 C37.2305867,46.3742596 33.887622,47.5868638 29.4960833,47.5868638 C21.6960582,47.5868638 15.0758763,42.4415991 12.7159637,35.3297782 L12.3700541,35.3591501 L3.26524241,42.4054492 L3.14617358,42.736447 C7.9965904,52.3717589 17.959737,58.9921667 29.4960833,58.9921667"
                                                id="Path" fill="#34A853"></path>
                                            <path
                                                d="M12.7159637,35.3297782 C12.0932812,33.4944915 11.7329116,31.5279353 11.7329116,29.4960833 C11.7329116,27.4640054 12.0932812,25.4976752 12.6832029,23.6623884 L12.6667095,23.2715173 L3.44779955,16.1120237 L3.14617358,16.2554937 C1.14708246,20.2539019 0,24.7439491 0,29.4960833 C0,34.2482175 1.14708246,38.7380388 3.14617358,42.736447 L12.7159637,35.3297782"
                                                id="Path" fill="#FBBC05"></path>
                                            <path
                                                d="M29.4960833,11.4050769 C35.0347044,11.4050769 38.7707997,13.7975244 40.9011602,15.7968415 L49.2255853,7.66898166 C44.1130815,2.91684746 37.4599129,0 29.4960833,0 C17.959737,0 7.9965904,6.62018183 3.14617358,16.2554937 L12.6832029,23.6623884 C15.0758763,16.5505675 21.6960582,11.4050769 29.4960833,11.4050769"
                                                id="Path" fill="#EB4335"></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="mt-2 position-relative text-center">
                            <p
                                class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                                or
                            </p>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                                    aria-describedby="email-addon" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password" aria-label="Password"
                                    aria-describedby="password-addon" name="password" id="password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="submit-btn btn w-100 my-4 mb-2">Sign
                                    in</button>
                            </div>
                            <p class="text-sm mt-3 mb-0">Belum mempunyai akun? <a href={{ route('register') }}
                                    class="text-dark font-weight-bolder">Sign up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<!-- Nucleo Icons -->
<link href={{ asset('softui/css/nucleo-icons.css') }} rel="stylesheet" />
<link href={{ asset('softui/css/nucleo-svg.css') }} rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href={{ asset('softui/css/nucleo-svg.css') }} rel="stylesheet" />
<!-- CSS Files -->
<link id="pagestyle" href={{ asset('softui/css/soft-ui-dashboard.css?v=1.0.3') }} rel="stylesheet" />

<script src={{ asset('softui/js/core/popper.min.js') }}></script>
<script src={{ asset('softui/js/core/bootstrap.min.js') }}></script>
<script src={{ asset('softui/js/plugins/perfect-scrollbar.min.js') }}></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src={{ asset('softui/js/soft-ui-dashboard.min.js?v=1.0.3') }}></script>
@stop
