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
                        <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Добавление поста</h2>
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
                    
                        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
                    <div class="blog-details-item">
                        <div class="inner-content">
                            <script src="https://cdn.tiny.cloud/1/427womp2w7cq9x62i49vbfhhfmzy913amfmddetuotoza9fc/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
                            <form action="/post/update" enctype="multipart/form-data" method="POST">
                                  {{csrf_field()}}
                                  @method('PUT')
                                  
                                  <input type="hidden" name="post_id" value="{{$post->id}}">

                                <div class="form-add-photo">

                                    <label>
                                        <input type="file" name="image" id="photoInput">
                                        <img src="{{ asset($post->img)}}" alt="icon" title="" id="theImage"  style="
                                            width: 100%;
                                            height: 100%;
                                            objectFit: cover;
                                            "/>
                                        <p class="addImg">Изменить изображение</p>
                                    </label>
                                </div>
                                <br>
                                <div>
                                    <input type="text" class="create-post-title" name="title" placeholder="Заголовок" value="{{$post->title}}">
                                </div>
                                <br>

                                <textarea id="new-post" name="description">{{$post->description}}</textarea>
                                <br>
                                 <p>Указать категорию:<p>
                                     <select name="category_blog_id">
                                          @foreach($categories as $category)
                                            @if($category->id == $post->category_blog_id)
                                             <option selected="selected" value="{{$category->id}}">{{$category->name}}</option>
                                             @else
                                              <option value="{{$category->id}}">{{$category->name}}</option>
                                              @endif
                                          @endforeach
                                     </select>
                                <br>
                                <p>Прикрепить теги:<p>
                                <div>

                                    <select name="tags[]" id="tags-select" multiple>
                                        @foreach($tagsEditPost as $tag)
                                           
                                                @if($tag->hasPost == 'attached')
                                                <option selected="selected" value="{{$tag->id}}">{{$tag->name}}</option>
                                                 @else
                                                 <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                @endif                                
                                        @endforeach
                                    </select>

                                            

                                    @foreach($tagsEditPost as $tag)
                                   
                                            
                                        <div data-tag="{{$tag->id}}" class="tag @if($tag->hasPost == 'attached') tagBorder @endif" onclick="return tagToggle(this)">
                                        <span class="aaa">
                                            <svg class="@if($tag->hasPost == 'attached') svg-icon @else svg-icon hidden @endif" viewBox="0 0 20 20">
                                            <path fill="none" d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                                            </svg>

                                            <svg class="choice-tag__icon icon margin-right-2xs @if($tag->hasPost == 'attached') hidden @endif" viewBox="0 0 16 16" aria-hidden="true">
                                            <g class="choice-tag__icon-group" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2">
                                            <line x1="-6" y1="8" x2="8" y2="8"></line>
                                            <line x1="8" y1="8" x2="22" y2="8"></line>
                                            <line x1="8" y1="2" x2="8" y2="14"></line>
                                            </g>
                                            </svg>
                                        </span>
                                        <span>{{$tag->name}}</span>

                                    </div>  
                                          
                                        
                          
                                    @endforeach
                                </div>
                                <br>
                                <button type="submit" class="btn-submit-post">Отправить</button>
                            </form>
                            <script>
                                tinymce.init({
                                    selector: '#new-post',
                                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
                                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                    tinycomments_mode: 'embedded',
                                    tinycomments_author: 'Author name',
                                    mergetags_list: [
                                        {value: 'First.Name', title: 'First Name'},
                                        {value: 'Email', title: 'Email'},
                                    ],
                                    content_langs: [
                                        {title: 'Русский', code: 'ru'}
                                    ],
                                    language: 'ru',
                                    relative_urls : false,
                                    remove_script_host : false,
                                    convert_urls : true,
                                });
                               
                               

                                var btn = document.querySelector(".addImg");
                                var photoFile = document.getElementById("photoInput");

                                btn.addEventListener('click', function (e) {
                                    e.preventDefault();
                                    photoFile.click();
                                })

                                var fileReader = new FileReader();

                                fileReader.addEventListener('load', function () {
                                    theImage.src = this.result;
                                    theImage.style.width = "100%";
                                    theImage.style.height = "100%";
                                    theImage.style.objectFit = "fill";
                                    btn.style.display = "none";

                                });


                                photoInput.addEventListener('change', function (e) {
                                    var file = e.target.files[0];

                                    fileReader.readAsDataURL(file);
                                });



                                const select = document.querySelector('#tags-select');
                                const options = select.options;

                                const selectItem = (tagId) => {
                                    Array.from(options).forEach((option) => {
                                        if (option.value === tagId) {
                                            option.selected = !option.selected;
                                        }
                                    });
                                    select.dispatchEvent(new Event('change'));
                                };

                                const tagToggle = (tag) => {
                                    tag.classList.toggle("tagBorder");
                                    const plus = tag.querySelector('.choice-tag__icon');
                                    plus.classList.toggle("hidden");
                                    plus.classList.add('b-show');
                                    const galka = tag.querySelector('.svg-icon');
                                    galka.classList.toggle("hidden");
                                    galka.classList.add('b-show');

                                    const tagId = tag.dataset.tag;
                                    selectItem(tagId);
                                };



                            </script>
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