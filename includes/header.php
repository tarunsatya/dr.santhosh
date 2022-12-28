<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <meta name="description" content="Medcity - Medical Healthcare HTML5 Template">
      <link href="assets/images/favicon/favicon.png" rel="icon">
      <title>Dr.Santosh</title>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
      <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
      <link rel="stylesheet" href="../../../use.fontawesome.com/releases/v5.15.3/css/all.css">
      <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
            integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
            crossorigin="anonymous" />
      <link rel="stylesheet" href="assets/css/libraries.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <style>
      .loader {
            width: 6em;
            height: 6em;
            font-size: 10px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
      }

      .loader .face {
            position: absolute;
            border-radius: 50%;
            border-style: solid;
            animation: animate023845 3s linear infinite;
      }

      .loader .face:nth-child(1) {
            width: 100%;
            height: 100%;
            color: gold;
            border-color: currentColor transparent transparent currentColor;
            border-width: 0.2em 0.2em 0em 0em;
            --deg: -45deg;
            animation-direction: normal;
      }

      .loader .face:nth-child(2) {
            width: 70%;
            height: 70%;
            color: lime;
            border-color: currentColor currentColor transparent transparent;
            border-width: 0.2em 0em 0em 0.2em;
            --deg: -135deg;
            animation-direction: reverse;
      }

      .loader .face .circle {
            position: absolute;
            width: 50%;
            height: 0.1em;
            top: 50%;
            left: 50%;
            background-color: transparent;
            transform: rotate(var(--deg));
            transform-origin: left;
      }

      .loader .face .circle::before {
            position: absolute;
            top: -0.5em;
            right: -0.5em;
            content: '';
            width: 1em;
            height: 1em;
            background-color: currentColor;
            border-radius: 50%;
            box-shadow: 0 0 2em,
                  0 0 4em,
                  0 0 6em,
                  0 0 8em,
                  0 0 10em,
                  0 0 0 0.5em rgba(255, 255, 0, 0.1);
      }

      @keyframes animate023845 {
            to {
                  transform: rotate(1turn);
            }
      }
      </style>
</head>

