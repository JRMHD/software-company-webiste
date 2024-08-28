<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="techida | IT Solutions &amp; Business Services HTML landing page template " />
    <!-- fav icon -->
    <link rel="icon" href="images/favicon.ico" />

    <!-- bootstarp css file -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- aos.css file -->
    <link rel="stylesheet" href="css/aos.css" />

    <!-- fancybox css file -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />

    <!-- owl carousel css file -->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <!--  toasts file     -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />

    <!-- main css file -->
    <link rel="stylesheet" href="css/style.css" />
    <title>techida | IT Solutions &amp; Business Services HTML template</title>
</head>

<body>

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


    <!-- ======= start Header ======= -->
    @include('header')
    <!-- ======= end Header ======= -->

    <!-- ======= srart Breadcrumbs ======= -->
    <section class="breadcrumbs py-4" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>About Us</li>
            </ol>
            <h2 class="title">About Us</h2>
            <p class="col-lg-10 col-12">
                Learn more about our mission, values, and the team behind our success. We are dedicated to delivering
                exceptional services and building lasting relationships with our clients.
            </p>
        </div>
    </section><!-- End Breadcrumbs -->



    <!-- ============== Start About section ========== -->
    <section class="about py-5 mt-5" id="about">
        <div class="container">
            <div class="row mt-5 justify-content-center align-items-center">
                <div class="col-12 col-lg-6">
                    <h4 class="pretitle" data-aos="fade-up" data-aos-delay="200">
                        About Us
                    </h4>
                    <h1 class="title col-12" data-aos="fade-up" data-aos-delay="250">
                        Transforming Businesses with <span class="unique-text">Innovative IT Solutions</span> Since
                        <span class="unique-text">2020</span>
                    </h1>
                    <p class="col-lg-10 col-12" data-aos="fade-up" data-aos-delay="300">
                        At Jrmhd Technologies, we are dedicated to delivering top-notch IT solutions tailored to meet
                        the unique needs of our clients. From web development and graphic design to software solutions
                        and digital marketing, our goal is to drive business growth through innovative technology. Our
                        team of experts combines creativity, technical expertise, and strategic thinking to ensure your
                        business thrives in the digital world.
                    </p>
                    <a href="#contact" class="btn" data-aos="fade-up" data-aos-delay="350">Contact Us</a>
                </div>
                <!-- image -->
                <div class="col-12 col-lg-6 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
                    <img src="images/about/1.png" alt="about-img" />
                </div>
            </div>

            <div class="row mt-5 py-4 justify-content-center align-items-center">
                <!-- image -->
                <div class="col-12 col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="images/about/2.png" alt="about-img" />
                </div>
                <div class="col-12 col-lg-6">
                    <h1 class="title col-12" data-aos="fade-up" data-aos-delay="200">
                        Comprehensive <span class="unique-text">IT Services</span> for Your Success
                    </h1>
                    <p class="col-lg-10 col-12" data-aos="fade-up" data-aos-delay="250">
                        We provide a full range of IT services, including website development, mobile app development,
                        UI/UX design, and 24/7 support. Our team is committed to delivering high-quality solutions that
                        are easy to reach and designed to meet your business goals.
                    </p>
                    <div class="row gx-2 gy-2 col-12">
                        <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                            <div class="box box-hover">
                                <i class="bi bi-globe"></i>
                                <h5 class="mx-4 title-2 fw-bold">Global Reach</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="350">
                            <div class="box box-hover">
                                <i class="bi bi-headset"></i>
                                <h5 class="mx-4 title-2 fw-bold">24/7 Support</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                            <div class="box box-hover">
                                <i class="bi bi-people"></i>
                                <h5 class="mx-4 title-2 fw-bold">Customer-Centric Approach</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="450">
                            <div class="box box-hover">
                                <i class="bi bi-trophy-fill"></i>
                                <h5 class="mx-4 title-2 fw-bold">Award-Winning Team</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 py-4 justify-content-center align-items-center">
                <div class="col-12 col-lg-6">
                    <h1 class="title col-12" data-aos="fade-up" data-aos-delay="200">
                        Unmatched IT Expertise with <span class="unique-text"> Years of Experience</span>
                    </h1>
                    <p class="col-lg-10 col-12" data-aos="fade-up" data-aos-delay="250">
                        Our extensive experience in IT solutions helps us provide tailored services that meet your
                        specific business needs. From website and software development to digital marketing and graphic
                        design, we deliver results-driven strategies to help your business grow.
                    </p>
                    <ul class="col-12 bars">
                        <li class="py-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="justify-content-between d-flex">
                                <h5>App Development</h5>
                                <h6>95%</h6>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-bar-fill progress-bar-fill-1"></div>
                            </div>
                        </li>
                        <li class="py-3" data-aos="fade-up" data-aos-delay="350">
                            <div class="justify-content-between d-flex">
                                <h5>UI/UX Design</h5>
                                <h6>85%</h6>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-bar-fill progress-bar-fill-2"></div>
                            </div>
                        </li>
                        <li class="py-3" data-aos="fade-up" data-aos-delay="400">
                            <div class="justify-content-between d-flex">
                                <h5>Web Development</h5>
                                <h6>90%</h6>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-bar-fill progress-bar-fill-3"></div>
                            </div>
                        </li>
                        <li class="py-3" data-aos="fade-up" data-aos-delay="450">
                            <div class="justify-content-between d-flex">
                                <h5>System/Software Development</h5>
                                <h6>88%</h6>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-bar-fill progress-bar-fill-4"></div>
                            </div>
                        </li>
                        <li class="py-3" data-aos="fade-up" data-aos-delay="500">
                            <div class="justify-content-between d-flex">
                                <h5>Graphic Design</h5>
                                <h6>80%</h6>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-bar-fill progress-bar-fill-5"></div>
                            </div>
                        </li>
                        <li class="py-3" data-aos="fade-up" data-aos-delay="550">
                            <div class="justify-content-between d-flex">
                                <h5>Digital Marketing</h5>
                                <h6>85%</h6>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-bar-fill progress-bar-fill-6"></div>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="btn mt-3" data-aos="fade-up" data-aos-delay="600">Contact Us</a>
                </div>
                <!-- image -->
                <div class="col-12 col-lg-6 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
                    <img src="images/about/3.png" alt="about-img" />
                </div>
            </div>
        </div>
    </section>

    <!-- ============== End About section ========== -->


    <!-- ============== Start FAQ section ========== -->
    <section class="container faq py-5">
        <div class="heading">
            <h4 class="pretitle" data-aos="fade-up">FAQ</h4>
            <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
                Frequently Asked Questions
            </h1>
            <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
                Find answers to the most common questions about our web hosting services.
            </p>
        </div>
        <div class="row justify-content-center align-items-center gx-4">
            <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-delay="200">
                <img src="images/faq/customer.png" alt="faq" />
            </div>
            <div class="col-12 col-lg-6">
                <div class="col-12 my-4" data-aos="fade-up" data-aos-delay="250">
                    <div class="box">
                        <div class="d-flex w-100 justify-content-between">
                            <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon1')"
                                href="#answer1" role="button" aria-expanded="false">
                                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                    What is included in your Starter Plan?
                                    <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon1"></i>
                                </h4>
                            </a>
                        </div>
                        <p id="answer1" class="collapse">
                            The Starter Plan includes 1 website, 5 GB NVMe storage, unlimited bandwidth, cPanel control
                            panel, free emails, free WordPress install, free & auto SSL, free LiteSpeed caching, free
                            Quic Cloud CDN, and a 30-day money-back guarantee.
                        </p>
                    </div>
                </div>
                <div class="col-12 my-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="box">
                        <div class="d-flex w-100 justify-content-between">
                            <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon2')"
                                href="#answer2" role="button" aria-expanded="false">
                                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                    Can I upgrade my plan later?
                                    <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon2"></i>
                                </h4>
                            </a>
                        </div>
                        <p id="answer2" class="collapse">
                            Yes, you can upgrade your plan at any time. Simply contact our support team or use the
                            control panel to change your plan to one that suits your needs better.
                        </p>
                    </div>
                </div>
                <div class="col-12 my-4" data-aos="fade-up" data-aos-delay="350">
                    <div class="box">
                        <div class="d-flex w-100 justify-content-between">
                            <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon3')"
                                href="#answer3" role="button" aria-expanded="false">
                                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                    Do you provide a money-back guarantee?
                                    <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon3"></i>
                                </h4>
                            </a>
                        </div>
                        <p id="answer3" class="collapse">
                            Yes, all our plans come with a 30-day money-back guarantee. If you're not satisfied with our
                            service, you can request a full refund within the first 30 days.
                        </p>
                    </div>
                </div>
                <div class="col-12 my-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <div class="d-flex w-100 justify-content-between">
                            <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon4')"
                                href="#answer4" role="button" aria-expanded="false">
                                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                    How do I get support if I face any issues?
                                    <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon4"></i>
                                </h4>
                            </a>
                        </div>
                        <p id="answer4" class="collapse">
                            You can reach our support team 24/7 via live chat, email, or phone. We are here to help with
                            any issues you may encounter.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== End FAQ section ========== -->



    <!-- ============== Start Footer section ========== -->
    <div class="footer">
        <div class="container">
            <div class="row justify-content-center align-items-center g-4">
                <!-- Company Info Section -->
                <div class="col-12 col-lg-3 col-md-6 mx-auto my-4">
                    <div
                        class="box d-flex flex-column justify-content-md-start justify-content-lg-start justify-content-center align-items-center align-items-lg-start align-items-md-start">
                        <a href="index.html" class="logo">
                            <img class="my-2" src="images/logo/logo.png" alt="JRMHD Logo" />
                        </a>
                        <p>JRMHD Technologies is your partner in web development, digital marketing, and IT solutions.
                        </p>
                        <h4 class="my-2">Follow Us</h4>
                        <div class="social d-flex gap-2">
                            <a href="https://facebook.com/jrmhdtech" target="_blank" class="icon"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="https://instagram.com/jrmhdtech" target="_blank" class="icon"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="https://twitter.com/reaganmukabana" target="_blank" class="icon"><i
                                    class="bi bi-twitter"></i></a>
                            <a href="https://youtube.com/jrmhdtech" target="_blank" class="icon"><i
                                    class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Sitemap Section -->
                <div
                    class="col-12 col-lg-3 col-md-6 mx-auto d-flex flex-column justify-content-md-start justify-content-lg-start justify-content-center align-items-center align-items-lg-start align-items-md-start my-4 gap-3">
                    <h4>Site Map</h4>
                    <ul class="d-flex flex-column gap-3">
                        <li class="d-flex align-items-center gap-2">
                            <i class="bi bi-chevron-right"></i><a href="index.html">Home</a>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="bi bi-chevron-right"></i><a href="about.html">About Us</a>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="bi bi-chevron-right"></i><a href="services.html">Services</a>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="bi bi-chevron-right"></i><a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- Follow Us Section -->
                <div
                    class="col-12 col-lg-3 col-md-6 mx-auto d-flex flex-column justify-content-md-start justify-content-lg-start justify-content-center align-items-center align-items-lg-start align-items-md-start my-4 gap-3">
                    <h4>Follow Us</h4>
                    <ul class="d-flex flex-column gap-3">
                        <li class="d-flex align-items-center gap-2">
                            <i class="bi bi-chevron-right"></i><a href="https://facebook.com/jrmhdtech"
                                target="_blank">Facebook</a>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="bi bi-chevron-right"></i><a href="https://instagram.com/jrmhdtech"
                                target="_blank">Instagram</a>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="bi bi-chevron-right"></i><a href="https://linkedin.com/company/jrmhdtech"
                                target="_blank">LinkedIn</a>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="bi bi-chevron-right"></i><a href="https://twitter.com/reaganmukabana"
                                target="_blank">Twitter</a>
                        </li>
                    </ul>
                </div>
                <!-- Our Services Section -->
                <div
                    class="col-12 col-lg-3 col-md-6 mx-auto d-flex flex-column justify-content-md-start justify-content-lg-start justify-content-center align-items-center align-items-lg-start align-items-md-start my-4 gap-3">
                    <h4>Our Services</h4>
                    <ul class="d-flex flex-column gap-3">
                        <li class="d-flex align-items-center gap-2">
                            <i class="bi bi-chevron-right"></i><a href="#">Digital Marketing</a>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="bi bi-chevron-right"></i><a href="#">Web Development</a>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="bi bi-chevron-right"></i><a href="#">Cyber Security</a>
                        </li>
                        <li class="d-flex align-items-center gap-2">
                            <i class="bi bi-chevron-right"></i><a href="#">Graphic Design</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr />
        <!-- Copyright Section -->
        <div class="copyrights">
            <div class="container">
                <div class="row">
                    <div
                        class="col-12 col-md-6 d-flex justify-content-lg-start justify-content-md-start justify-content-center">
                        <p class="creadits">
                            &copy; 2024 Created by: <a href="https://www.jrmhd.tech">JRMHD Technologies</a>
                        </p>
                    </div>
                    <div
                        class="col-12 col-md-6 d-flex justify-content-lg-end justify-content-md-end justify-content-center pb-md-0 pb-lg-0 pb-3">
                        <div>
                            <a href="terms-of-use.html">Terms of Use</a> | <a href="privacy-policy.html">Privacy
                                Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============== End Footer section ========== -->


    <!--  JQuery file     -->
    <script src="js/jquery-3.6.1.min.js"></script>

    <!-- bootstrap min js -->
    <script src="js/bootstrap.min.js"></script>

    <!--  toasts file     -->
    <script src="../../cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!--  owl carousel    -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- aos file    -->
    <script src="js/aos.js"></script>

    <!-- particles js file  -->
    <script src="js/particles.min.js"></script>

    <!-- gsap file    -->
    <script src="js/gsap.min.js"></script>

    <script src="../../cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>

    <!--  counter     -->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.waypoints.js"></script>

    <!-- jquery isotope file -->
    <script src="js/isotope.min.js"></script>

    <!-- jquery fancybox file -->
    <script src="js/jquery.fancybox.min.js"></script>

    <!--  main js file  -->
    <script src="js/main.js"></script>


</body>


</html>

</html>
