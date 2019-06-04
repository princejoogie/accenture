<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcomestyle.css') }}">
</head>
<body>
    <header class="header">
        <nav>
            <div class="logo-box">
                <a href="#"><img class="logo" src="{{ asset('images/centrilinkLogo.svg') }}" alt=""></a>
            </div>
            <ul>
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">FAQs</a></li>
                <li><a href="">Mission and Vision</a></li>
            </ul>
        </nav>
        <div class="text-box">
            <h1 class="primary-heading">
                <span class="heading-main">Centrilink</span>
                <span class="heading-sub">live smart, live longer</span>
            </h1>
            <a href="{{ route('login') }}" class="btn">Log In</a>
        </div>
    </header>
</body>

    <!-- <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Centrilink</title>

            Fonts -->
            <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

            <!-- Styles -->
            <!-- <style>
                html, body {
                    background-color: #fff;
                    color: #636b6f;
                    font-family: 'Nunito', sans-serif;
                    font-weight: 200;
                    height: 100vh;
                    margin: 0;
                }

                .full-height {
                    height: 100vh;
                }

                .flex-center {
                    align-items: center;
                    display: flex;
                    justify-content: center;
                }

                .position-ref {
                    position: relative;
                }

                .top-right {
                    position: absolute;
                    right: 10px;
                    top: 18px;
                }

                .content {
                    text-align: center;
                }

                .title {
                    font-size: 84px;
                }

                .links > a {
                    color: #636b6f;
                    padding: 0 25px;
                    font-size: 13px;
                    font-weight: 600;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;
                }

                .m-b-md {
                    margin-bottom: 30px;
                }
            </style>
        </head>
        <body>
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('login') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <div class="content">
                    <div class="title m-b-md">
                        Centrilink
                    </div>
                </div>
            </div>
    </body>
</html> -->