<body>
      <div class="wrapper">
            <div class="preloader">
                  <!-- <div class="loading"><span></span><span></span><span></span><span></span></div> -->
                  <div class="loader">
                        <div class="face">
                              <div class="circle"></div>
                        </div>
                        <div class="face">
                              <div class="circle"></div>
                        </div>
                  </div>
            </div><!-- /.preloader -->

            <!-- =========================
        Header
    =========================== -->
            <header class="header header-layout1">
                  <div class="header-topbar">
                        <div class="container-fluid">
                              <div class="row align-items-center">
                                    <div class="col-12">
                                          <div class="d-flex align-items-center justify-content-between">
                                                <ul
                                                      class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                                                      <li>
                                                            <button class="miniPopup-emergency-trigger"
                                                                  type="button">24/7 Service</button>
                                                            <div id="miniPopup-emergency"
                                                                  class="miniPopup miniPopup-emergency text-center">
                                                                  <div class="emergency__icon">
                                                                        <i class="icon-call3"></i>
                                                                  </div>
                                                                  <a href="tel:+201061245741" class="phone__number">
                                                                        <i class="icon-phone"></i> <span>+2
                                                                              01061245741</span>
                                                                  </a>
                                                                  <p>Please feel free to contact our friendly reception
                                                                        staff with any general or medical enquiry.
                                                                  </p>
                                                                  <a href="appointment.html"
                                                                        class="btn btn__secondary btn__link btn__block">
                                                                        <span>Make Appointment</span> <i
                                                                              class="icon-arrow-right"></i>
                                                                  </a>
                                                            </div><!-- /.miniPopup-emergency -->
                                                      </li>
                                                      <li>
                                                            <i class="icon-phone"></i><a
                                                                  href="tel:+5565454117">Emergency Line: (002)
                                                                  01061245741</a>
                                                      </li>
                                                      <li>
                                                            <i class="icon-location"></i><a href="#">Location: Brooklyn,
                                                                  New York</a>
                                                      </li>
                                                      <li>
                                                            <i class="icon-clock"></i><a href="contact-us.html">Mon -
                                                                  Fri: 8:00 am - 7:00 pm</a>
                                                      </li>
                                                </ul><!-- /.contact__list -->
                                                <div class="d-flex">
                                                      <ul class="social-icons list-unstyled mb-0 mr-30">
                                                            <li><a href="#"><img
                                                                              src="https://cdn-icons-png.flaticon.com/512/145/145802.png"
                                                                              alt="facebook" class="socio_head"></a>
                                                            </li>
                                                            <li><a href="#"><img
                                                                              src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png"
                                                                              alt="instagram" class="socio_head"></a>
                                                            </li>
                                                            <li><a href="#"><img
                                                                              src="https://cdn-icons-png.flaticon.com/512/145/145807.png"
                                                                              alt="linkedin" class="socio_head"></a>
                                                            </li>
                                                            <li><a href="#"><img
                                                                              src="https://cdn-icons-png.flaticon.com/512/3670/3670151.png"
                                                                              alt="twitter" class="socio_head"></a></li>
                                                      </ul>

                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <nav class="navbar navbar-expand-lg sticky-navbar">
                        <div class="container-fluid">
                              <a class="navbar-brand" href="index.html">
                                    <img src="assets/images/logo/logo.png" class="logo-light w-55" alt="logo">
                                    <img src="assets/images/logo/logo.png" class="logo-dark w-55" alt="logo">
                              </a>
                              <button class="navbar-toggler" type="button">
                                    <span class="menu-lines"><span></span></span>
                              </button>
                              <div class="collapse navbar-collapse" id="mainNavigation">
                                    <ul class="navbar-nav ml-auto">
                                          <li class="nav__item has-dropdown">
                                                <a href="index.php" class=" nav__item-link active">Home</a>
                                                <!-- <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="index.html" class="nav__item-link">Home Main</a>
                  </li>
                  <li class="nav__item">
                    <a href="home-modern.html" class="nav__item-link">Home Modern</a>
                  </li>
                  <li class="nav__item">
                    <a href="home-classic.html" class="nav__item-link">Home Classic</a>
                  </li>
                  <li class="nav__item">
                    <a href="home-dentist.html" class="nav__item-link">Home Dentist</a>
                  </li>
                  <li class="nav__item">
                    <a href="home-pharmacy.html" class="nav__item-link">Home pharmacy</a>
                  </li>
                </ul> -->
                                          </li><!-- /.nav-item -->
                                          <li class="nav__item has-dropdown">
                                                <a href="about-us.php" class="dropdown-toggle nav__item-link">About
                                                      Us</a>
                                          </li><!-- /.nav-item -->
                                          <li class="nav__item has-dropdown">
                                                <a href="#" data-toggle="dropdown"
                                                      class="dropdown-toggle nav__item-link">Gallery</a>
                                                <ul class="dropdown-menu">
                                                      <li class="nav__item">
                                                            <a href="doctors-timetable.html"
                                                                  class="nav__item-link">Doctors Timetable</a>
                                                      </li> <!-- /.nav-item -->
                                                      <li class="nav__item">
                                                            <a href="doctors-standard.html" class="nav__item-link">Our
                                                                  Doctors Standard</a>
                                                      </li> <!-- /.nav-item -->
                                                      <li class="nav__item">
                                                            <a href="doctors-modern.html" class="nav__item-link">Our
                                                                  Doctors Modern</a>
                                                      </li> <!-- /.nav-item -->
                                                      <li class="nav__item">
                                                            <a href="doctors-grid.html" class="nav__item-link">Our
                                                                  Doctors Grid</a>
                                                      </li> <!-- /.nav-item -->
                                                      <li class="nav__item">
                                                            <a href="doctors-single-doctor1.html"
                                                                  class="nav__item-link">Single Doctor 01</a>
                                                      </li> <!-- /.nav-item -->
                                                      <li class="nav__item">
                                                            <a href="doctors-single-doctor2.html"
                                                                  class="nav__item-link">Single Doctor 02</a>
                                                      </li> <!-- /.nav-item -->
                                                </ul><!-- /.dropdown-menu -->
                                          </li><!-- /.nav-item -->
                                          <li class="nav__item">
                                                <a href="blog.php" class="nav__item-link">Blog</a>
                                          </li><!-- /.nav-item -->
                                          <li class="nav__item">
                                                <a href="services.php" class="nav__item-link">Services</a>
                                          </li><!-- /.nav-item -->
                                          <li class="nav__item">
                                                <a href="contact-us.php" class="nav__item-link">Contacts</a>
                                          </li><!-- /.nav-item -->
                                    </ul><!-- /.navbar-nav -->
                                    <button class="close-mobile-menu d-block d-lg-none"><i
                                                class="fas fa-times"></i></button>
                              </div><!-- /.navbar-collapse -->
                              <div class="d-none d-xl-flex align-items-center position-relative ml-30">
                                    <a href="contact-us.php" class="btn btn__primary btn__rounded ml-30">
                                          <i class="icon-calendar"></i>
                                          <span>Appointment</span>
                                    </a>
                              </div>
                        </div><!-- /.container -->
                  </nav><!-- /.navabr -->
            </header><!-- /.Header -->