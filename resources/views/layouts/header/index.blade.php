<header id="ct-masthead">
    <div id="ct-header-wrap" class="ct-header-layout2 fixed-height is-sticky scroll-to-bottom">
       <div id="ct-header-middle">
          <div class="container">
             <div class="row">
                <div class="ct-header-branding">
                   <div class="ct-header-branding-inner">
                     
                      <a class="logo-dark" href="{{route('home')}}" title="{{$setting->company}}" rel="home"><img src="{{$setting->logo}}" alt="{{$setting->company}}"/></a><a class="logo-light" href="{{route('home')}}" title="{{$setting->company}}" rel="home"><img src="{{$setting->logo}}" alt="{{$setting->company}}"/></a><a class="logo-mobile" href="{{route('home')}}" title="{{$setting->company}}" rel="home"><img src="{{$setting->logo}}" alt="{{$setting->company}}"/></a>                            
                   </div>
                </div>
                <div class="ct-header-holder style1">
                   <div class="ct-h-middle-item">
                      <div class="ct-h-middle-icon"><i class="fa-solid fa-envelope"></i></div>
                      <div class="ct-h-middle-meta">
                         <label style="font-weight: bold">{{$setting->email}}</label>
                      </div>
                      <a href="mailto:{{$setting->email}}" class="ct-h-middle-link"></a>
                   </div>
                   <div class="ct-h-middle-item">
                      <div class="ct-h-middle-icon"><i class="fa-solid fa-phone"></i></div>
                      <div class="ct-h-middle-meta">
                         <label><a style="font-size: 13px;" href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></label>
             
                      </div>
              
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div id="ct-header" class="ct-header-main">
          <div class="container">
             <div class="row">
                <div class="ct-header-branding">
                   <div class="ct-header-branding-inner">
         
                      <a class="logo-dark" href="{{route('home')}}" title="{{$setting->company}}" rel="home"><img src="{{$setting->logo}}" alt="{{$setting->company}}"/></a><a class="logo-light" href="{{route('home')}}" title="{{$setting->company}}" rel="home"><img src="{{$setting->logo}}" alt="{{$setting->company}}"/></a><a class="logo-mobile" href="{{route('home')}}" title="{{$setting->company}}" rel="home"><img src="{{$setting->logo}}" alt="{{$setting->company}}"/></a>                        
                   </div>
                </div>
                <div class="ct-header-navigation">
                   <nav class="ct-main-navigation">
                      <div class="ct-main-navigation-inner">
                         <div class="ct-logo-mobile">
                            <a href="" title="" rel="home"><img src="{{$setting->logo}}" alt=""/></a>
                         </div>
                         <div class="header-mobile-search">
                            <form role="search" method="get" action="">
                               <input type="text" placeholder="Search..." name="s" class="search-field" />
                               <button type="submit" class="search-submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                         </div>
                         <ul id="ct-main-menu" class="ct-main-menu children-plus clearfix">
                            <li id="menu-item-6706" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-19 current_page_item menu-item-6706"><a href="{{route('home')}}" aria-current="page"><span>TRANG CHỦ</span><span class="menu-line"></span><span class="menu-icon-plus"></span></a></li>
                            <li id="menu-item-6432" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6432"><a href="{{route('aboutUs')}}"><span>GIỚI THIỆU</span><span class="menu-line"></span><span class="menu-icon-plus"></span></a></li>
                            <li id="menu-item-6383" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6383">
                              <a href="{{route('serviceList')}}"><span>DỊCH VỤ</span><span class="menu-line"></span><span class="menu-icon-plus"></span></a>
                              <ul class="sub-menu">
                                 @foreach ($servicehome as $item)
                                 <li id="menu-item-8126" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8126"><a href="{{route('serviceDetail',['slug'=>$item->slug])}}"><span>{{$item->name}}</span><span class="menu-line"></span><span class="menu-icon-plus"></span></a></li>
                              @endforeach
                              </ul>
                              <span class="ct-menu-toggle far fac-angle-down"></span>
                           </li>

                            


                            <li id="menu-item-6383" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6383">
                                <a href="{{route('allProduct')}}"><span>SẢN PHẨM</span><span class="menu-line"></span><span class="menu-icon-plus"></span></a>
                                <ul class="sub-menu">
                                    @foreach ($categoryhome as $cate)
                                        <li id="menu-item-8126" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8126"><a href="{{route('allListProCate',['danhmuc'=>$cate->slug])}}"><span>{{languageName($cate->name)}}</span><span class="menu-line"></span><span class="menu-icon-plus"></span></a>
                                        </li>
                                        
                                    @endforeach
                                 </ul>
                                 <span class="ct-menu-toggle far fac-angle-down"></span>
                            </li>
                          
                          
                            <li id="menu-item-8674" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8674">
                               <a href="{{route('allListConstruction')}}"><span>CÔNG TRÌNH</span><span class="menu-line"></span><span class="menu-icon-plus"></span></a>
                               <ul class="sub-menu">
                                @foreach ($projectmenu as $project)
                                    <li id="menu-item-8675" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8675"><a href="{{route('detailConstruction',['id'=>$project->id,'slug'=>$project->slug])}}"><span>{{$project->name}}</span><span class="menu-line"></span><span class="menu-icon-plus"></span></a></li>
                                @endforeach
                               </ul>
                               <span class="ct-menu-toggle far fac-angle-down"></span>
                            </li>
                            <li id="menu-item-6401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-6401">
                               <a href="{{route('allListBlog')}}"><span>TIN TỨC</span><span class="menu-line"></span><span class="menu-icon-plus"></span></a>
                               <ul class="sub-menu">
                                 @foreach ($blogCate as $cate)
                                    <li id="menu-item-8677" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8677"><a href="{{route('listCateBlog',['slug'=>$cate->slug])}}"><span>{{languageName($cate->name)}}</span><span class="menu-line"></span><span       class="menu-icon-plus"></span></a></li>
                                 @endforeach
                               </ul>
                            </li>
                            <li id="menu-item-6374" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6374"><a href="{{route('lienHe')}}"><span>LIÊN HỆ</span><span class="menu-line"></span><span class="menu-icon-plus"></span></a></li>
                         </ul>
                         <div class="ct-header-social ct-header-social-mobile style1">
                         </div>
                      </div>
                   </nav>
                   <div class="ct-header-meta">
                     <div class="triangle-up"></div>
                      <div class="header-right-item h-btn-search-new"><i class="fa-solid fa-magnifying-glass"></i></div>
                   </div>
                </div>
                <div class="ct-header-social style1">
                </div>
             </div>
          </div>
          <div id="ct-menu-mobile">
             <span class="btn-nav-mobile open-menu">
             <span></span>
             </span>
          </div>
       </div>
    </div>
    <form action="{{route('search_result')}}" method="post">
      @csrf
         <div class="modal-search">
            <input type="search" name="keyword" id=""  placeholder="Nhập nội dung tìm kiếm ..." required>
            <input type="submit" value="Tìm kiếm">
         </div>
    </form>
 
 </header>