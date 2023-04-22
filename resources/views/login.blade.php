@extends('layouts/app')
@section('main')
<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area parallax" data-speed="1" data-bg-img="{{ asset('/img/photos/bg3.jpg')}}">
        <div class="container pt--0 pb--0">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="page-header-content">
                        <h3 class="sub-title" data-aos="fade-down" data-aos-duration="800">Войти/Регистрация</h3>
                        <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Логин аккаунта</h2>
                        <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
                            <ul class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="breadcrumb-sep"> / </li>
                                <li>Account Login</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header-layer-style">
            <div class="layer-style mousemove-layer" data-speed=".7"><img src="{{ asset('/img/icons/2.png')}}" alt="Image-HasTech"></div>
            <div class="layer-style2 mousemove-layer" data-speed=".2"><img src="{{ asset('/img/icons/3.png')}}" alt="Image-HasTech"></div>
            <div class="layer-style3 mousemove-layer" data-speed=".5"><img src="{{ asset('/img/icons/4.png')}}" alt="Image-HasTech"></div>
            <div class="layer-style4 mousemove-layer" data-speed=".3"><img src="{{ asset('/img/icons/5.png')}}" alt="Image-HasTech"></div>
        </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start My Account Area Wrapper ==-->
    <section class="account-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <div class="section-title text-center">
                        <h2 class="title">Login</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="login-form-content">

                        <form method="POST" action="{{ url('user/authenticate') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                         <div style="color: red; font-size: 14px; font-weight: bold;">{{$errors->first('email')}}</div>
                                        <label for="username">Email <span class="required">*</span></label>
                                        <input id="username" name="email" value="{{ old('email') }}" class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div style="color: red; font-size: 14px; font-weight: bold;">{{$errors->first('password')}}</div>
                                        <label for="password">Пароль <span class="required">*</span></label>
                                        <input id="password" name="password" class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="btn-login" type="submit" value="Войти">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group account-info-group mb--0">
                                        <div class="rememberme-account">
                                            <div class="form-check">
                                                <input class="form-check-input" name="remember_me" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label"  for="defaultCheck1">Запомнить меня</label>
                                            </div>
                                        </div>
                                        <a class="lost-password" href="#/">Восстановить пароль</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End My Account Area Wrapper ==-->

    <!--== Start News Letter Area Wrapper ==-->
    <div class="newsletter-area bg-overlay bg-overlay-theme-color parallax" data-speed=".8" data-bg-img="assets/img/photos/bg2.jpg">
        <div class="container pt--0 pb--0">
            <div class="newsletter-content-wrap">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="newsletter-content">
                            <div class="section-title section-title-light mb--0">
                                <h5 class="sub-title">NEWSLETTER</h5>
                                <h2 class="title mb--0">Subscribe our Newsletter</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="newsletter-form">
                            <form>
                                <input type="email" class="form-control" placeholder="Enter Your email address">
                                <button class="btn-submit" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End News Letter Area Wrapper ==-->
</main>
@endsection