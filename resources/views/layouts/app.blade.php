<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="shortcut icon" href="{{ asset('/img/favicon.ico')}}" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Exo:300,400,400i,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shippori+Mincho:400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/headroom.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css//animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

     
    </head>
    <body>
 <div class="wrapper">

  <!--== Start Preloader Content ==-->
  <div class="preloader-wrap1">
    <div class="preloader">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!--== End Preloader Content ==-->   
  
    <header class="header-wrapper">
    <div class="header-top-area">
      <div class="header-top-align">
        <div class="header-top-align-left">
          <div class="header-logo-area">
            <a href="/">
              <img class="logo-main" src="{{ asset('/img/logo.png')}}" alt="Logo" />
              <img class="logo-light" src="{{ asset('/img/logo-light.png')}}" alt="Logo" />
            </a>
          </div>
        </div>
        <div class="header-top-align-right">
          <div class="header-info-items">
            <div class="info-items">
              <div class="inner-content">
                <div class="icon">
                  <img src="{{ asset('/img/icons/time1.png')}}" alt="Image-HasTech">
                </div>
                <div class="content">
                  <p>8 am to 6 pm (Mon - Fri)<br>10 am to 8 pm (Sat - Sun)</p>
                </div>
              </div>
            </div>
            <div class="info-items">
              <div class="inner-content">
                <div class="icon">
                  <img src="{{ asset('/img/icons/map.png')}}" alt="Image-HasTech">
                </div>
                <div class="content">
                  <p>258C, Saintpatrick, Main Street <br>Notrth Town, New York</p>
                </div>
              </div>
            </div>
          </div>
          <div class="header-appointment-button">
            <a class="appointment-btn" href="contact.html">Appointment</a>
          </div>
        </div>
      </div>
    </div>
    <div class="responsive-header-appointment-button">
      <a class="appointment-btn" href="contact.html">Appointment</a>
    </div>
    <div class="header-area sticky-header header-default">
      <div class="container">
        <div class="row no-gutter align-items-center position-relative">
          <div class="col-12">
            <div class="header-align">
              <div class="header-align-left">
                <button class="btn-menu" type="button"><i class="fa fa-align-left"></i></button>
                <div class="header-navigation-area">
                  <ul class="main-menu nav">
                    <li><a href="index.html"><span>Home</span></a></li>
                    <li class="has-submenu"><a href="#/"><span>Services</span></a>
                      <ul class="submenu-nav">
                        <li><a href="services.html">Services</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                      </ul>
                    </li>
                    <li class="has-submenu"><a href="#/"><span>Dentist</span></a>
                      <ul class="submenu-nav">
                        <li><a href="team.html">Dentist</a></li>
                        <li><a href="team-details.html">Dentist Details</a></li>
                      </ul>
                    </li>
                    <li class="has-submenu"><a href="#/"><span>Pages</span></a>
                      <ul class="submenu-nav">
                        <li class="has-submenu"><a href="#">About Us</a>
                          <ul class="submenu-nav">
                            <li><a href="about-us.html">About Us One</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="has-submenu"><a href="/blog"><span>Blog</span></a>
                      <ul class="submenu-nav submenu-nav-mega">
                        <li class="mega-menu-item"><a href="#/" class="mega-title">Blog Layout</a>
                          <ul>
                            <li><a href="blog.html">Blog Grid</a></li>
                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                          </ul>
                        </li>
                        <li class="mega-menu-item"><a href="#/" class="mega-title">Blog Single Layout</a>
                          <ul>
                            <li><a href="blog-details.html">Blog Details</a></li>
                            <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                            <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="contact.html"><span>Contact</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="header-align-right">
                  
                  @if(Auth::check())
                  <div class="header-action-area">
                       <span class="btn-login-menu"> Здравствуйте {{Auth::user()->name}} </span>
                         <a href="/logout"> (Выйти)</a>
                  </div>
                    @else
                     <div class="header-action-area">
                        <a class="btn-login-menu" href="/my-login">Вход</a>
                        <span>/</span>
                        <a class="btn-register-menu" href="/my-register">Регистрация</a>
                    </div>
                  @endif
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
        
        
         @yield('main')
         
           <!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area">
    <!--== Start Footer Main ==-->
    <div class="footer-main">
      <div class="container pt--0 pb--0">
        <div class="row no-gutter">
          <div class="col-sm-6 col-lg-3">
            <!--== Start widget Item ==-->
            <div class="widget-item">
              <div class="about-widget-wrap">
                <div class="widget-logo-area">
                  <a href="/">
                    <img class="logo-main" src="{{ asset('/img/logo-light.png')}}" alt="Logo" />
                  </a>
                </div>
                <p class="desc">Dental care is maintenance of healthy teeth and cleaning mouth for beautiful smile</p>
                <div class="social-icons">
                  <a href="#/"><i class="fa fa-facebook"></i></a>
                  <a href="#/"><i class="fa fa-instagram"></i></a>
                  <a href="#/"><i class="fa fa-twitter"></i></a>
                </div>
              </div>
            </div>
            <!--== End widget Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start widget Item ==-->
            <div class="widget-item widget-menu">
              <h4 class="widget-title">Our Services</h4>
              <div class="widget-menu-wrap">
                <ul class="nav-menu">
                  <li><a href="services.html">General Dentistry</a></li>
                  <li><a href="services.html">Oral Surgery</a></li>
                  <li><a href="services.html">Dental Bridge</a></li>
                  <li><a href="services.html">Root Canals</a></li>
                  <li><a href="services.html">Cosmetic Braces</a></li>
                  <li><a href="services.html">Pediatric Dentistry</a></li>
                </ul>
              </div>
            </div>
            <!--== End widget Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start widget Item ==-->
            <div class="widget-item widget-menu2">
              <h4 class="widget-title">Importance</h4>
              <div class="widget-menu-wrap">
                <ul class="nav-menu">
                  <li><a href="about-us.html">Abut us</a></li>
                  <li><a href="about-us.html">Comapay</a></li>
                  <li><a href="about-us.html">Terms & Conditions</a></li>
                  <li><a href="contact.html">24/7 Advance Care</a></li>
                  <li><a href="services.html">Emergency Centre</a></li>
                  <li><a href="contact.html">Payment System</a></li>
                </ul>
              </div>
            </div>
            <!--== End widget Item ==-->
          </div>
          <div class="col-sm-6 col-lg-3">
            <!--== Start widget Item ==-->
            <div class="widget-item widget-contact">
              <h4 class="widget-title">Contact us</h4>
              <div class="widget-contact-wrap">
                <ul>
                  <li>256B, West Site House Main Town, New York</li>
                  <li><a href="tel:+98745612301">+98745 612 301</a><br><a href="tel:+95874102201">+95874 102 201</a></li>
                  <li><a href="mailto:info@example.com">info@example.com</a><br><a href="mailto:www.predent.com">www.predent.com</a></li>
                </ul>
              </div>
            </div>
            <!--== End widget Item ==-->
          </div>
        </div>
      </div>
    </div>
    <!--== End Footer Main ==-->

    <!--== Start Footer Bottom ==-->
    <div class="footer-bottom">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <p class="copyright">© 2021 Made with <i class="fa fa-heart"></i> by <a target="_blank" href="https://www.hasthemes.com"> HasThemes</a></p>
          </div>
        </div>
      </div>
    </div>
    <!--== End Footer Bottom ==-->
  </footer>
  <!--== End Footer Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div id="scroll-to-top" class="scroll-to-top"><span class="fa fa-angle-up"></span></div>

  <!--== Start Side Menu ==-->
  <aside class="off-canvas-wrapper">
    <div class="off-canvas-inner">
      <div class="off-canvas-overlay"></div>
      <!-- Start Off Canvas Content Wrapper -->
      <div class="off-canvas-content">
        <!-- Off Canvas Header -->
        <div class="off-canvas-header">
          <div class="close-action">
            <button class="btn-menu-close">menu <i class="fa fa-chevron-left"></i></button>
          </div>
        </div>

        <div class="off-canvas-item">
          <!-- Start Mobile Menu Wrapper -->
          <div class="res-mobile-menu menu-active-one">
            <!-- Note Content Auto Generate By Jquery From Main Menu -->
          </div>
          <!-- End Mobile Menu Wrapper -->
        </div>
      </div>
      <!-- End Off Canvas Content Wrapper -->
    </div>
  </aside>
  <!--== End Side Menu ==-->


<!--=======================Javascript============================-->
       
</div>
        
<script src="{{ asset('/js/modernizr.js') }}"></script>
<script src="{{ asset('/js/jquery-main.js') }}"></script>
<script src="{{ asset('/js/jquery-migrate.js') }}"></script>
<script src="{{ asset('/js/popper.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/jquery.appear.js') }}"></script>
<script src="{{ asset('/js/headroom.min.js') }}"></script>
<script src="{{ asset('/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('/js/some-custom.js') }}"></script>
<script src="{{ asset('/js/swiper.min.js') }}"></script>
<script src="{{ asset('/js/fancybox.min.js') }}"></script>
<script src="{{ asset('/js/slicknav.js') }}"></script>
<script src="{{ asset('/js/waypoint.js') }}"></script>
<script src="{{ asset('/js/parallax.min.js') }}"></script>
<script src="{{ asset('/js/aos.min.js') }}"></script>
<script src="{{ asset('/js/counterup.js') }}"></script>
<script src="{{ asset('/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('/js/custom.js') }}"></script>
    </body>
</html>
