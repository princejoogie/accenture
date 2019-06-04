<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Centrilink') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <style>
        .back-button {
            font-size: 50px;
            padding: 1rem;
            position: absolute;
            left: 0;
            top: 0;
        }
    </style>

</head>
<body>
    <div id="app">
        <main class="py-4">
        <i class="fas fa-arrow-left back-button"></i>
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
    <!-- Semantic UI -->
    <script src="{{ asset('js/semantic.min.js') }}"></script>
    <!-- Custom Script -->
    <script>
        $(document).ready(
            function() {
        var overlay = document.getElementById("overlay");

        // Buttons to 'switch' the page
        var openSignUpButton = document.getElementById("slide-left-button");
        var openSignInButton = document.getElementById("slide-right-button");

        // The sidebars
        var leftText = document.getElementById("sign-in");
        var rightText = document.getElementById("sign-up");

        // The forms
        var accountForm = document.getElementById("sign-in-info")
        var signinForm = document.getElementById("sign-up-info");

        // Open the Sign Up page
        openSignUp = () =>{
        // Remove classes so that animations can restart on the next 'switch'
        leftText.classList.remove("overlay-text-left-animation-out");
        overlay.classList.remove("open-sign-in");
        rightText.classList.remove("overlay-text-right-animation");
        // Add classes for animations
        accountForm.className += " form-left-slide-out"
        rightText.className += " overlay-text-right-animation-out";
        overlay.className += " open-sign-up";
        leftText.className += " overlay-text-left-animation";
        // hide the sign up form once it is out of view
        setTimeout(function(){
            accountForm.classList.remove("form-left-slide-in");
            accountForm.style.display = "none";
            accountForm.classList.remove("form-left-slide-out");
        }, 700);
        // display the sign in form once the overlay begins moving right
        setTimeout(function(){
            signinForm.style.display = "flex";
            signinForm.classList += " form-right-slide-in";
        }, 200);
        }

        // Open the Sign In page
        openSignIn = () =>{
        // Remove classes so that animations can restart on the next 'switch'
        leftText.classList.remove("overlay-text-left-animation");
        overlay.classList.remove("open-sign-up");
        rightText.classList.remove("overlay-text-right-animation-out");
        // Add classes for animations
        signinForm.classList += " form-right-slide-out";
        leftText.className += " overlay-text-left-animation-out";
        overlay.className += " open-sign-in";
        rightText.className += " overlay-text-right-animation";
        // hide the sign in form once it is out of view
        setTimeout(function(){
            signinForm.classList.remove("form-right-slide-in")
            signinForm.style.display = "none";
            signinForm.classList.remove("form-right-slide-out")
        },700);
        // display the sign up form once the overlay begins moving left
        setTimeout(function(){
            accountForm.style.display = "flex";
            accountForm.classList += " form-left-slide-in";
        },200);
        }

        // When a 'switch' button is pressed, switch page
        openSignUpButton.addEventListener("click", openSignUp, false);
        openSignInButton.addEventListener("click", openSignIn, false);
                    });
    </script>
</body>
</html>
