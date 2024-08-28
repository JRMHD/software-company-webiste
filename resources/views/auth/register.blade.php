<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="techida | IT Solutions & Business Services HTML landing page template ">
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="../../cdn.jsdelivr.net/npm/bootstrap-icons%401.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>techida | IT Solutions & Business Services HTML template</title>
</head>

<body class="home-1">
    <!-- start preLoader -->
    <div id="preloader">
        <svg id="mainSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600">
            <defs>
                <radialGradient id="mainGrad" cx="400" cy="300" fx="400" fy="300" r="100"
                    gradientUnits="userSpaceOnUse">
                    <stop offset=".68" stop-color="#21df51" />
                    <stop offset=".72" stop-color="#3add63" />
                    <stop offset=".77" stop-color="#4fdd73" />
                    <stop offset=".82" stop-color="#66db83" />
                    <stop offset=".88" stop-color="#7cd893" />
                    <stop offset=".93" stop-color="#95d8a6" />
                    <stop offset=".99" stop-color="#bde6c7" />
                    <stop offset="1" stop-color="#e3f1e7" />
                </radialGradient>
            </defs>
            <circle id="fillDot" cx="400" cy="300" fill="#21df51" r="100" />
            <circle id="gradDot" cx="400" cy="300" fill="url(#mainGrad)" r="100" />
        </svg>
    </div>
    <!-- end preLoader -->

    <!-- start scroll to top button -->
    <div id="progress">
        <span id="progress-value"><i class="bi bi-arrow-up-short"></i></span>
    </div>
    <!-- end scroll to top button -->

    <!-- Authentication Section -->
    <div class="auth">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-12 d-flex flex-column justify-content-start">
                    <h1 class="title">Sign Up</h1>
                    <p>Have an account already? <a href="{{ route('login') }}" class="unique-text">Login</a></p>

                    <!-- Laravel Blade Form -->
                    <x-guest-layout>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="mt-4">
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                    :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <x-primary-button class="ms-4">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </x-guest-layout>
                </div>
                <div class="col-lg-6 col-12">
                    <img src="images/auth/signup.svg" alt="Sign Up">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <div class="container">
            <div class="row justify-content-center align-items-center g-4">
                <div class="col-12 col-lg-3 col-md-6 mx-auto my-4">
                    <div
                        class="box d-flex flex-column justify-content-md-start justify-content-lg-start justify-content-center align-items-center align-items-lg-start align-items-md-start">
                        <a href="#" class="logo "><img class="my-2" src="images/logo/logo.png"
                                alt=""></a>
                        <p>Lorem ipsum dolor sit amet aspernatur exercitationem fugiat.</p>
                        <h4 class="my-2">Follow us</h4>
                        <div class="social d-flex gap-2">
                            <div class="icon"><i class="bi bi-facebook"></i></div>
                            <div class="icon"><i class="bi bi-instagram"></i></div>
                            <div class="icon"><i class="bi bi-twitter-x"></i></div>
                            <div class="icon"><i class="bi bi-youtube"></i></div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-12 col-lg-3 col-md-6 mx-auto d-flex flex-column justify-content-md-start justify-content-lg-start justify-content-center align-items-center align-items-lg-start align-items-md-start my-4 gap-3">
                    <h4>Site Map</h4>
                    <ul class="d-flex flex-column gap-3">
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a
                                href="index.html">Home</a></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a
                                href="about.html">About</a></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a
                                href="services.html">Services</a></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a
                                href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div
                    class="col-12 col-lg-3 col-md-6 mx-auto d-flex flex-column justify-content-md-start justify-content-lg-start justify-content-center align-items-center align-items-lg-start align-items-md-start my-4 gap-3">
                    <h4>Follow Us</h4>
                    <ul class="d-flex flex-column gap-3">
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a
                                href="#">Facebook</a></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a
                                href="#">Instagram</a></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a
                                href="#">Twitter</a></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a
                                href="#">YouTube</a></li>
                    </ul>
                </div>
                <div
                    class="col-12 col-lg-3 col-md-6 mx-auto d-flex flex-column justify-content-md-start justify-content-lg-start justify-content-center align-items-center align-items-lg-start align-items-md-start my-4 gap-3">
                    <h4>Contact Info</h4>
                    <ul class="d-flex flex-column gap-3">
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a
                                href="#">Address: 123 Street Name, City, Country</a></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a
                                href="#">Email: example@example.com</a></li>
                        <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a
                                href="#">Phone: +123 456 789</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center py-3">
                <p>&copy; 2024 Your Company. All Rights Reserved.</p>
            </div>
        </div>
    </div>

    <!-- JS Files -->
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.waypoints.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
