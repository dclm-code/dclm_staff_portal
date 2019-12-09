<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="Public">

        <title>Deeper Christian Life Ministry :: Staff Portal</title>

        <!--Scripts-->
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

        <!--favicon-->
        <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
        <link rel='stylesheet' id='saved-google-fonts-css'  href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic,700italic%7CNoto+Serif:400,700,400italic,700italic' type='text/css' media='all' />
        <!-- Styles -->
        <link rel="stylesheet" href="https://unpkg.com/bulma@0.7.5/css/bulma.min.css" />
        <style>
            *{
                font-family: 'Source Sans Pro', Arial, Helvetica, sans-serif;
                font-size:18px;
            }
            .f1{
                font-family: 'Noto Serif', Georgia, 'Bitstream Vera Serif', 'Times New Roman', Times, serif;
            }
            .title, .subtitle{
                color: #048;
            }
            .topbar{
                background-color:#fff;
                box-shadow: 1px 1px #048;
            }
            .tbar{
                background-color:#048;
            }
            .tbar a{
                color: #048 !important;
            }
            .tbar a:hover, .simple:hover{
                color: red !important;
            }
        </style>
    </head>
    <body>
    <div id="app">
        <div>
            <nav class="navbar topbar is-fixed-top">
                <div class="navbar-brand">
                    <a href="/" class="router-link-exact-active router-link-active">
                        <img src="{{ asset('images/logo.png') }}" width="340px" height="60px" alt="DCLM">
                    </a>
                    <div class="navbar-burger burger" data-target="basic-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="navbar-menu" id="basic-menu">
                    <div class="navbar-start"></div>
                    <div class="navbar-end">
                    @if (Route::has('login'))
                        @auth
                            <a class="navbar-item" href="{{ url('/home') }}">Home</a>
                        @else
                            <a class="navbar-item" href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a class="navbar-item" href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    @endif
                    </div>
                </div>
            </nav>
            <section class="hero is-medium">
                @yield('content')
            </section>
        </div>
    </div>
    @yield('script')
    </body>
</html>