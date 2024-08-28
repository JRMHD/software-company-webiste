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

<body class="home-2">
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
    <!-- ============== Start Hero section ========== -->
    <section class="hero d-flex align-items-center justify-content-center" id="hero">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex flex-column wow text-center align-items-center justify-content-center fadeInUp"
                        data-wow-delay="1s">
                        <div class="hero-icons d-flex gap-lg-3 gap-2 my-lg-3 my-2" data-aos="fade-up"
                            data-aos-delay="50">
                            <a href="https://www.facebook.com/JRMHDD/"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/reaganmukabana/"><i class="bi bi-instagram"></i></a>
                            <a href="https://x.com/reaganmukabana/"><i class="bi bi-twitter-x"></i></a>
                            <a href="http://www.youtube.com/@JRMHD1"><i class="bi bi-youtube"></i></a>
                        </div>
                        <div class="col-12">
                            <h1 class="title col-12 text-center" data-aos="fade-up" data-aos-delay="100">
                                Empowering Your Business with <span class="unique-text">Innovative Digital
                                    Solutions</span>
                            </h1>
                        </div>
                        <div class="col-lg-10 col-12" data-aos="fade-up" data-aos-delay="150">
                            <p>
                                Jrmhd Technologies is dedicated to helping businesses thrive in the digital age. We
                                specialize in website development, custom software solutions, digital marketing, and
                                more to ensure your business stands out online and achieves its goals.
                            </p>
                        </div>
                        <div class="d-flex gap-4">
                            <a href="#contact" class="btn" data-aos="fade-up" data-aos-delay="200">Get
                                Started</a>
                            <a href="#services" class="btn-sec" data-aos="fade-up" data-aos-delay="250">Learn
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== End Hero section ========== -->


    <!-- ============== Start services section ========== -->
    <section class="container services py-5" id="services">
        <div class="heading">
            <h4 class="pretitle" data-aos="fade-up">Our Services</h4>
            <h1 class="title col-lg-10 col-12" data-aos="fade-up" data-aos-delay="100">
                What We Offer
            </h1>
            <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
                At JRMHD Technologies, we provide innovative digital solutions to help businesses establish their online
                presence and achieve their goals.
            </p>
        </div>
        <div class="row gy-4 gx-4">
            <!-- service number 1 -->
            <div class="col-md-6 col-12 col-lg-4 mx-auto">
                <div class="box box-service box-hover" data-aos="fade-right" data-aos-delay="250">
                    <div class="box-icon my-2">
                        <i class="bi bi-code-slash"></i>
                    </div>
                    <h2 class="title-2 my-2">Website Development</h2>
                    <p>
                        Create engaging and responsive websites that attract and retain customers, driving business
                        growth and success.
                    </p>
                    <a href="service-single.html" class="my-2 learn-more">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- service number 2 -->
            <div class="col-md-6 col-12 col-lg-4 mx-auto">
                <div class="box box-service box-hover" data-aos="fade-left" data-aos-delay="250">
                    <div class="box-icon my-2">
                        <i class="bi bi-server"></i>
                    </div>
                    <h2 class="title-2 my-2">Web Hosting</h2>
                    <p>
                        Reliable and secure web hosting solutions that ensure your website is always online and performs
                        optimally.
                    </p>
                    <a href="service-single.html" class="my-2 learn-more">
                        Learn More <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- service number 2 -->
            <div class="col-md-6 col-lg-4 mx-auto" data-aos="fade-down" data-aos-delay="200">
                <div class="box box-service box-hover">
                    <div class="box-icon my-2">
                        <i class="bi bi-megaphone-fill"></i>
                    </div>
                    <h2 class="title-2 my-2">Digital Marketing</h2>
                    <p>
                        Drive traffic, engagement, and conversions through targeted digital marketing strategies
                        including SEO, PPC, and social media.
                    </p>
                    <a href="service-single.html" class="my-2 learn-more">Learn More <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <!-- service number 3 -->
            <div class="col-md-6 col-lg-4 mx-auto" data-aos="fade-left" data-aos-delay="250">
                <div class="box box-service box-hover">
                    <div class="box-icon my-2">
                        <i class="bi bi-search"></i>
                    </div>
                    <h2 class="title-2 my-2">SEO Services</h2>
                    <p>
                        Improve your search engine rankings and increase organic traffic with our effective SEO
                        strategies.
                    </p>
                    <a href="service-single.html" class="my-2 learn-more">Learn More <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <!-- service number 4 -->
            <div class="col-md-6 col-lg-4 mx-auto" data-aos="fade-right" data-aos-delay="350">
                <div class="box box-service box-hover">
                    <div class="box-icon my-2">
                        <i class="bi bi-bug-fill"></i>
                    </div>
                    <h2 class="title-2 my-2">Cybersecurity</h2>
                    <p>
                        Secure your business with our robust cybersecurity services designed to protect against cyber
                        threats.
                    </p>
                    <a href="service-single.html" class="my-2 learn-more">Learn More <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <!-- service number 5 -->
            <div class="col-md-6 col-lg-4 mx-auto" data-aos="fade-up" data-aos-delay="300">
                <div class="box box-service box-hover">
                    <div class="box-icon my-2">
                        <i class="bi bi-palette-fill"></i>
                    </div>
                    <h2 class="title-2 my-2">Graphic Design</h2>
                    <p>
                        Enhance your brand's visual appeal with our creative and professional graphic design services.
                    </p>
                    <a href="service-single.html" class="my-2 learn-more">Learn More <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <!-- service number 6 -->








            <div class="col-md-6 col-lg-4 mx-auto">
                <div class="box box-service box-hover" data-aos="fade-left" data-aos-delay="350">
                    <div class="box-icon my-2">
                        <i class="bi bi-android2"></i>
                    </div>
                    <h2 class="title-2 my-2">App Development</h2>
                    <p>
                        Develop high-quality mobile applications for Android and iOS platforms tailored to your business
                        needs.
                    </p>
                    <a href="service-single.html" class="my-2 learn-more">Learn More <i
                            class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== End services section ========== -->


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


    <!-- ============== Start Why Us Section ========== -->
    <section class="container why-choose-us py-5">
        <div class="heading">
            <h4 class="pretitle" data-aos="fade-up">Why Choose Us</h4>
            <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
                Why Our Clients Trust Us
            </h1>
            <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
                We are committed to delivering exceptional IT solutions by leveraging the latest technologies, offering
                unique strategies, and maintaining a customer-centric approach to meet our clients' diverse needs.
            </p>
        </div>
        <div class="row gy-4 gx-4">
            <div class="col-md-6 col-lg-4 mx-auto" data-aos="fade-right" data-aos-delay="250">
                <div class="box">
                    <h1 class="my-4">01.</h1>
                    <h2 class="title-2 my-2">Cutting-Edge Technologies</h2>
                    <p>
                        We utilize the latest tools and technologies to ensure our solutions are both innovative and
                        effective, keeping your business ahead of the competition.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mx-auto" data-aos="fade-up" data-aos-delay="200">
                <div class="box">
                    <h1 class="my-4">02.</h1>
                    <h2 class="title-2 my-2">Customized Solutions</h2>
                    <p>
                        Our team crafts unique, tailor-made solutions that are specifically designed to address your
                        business challenges and help you achieve your goals.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mx-auto" data-aos="fade-left" data-aos-delay="250">
                <div class="box">
                    <h1 class="my-4">03.</h1>
                    <h2 class="title-2 my-2">Strategic Expertise</h2>
                    <p>
                        We employ powerful, result-driven strategies that are built on experience and data, ensuring
                        sustainable growth and a competitive edge for your business.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== End Why Us Section ========== -->


    <!-- ============== Start Clients Section ========== -->
    <div class="clients py-lg-5 py-2" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="owl-carousel client owl-theme">
                    <div class="item">
                        <img src="images/clients-logos/1-white.png" alt="client-logo" class="client-logo" />
                    </div>
                    <div class="item">
                        <img src="images/clients-logos/2-white.png" alt="client-logo" class="client-logo" />
                    </div>
                    <div class="item">
                        <img src="images/clients-logos/3-white.png" alt="client-logo" class="client-logo" />
                    </div>
                    <div class="item">
                        <img src="images/clients-logos/4-white.png" alt="client-logo" class="client-logo" />
                    </div>
                    <div class="item">
                        <img src="images/clients-logos/5-white.png" alt="client-logo" class="client-logo" />
                    </div>
                    <div class="item">
                        <img src="images/clients-logos/6-white.png" alt="client-logo" class="client-logo" />
                    </div>
                    <div class="item">
                        <img src="images/clients-logos/7-white.png" alt="client-logo" class="client-logo" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============== End Clients Section ========== -->



    <!-- Additional CSS -->
    <style>
        .client-logo {
            width: 150px;
            /* Set the desired width */
            height: auto;
            /* Maintain the aspect ratio */
            max-height: 80px;
            /* Set the maximum height */
            object-fit: contain;
            /* Ensure logos fit within the defined size */
        }
    </style>


    <!-- ============== Start Pricing Section ========== -->
    <section class="container pricing py-5" id="pricing">
        <div class="heading">
            <h4 class="pretitle" data-aos="fade-up">pricing</h4>
            <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
                our pricing
            </h1>
            <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
                Choose from our flexible and affordable web hosting plans that cater to your needs, with full control
                and a range of free features.
            </p>
            <div class="row gy-4 gx-4 w-100">
                <!-- Starter Plan -->
                <div class="col-md-6 col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="200">
                    <div class="box">
                        <i class="bi bi-box my-4"></i>
                        <h1 class="my-2 title-2">Starter Plan</h1>
                        <h2 class="price">$4.85</h2>
                        <h3>per month</h3>
                        <ul class="my-4">
                            <li class="my-1"><i class="bi bi-check2-circle"></i>1 Website</li>
                            <li class="my-1"><i class="bi bi-hdd-fill"></i>5 GB NVMe Storage</li>
                            <li class="my-1"><i class="bi bi-arrow-repeat"></i>Unlimited Bandwidth</li>
                            <li class="my-1"><i class="bi bi-gear"></i>cPanel Control Panel</li>
                            <li class="my-1"><i class="bi bi-envelope-fill"></i>FREE Emails</li>
                            <li class="my-1"><i class="bi bi-wordpress"></i>FREE WordPress Install</li>
                            <li class="my-1"><i class="bi bi-shield-lock-fill"></i>FREE & Auto SSL</li>
                            <li class="my-1"><i class="bi bi-lightning-fill"></i>FREE LiteSpeed Caching</li>
                            <li class="my-1"><i class="bi bi-cloud-arrow-down-fill"></i>FREE Quic Cloud CDN</li>
                            <li class="my-1"><i class="bi bi-arrow-counterclockwise"></i>30-Day Money-Back</li>
                        </ul>
                        <a href="#" class="btn my-4">start now</a>
                    </div>
                </div>
                <!-- Premium Plan -->
                <div class="col-md-6 col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="250">
                    <div class="box">
                        <i class="bi bi-gem my-4"></i>
                        <h1 class="my-2 title-2">Premium Plan</h1>
                        <h2 class="price">$8.85</h2>
                        <h3>per month</h3>
                        <ul class="my-4">
                            <li class="my-1"><i class="bi bi-check2-circle"></i>2 Websites</li>
                            <li class="my-1"><i class="bi bi-hdd-fill"></i>10 GB NVMe Storage</li>
                            <li class="my-1"><i class="bi bi-arrow-repeat"></i>Unlimited Bandwidth</li>
                            <li class="my-1"><i class="bi bi-gear"></i>cPanel Control Panel</li>
                            <li class="my-1"><i class="bi bi-envelope-fill"></i>FREE Emails</li>
                            <li class="my-1"><i class="bi bi-wordpress"></i>FREE WordPress Install</li>
                            <li class="my-1"><i class="bi bi-shield-lock-fill"></i>FREE & Auto SSL</li>
                            <li class="my-1"><i class="bi bi-lightning-fill"></i>FREE LiteSpeed Caching</li>
                            <li class="my-1"><i class="bi bi-cloud-arrow-down-fill"></i>FREE Quic Cloud CDN</li>
                            <li class="my-1"><i class="bi bi-arrow-counterclockwise"></i>30-Day Money-Back</li>
                        </ul>
                        <a href="#" class="btn my-4">start now</a>
                    </div>
                </div>
                <!-- Business Plan -->
                <div class="col-md-6 col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="300">
                    <div class="box">
                        <i class="bi bi-trophy my-4"></i>
                        <h1 class="my-2 title-2">Business Plan</h1>
                        <h2 class="price">$12.85</h2>
                        <h3>per month</h3>
                        <ul class="my-4">
                            <li class="my-1"><i class="bi bi-check2-circle"></i>5 Websites</li>
                            <li class="my-1"><i class="bi bi-hdd-fill"></i>15 GB NVMe Storage</li>
                            <li class="my-1"><i class="bi bi-arrow-repeat"></i>Unlimited Bandwidth</li>
                            <li class="my-1"><i class="bi bi-gear"></i>cPanel Control Panel</li>
                            <li class="my-1"><i class="bi bi-envelope-fill"></i>FREE Emails</li>
                            <li class="my-1"><i class="bi bi-wordpress"></i>FREE WordPress Install</li>
                            <li class="my-1"><i class="bi bi-shield-lock-fill"></i>FREE & Auto SSL</li>
                            <li class="my-1"><i class="bi bi-lightning-fill"></i>FREE LiteSpeed Caching</li>
                            <li class="my-1"><i class="bi bi-cloud-arrow-down-fill"></i>FREE Quic Cloud CDN</li>
                            <li class="my-1"><i class="bi bi-arrow-counterclockwise"></i>30-Day Money-Back</li>
                        </ul>
                        <a href="#" class="btn my-4">start now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== End Pricing Section ========== -->




    <!-- ============== Start Blog section ========== -->
    <section class="container blog py-5" id="blog">
        <div class="heading">
            <h4 class="pretitle" data-aos="fade-up">blog</h4>
            <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
                our blog
            </h1>
            <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
                As a matter of fact the unification of the coherent software provides
                a strict control over The Accomplishment of Intended Estimation
            </p>
        </div>

        <div class="row gy-4 gx-4">
            <div class="col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-right" data-aos-delay="250">
                <div class="box card border-0">
                    <div class="col-12">
                        <img src="images/blog/post-images/1.jpg" alt="blog-img" />
                    </div>
                    <div class="card-body">
                        <div class="info d-flex justify-content-between">
                            <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
                            <h3>
                                <i class="bi bi-calendar-date-fill title-2 mx-2"></i>27/05/2024
                            </h3>
                            <h3><i class="bi bi-tag-fill title-2 mx-2"></i>web dev</h3>
                        </div>
                        <h1 class="title-2">
                            how to learn javascript easily with this method
                        </h1>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Explicabo earum id assumenda ad neque recusandae, quasi deleniti
                            voluptatum eos vel quas molestias?
                        </p>
                        <a class="learn-more" href="blog-single.html">
                            read more <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-up" data-aos-delay="200">
                <div class="box card border-0">
                    <div class="col-12">
                        <img src="images/blog/post-images/2.jpg" alt="blog-img" />
                    </div>
                    <div class="card-body">
                        <div class="info d-flex justify-content-between">
                            <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
                            <h3>
                                <i class="bi bi-calendar-date-fill title-2 mx-2"></i>27/03/2024
                            </h3>
                            <h3><i class="bi bi-tag-fill title-2 mx-2"></i>web dev</h3>
                        </div>
                        <h1 class="title-2">
                            why you should learn this new javascript framework
                        </h1>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Explicabo earum id assumenda ad neque recusandae, quasi deleniti
                            voluptatum eos vel quas molestias?
                        </p>
                        <a class="learn-more" href="blog-single.html">
                            read more <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-left" data-aos-delay="250">
                <div class="box card border-0">
                    <div class="col-12">
                        <img src="images/blog/post-images/3.jpg" alt="blog-img" />
                    </div>
                    <div class="card-body">
                        <div class="info d-flex justify-content-between">
                            <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
                            <h3>
                                <i class="bi bi-calendar-date-fill title-2 mx-2"></i>20/04/2024
                            </h3>
                            <h3><i class="bi bi-tag-fill title-2 mx-2"></i>marketing</h3>
                        </div>
                        <h1 class="title-2">
                            What is digital marketing and why is important ?
                        </h1>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Explicabo earum id assumenda ad neque recusandae, quasi deleniti
                            voluptatum eos vel quas molestias?
                        </p>
                        <a class="learn-more" href="blog-single.html">
                            read more <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== End Blog section ========== -->

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

    <!-- gsap file    -->
    <script src="js/gsap.min.js"></script>

    <!--  counter     -->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.waypoints.js"></script>

    <!-- particles js file  -->
    <script src="js/particles.min.js"></script>

    <!-- jquery isotope file -->
    <script src="js/isotope.min.js"></script>

    <!-- jquery fancybox file -->
    <script src="js/jquery.fancybox.min.js"></script>

    <!--  main js file  -->
    <script src="js/main.js"></script>
</body>

</html>
