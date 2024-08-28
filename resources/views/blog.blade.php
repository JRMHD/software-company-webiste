<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta
    name="description"
    content="techida | IT Solutions &amp; Business Services HTML landing page template "
  />
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
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
  />

  <!-- bootstrap icons -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
  />

  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
  <link
    href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800&amp;display=swap"
    rel="stylesheet"
  />

  <!-- main css file -->
  <link rel="stylesheet" href="css/style.css" />
  <title>techida | IT Solutions &amp; Business Services HTML template</title>
</head>

<body>

  <!-- start preLoader -->
  <div id="preloader">
    <svg id="mainSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600">
      <defs>
        <radialGradient id="mainGrad" cx="400" cy="300" fx="400" fy="300" r="100" gradientUnits="userSpaceOnUse">
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
   <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html"
          ><img src="images/logo/logo.png" class="logo" alt="LOGO"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="bi bi-list" id="menu"></i>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between"
          id="navbarNav"
        >
          <ul class="navbar-nav ms-auto" id="navbar">
            <li class="nav-item dropdown">
              
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">Services</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown1"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                pages
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item py-2" href="404.html">404 page</a>
                </li>
                
                <li>
                  <a class="dropdown-item py-2" href="blog-single.html"
                    >single blog page</a
                  >
                </li>
               
               
                <li>
                  <a class="dropdown-item py-2" href="service-single.html"
                    >service single</a
                  >
                </li>
                
                <li>
                  <a class="dropdown-item py-2" href="portfolio-single.html"
                    >portfolio single</a
                  >
                </li>
                <li>
                  <a class="dropdown-item py-2" href="privacy-policy.html"
                    >privacy policy</a
                  >
                </li>
                <li>
                  <a class="dropdown-item py-2" href="terms-of-use.html"
                    >terms of use</a
                  >
                </li>
                
                <li>
                  <a class="dropdown-item py-2" href="login.html"
                    >login page</a
                  >
                </li>
                <li>
                  <a class="dropdown-item py-2" href="register.html"
                    >register</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portfolio.html">portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">contact us</a>
            </li>
          </ul>
          <div class="d-flex ms-auto">
            <a class="btn" href="register.html">join now</a>
            <button id="mode-toggle" class="btn-light-mode switch-button">
              <i id="mode-icon" class="bi bi-moon-fill"></i>
            </button>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- ======= end Header ======= -->

  <!-- ======= srart Breadcrumbs ======= -->
  <section class="breadcrumbs py-4" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>blog</li>
      </ol>
      <h2 class="title">our blog</h2>
      <p class="col-lg-10 col-12">
        Although, final stages of the internal network gives a complete experience of
        The Parameter of Speculative Environment
      </p>
    </div>
  </section><!-- End Breadcrumbs -->


  <!-- ============== Start Blog section ========== -->
  <section class="container blog py-5" id="blog">
    <div class="heading">
      <h4 class="pretitle" data-aos="fade-up">
        blog
      </h4>
      <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
        our blog
      </h1>
      <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
        As a matter of fact the unification of the coherent software provides a strict control over
        The Accomplishment of Intended Estimation
      </p>
    </div>

    <div class="row  gy-4 gx-4 ">
      <div class="col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-right" data-aos-delay="250">
        <div class="box card border-0">
          <div class="col-12">
            <img src="images/blog/post-images/1.jpg" alt="blog-img">
          </div>
          <div class="card-body">
            <div class="info d-flex justify-content-between">
              <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
              <h3> <i class="bi bi-calendar-date-fill title-2 mx-2"></i>27/05/2024</h3>
              <h3> <i class="bi bi-tag-fill title-2 mx-2"></i>web dev</h3>
            </div>
            <h1 class="title-2">
              how to learn javascript easily with this method
            </h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Explicabo earum id assumenda ad neque recusandae, quasi deleniti
              voluptatum eos vel quas molestias?</p>
            <a class="learn-more" href="blog-single.html">
              read more <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class=" col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-up" data-aos-delay="200">
        <div class="box card border-0">
          <div class="col-12">
            <img src="images/blog/post-images/2.jpg" alt="blog-img">
          </div>
          <div class="card-body">
            <div class="info d-flex justify-content-between">
              <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
              <h3><i class="bi bi-calendar-date-fill title-2 mx-2"></i>27/03/2024</h3>
              <h3><i class="bi bi-tag-fill title-2 mx-2"></i>web dev</h3>
            </div>
            <h1 class="title-2">
              why you should learn this new javascript framework
            </h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Explicabo earum id assumenda ad neque recusandae, quasi deleniti
              voluptatum eos vel quas molestias?</p>
            <a class="learn-more" href="blog-single.html">
              read more <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class=" col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-left" data-aos-delay="250">
        <div class="box card border-0">
          <div class="col-12">
            <img src="images/blog/post-images/3.jpg" alt="blog-img">
          </div>
          <div class="card-body">
            <div class="info d-flex justify-content-between">
              <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
              <h3> <i class="bi bi-calendar-date-fill title-2 mx-2"></i>20/04/2024</h3>
              <h3> <i class="bi bi-tag-fill title-2 mx-2"></i>marketing</h3>
            </div>
            <h1 class="title-2">
              What is digital marketing and why is important ?
            </h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Explicabo earum id assumenda ad neque recusandae, quasi deleniti
              voluptatum eos vel quas molestias?</p>
            <a class="learn-more" href="blog-single.html">
              read more <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-right" data-aos-delay="250">
        <div class="box card border-0">
          <div class="col-12">
            <img src="images/blog/post-images/1.jpg" alt="blog-img">
          </div>
          <div class="card-body">
            <div class="info d-flex justify-content-between">
              <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
              <h3> <i class="bi bi-calendar-date-fill title-2 mx-2"></i>27/05/2024</h3>
              <h3> <i class="bi bi-tag-fill title-2 mx-2"></i>web dev</h3>
            </div>
            <h1 class="title-2">
              how to learn javascript easily with this method
            </h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Explicabo earum id assumenda ad neque recusandae, quasi deleniti
              voluptatum eos vel quas molestias?</p>
            <a class="learn-more" href="blog-single.html">
              read more <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class=" col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-up" data-aos-delay="200">
        <div class="box card border-0">
          <div class="col-12">
            <img src="images/blog/post-images/3.jpg" alt="blog-img">
          </div>
          <div class="card-body">
            <div class="info d-flex justify-content-between">
              <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
              <h3> <i class="bi bi-calendar-date-fill title-2 mx-2"></i>20/04/2024</h3>
              <h3> <i class="bi bi-tag-fill title-2 mx-2"></i>marketing</h3>
            </div>
            <h1 class="title-2">
              What is digital marketing and why is important ?
            </h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Explicabo earum id assumenda ad neque recusandae, quasi deleniti
              voluptatum eos vel quas molestias?</p>
            <a class="learn-more" href="blog-single.html">
              read more <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class=" col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-left" data-aos-delay="250">
        <div class="box card border-0">
          <div class="col-12">
            <img src="images/blog/post-images/2.jpg" alt="blog-img">
          </div>
          <div class="card-body">
            <div class="info d-flex justify-content-between">
              <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
              <h3><i class="bi bi-calendar-date-fill title-2 mx-2"></i>27/03/2024</h3>
              <h3><i class="bi bi-tag-fill title-2 mx-2"></i>web dev</h3>
            </div>
            <h1 class="title-2">
              why you should learn this new javascript framework
            </h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Explicabo earum id assumenda ad neque recusandae, quasi deleniti
              voluptatum eos vel quas molestias?</p>
            <a class="learn-more" href="blog-single.html">
              read more <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="blog-nav">
      <a href="#" class="active " data-aos="fade-up" data-aos-delay="100">1</a>
      <a href="#" data-aos="fade-up" data-aos-delay="150">2</a>
      <a href="#" data-aos="fade-up" data-aos-delay="200">3</a>
      <a href="#" data-aos="fade-up" data-aos-delay="250">4</a>
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
            <a
              data-bs-toggle="collapse"
              class="w-100"
              onclick="rotateIcon('icon1')"
              href="#answer1"
              role="button"
              aria-expanded="false"
            >
              <h4
                class="d-flex justify-content-between w-100 heading-3 m-0 p-0"
              >
                What is included in your Starter Plan?
                <i
                  class="bi bi-chevron-compact-down mx-4 rotate-icon"
                  id="icon1"
                ></i>
              </h4>
            </a>
          </div>
          <p id="answer1" class="collapse">
            The Starter Plan includes 1 website, 5 GB NVMe storage, unlimited bandwidth, cPanel control panel, free emails, free WordPress install, free & auto SSL, free LiteSpeed caching, free Quic Cloud CDN, and a 30-day money-back guarantee.
          </p>
        </div>
      </div>
      <div class="col-12 my-4" data-aos="fade-up" data-aos-delay="300">
        <div class="box">
          <div class="d-flex w-100 justify-content-between">
            <a
              data-bs-toggle="collapse"
              class="w-100"
              onclick="rotateIcon('icon2')"
              href="#answer2"
              role="button"
              aria-expanded="false"
            >
              <h4
                class="d-flex justify-content-between w-100 heading-3 m-0 p-0"
              >
                Can I upgrade my plan later?
                <i
                  class="bi bi-chevron-compact-down mx-4 rotate-icon"
                  id="icon2"
                ></i>
              </h4>
            </a>
          </div>
          <p id="answer2" class="collapse">
            Yes, you can upgrade your plan at any time. Simply contact our support team or use the control panel to change your plan to one that suits your needs better.
          </p>
        </div>
      </div>
      <div class="col-12 my-4" data-aos="fade-up" data-aos-delay="350">
        <div class="box">
          <div class="d-flex w-100 justify-content-between">
            <a
              data-bs-toggle="collapse"
              class="w-100"
              onclick="rotateIcon('icon3')"
              href="#answer3"
              role="button"
              aria-expanded="false"
            >
              <h4
                class="d-flex justify-content-between w-100 heading-3 m-0 p-0"
              >
                Do you provide a money-back guarantee?
                <i
                  class="bi bi-chevron-compact-down mx-4 rotate-icon"
                  id="icon3"
                ></i>
              </h4>
            </a>
          </div>
          <p id="answer3" class="collapse">
            Yes, all our plans come with a 30-day money-back guarantee. If you're not satisfied with our service, you can request a full refund within the first 30 days.
          </p>
        </div>
      </div>
      <div class="col-12 my-4" data-aos="fade-up" data-aos-delay="400">
        <div class="box">
          <div class="d-flex w-100 justify-content-between">
            <a
              data-bs-toggle="collapse"
              class="w-100"
              onclick="rotateIcon('icon4')"
              href="#answer4"
              role="button"
              aria-expanded="false"
            >
              <h4
                class="d-flex justify-content-between w-100 heading-3 m-0 p-0"
              >
                How do I get support if I face any issues?
                <i
                  class="bi bi-chevron-compact-down mx-4 rotate-icon"
                  id="icon4"
                ></i>
              </h4>
            </a>
          </div>
          <p id="answer4" class="collapse">
            You can reach our support team 24/7 via live chat, email, or phone. We are here to help with any issues you may encounter.
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
        <div class="box d-flex flex-column justify-content-md-start justify-content-lg-start justify-content-center align-items-center align-items-lg-start align-items-md-start">
          <a href="index.html" class="logo">
            <img class="my-2" src="images/logo/logo.png" alt="JRMHD Logo" />
          </a>
          <p>JRMHD Technologies is your partner in web development, digital marketing, and IT solutions.</p>
          <h4 class="my-2">Follow Us</h4>
          <div class="social d-flex gap-2">
            <a href="https://facebook.com/jrmhdtech" target="_blank" class="icon"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/jrmhdtech" target="_blank" class="icon"><i class="bi bi-instagram"></i></a>
            <a href="https://twitter.com/reaganmukabana" target="_blank" class="icon"><i class="bi bi-twitter"></i></a>
            <a href="https://youtube.com/jrmhdtech" target="_blank" class="icon"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
      <!-- Sitemap Section -->
      <div class="col-12 col-lg-3 col-md-6 mx-auto d-flex flex-column justify-content-md-start justify-content-lg-start justify-content-center align-items-center align-items-lg-start align-items-md-start my-4 gap-3">
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
      <div class="col-12 col-lg-3 col-md-6 mx-auto d-flex flex-column justify-content-md-start justify-content-lg-start justify-content-center align-items-center align-items-lg-start align-items-md-start my-4 gap-3">
        <h4>Follow Us</h4>
        <ul class="d-flex flex-column gap-3">
          <li class="d-flex align-items-center gap-2">
            <i class="bi bi-chevron-right"></i><a href="https://facebook.com/jrmhdtech" target="_blank">Facebook</a>
          </li>
          <li class="d-flex align-items-center gap-2">
            <i class="bi bi-chevron-right"></i><a href="https://instagram.com/jrmhdtech" target="_blank">Instagram</a>
          </li>
          <li class="d-flex align-items-center gap-2">
            <i class="bi bi-chevron-right"></i><a href="https://linkedin.com/company/jrmhdtech" target="_blank">LinkedIn</a>
          </li>
          <li class="d-flex align-items-center gap-2">
            <i class="bi bi-chevron-right"></i><a href="https://twitter.com/reaganmukabana" target="_blank">Twitter</a>
          </li>
        </ul>
      </div>
      <!-- Our Services Section -->
      <div class="col-12 col-lg-3 col-md-6 mx-auto d-flex flex-column justify-content-md-start justify-content-lg-start justify-content-center align-items-center align-items-lg-start align-items-md-start my-4 gap-3">
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
        <div class="col-12 col-md-6 d-flex justify-content-lg-start justify-content-md-start justify-content-center">
          <p class="creadits">
            &copy; 2024 Created by: <a href="https://www.jrmhd.tech">JRMHD Technologies</a>
          </p>
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-lg-end justify-content-md-end justify-content-center pb-md-0 pb-lg-0 pb-3">
          <div>
            <a href="terms-of-use.html">Terms of Use</a> | <a href="privacy-policy.html">Privacy Policy</a>
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

</html>