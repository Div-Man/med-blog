
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
    <link rel="stylesheet" href="{{ asset('/css/my-style.css') }}">

     
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
                  <p>с 8:00 до 18:00 (пн - пт)<br>с 10:00 до 20:00 (сб-вс)</p>
                </div>
              </div>
            </div>
            <div class="info-items">
              <div class="inner-content">
                <div class="icon">
                  <img src="{{ asset('/img/icons/map.png')}}" alt="Image-HasTech">
                </div>
                <div class="content">
                  <p>258C, Сентпатрик, Мейн-стрит <br>Северный город, Нью-Йорк</p>
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
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
                    <li><a href="/"><span>Главная</span></a></li>
                    <li class="has-submenu"><a href="/blog"><span>Блог</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="header-align-right">
                  
                  @if(Auth::check())
                  <div class="header-action-area">
                      <span class="btn-login-menu">{{Auth::user()->name}} </span>
                      <a href="/logout"> (Выйти) </a>
                      <span>&nbsp;</span>
                      <a href="/post/create"><span> Добавить пост</span></a>
                      
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
                <p class="desc">Стоматологическая помощь – это поддержание здоровых зубов и чистка полости рта для красивой улыбки.</p>
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
              <h4 class="widget-title">Наши услуги</h4>
              <div class="widget-menu-wrap">
                <ul class="nav-menu">
                  <li>Общая стоматология</li>
                  <li>Челюстно-лицевая хирургия</li>
                  <li>Стоматологический мост</li>
                  <li>Корневые каналы</li>
                  <li>Косметические брекеты</li>
                  <li>Детская стоматология</li>
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
