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
                      <a href="/blog/post/{{ $post->id}}"><img width="600px" height="600px" src="{{ asset($post->img)}}" alt="Image-HasTech"></a>
                    </div>
                <div class="content">
                 
                  <h2 class="title">{{$post->title}}</h2>
                  <div class="author-info">
                    <a class="author-name" href="blog.html">
                      <img src="{{ asset('/img/blog/author10.png')}}" alt="Image-HasTech">
                      <span class="name">{{$post->user->name}}</span>
                    </a>
                    <a class="post-date" href="blog.html">
                      <span class="date">{{ Carbon\Carbon::parse($post->created_at)->format('d.m.Y')}}</span>
                    </a>
                  </div>
                  
                  
                  <p>{!! $post->description !!}</p>
                  
                  <div class="blog-details-footer">
                  
                    <div class="tag-conent">
                      <span>Теги-</span>
                        @foreach($post->tags as $tag)
                             <a href="/search/tag/{{$tag->name}}">{{$tag->name}}</a>
                        @endforeach
                        
                        
                    </div>
                    
                      @author($post)
                        <div class="">
                            <a class="btn btn-outline-warning" style="font-weight: bold; margin-right: 15px; font-size: 15px;" href="/post/edit/{{$post->id}}">Редактировать</a> 
                            <div style="display: inline-block;">
                                <form action="/post/delete/{{$post->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                     <button type="submit" class="btn btn-outline-danger">Удалить</button>
                                </form>
                            </div>    
                            
                            

                         </div>
                      @endauthor
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
                  <h4 class="title-main">Оставьте ответ</h4>
                 @if (\Session::has('error'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{!! \Session::get('error') !!}</li>
                        </ul>
                    </div>
                @endif
                  <div class="comment-form-content">
                    <form method="post" action="/store-comment">
                        {{csrf_field()}} 
                       <input name="post_id" type="hidden" value="{{$post->id}}">
                      <div class="row row-gutter-23">
                        <div class="col-md-12">
                          <div class="form-group mb--0">
                            <textarea class="form-control" name="text" placeholder="Комментарий"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group mb--0">
                            <button type="submit" class="btn-submit">Отправить</button>
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
            
            @include('layouts.leftBar')
           @yield('leftBar')
            
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

    <!--== End News Letter Area Wrapper ==-->
  </main>

@endsection