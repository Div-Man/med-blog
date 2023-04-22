@extends('layouts/app')
    
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
                      <a class="btn-slider" href="contact.html">Связаться с нами</a>
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
                    <h6 class="title">Dental Implant</h6>
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
                    <h6 class="title">Teets Whitening</h6>
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
                    <h6 class="title">Dental Crown</h6>
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
                  <h5 class="sub-title">SCIENCE 2005</h5>
                  <h2 class="title">Keep your <span>Teeth Clean</span> & Shine</h2>
                  <div class="desc">
                    <p>Dental care is the maintenance of healthy teeth and the practice of keeping the mouth and teeth clean pur sue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone</p>
                  </div>
                </div>
                <h4 class="note-info">You need to brush your teeth everyday for healty teeth and simle</h4>
                <div class="about-content-bottom-info">
                  <a class="about-btn-link" href="contact.html">Book now</a>
                  <div class="video-content-wrap">
                    <a class="ht-popup-video video-popup" href="https://player.vimeo.com/video/172601404?autoplay=1">
                      <img class="icon-img" src="{{ asset('/img/icons/play1.png')}}" alt="Image-HasTech">
                      <span>Video tour</span>
                    </a>
                  </div>
                </div>
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
                <h5 class="sub-title">OUR SERVICES</h5>
                <h2 class="title mb--0">Better <span>Services for</span> your Teeth</h2>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="divider-content justify-content-end">
              <div class="emergency-call-info">
                <div class="content">
                  <h4 class="title">Call us for Booking</h4>
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
    <section class="service-area service-default-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-4">
            <!--== Start Services Box Item ==-->
            <div class="service-box service-box1" data-aos="fade-up">
              <div class="inner-content">
                <div class="icon">
                  <img src="{{ asset('/img/icons/s1.png')}}" alt="Image-HasTech">
                </div>
                <div class="content">
                  <h4 class="title"><a href="service-details.html">General Dentistry</a></h4>
                  <p>Dental care is the maintenance teeth the practice of keeping mouth clean sue pleasure rationally encounter</p>
                  <a class="service-btn" href="service-details.html">Learn more</a>
                </div>
              </div>
            </div>
            <!--== End Services Box Item ==-->
          </div>
          <div class="col-sm-6 col-lg-4">
            <!--== Start Services Box Item ==-->
            <div class="service-box service-box2" data-aos="fade-up">
              <div class="inner-content">
                <div class="icon">
                  <img src="{{ asset('/img/icons/s2.png')}}" alt="Image-HasTech">
                </div>
                <div class="content">
                  <h4 class="title"><a href="service-details.html">Cosmetic Braces</a></h4>
                  <p>Dental care is the maintenance teeth the practice of keeping mouth clean sue pleasure rationally encounter</p>
                  <a class="service-btn" href="service-details.html">Learn more</a>
                </div>
              </div>
            </div>
            <!--== End Services Box Item ==-->
          </div>
          <div class="col-sm-6 col-lg-4">
            <!--== Start Services Box Item ==-->
            <div class="service-box service-box3" data-aos="fade-up">
              <div class="inner-content">
                <div class="icon">
                  <img src="{{ asset('/img/icons/s3.png')}}" alt="Image-HasTech">
                </div>
                <div class="content">
                  <h4 class="title"><a href="service-details.html">Prediatic Dentistry</a></h4>
                  <p>Dental care is the maintenance teeth the practice of keeping mouth clean sue pleasure rationally encounter</p>
                  <a class="service-btn" href="service-details.html">Learn more</a>
                </div>
              </div>
            </div>
            <!--== End Services Box Item ==-->
          </div>
          <div class="col-sm-6 col-lg-4">
            <!--== Start Services Box Item ==-->
            <div class="service-box service-box4" data-aos="fade-up" data-aos-delay="100">
              <div class="inner-content">
                <div class="icon">
                  <img src="{{ asset('/img/icons/s4.png')}}" alt="Image-HasTech">
                </div>
                <div class="content">
                  <h4 class="title"><a href="service-details.html">Dental Bridge</a></h4>
                  <p>Dental care is the maintenance teeth the practice of keeping mouth clean sue pleasure rationally encounter</p>
                  <a class="service-btn" href="service-details.html">Learn more</a>
                </div>
              </div>
            </div>
            <!--== End Services Box Item ==-->
          </div>
          <div class="col-sm-6 col-lg-4">
            <!--== Start Services Box Item ==-->
            <div class="service-box service-box5" data-aos="fade-up" data-aos-delay="100">
              <div class="inner-content">
                <div class="icon">
                  <img src="{{ asset('/img/icons/s5.png')}}" alt="Image-HasTech">
                </div>
                <div class="content">
                  <h4 class="title"><a href="service-details.html">Oral Surgery</a></h4>
                  <p>Dental care is the maintenance teeth the practice of keeping mouth clean sue pleasure rationally encounter</p>
                  <a class="service-btn" href="service-details.html">Learn more</a>
                </div>
              </div>
            </div>
            <!--== End Services Box Item ==-->
          </div>
          <div class="col-sm-6 col-lg-4">
            <!--== Start Services Box Item ==-->
            <div class="service-box service-box6" data-aos="fade-up" data-aos-delay="100">
              <div class="inner-content">
                <div class="icon">
                  <img src="{{ asset('/img/icons/s6.png')}}" alt="Image-HasTech">
                </div>
                <div class="content">
                  <h4 class="title"><a href="service-details.html">Root Canals</a></h4>
                  <p>Dental care is the maintenance teeth the practice of keeping mouth clean sue pleasure rationally encounter</p>
                  <a class="service-btn" href="service-details.html">Learn more</a>
                </div>
              </div>
            </div>
            <!--== End Services Box Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Services Area Wrapper ==-->

    <!--== Start Divider Area Wrapper ==-->
    <div class="divider-area">
      <div class="container pt--0 pb--0">
        <div class="row divider-style2-wrap">
          <div class="col-lg-7">
            <div class="divider-thumb">
              <div class="row">
                <div class="col-12">
                  <div class="swiper-container feature-slider-container" data-aos="fade-right">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="slider-thumb-area">
                          <div class="thumb">
                            <img src="{{ asset('/img/photos/fea1.jpg')}}" alt="Image-HasTech">
                          </div>
                          <div class="shape1"></div>
                          <div class="shape2"></div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="slider-thumb-area">
                          <div class="thumb">
                            <img src="{{ asset('/img/photos/fea2.jpg')}}" alt="Image-HasTech">
                          </div>
                          <div class="shape1"></div>
                          <div class="shape2"></div>
                        </div>
                      </div>
                    </div>

                    <!--== Add Swiper Arrows ==-->
                    <div class="swiper-btn-wrap">
                      <div class="swiper-btn-prev"><i class="fa fa-angle-left"></i></div>
                      <div class="swiper-btn-next"><i class="fa fa-angle-right"></i></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="divider-content" data-aos="fade-up">
              <div class="section-title mb--0 position-relative">
                <h5 class="sub-title">WHY WE BEST</h5>
                <h2 class="title">People <span>Choose Us</span> because...</h2>
                <div class="desc">
                  <p>Dental care is the maintenance of healthy teeth and the practice of keeping the teeth clean </p>
                </div>
                <div class="section-title-shape"></div>
              </div>
              <div class="feature-box-wrap">
                <!--== Start Feature Item ==-->
                <div class="feature-box">
                  <div class="inner-content">
                    <div class="icon">
                      <img class="icon-img" src="{{ asset('/img/icons/f1.png')}}" alt="Image-HasTech">
                    </div>
                    <div class="content">
                      <h4 class="title">Expert Dentist</h4>
                      <p>Dental care is the maintenance of healthy teeth and smile</p>
                    </div>
                  </div>
                </div>
                <!--== End Feature Item ==-->

                <!--== Start Feature Item ==-->
                <div class="feature-box">
                  <div class="inner-content">
                    <div class="icon">
                      <img class="icon-img" src="{{ asset('/img/icons/f2.png')}}" alt="Image-HasTech">
                    </div>
                    <div class="content">
                      <h4 class="title">24/7 Advance Care</h4>
                      <p>Dental care is the maintenance of healthy teeth and smile</p>
                    </div>
                  </div>
                </div>
                <!--== End Feature Item ==-->

                <!--== Start Feature Item ==-->
                <div class="feature-box">
                  <div class="inner-content">
                    <div class="icon">
                      <img class="icon-img" src="{{ asset('/img/icons/f3.png')}}" alt="Image-HasTech">
                    </div>
                    <div class="content">
                      <h4 class="title">Available Products</h4>
                      <p>Dental care is the maintenance of healthy teeth and smile</p>
                    </div>
                  </div>
                </div>
                <!--== End Feature Item ==-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Divider Area Wrapper ==-->

    <!--== Star Appointment Area Wrapper ==-->
    <section class="appointment-area appointment-default-area">
      <div class="container" data-aos="fade-up">
        <div class="row no-gutter">
          <div class="col-lg-8">
            <div class="appointment-form-wrap">
              <div class="column-left" data-bg-img="{{ asset('/img/photos/bg-con1.jpg')}}">
                <!--== Start Contact Form ==-->
                <div class="appointment-form">
                  <div class="section-title text-center">
                    <h5 class="sub-title">APPOINTMENT</h5>
                    <h2 class="title mb--0">Book your <span>Dentist</span> for <span>Proper</span> Care</h2>
                  </div>
                  <form id="contact-form" action="https://whizthemes.com/mail-php/raju/arden/mail.php" method="POST">
                    <div class="row row-gutter-30">
                      <div class="col-md-6">
                        <div class="form-group">
                          <select class="form-control form-select" aria-label="service select example">
                            <option selected>Root Canals</option>
                            <option value="1">Scaling</option>
                            <option value="2">Flavor</option>
                            <option value="3">Crown</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select class="form-control form-select" aria-label="doctor name select example">
                            <option selected>Doctor</option>
                            <option value="1">Julia</option>
                            <option value="2">Thomas</option>
                            <option value="3">Rebeca</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input class="form-control" type="text" name="con_name" placeholder="Name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input class="form-control" type="email" name="con_email" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input class="form-control" type="text" name="con_phone" placeholder="Phone">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input class="form-control form-date" type="text" id="datepicker" placeholder="Date">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input class="form-control form-time timepicker" type="text" placeholder="Time">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group text-center mb--0">
                          <button class="btn-theme" type="submit">Записаться</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <!--== End Contact Form ==-->

                <!--== Message Notification ==-->
                <div class="form-message"></div>
              </div>
              <div class="column-right">
                <div class="thumb parallax" data-speed="1" data-bg-img="{{ asset('/img/photos/bg-con2.jpg')}}"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Appointment Area Wrapper ==-->

    <!--== Start Testimonial Area Wrapper ==-->
    <section class="testimonial-area testimonial-default-area">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-6">
            <div class="testi-slider-content">
              <div class="section-title">
                <h5 class="sub-title">TESTIMONIALS</h5>
                <h2 class="title">Happy <span>Patients</span> with <span>Satisfaction</span> words</h2>
              </div>
              <div class="swiper-container testimonial-top">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <!--== Start Testimonial Item ==-->
                    <div class="testimonial-item">
                      <div class="testi-inner-content">
                        <div class="testi-content">
                          <p>“Dental care is the maintenance of healthy teeth and the practice of keeping the mouth and teeth clean pur sue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone”</p>
                        </div>
                        <div class="testi-author">
                          <div class="testi-info">
                            <span class="name">Albert Rusho</span>
                            <span class="designation"> (Root Canals)</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End Testimonial Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Testimonial Item ==-->
                    <div class="testimonial-item">
                      <div class="testi-inner-content">
                        <div class="testi-content">
                          <p>“Dental care is the maintenance of healthy teeth and the practice of keeping the mouth and teeth clean pur sue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone”</p>
                        </div>
                        <div class="testi-author">
                          <div class="testi-info">
                            <span class="name">David Costa</span>
                            <span class="designation"> (Root Canals)</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End Testimonial Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Testimonial Item ==-->
                    <div class="testimonial-item">
                      <div class="testi-inner-content">
                        <div class="testi-content">
                          <p>“Dental care is the maintenance of healthy teeth and the practice of keeping the mouth and teeth clean pur sue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone”</p>
                        </div>
                        <div class="testi-author">
                          <div class="testi-info">
                            <span class="name">Julia Smith</span>
                            <span class="designation"> (Root Canals)</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--== End Testimonial Item ==-->
                  </div>
                </div>

                <!--== Add Swiper Arrows ==-->
                <div class="swiper-btn-wrap">
                  <div class="swiper-btn-prev"><i class="fa fa-long-arrow-left"></i><span>prev</span></div>
                  <div class="swiper-btn-next"><span>next</span><i class="fa fa-long-arrow-right"></i></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="testi-slider-thumb">
              <div class="swiper-container testimonial-thumbs">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <!--== Start Testimonial Item ==-->
                    <div class="testimonial-item">
                      <div class="testi-inner-thumb">
                        <div class="testi-thumb">
                          <img src="{{ asset('/img/testimonial/1.png')}}" alt="Image-HasTech">
                          <div class="quote-icon">
                            <img src="{{ asset('/img/icons/quote.png')}}" alt="Image-HasTech">
                          </div>
                          <div class="shape"></div>
                        </div>
                      </div>
                    </div>
                    <!--== End Testimonial Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Testimonial Item ==-->
                    <div class="testimonial-item">
                      <div class="testi-inner-thumb">
                        <div class="testi-thumb">
                          <img src="{{ asset('/img/testimonial/2.png')}}" alt="Image-HasTech">
                          <div class="quote-icon">
                            <img src="{{ asset('/img/icons/quote.png')}}" alt="Image-HasTech">
                          </div>
                          <div class="shape"></div>
                        </div>
                      </div>
                    </div>
                    <!--== End Testimonial Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Testimonial Item ==-->
                    <div class="testimonial-item">
                      <div class="testi-inner-thumb">
                        <div class="testi-thumb">
                          <img src="{{ asset('/img/testimonial/3.png')}}" alt="Image-HasTech">
                          <div class="quote-icon">
                            <img src="{{ asset('/img/icons/quote.png')}}" alt="Image-HasTech">
                          </div>
                          <div class="shape"></div>
                        </div>
                      </div>
                    </div>
                    <!--== End Testimonial Item ==-->
                  </div>
                </div>
              </div>
              <div class="testi-thumb-shape" ><img src="{{ asset('/img/testimonial/s1.png')}}" alt="Image-HasTech"></div>
              <div class="testi-thumb-shape2"><img src="{{ asset('/img/testimonial/s2.png')}}" alt="Image-HasTech"></div>
              <div class="testi-thumb-shape3"></div>
              <div class="testi-thumb-shape4"></div>
              <div class="testi-thumb-shape5"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Testimonial Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area blog-default-area">
      <div class="container pt--0">
        <div class="row">
          <div class="col-lg-5 m-auto">
            <div class="section-title text-center" data-aos="fade-up">
              <h5 class="sub-title">OUR BLOG</h5>
              <h2 class="title mb--0">Latest <span>Post</span> from <span>our</span> Blogs</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4">
            <!--== Start Blog Item ==-->
            <div class="post-item" data-aos="fade-up">
              <div class="inner-content">
                <div class="thumb">
                  <a href="blog-details.html"><img src="{{ asset('/img/blog/1.jpg')}}" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <ul class="meta">
                    <li class="post-time"><a href="blog.html">30 Minutes</a></li>
                    <li class="post-sep"> - </li>
                    <li class="post-comment"><a href="blog.html">25 Comments</a></li>
                  </ul>
                  <h4 class="title"><a href="blog-details.html">Dental Care for Child is very important</a></h4>
                  <div class="footer-content">
                    <div class="author-info">
                      <a href="blog-details.html">
                        <img src="{{ asset('/img/blog/author1.png')}}" alt="Image-HasTech">
                        <span class="name"><strong>Morgon Dawson</strong> <br>20 April, 2021</span>
                      </a>
                    </div>
                    <div class="social-icons-wrap">
                      <a class="share-btn" href="#/"><i class="fa fa-share-alt"></i></a>
                      <div class="social-icons">
                        <a href="#/"><i class="fa fa-facebook"></i></a>
                        <a href="#/"><i class="fa fa-twitter"></i></a>
                        <a href="#/"><i class="fa fa-instagram"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--== End Blog Item ==-->
          </div>
          <div class="col-sm-6 col-lg-4">
            <!--== Start Blog Item ==-->
            <div class="post-item" data-aos="fade-up">
              <div class="inner-content">
                <div class="thumb">
                  <a href="blog-details.html"><img src="{{ asset('/img/blog/2.jpg')}}" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <ul class="meta">
                    <li class="post-time"><a href="blog.html">40 Minutes</a></li>
                    <li class="post-sep"> - </li>
                    <li class="post-comment"><a href="blog.html">52 Comments</a></li>
                  </ul>
                  <h4 class="title"><a href="blog-details.html">Every one need to go Dentist regularly</a></h4>
                  <div class="footer-content">
                    <div class="author-info">
                      <a href="blog-details.html">
                        <img src="{{ asset('/img/blog/author2.png')}}" alt="Image-HasTech">
                        <span class="name"><strong>Alex Williams</strong> <br>18 April, 2021</span>
                      </a>
                    </div>
                    <div class="social-icons-wrap">
                      <a class="share-btn" href="#/"><i class="fa fa-share-alt"></i></a>
                      <div class="social-icons">
                        <a href="#/"><i class="fa fa-facebook"></i></a>
                        <a href="#/"><i class="fa fa-twitter"></i></a>
                        <a href="#/"><i class="fa fa-instagram"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--== End Blog Item ==-->
          </div>
          <div class="col-sm-6 col-lg-4">
            <!--== Start Blog Item ==-->
            <div class="post-item" data-aos="fade-up">
              <div class="inner-content">
                <div class="thumb">
                  <a href="blog-details.html"><img src="{{ asset('/img/blog/3.jpg')}}" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <ul class="meta">
                    <li class="post-time"><a href="blog.html">55 Minutes</a></li>
                    <li class="post-sep"> - </li>
                    <li class="post-comment"><a href="blog.html">36 Comments</a></li>
                  </ul>
                  <h4 class="title"><a href="blog-details.html">Root Canals Treament is importent for teeth</a></h4>
                  <div class="footer-content">
                    <div class="author-info">
                      <a href="blog-details.html">
                        <img src="{{ asset('/img/blog/author3.png')}}" alt="Image-HasTech">
                        <span class="name"><strong>Rehana Smith</strong> <br>10 April, 2021</span>
                      </a>
                    </div>
                    <div class="social-icons-wrap">
                      <a class="share-btn" href="#/"><i class="fa fa-share-alt"></i></a>
                      <div class="social-icons">
                        <a href="#/"><i class="fa fa-facebook"></i></a>
                        <a href="#/"><i class="fa fa-twitter"></i></a>
                        <a href="#/"><i class="fa fa-instagram"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--== End Blog Item ==-->
          </div>
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

