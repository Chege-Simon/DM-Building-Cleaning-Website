<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dm Gebäudereinigung</title>
  <meta content="Home and Office Cleaning Services" name="description">
  <meta content="Home and Office Cleaning Services" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Dm Gebäudereinigung
  * Updated: Nov 3 2023 with Bootstrap v5.3.2
  ======================================================== -->
</head>
<style>
  .featured-services .icon-box .showcasebackground1 {
    background-image: url("assets/img/showcase/showcaseimage1.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
  }

  .featured-services .icon-box .showcasebackground2 {
    background-image: url("assets/img/showcase/showcaseimage2.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
  }

  .featured-services .icon-box .showcasebackground3 {
    background-image: url("assets/img/showcase/showcaseimage3.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
  }

  .featured-services .icon-box .showcasebackground4 {
    background-image: url("assets/img/showcase/showcaseimage4.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
  }

  .hero-logo {
    width: 100%;
  }

  @media only screen and (max-width: 1200px) {
    #topbar {
      padding-top: 50px;
      padding-bottom: 15px;
    }
  }
</style>

<body>
  <div style="position:fixed; top: 0px; right: 20px; z-index:996">
    <select id="languageSelector" class="form-select" aria-label="Default select language" onchange="window.changeLanguage()">
      <option value="en" selected>🇬🇧 English</option>
      <option value="gm">🇩🇪 German</option>
    </select>
  </div>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex flex-wrap gap-2 align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:dmgebaudereinigung1@gmail.com">dmgebaudereinigung1@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center"><a href="tel:+49 174 9734088">+49 174 9734088</a></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </section>
  <?php
  // Load SQLite3 manually if possible
  if (!extension_loaded('sqlite3')) {
    dl('sqlite3.so');
  }
  if (!extension_loaded('pdo_sqlite')) {
    dl('pdo_sqlite.so');
  }
  //check if the database file exists and create a new if not
  if (!is_file('./db/dmbuildingcleaning.sqlite3')) {
    file_put_contents('./db/dmbuildingcleaning.sqlite3', null);
  }
  //Create a new SQLite3 Database
  $db = new SQLite3('./db/dmbuildingcleaning.sqlite3');

  //Create a new table to our database 
  $query = "CREATE TABLE IF NOT EXISTS reviews (review_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, firstname STRING, lastname STRING, location STRING, review_message STRING)";
  $db->exec($query);

  //query from the table that we create
  $sql = "SELECT review_id, * FROM reviews";
  $query = $db->query($sql);

  ?>
  <div id="language">

  </div>



  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script> -->

  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    // window.onload = changeLanguage;
    // document.querySelector('#languageSelector').value = 'en';
    // document.querySelector('.german').style.display = 'none';
    // document.querySelector('.english').style.display = 'block';
    // function changeLanguage(){
    //   let lang = document.querySelector('#languageSelector').value;
    //   console.log(lang);
    //   // Hide elements that don't correspond to the user's preferred language
    //   if (lang == 'en') {
    //     document.querySelector('.german').style.display = 'none';
    //     document.querySelector('.english').style.display = 'block';
    //   } else {
    //     document.querySelector('.english').style.display = 'none';
    //     document.querySelector('.german').style.display = 'block';
    //   }
    // }



    // *This section is in English language
    // *
    // *
    // ======================================================== -->


    var usrlang = navigator.language || navigator.userLanguage;
    console.log("User's preferred language is: " + usrlang);
    if (usrlang.includes('en')) {
      document.querySelector('#languageSelector').value = 'en';
    } else {
      document.querySelector('#languageSelector').value = 'gm';
    }

    // window.onload = changeLanguage;
    window.changeLanguage = function() {

      // function changeLanguage(){

      /**
       * Initiate Pure Counter 
       */
      new PureCounter();
      console.log("PureCounter");
      console.log("PureCounter" + PureCounter());
      let lang = document.querySelector('#languageSelector').value;
      // console.log(lang);
      // Hide elements that don't correspond to the user's preferred language
      if (lang == 'en') {
        document.querySelector('#language').innerHTML = `
    
        <!-- ======= Header ======= -->
        <header id="header" class="d-flex align-items-center sticky-top">
          <div class="container d-flex align-items-center justify-content-between">
      
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#hero" class="logo"><img width="100"src="assets/img/logo.png" alt="logo image"></a>-->
            <h1 class="logo"><a href="#hero">Dm Gebäudereinigung<span>.</span></a></h1>
      
            <nav id="navbar" class="navbar">
              <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
                <li class="dropdown"><a class="nav-link scrollto" href="#services"><span>services</span> <i class="bi bi-chevron-down" onclick="toggleDropDown()"></i></a>
                  <ul id="dropdown_items">
                    <li><a href="/residential-cleaning.html">Residential Cleaning</a></li>
                    <li><a href="/commercial-cleaning.html">Commercial Cleaning</a></li>
                    <li><a href="/specialized-services.html">Specialized Services</a></li>
                  </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle" id="nav-toggle" onclick="toggleMobileNav()"></i>
            </nav>
            <!-- .navbar -->
      
          </div>
        </header><!-- End Header -->
      
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
          <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
              <div class="col-md-8">
                <h1>Welcome to <span>Dm Gebäudereinigung</span></h1>
                <h2>When Cleanliness Counts, Count on Us.</h2>
                <div class="d-flex">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModel" type="button" class="btn-get-started scrollto">Get Free Quote</a>
                </div>
              </div>
              <div class="col-md-4">
                <div href="#hero"><img class="hero-logo" src="assets/img/logo.png" alt="logo image"></div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Hero -->
      
        <main id="main">
      
          <!-- ======= Featured Services Section ======= -->
          <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
      
              <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="icon-box" style=" background-image: linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url('assets/img/showcase/showcaseimage1.jpg');
                  background-size: cover;background-repeat: no-repeat;background-position: center center;" data-aos="fade-up" data-aos-delay="100">
                    <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
                    <h4 class="title"><a href="">Sweeping Away Your Worries</a></h4>
                    <p class="description">Your Path to a Healthier, Happier Home.</p>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="icon-box" style=" background-image:linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url('assets/img/showcase/showcaseimage2.jpg');
                  background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center center;" data-aos="fade-up" data-aos-delay="200">
                    <!-- <div class="icon"><i class="bx bx-file"></i></div> -->
                    <h4 class="title"><a href="">Elevating Clean to an Art </a></h4>
                    <p class="description">Transforming Chaos into Order, One Space at a Time.</p>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="icon-box" style=" background-image:linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url('assets/img/showcase/showcaseimage3.jpg');
                  background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center center;" data-aos="fade-up" data-aos-delay="300">
                    <!-- <div class="icon"><i class="bx bx-tachometer"></i></div> -->
                    <h4 class="title"><a href="">Leave the Mess to Us!</a></h4>
                    <p class="description"> Relax and Let Your Space Sparkle.</p>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                  <div class="icon-box" style=" background-image:linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url('assets/img/showcase/showcaseimage4.jpg');
                  background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center center;" data-aos="fade-up" data-aos-delay="400">
                    <!-- <div class="icon"><i class="bx bx-world"></i></div> -->
                    <h4 class="title"><a href="">Cleaning with Care, Beyond Compare</a></h4>
                    <p class="description">A Personal Touch for Your Space.</p>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- End Featured Services Section -->
      
          <!-- ======= About Section ======= -->
          <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>About</h2>
                <h3>Find Out More <span>About Us</span></h3>
                <p>Welcome to Dm Gebäudereinigung, where cleanliness meets perfection. 
                  We are more than just a cleaning service; we are your dedicated partner in creating spotless, 
                  welcoming spaces that enhance your quality of life.</p>
      
              </div>
      
              <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                  <!-- <img src="assets/img/about-img.jpg" class="img-fluid" alt="about image"> -->
                  <img src="assets/img/joke.jpg" class="img-fluid rounded" alt="about joke">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                  <h3>HOUSE AND OFFICE CLEANING SERVICES</h3>
                  <p class="fst-italic">
                    Our Commitment to You:
                  </p>
                  <ul>
                    <li>
                      <i class="bi bi-1-square"></i>
                      <div>
                        <h5>Uncompromising Quality: </h5>
                        <p>We take pride in our meticulous attention to detail and 
                          commitment to delivering top-notch cleaning services. 
                          Each member of our team is trained to uphold our high standards, 
                          ensuring your satisfaction with every clean.</p>
                      </div>
                    </li>
                    <li>
                      <i class="bi bi-2-square"></i>
                      <div>
                        <h5>Personalized Service: </h5>
                        <p>We recognize that every space is unique, and so are your cleaning needs. 
                          Our services are tailored to suit your specific requirements, 
                          and we take the time to understand your preferences to deliver the results you expect.</p>
                      </div>
                    </li>
                    <li>
                      <i class="bi bi-3-square"></i>
                      <div>
                        <h5>Health and Eco-Friendly Approach: </h5>
                        <p>We care not only about your cleanliness but also your well-being. 
                          That's why we use environmentally friendly cleaning products and 
                          practices to ensure a healthy living environment for you, your family, or your employees.</p>
                      </div>
                    </li>
                    <li>
                      <i class="bi bi-4-square"></i>
                      <div>
                        <h5>Dependable Team: </h5>
                        <p>Our team is composed of dedicated and trustworthy professionals who are committed to making your space shine. 
                          We understand the importance of security and privacy, 
                          and you can count on us to handle your property with the utmost care.</p>
                      </div>
                    </li>
                    <li>
                      <i class="bi bi-5-square"></i>
                      <div>
                        <h5>Satisfaction Guaranteed: </h5>
                        <p>our satisfaction is our top priority. 
                          If for any reason you are not completely satisfied with our services, 
                          we will make it right. We believe in building lasting relationships with our clients.</p>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-12 pt-4 pt-lg-0 content d-flex flex-column justify-content-center section-title" data-aos="fade-up" data-aos-delay="100">
                  <p>
                    At Dm Gebäudereinigung, we understand the importance of a clean and healthy environment. 
                    Our mission is to deliver cleaning excellence, every time, 
                    ensuring that you can live and work in surroundings that sparkle with freshness. 
                    With years of experience in the industry, 
                    we have established ourselves as a trusted name in professional cleaning services.
                  </p>
                </div>
              </div>
      
            </div>
          </section>
          <!-- End About Section -->
      
          <!-- ======= Counts Section ======= -->
          <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

              <div class="row">

                <div class="col-lg-3 col-md-6">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Happy Clients</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Projects</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                  <div class="count-box">
                    <i class="bi bi-headset"></i>
                    <span data-purecounter-start="0" data-purecounter-end="709" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Hours Of Support</p>
                  </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                  <div class="count-box">
                    <i class="bi bi-people"></i>
                    <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Hard Workers</p>
                  </div>
                </div>

              </div>

            </div>
          </section><!-- End Counts Section -->
      
          <!-- ======= Services Section ======= -->
          <section id="services" class="services">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>Services</h2>
                <h3>Check our <span>Services</span></h3>
                <p>At Dm Gebäudereinigung, 
                  we take pride in offering a comprehensive range of cleaning services that transform spaces into immaculate, 
                  inviting environments. Our commitment to excellence, personalized approach, 
                  and dedication to your well-being set us apart. 
                  Discover how we can make a difference in your life and space with our tailored services:</p>
              </div>
      
              <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" href="/residential-cleaning.html">
                  <div class="icon-box">
                    <div class="icon">
                      <i class="bi bi-1-circle-fill"></i>
                    </div>
                    <h4><a  href="/residential-cleaning.html">Residential Cleaning:</a></h4>
                    <p>From regular maintenance to deep cleaning, we keep your home spotless and comfortable.</p>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200" href="/commercial-cleaning.html">
                  <div class="icon-box">
                    <div class="icon">
                      <i class="bi bi-2-circle-fill"></i>
                    </div>
                    <h4><a href="/commercial-cleaning.html">Commercial Cleaning: </a></h4>
                    <p>We create a clean and inviting workspace that promotes productivity and professionalism.</p>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300" href="specialized-services.html">
                  <div class="icon-box">
                    <div class="icon">
                      <i class="bi bi-3-circle-fill"></i>
                    </div>
                    <h4><a href="specialized-services.html">Specialized Services:</a></h4>              
                    <p>Whether it's carpet cleaning, window cleaning, or any other specific cleaning need, we have you covered.</p>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- End Services Section -->

          <?php

          ?>
          <!-- ======= Testimonials Section ======= -->
          <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">
      
              <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                
                <div class="swiper-wrapper">
      
                <?php
                while ($row = $query->fetchArray()) {

                  $imagesDir = 'assets/img/testimonials/';

                  $images = glob($imagesDir . '*.{png}', GLOB_BRACE);

                  $randomImage = $images[array_rand($images)];
                  echo '
                      <div class="swiper-slide">
                        <div class="testimonial-item">
                        <img src="' . $randomImage . '" class="testimonial-img" alt="testimonial image">
                        <h3>' . $row['firstname'] . ' ' . $row['lastname'] . '</h3>
                        <h4>' . $row['location'] . '</h4>
                        <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            ' . $row['review_message'] . '
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                      ';
                }
                ?>
                </div>
                <div class="swiper-pagination"></div>
              </div>
      
            </div>
          </section>
          <!-- End Testimonials Section -->
      
          <!-- ======= Pricing Section ======= -->
          <section id="pricing" class="pricing">
            <div class=" container-fluid" data-aos="fade-up">
      
              <div class="row section-title bg-black justify-content-center align-items-center text-white pt-3">
                <div class="col-sm-12 col-md-8" data-aos="fade-up" data-aos-delay="100">
                  <p>WE ARE PROUD TO SERVE HAMBURG, WENTORF, REINBEK AND NORDERSTEDT.</p>
                </div> 
                <div class="col-sm-12 col-md-4" data-aos="fade-up" data-aos-delay="100">
                  <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModel">Get Free Quote</button>
                </div>  
              </div>
      
            </div>
          </section><!-- End Pricing Section -->
      
          <!-- ======= Frequently Asked Questions Section ======= -->
          <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>F.A.Q</h2>
                <h3>Frequently Asked <span>Questions</span></h3>
              </div>
      
              <div class="row justify-content-center">
                <div class="col-xl-10">
                  <ul class="faq-list">
      
                    <li>
                      <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">How much do your cleaning services cost? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          Our pricing structure is based on square footage, specific tasks, or other factors.
                        </p>
                      </div>
                    </li>
      
                    <li>
                      <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Do I need to provide cleaning supplies and equipment?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          No, We provide our own supplies during all our services.</p>
                      </div>
                    </li>
      
                    <li>
                      <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Are your cleaning products environmentally friendly? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          Yes, our cleaning products are environmentally safe.
                        </p>
                      </div>
                    </li>
      
                    <li>
                      <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Can you accommodate special requests? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          Yes we are flexible in our cleaning services and gladly accept special requests or specific for your cleaning needs
                        </p>
                      </div>
                    </li>
      
                    <li>
                      <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">What areas do you serve or operate in? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          We operate in all of Germany.
                        </p>
                      </div>
                    </li>
      
                    <li>
                      <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Do you offer one-time or occasional cleanings, or just recurring services?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          We provide single or intermittent cleaning sessions, as well as regular recurring service options
                        </p>
                      </div>
                    </li>
      
                  </ul>
                </div>
              </div>
      
            </div>
          </section>
          <!-- End Frequently Asked Questions Section -->
      
          <!-- ======= Contact Section ======= -->
          <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>Contact</h2>
                <h3><span>Contact Us</span></h3>
                <p>Reach out to us for a timely response to any queries and concerns regarding our services.</p>        </div>
              <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                  <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>
                    92339 <br>
                    Beilngries<br>
                    Germany<br>
                    </p>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6">
                  <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p>dmgebaudereinigung1@gmail.com</p>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6">
                  <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <a href="tel:+49 174 9734088">+49 174 9734088</a>
                  </div>
                </div>
      
              </div>
      
              <div class="row" data-aos="fade-up" data-aos-delay="100">
      
                <div class="col-lg-6 ">
                  <!-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> -->
                  <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/d/embed?mid=1tSn_MNwyIGtwuMMiFXxu8JAXXUBZqb8&ehbc=2E312F" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>
      
                <div class="col-lg-6">
                  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                      <div class="col form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                      </div>
                      <div class="col form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                      <input name="lang" id="lang" hidden/>
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                  </form>
                </div>
      
              </div>
      
            </div>
          </section><!-- End Contact Section -->
      
        </main><!-- End #main -->
      
        <!-- ======= Footer ======= -->
        <footer id="footer">
      
          <div class="footer-top">
            <div class="container">
              <div class="row">
      
                <div class="col-lg-3 col-md-6 footer-contact">
                  <h3>Dm Gebäudereinigung<span>.</span></h3>
                  <p>
                    92339 <br>
                    Beilngries<br>
                    Germany<br><br>
                    <strong>Phone:</strong> <a href="tel:+49 174 9734088">+49 174 9734088</a><br>
                    <strong>Email:</strong>dmgebaudereinigung1@gmail.com<br>
                  </p>
                </div>
      
                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a class="navlink scrollto" href="#hero">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a class="navlink scrollto" href="#about">About us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a class="navlink scrollto" href="#services">Services</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a class="navlink scrollto" href="#">Terms of service</a></li>
                    <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
                  </ul>
                </div>
      
                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Our Services</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="/residential-cleaning.html">Residential Cleaning</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/commercial-cleaning.html">Commercial Cleaning</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="/specialized-services.html">Specialized Services</a></li>
                  </ul>
                </div>
      
                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Our Social Networks</h4>
                  <p>Feel free to contact us on our Social Networks</p>
                  <div class="social-links mt-3">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                  </div>
                </div>
      
              </div>
            </div>
          </div>
      
          <div class="container py-4">
            <div class="copyright">
              &copy; Copyright <strong><span>Dm Gebäudereinigung</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
              Designed by <a href="https://chege-simon.github.io/">Dev Kim</a>
            </div>
          </div>
        </footer><!-- End Footer -->

                


        <!-- Modal -->
        <div class="modal fade" id="quoteModel" tabindex="-1" aria-labelledby="quoteModelLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="quoteModelLabel">Get Free Quote</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="forms/quote.php" method="post" role="form" class="php-email-form">
                  <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="firstName">
                  </div>
                  <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="lastName">
                  </div>
                  <div class="mb-3">
                    <label for="lastName" class="form-label">Services</label>
                    <select class="form-select" aria-label="Default select example" name="service">
                      <option selected>Choose Service</option>
                      <option value="Residential Cleaning">Residential Cleaning</option>
                      <option value="Commercial Cleaning">Commercial Cleaning</option>
                      <option value="Specialized Service">Specialized Service</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="lastName" class="form-label">Square Feet</label>
                    <select class="form-select" aria-label="Default select example" name="size">
                      <option selected>Choose Square Feet</option>
                      <option value="Between 65sqm to 75sqm">Between 65sqm to 75sqm</option>
                      <option value="Between 75sqm to 100sqm">Between 75sqm to 100sqm</option>
                      <option value="Larger than 100sqm">Larger than 100sqm</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="lastName" class="form-label">Bedrooms</label>
                    <select class="form-select" aria-label="Default select example" name="bedrooms">
                      <option selected>Choose No. of Bedrooms</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5 or more">5 or more</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="lastName" class="form-label">Bathrooms</label>
                    <select class="form-select" aria-label="Default select example" name="bathrooms">
                      <option selected>Choose No. of Bathrooms</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5 or more">5 or more</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="lastName" class="form-label">Location</label>
                    <select class="form-select" aria-label="Default select example" name="location">
                      <option selected>Select Location</option>
                      <option value="Humburg">Humburg</option>
                      <option value="Norderstedt">Norderstedt</option>
                      <option value="Reinbek">Reinbek</option>
                      <option value="Wentorf">Wentorf</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="lastName" class="form-label">Schedule</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" value="Recurring" type="radio" name="schedule" id="schedule1">
                    <label class="form-check-label" for="schedule1">
                      Recurring
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" value="One-Time Cleaning" type="radio" name="schedule" id="schedule2">
                    <label class="form-check-label" for="schedule2">
                      One-Time Cleaning
                    </label>
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
                  </div>
                  <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="smsAndEmailAuthorization">
                    <label class="form-check-label" for="smsAndEmailAuthorization">
                      BY CHECKING THE BOX, YOU AGREE TO OUR TERMS OF USE & PRIVACY POLICY.
                      YOU CONSENT TO RECEIVE PHONE CALLS & SMS MESSAGES FROM US TO PROVIDE UPDATES &/OR FOR MARKETING PURPOSES.
                    </label>
                  </div>
                  <input name="lang" id="lang" hidden/>
                  <!-- <button type="submit" class="btn btn-primary">GET QUOTE</button> -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">GET QUOTE</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
          `;
      } else {


        // *This section is in German language
        // *
        // *
        // ======================================================== -->

        document.querySelector('#language').innerHTML = `
        <!-- ======= Header ======= -->
      <header id="header" class="d-flex align-items-center sticky-top">
        <div class="container d-flex align-items-center justify-content-between">

          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="#hero" class="logo"><img width="150" height="200" src="assets/img/logo.png" alt="logo image"></a>-->
          <h1 class="logo ml-0"><a href="#hero">Dm Gebäudereinigung<span>.</span></a></h1>
    
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Heim</a></li>
              <li><a class="nav-link scrollto" href="#about">Über uns</a></li>
              <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
              <li class="dropdown"><a class="nav-link scrollto" href="#services"><span>Dienstleistungen</span> <i class="bi bi-chevron-down" onclick="toggleDropDown()"></i></a>
                <ul id="dropdown_items">
                  <li><a href="/residential-cleaning.html">Wohnungsreinigung</a></li>
                  <li><a href="/commercial-cleaning.html">Gewerbliche Reinigung</a></li>
                  <li><a href="/specialized-services.html">Spezialisierte Dienstleistungen</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="#contact">Kontaktiere uns</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle" id="nav-toggle"  onclick="toggleMobileNav()"></i>
          </nav><!-- .navbar -->

        </div>
      </header>
      <!-- End Header -->


      <!-- ======= Hero Section ======= -->
      <section id="hero" class="d-flex align-items-center">
          <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
              <div class="col-md-8">
                <h1>Willkommen bei <span>Dm Gebäudereinigung</span></h1>
                <h2>Wenn Sauberkeit zählt, zählen Sie auf uns.</h2>
                <div class="d-flex">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#quoteModel" type="button" class="btn-get-started scrollto">Erhalten Sie ein kostenloses Angebot</a>
                </div>
              </div>
              <div class="col-md-4">
                <div href="#hero"><img class="hero-logo" src="assets/img/logo.png" alt="logo image"></div>
              </div>
            </div>
          </div>
      </section>
      <!-- End Hero -->

      <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
          <div class="container" data-aos="fade-up">

            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" style=" background-image: linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url('assets/img/showcase/showcaseimage1.jpg');
                background-size: cover;background-repeat: no-repeat;background-position: center center;" data-aos="fade-up" data-aos-delay="100">
                  <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
                  <h4 class="title"><a href="">Fegen Sie Ihre Sorgen weg</a></h4>
                  <p class="description">Ihr Weg zu einem gesünderen, glücklicheren Zuhause.</p>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" style=" background-image:linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url('assets/img/showcase/showcaseimage2.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;" data-aos="fade-up" data-aos-delay="200">
                  <!-- <div class="icon"><i class="bx bx-file"></i></div> -->
                  <h4 class="title"><a href="">Sauberkeit zur Kunst erheben </a></h4>
                  <p class="description">Chaos in Ordnung verwandeln, Raum für Raum.</p>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" style=" background-image:linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url('assets/img/showcase/showcaseimage3.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;" data-aos="fade-up" data-aos-delay="300">
                  <!-- <div class="icon"><i class="bx bx-tachometer"></i></div> -->
                  <h4 class="title"><a href="">Überlassen Sie uns das Durcheinander!</a></h4>
                  <p class="description"> Entspannen Sie sich und lassen Sie Ihren Raum funkeln.</p>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                <div class="icon-box" style=" background-image:linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url('assets/img/showcase/showcaseimage4.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;" data-aos="fade-up" data-aos-delay="400">
                  <!-- <div class="icon"><i class="bx bx-world"></i></div> -->
                  <h4 class="title"><a href="">Unvergleichliche sorgfältige Reinigung</a></h4>
                  <p class="description">Eine persönliche Note für Ihren Raum.</p>
                </div>
              </div>

            </div>

          </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Über uns</h2>
              <h3>Find Out More <span>Über uns</span></h3>
              <p>Willkommen bei Dm Gebäudereinigung, wo Sauberkeit auf Perfektion trifft.
                Wir sind mehr als nur ein Reinigungsdienst; Wir sind Ihr engagierter Partner bei der Schaffung makelloser,
                Einladende Räume, die Ihre Lebensqualität verbessern.</p>

            </div>

            <div class="row">
              <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <!-- <img src="assets/img/about-img.jpg" class="img-fluid" alt="about image"> -->
                <img src="assets/img/joke.jpg" class="img-fluid rounded" alt="about joke">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>REINIGUNGSDIENSTLEISTUNGEN FÜR HAUS UND BÜRO</h3>
                <p class="fst-italic">
                  Unsere Verpflichtung für Sie:
                </p>
                <ul>
                  <li>
                    <i class="bi bi-1-square"></i>
                    <div>
                      <h5>Kompromisslose Qualität:</h5>
                      <p>Wir sind stolz auf unsere akribische Liebe zum Detail
                        Engagement für die Bereitstellung erstklassiger Reinigungsdienstleistungen.
                        Jedes Mitglied unseres Teams ist darauf geschult, unsere hohen Standards einzuhalten.
                        Sicherstellung Ihrer Zufriedenheit mit jeder Reinigung.</p>
                    </div>
                  </li>
                  <li>
                    <i class="bi bi-2-square"></i>
                    <div>
                      <h5>Personalisierter Service: </h5>
                      <p>Wir sind uns bewusst, dass jeder Raum einzigartig ist, und das gilt auch für Ihre Reinigungsbedürfnisse.
                        Unsere Dienstleistungen sind auf Ihre spezifischen Anforderungen zugeschnitten,
                        Und wir nehmen uns die Zeit, Ihre Präferenzen zu verstehen, um die Ergebnisse zu liefern, die Sie erwarten.</p>
                    </div>
                  </li>
                  <li>
                    <i class="bi bi-3-square"></i>
                    <div>
                      <h5>Gesundheits- und umweltfreundlicher Ansatz:</h5>
                      <p>We care not only about your cleanliness but also your well-being. 
                        That's why we use environmentally friendly cleaning products and 
                        practices to ensure a healthy living environment for you, your family, or your employees.</p>
                    </div>
                  </li>
                  <li>
                    <i class="bi bi-4-square"></i>
                    <div>
                      <h5>Zuverlässiges Team:</h5>
                      <p>Unser Team besteht aus engagierten und vertrauenswürdigen Fachleuten, die sich dafür einsetzen, Ihren Raum zum Strahlen zu bringen.
                        Wir verstehen die Bedeutung von Sicherheit und Datenschutz.
                        Und Sie können sich darauf verlassen, dass wir Ihre Immobilie mit größter Sorgfalt behandeln.</p>
                    </div>
                  </li>
                  <li>
                    <i class="bi bi-5-square"></i>
                    <div>
                      <h5>Zufriedenheit garantiert:</h5>
                      <p>Unsere Zufriedenheit steht für uns an erster Stelle.
                        Sollten Sie aus irgendeinem Grund mit unseren Dienstleistungen nicht vollständig zufrieden sein,
                        wir werden es richtig machen. Wir glauben an den Aufbau dauerhafter Beziehungen zu unseren Kunden.</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col-lg-12 pt-4 pt-lg-0 content d-flex flex-column justify-content-center section-title" data-aos="fade-up" data-aos-delay="100">
                <p>
                  Bei Dm Gebäudereinigung sind wir uns der Bedeutung einer sauberen und gesunden Umwelt bewusst.
                  Unsere Mission ist es, jederzeit hervorragende Reinigungsqualität zu liefern.
                  Wir stellen sicher, dass Sie in einer Umgebung leben und arbeiten können, die vor Frische strahlt.
                  Mit jahrelanger Erfahrung in der Branche,
                  Wir haben uns als vertrauenswürdiger Name für professionelle Reinigungsdienste etabliert.
                </p>
              </div>
            </div>

          </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
          <div class="container" data-aos="fade-up">

            <div class="row">

              <div class="col-lg-3 col-md-6">
                <div class="count-box">
                  <i class="bi bi-emoji-smile"></i>
                  <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Glückliche Klienten</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                <div class="count-box">
                  <i class="bi bi-journal-richtext"></i>
                  <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Dienstleistungen</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                  <i class="bi bi-headset"></i>
                  <span data-purecounter-start="0" data-purecounter-end="709" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Stundenlange Unterstützung</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                <div class="count-box">
                  <i class="bi bi-people"></i>
                  <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Harte Arbeiter</p>
                </div>
              </div>

            </div>

          </div>
        </section><!-- End Counts Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Dienstleistungen</h2>
              <h3>Überprüfen Sie unsere <span>Dienstleistungen</span></h3>
              <p>Bei Dm Gebäudereinigung
                Wir sind stolz darauf, ein umfassendes Spektrum an Reinigungsdiensten anzubieten, die Räume in makellose, saubere Räume verwandeln.
                einladende Umgebungen. Unser Engagement für Exzellenz, personalisierter Ansatz,
                und unser Engagement für Ihr Wohlbefinden zeichnen uns aus.
                Entdecken Sie, wie wir mit unseren maßgeschneiderten Dienstleistungen einen Unterschied in Ihrem Leben und Raum machen können:</p>
            </div>

            <div class="row">
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" href="/residential-cleaning.html">
                <div class="icon-box">
                  <div class="icon">
                    <i class="bi bi-1-circle-fill"></i>
                  </div>
                  <h4><a href="/residential-cleaning.html">Wohnungsreinigung: </a></h4>
                  <p>Von der regelmäßigen Wartung bis zur gründlichen Reinigung sorgen wir dafür, dass Ihr Zuhause makellos und komfortabel bleibt.</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200" href="/commercial-cleaning.html">
                <div class="icon-box">
                  <div class="icon">
                    <i class="bi bi-2-circle-fill"></i>
                  </div>
                  <h4><a href="/commercial-cleaning.html">Gewerbliche Reinigung: </a></h4>
                  <p>Wir schaffen einen sauberen und einladenden Arbeitsplatz, der Produktivität und Professionalität fördert.</p>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300" href="/specialized-services.html">
                <div class="icon-box">
                  <div class="icon">
                    <i class="bi bi-3-circle-fill"></i>
                  </div>
                  <h4><a href="/specialized-services.html">Spezialisierte Dienstleistungen:</a></h4>              
                  <p>Ob Teppichreinigung, Fensterreinigung oder ein anderer spezifischer Reinigungsbedarf, wir sind für Sie da.</p>
                </div>
              </div>

            </div>

          </div>
        </section><!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
          <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            
            <div class="swiper-wrapper">
            <?php
            while ($row = $query->fetchArray()) {

              $imagesDir = 'assets/img/testimonials/';

              $images = glob($imagesDir . '*.{png}', GLOB_BRACE);

              $randomImage = $images[array_rand($images)];
              echo '
                      <div class="swiper-slide">
                        <div class="testimonial-item">
                        <img src="' . $randomImage . '" class="testimonial-img" alt="testimonial image">
                        <h3>' . $row['firstname'] . ' ' . $row['lastname'] . '</h3>
                        <h4>' . $row['location'] . '</h4>
                        <p>
                          <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            ' . $row['review_message'] . '
                          <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                      ';
            }
            ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
          <div class=" container-fluid" data-aos="fade-up">

            <div class="row section-title bg-black justify-content-center align-items-center text-white pt-3">
              <div class="col-sm-12 col-md-8" data-aos="fade-up" data-aos-delay="100">
                <p>WIR SIND STOLZ, HAMBURG, WENTORF, REINBEK UND NORDERSTEDT ZU DIENST.</p>
              </div> 
              <div class="col-sm-12 col-md-4" data-aos="fade-up" data-aos-delay="100">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModel">Erhalten Sie ein kostenloses Angebot</button>
              </div>  
            </div>

          </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>F.A.Q</h2>
              <h3>Häufig gestellt <span>Fragen</span></h3>
            </div>

            <div class="row justify-content-center">
              <div class="col-xl-10">
                <ul class="faq-list">

                  <li>
                    <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Wie viel kosten Ihre Reinigungsdienste? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Unsere Preisstruktur basiert auf der Quadratmeterzahl, bestimmten Aufgaben oder anderen Faktoren.
                      </p>
                    </div>
                  </li>

                  <li>
                    <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Muss ich Reinigungsutensilien und -geräte bereitstellen?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Nein, wir stellen bei allen unseren Dienstleistungen unsere eigenen Vorräte bereit.</p>
                    </div>
                  </li>

                  <li>
                    <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Sind Ihre Reinigungsprodukte umweltfreundlich?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Ja, unsere Reinigungsprodukte sind umweltfreundlich.
                      </p>
                    </div>
                  </li>

                  <li>
                    <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Können Sie auf Sonderwünsche eingehen? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Ja, wir sind bei unseren Reinigungsdiensten flexibel und nehmen gerne Sonderwünsche oder spezifische Reinigungsbedürfnisse entgegen                  </p>
                    </div>
                  </li>

                  <li>
                    <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">In welchen Bereichen sind Sie tätig bzw. sind Sie tätig?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Wir sind in ganz Deutschland tätig.
                      </p>
                    </div>
                  </li>

                  <li>
                    <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Bieten Sie einmalige oder gelegentliche Reinigungen oder nur wiederkehrende Leistungen an?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                      <p>
                        Wir bieten einzelne oder intermittierende Reinigungssitzungen sowie regelmäßig wiederkehrende Serviceoptionen an
                      </p>
                    </div>
                  </li>

                </ul>
              </div>
            </div>

          </div>
        </section>
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Kontaktiere uns</h2>
              <h3>
                <span>Kontaktiere uns</span>
              </h3>
              <p>Kontaktieren Sie uns für eine zeitnahe Antwort auf alle Fragen und Bedenken bezüglich unserer Dienstleistungen.</p>        
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-6">
                <div class="info-box mb-4">
                  <i class="bx bx-map"></i>
                  <h3>Unsere Adresse</h3>
                  <p>
                    92339 <br>
                    Beilngries<br>
                    Germany<br>
                  </p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                  <i class="bx bx-envelope"></i>
                  <h3>E-Mail an uns</h3>
                  <p>dmgebaudereinigung1@gmail.com</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Rufen Sie uns an</h3>
                  <a href="tel:+49 174 9734088">+49 174 9734088</a>
                </div>
              </div>

            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

              <div class="col-lg-6 ">
                <!-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> -->
                <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/d/embed?mid=1tSn_MNwyIGtwuMMiFXxu8JAXXUBZqb8&ehbc=2E312F" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
              </div>

              <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
                    <div class="col form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Ihren Namen" required>
                    </div>
                    <div class="col form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Deine E-Mail" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjekt" required>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="Botschaft" required></textarea>
                  </div>
                  <div class="my-3">
                    <input name="lang" id="lang" hidden/>
                    <div class="loading">Wird geladen!</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Ihre Nachricht wurde gesendet. Danke dir!</div>
                  </div>
                  <div class="text-center"><button type="submit">Nachricht senden</button></div>
                </form>
              </div>

            </div>

          </div>
        </section><!-- End Contact Section -->

      </main><!-- End #main -->

      <!-- ======= Footer ======= -->
      <footer id="footer">

        <div class="footer-top">
          <div class="container">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-contact">
                <h3>Dm Gebäudereinigung<span>.</span></h3>
                <p>
                  92339<br>
                  Beilngries<br>
                  Germany<br><br>
                  <strong>Phone:</strong> <a href="tel:+49 174 9734088">+49 174 9734088</a><br>
                  <strong>Email:</strong>dmgebaudereinigung1@gmail.com<br>
                </p>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a class="navlink scrollto" href="#hero">Heim</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a class="navlink scrollto" href="#about">Über uns</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a class="navlink scrollto" href="#services">Dienstleistungen</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a class="navlink scrollto" href="#">Nutzungsbedingungen</a></li>
                  <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Unsere Dienstleistungen</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Wohnungsreinigung</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Gewerbliche Reinigung</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Spezialisierte Dienstleistungen</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Unsere sozialen Netzwerke</h4>
                <p>Kontaktieren Sie uns gerne unter Unsere sozialen Netzwerke</p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="container py-4">
          <div class="copyright">
            &copy; Urheberrechte <strong><span>Dm Gebäudereinigung</span></strong>. Alle Rechte vorbehalten
          </div>
          <div class="credits">
            Entworfen von <a href="https://chege-simon.github.io/">Dev Kim</a>
          </div>
        </div>
      </footer><!-- End Footer -->


      <!-- Modal -->
<div class="modal fade" id="quoteModel" tabindex="-1" aria-labelledby="quoteModelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="quoteModelLabel">Kostenlosen Kostenvoranschlag erhalten</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Schließen"></button>
      </div>
      <div class="modal-body">
        <form action="forms/quote.php" method="post" role="form" class="php-email-form">
          <div class="mb-3">
            <label for="firstName" class="form-label">Vorname</label>
            <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="firstName">
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Nachname</label>
            <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="lastName">
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Dienstleistungen</label>
            <select class="form-select" aria-label="Default select example" name="service">
              <option selected>Dienstleistung auswählen</option>
              <option value="Wohnungsreinigung">Wohnungsreinigung</option>
              <option value="Gewerbereinigung">Gewerbereinigung</option>
              <option value="Spezialdienstleistung">Spezialdienstleistung</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Quadratmeter</label>
            <select class="form-select" aria-label="Default select example" name="size">
              <option selected>Quadratmeter auswählen</option>
              <option value="Zwischen 65 qm und 75 qm">Zwischen 65 qm und 75 qm</option>
              <option value="Zwischen 75 qm und 100 qm">Zwischen 75 qm und 100 qm</option>
              <option value="Größer als 100 qm">Größer als 100 qm</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Schlafzimmer</label>
            <select class="form-select" aria-label="Default select example" name="bedrooms">
              <option selected>Anzahl der Schlafzimmer auswählen</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5 oder mehr">5 oder mehr</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Badezimmer</label>
            <select class="form-select" aria-label="Default select example" name="bathrooms">
              <option selected>Anzahl der Badezimmer auswählen</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5 oder mehr">5 oder mehr</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Ort</label>
            <select class="form-select" aria-label="Default select example" name="location">
              <option selected>Ort auswählen</option>
              <option value="Hamburg">Hamburg</option>
              <option value="Norderstedt">Norderstedt</option>
              <option value="Reinbek">Reinbek</option>
              <option value="Wentorf">Wentorf</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Zeitplan</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" value="Wiederkehrend" type="radio" name="schedule" id="schedule1">
            <label class="form-check-label" for="schedule1">
              Wiederkehrend
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" value="Einmalige Reinigung" type="radio" name="schedule" id="schedule2">
            <label class="form-check-label" for="schedule2">
              Einmalige Reinigung
            </label>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Telefon</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">E-Mail-Adresse</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Nachricht</label>
            <textarea class="form-control" id="message" rows="3" name="message"></textarea>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="smsAndEmailAuthorization">
            <label class="form-check-label" for="smsAndEmailAuthorization">
              DURCH ANKREUZEN DES KÄSTCHENS ERKLÄREN SIE SICH MIT UNSEREN NUTZUNGSBEDINGUNGEN UND DATENSCHUTZRICHTLINIEN EINVERSTANDEN.
              SIE ERLAUBEN UNS, SIE TELEFONISCH UND PER SMS ZU KONTAKTIEREN, UM AKTUALISIERUNGEN ZU GEBEN UND/ODER FÜR MARKETINGZWECKE.
            </label>
          </div>
          <input name="lang" id="lang" hidden/>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Schließen</button>
            <button type="submit" class="btn btn-primary">KOSTENVORANSCHLAG ERHALTEN</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

        `;
      }

      var langinput = document.querySelector('#lang');
      // console.log(lang);
      langinput.value = lang;

      setTimeout('', 10000);
      new PureCounter();

      /**
       * Testimonials slider
       */
      new Swiper('.testimonials-slider', {
        speed: 600,
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
          clickable: true
        }
      });

    }
    // Call the function on page load to set the initial language
    window.onload = function() {
      window.changeLanguage();
    };
  </script>
  <!-- <script> 
 window.onload = loadPureCounter;
    function loadPureCounter(){
      setTimeout('', 10000);
      new PureCounter();
    }
  </script> -->

</body>

</html>