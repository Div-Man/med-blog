@extends('layouts.app')
    
  @section('main')
  
  <main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area">
      <div class="swiper-container home-slider-container default-slider-container">
        <div class="swiper-wrapper home-slider-wrapper slider-default">
          <div class="swiper-slide">
            <div class="slider-content-area parallax" data-speed="1.2" data-bg-img="{{ asset('/img/slider/bg-slider-01.jpg')}}">
              <div class="slider-container">
                <div class="slider-content">
                  <div class="content">
                    <div class="sub-title-box">
                      <h4 class="sub-title">СТОМАТОЛОГИЧЕСКАЯ ПОМОЩЬ</h4>
                    </div>
                    <div class="title-box">
                      <h2 class="title">Всегда улыбайся, как мерцание</h2>
                    </div>
                    <div class="desc-box">
                      <p class="desc">Стоматологическая помощь – это поддержание здоровых зубов и соблюдение чистоты полости рта и зубов.</p>
                    </div>
                    <div class="btn-slider-box">
                      <a class="btn-slider" href="#">Связаться с нами</a>
                    </div>
                  </div>
                </div>
                <div class="slider-thumb">
                  <div class="thumb">
                    <div class="shape1"><img src="{{ asset('/img/slider/slider-01.png')}}" alt="Image-HasTech"></div>
                    <div class="shape2" data-bg-img="{{ asset('/img/icons/1.png')}}"></div>
                    <div class="shape3" data-bg-img="{{ asset('/img/shape/3.png')}}"></div>
                    <div class="shape4"><img src="{{ asset('/img/shape/4.png')}}" alt="Image-HasTech"></div>
                    <div class="offer-info">
                      <div class="offer-info-content">
                        <h4 class="title">offer</h4>
                        <h3 class="offer-number">35%</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Service List Area Wrapper ==-->
    <section class="service-list-area service-list-default-area">
      <div class="container pb--0">
        <div class="row">
          <div class="col-12">
            <div class="service-list-content-wrap">
              <div class="grid-item">
                <!--== Start Service List Item ==-->
                <div class="service-list-item" data-aos="fade-up">
                  <div class="icon-box">
                    <img src="{{ asset('/img/icons/fun1.png')}}" alt="Image-HasTech">
                  </div>
                  <div class="content">
                    <h2 class="price-number"><span>$</span><span class="counter" data-counterup-delay="30">65</span></h2>
                    <h6 class="title">Зубной имплантат</h6>
                  </div>
                </div>
                <!--== End Service List Item ==-->
              </div>
              <div class="grid-item">
                <!--== Start Service List Item ==-->
                <div class="service-list-item" data-aos="fade-up">
                  <div class="icon-box">
                    <img src="{{ asset('/img/icons/fun2.png')}}" alt="Image-HasTech">
                  </div>
                  <div class="content">
                    <h2 class="price-number"><span>$</span><span class="counter" data-counterup-delay="30">135</span></h2>
                    <h6 class="title">Отбеливание зубов</h6>
                  </div>
                </div>
                <!--== End Service List Item ==-->
              </div>
              <div class="grid-item">
                <!--== Start Service List Item ==-->
                <div class="service-list-item" data-aos="fade-up">
                  <div class="icon-box">
                    <img src="{{ asset('/img/icons/fun3.png')}}" alt="Image-HasTech">
                  </div>
                  <div class="content">
                    <h2 class="price-number"><span>$</span><span class="counter" data-counterup-delay="30">230</span></h2>
                    <h6 class="title">Стоматологическая корона</h6>
                  </div>
                </div>
                <!--== End Service List Item ==-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Service List Area Wrapper ==-->

    <!--== Start About Area Wrapper ==-->
    <section class="about-area about-default-area">
      <div class="container pb--0">
        <div class="about-content-wrap">
          <div class="row">
            <div class="col-md-6">
              <div class="about-thumb">
                <img  data-aos="fade-right" src="{{ asset('/img/photos/about1.png')}}" alt="Image-HasTech">
                <div class="shape-one layer-style mousemove-layer" data-speed="2.2"><img src="{{ asset('/img/shape/1.png')}}" alt="Image-HasTech"></div>
                <div class="shape-two layer-style mousemove-layer" data-speed="1.2"><img src="{{ asset('/img/shape/2.png')}}" alt="Image-HasTech"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="about-content" data-aos="fade-up">
                <div class="section-title mb--0">
                  <h5 class="sub-title">НАУКА 2005</h5>
                  <h2 class="title">Держите <span>зубы чистыми</span> и сияющими</h2>
                  <div class="desc">
                    <p>Уход за зубами — это поддержание здоровых зубов, а практика содержания полости рта и зубов 
                        в чистоте ради удовольствия рационально приводит к крайне болезненным последствиям. И снова нет никого.</p>
                  </div>
                </div>
                <h4 class="note-info">Чтобы зубы были здоровыми и улыбались, нужно чистить зубы каждый день.</h4>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End About Area Wrapper ==-->

    <!--== Start Divider Area Wrapper ==-->
    <div class="divider-area position-relative z-index-1">
      <div class="container pt--0 pb--0">
        <div class="row divider-style-wrap">
          <div class="col-md-5">
            <div class="divider-content">
              <div class="section-title mb--0">
                <h5 class="sub-title">НАШИ СЕРВИСЫ</h5>
                <h2 class="title mb--0">Лучшие <span>услуги для</span> ваших зубов</h2>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="divider-content justify-content-end">
              <div class="emergency-call-info">
                <div class="content">
                  <h4 class="title">Позвоните нам для бронирования</h4>
                  <h3 class="number">+12345 698 741</h3>
                </div>
                <div class="icon-box">
                  <img class="icon-img" src="{{ asset('/img/icons/booking1.png')}}" alt="Image-HasTech">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-layer-style parallax" data-speed=".8" data-bg-img="{{ asset('/img/photos/bg1.jpg')}}"></div>
    </div>
    <!--== End Divider Area Wrapper ==-->

    <!--== Start Services Area Wrapper ==-->
    
    

    <!--== End Services Area Wrapper ==-->

    <!--== Start Divider Area Wrapper ==-->
 
    <!--== End Divider Area Wrapper ==-->

    <!--== Star Appointment Area Wrapper ==-->

    <!--== End Appointment Area Wrapper ==-->

    <!--== Start Testimonial Area Wrapper ==-->

    <!--== End Testimonial Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area blog-default-area">
      <div class="container pt--0">
        <div class="row">
          <div class="col-lg-5 m-auto">
            <div class="section-title text-center" data-aos="fade-up">
              <h5 class="sub-title">Наш блог</h5>
              <h2 class="title mb--0"><span>Последние</span> посты <span>из наших</span> блогов</h2>
            </div>
          </div>
        </div>
        <div class="row">
            
            
            
            
           @foreach($posts as $post) 
          <div class="col-sm-6 col-lg-4">
            <!--== Start Blog Item ==-->
            <div class="post-item" data-aos="fade-up">
              <div class="inner-content">
                <div class="thumb">
                   <a href="/blog/post/{{ $post->id}}"><img width="400px" height="400px" src="{{ asset($post->img)}}" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <ul class="meta">
                     <li class="post-comment"><a href="blog.html">{{$post->comments_count}} комментариев</a></li>
                  </ul>
                   <h4 class="title"><a href="/blog/post/{{ $post->id}}">{{$post->title}}</a></h4>
                  <div class="footer-content">
                    <div class="author-info">
                      <a href="blog-details.html">
                        <img src="{{ asset('/img/blog/author1.png')}}" alt="Image-HasTech">
                        <span class="name"><strong>{{$post->user->name}}</strong> <br>{{ Carbon\Carbon::parse($post->created_at)->format('d.m.Y')}}</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--== End Blog Item ==-->
          </div>
           @endforeach
            
        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->

    <!--== Start Brand Logo Area Wrapper ==-->
    <div class="brand-logo-area brand-logo-default-area">
      <div class="container pt--0">
        <div class="brand-logo-content">
          <div class="row">
            <div class="col-12">
              <div class="swiper-container brand-logo-slider-container" data-aos="fade-up">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="{{ asset('/img/brand-logo/1.png')}}" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="{{ asset('/img/brand-logo/2.png')}}" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="{{ asset('/img/brand-logo/3.png')}}" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="{{ asset('/img/brand-logo/4.png')}}" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Brand Logo Item ==-->
                    <div class="brand-logo-item">
                      <img src="{{ asset('/img/brand-logo/5.png')}}" alt="Image-HasTech">
                    </div>
                    <!--== End Brand Logo Item ==-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Brand Logo Area Wrapper ==-->

    <!--== Start News Letter Area Wrapper ==-->

    <!--== End News Letter Area Wrapper ==-->
  </main>


@endsection

