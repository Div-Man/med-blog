@section('leftBar')

<div class="col-lg-4 order-2 order-md-1">
            <!--== Start Sidebar Wrapper ==-->
            <div class="sidebar-wrapper sidebar-right-margin">
              <!--== Start Sidebar Item ==-->
              <div class="sidebar-item" data-bg-img="{{ asset('/img/photos/sidebar1.jpg')}}">
                <h4 class="sidebar-title">Поиск</h4>
                <div class="sidebar-body">
                  <div class="sidebar-search-form">
                    <form action="/search/post/" method="get">
                      <div class="form-group">
                        <input class="form-control" type="text" name="text" placeholder="Введите что-нибудь">
                        <button type="submit" class="btn-src"><i class="fa fa-search"></i></button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->

              <!--== Start Sidebar Item ==-->
              <div class="sidebar-item category-sidebar-item" data-bg-img="{{ asset('/img/photos/sidebar2.jpg')}}">
                <h4 class="sidebar-title">Категории</h4>
                <div class="sidebar-body">
                  <div class="sidebar-category-sub-menu">
                    <ul>
                        
                        @foreach ($categories as $category)
                            <li><a href="/post/category/{{$category->name}}">{{$category->name}} <span>({{$category->posts_count}})</span></a></li>
                        @endforeach  
                    </ul>
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->

          

              <!--== Start Sidebar Item ==-->
              <div class="sidebar-item sidebar-tag-item mb--0" data-bg-img="{{ asset('/img/photos/sidebar4.jpg')}}">
                <h4 class="sidebar-title">Теги</h4>
                <div class="sidebar-body">
                  <div class="sidebar-tag-items">
                      
                      @foreach($tags as $tag)
                             <a href="/search/tag/{{$tag->name}}">{{$tag->name}}</a>
                      @endforeach
                   
                  </div>
                </div>
              </div>
              <!--== End Sidebar Item ==-->
            </div>
            <!--== End Sidebar Wrapper ==-->
          </div>

@endsection