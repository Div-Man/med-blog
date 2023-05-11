@extends('layouts.app')
  @section('main')
    <main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area parallax" data-speed="1" data-bg-img="{{ asset('/img/photos/bg3.jpg')}}">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12 text-center">
            <div class="page-header-content">
              
              <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Наши посты</h2>
            
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

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area blog-inner-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-0 order-lg-2">
            <div class="row">
                
 
              @foreach($posts as $post)
              <div class="col-md-6 col-lg-6">
                <!--== Start Blog Item ==-->
                <div class="post-item" data-aos="fade-up">
                  <div class="inner-content">
                    <div class="thumb" style="min-width: 300px; height: 300px;">
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
                            <span class="name"><strong>{{ $post->user->name}}</strong> <br>{{ Carbon\Carbon::parse($post->created_at)->format('d.m.Y')}}</span>
                          </a>
                        </div>
                         @author($post)
                        <div class="">
                            <a style="color: red; font-weight: bold; font-size: 14px;" href="/post/edit/{{$post->id}}">Редактировать</a>       
                         </div>
                      @endauthor
                      </div>
                    </div>
                  </div>
                </div>
                <!--== End Blog Item ==-->
              </div>
              @endforeach
                 
                 

            
      
            </div>
              
              <div class="pagination">
                  {{$posts->links()}}
              </div>
             
          </div>
            
           @include('layouts.leftBar')
           @yield('leftBar')
            
            
        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->

 
   
  </main>

  @endsection
