@extends('layouts/app')
@section('main')

  <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area parallax" data-speed="1" data-bg-img="{{ asset('/img/photos/bg3.jpg')}}">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12 text-center">
            <div class="page-header-content">
              <h3 class="sub-title" data-aos="fade-down" data-aos-duration="800">OUR BLOG</h3>
              <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Blog Details</h2>
              <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
                <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="breadcrumb-sep"> / </li>
                  <li><a href="team.html">Blog</a></li>
                  <li class="breadcrumb-sep"> / </li>
                  <li>Details</li>
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

    <!--== Start Blog Details Area Wrapper ==-->
    <section class="blog-details-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-0 order-lg-2">
            <div class="blog-details-item">
              <div class="inner-content">
                <div class="thumb">
                  <img src="{{ asset('/img/blog/details.jpg')}}" alt="Image-HasTech">
                </div>
                <div class="content">
                  <ul class="meta">
                    <li class="post-time"><a href="blog.html">{{$post->reading_time}}</a></li>
                    <li class="post-sep"> - </li>
                    <li class="post-comment"><a href="blog.html">25 Comments</a></li>
                  </ul>
                  <h2 class="title">{{$post->title}}</h2>
                  <div class="author-info">
                    <a class="author-name" href="blog.html">
                      <img src="{{ asset('/img/blog/author10.png')}}" alt="Image-HasTech">
                      <span class="name">{{$post->user->name}}</span>
                    </a>
                    <a class="post-date" href="blog.html">
                      <span class="date">20 April, 2021</span>
                    </a>
                  </div>
                  
                  
                  <p>{{$post->description}}</p>
                  
                  
                  
                  
                  <p>Dental care is the maintenance of healthy teeth and the practice of keeping mouth and teeth clean pur sue pleasure rationally encounter consequences that are extre painful. Nor again is there anyone pursue pleasure rationally encounter</p>
                  <div class="blog-details-footer">
                    <div class="social-icons">
                      <span>Share -</span>
                      <a href="#/"><i class="fa fa-facebook"></i></a>
                      <a href="#/"><i class="fa fa-instagram"></i></a>
                      <a href="#/"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="tag-conent">
                      <span>Tags -</span>
                      <a href="#/">Dental,</a>
                      <a href="#/">Dentist,</a>
                      <a href="#/">Medical</a>
                    </div>
                  </div>
                </div>

                <!--== Start Comment View Item ==-->
                <div class="comment-view-area">
                  <h4 class="title-main">Комментарии ({{$post->comments_count}})</h4>
                  <div class="comment-view-content">
                      
                     @include('comments', ['comments' => $comments])         

                  </div>
                </div>
                <!--== End Comment View Item ==-->

                <!--== Start Comment Item ==-->
                <div class="comment-form-area">
                  <h4 class="title-main">Leave a Reply</h4>
                  <div class="comment-form-content">
                    <form action="#">
                      <div class="row row-gutter-23">
                        <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Enter your name *">
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                          <div class="form-group">
                            <input class="form-control" type="email" placeholder="Email address *">
                          </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Phone">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group mb--0">
                            <textarea class="form-control" placeholder="Content"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group mb--0">
                            <button type="submit" class="btn-submit">Post Comment</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!--== End Comment Item ==-->
              </div>
            </div>
          </div>
          <div class="col-lg-4 order-2 order-md-1">
            <!--== Start Sidebar Wrapper ==-->
            <div class="sidebar-wrapper sidebar-right-margin">
              <!--== Start Sidebar Item ==-->
              <div class="sidebar-item" data-bg-img="{{ asset('/img/photos/sidebar1.jpg')}}">
                <h4 class="sidebar-title">Search</h4>
                <div class="sidebar-body">
                  <div class="sidebar-search-form">
                    <form action="#">
                      <div class="form-group">
                        <input class="form-control" type="text" placeholder="Keywords">
                        <button type="submit" class="btn-src"><i class="fa fa-search"></i></button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="sidebar-item category-sidebar-item" data-bg-img="{{ asset('/img/photos/sidebar2.jpg')}}">
                <h4 class="sidebar-title">Categories</h4>
                <div class="sidebar-body">
                  <div class="sidebar-category-sub-menu">
                    <ul>
                      <li><a href="services.html">General Dentistry <span>(35)</span></a></li>
                      <li><a href="services.html">Cosmetic Braces <span>(25)</span></a></li>
                      <li><a href="services.html">Dental Bridge <span>(18)</span></a></li>
                      <li><a href="services.html">Root Canals <span>(10)</span></a></li>
                      <li><a href="services.html">Oral Surgery <span>(39)</span></a></li>
                      <li><a href="services.html">Pediatric Dentistry <span>(42)</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="sidebar-item offer-sidebar-item">
                <div class="sidebar-body">
                  <div class="sidebar-offer-thumb">
                    <a href="contact.html"><img src="{{ asset('/img/photos/offers.jpg')}}" alt="Image-HasTech"></a>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="sidebar-item recent-post-sidebar-item" data-bg-img="{{ asset('/img/photos/sidebar3.jpg')}}">
                <h4 class="sidebar-title">Recent Post</h4>
                <div class="sidebar-body">
                  <!--== Start Blog Item ==-->
                  <div class="sidebar-post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="blog-details.html"><img src="{{ asset('/img/blog/small1.jpg')}}" alt="Image-HasTech"></a>
                      </div>
                      <div class="content">
                        <ul class="meta">
                          <li><a class="date" href="blog.html">20 April, 2021</a></li>
                        </ul>
                        <h4 class="title"><a href="blog-details.html">Dental Braces Treatment</a></h4>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->

                  <!--== Start Blog Item ==-->
                  <div class="sidebar-post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="blog-details.html"><img src="{{ asset('/img/blog/small2.jpg')}}" alt="Image-HasTech"></a>
                      </div>
                      <div class="content">
                        <ul class="meta">
                          <li><a class="date" href="blog.html">18 April, 2021</a></li>
                        </ul>
                        <h4 class="title"><a href="blog-details.html">Dental Cosmetic Treatment</a></h4>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->

                  <!--== Start Blog Item ==-->
                  <div class="sidebar-post-item">
                    <div class="inner-content">
                      <div class="thumb">
                        <a href="blog-details.html"><img src="{{ asset('/img/blog/small3.jpg')}}" alt="Image-HasTech"></a>
                      </div>
                      <div class="content">
                        <ul class="meta">
                          <li><a class="date" href="blog.html">15 April, 2021</a></li>
                        </ul>
                        <h4 class="title"><a href="blog-details.html">Protect your by Checkup</a></h4>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Item ==-->
                </div>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="sidebar-item sidebar-tag-item mb--0" data-bg-img="{{ asset('/img/photos/sidebar4.jpg')}}">
                <h4 class="sidebar-title">Tags</h4>
                <div class="sidebar-body">
                  <div class="sidebar-tag-items">
                    <a href="services.html">Dental</a>
                    <a href="services.html">Root Canals</a>
                    <a href="services.html">Whitening</a>
                    <a href="services.html">Cosmetic</a>
                    <a href="services.html">Cavity</a>
                    <a href="services.html">Orthodontist</a>
                    <a href="services.html">Dentist</a>
                    <a href="services.html">Healthcare</a>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->
            </div>
            <!--== End Sidebar Wrapper ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Blog Details Area Wrapper ==-->

    <!--== Start Brand Logo Area Wrapper ==-->
    <div class="brand-logo-area brand-logo-service-area">
      <div class="container pt--0">
        <div class="brand-logo-content">
          <div class="row">
            <div class="col-12">
              <div class="swiper-container brand-logo-slider-container">
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
    <section class="newsletter-area bg-overlay bg-overlay-theme-color parallax" data-aos="fade-up" data-speed=".8" data-bg-img="{{ asset('/img/photos/bg2.jpg')}}">
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
    </section>
    <!--== End News Letter Area Wrapper ==-->
  </main>

@endsection