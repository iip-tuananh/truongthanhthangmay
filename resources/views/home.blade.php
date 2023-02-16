@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
@endsection
@section('script')
@endsection
@section('content')
<style>
   .mySwiperbanner{
      padding-top: 0px !important;
      padding-bottom: 0px !important;
      height: 100% !important;
   }
</style>
<div id="content" class="site-content">
   <div class="swiper mySwiperbanner">
      <div class="swiper-wrapper">
         @foreach ($banner as $item)
         <div class="swiper-slide banner-cus">
            <img  src="{{$item->image}}" alt="" srcset="">
         </div>
         @endforeach
      </div>
   </div>
   <div class="content-inner">
      <div class="container content-container">
         <div class="row content-row">
            <div id="primary"  class="content-area content-full-width col-12">
               <main id="main" class="site-main">
                  <article id="post-19" class="post-19 page type-page status-publish hentry">
                     <div class="entry-content clearfix">
                        <div data-elementor-type="wp-page" data-elementor-id="19" class="elementor elementor-19" data-elementor-settings="[]">
                           <div class="elementor-section-wrap">
                              <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
                              <script>
                                 var swiper = new Swiper(".mySwiperbanner", {
                                 slidesPerView: 1,
                                 spaceBetween: 5,
                                 pagination: {
                                 el: ".swiper-pagination",
                                 clickable: true,
                                 },
                                 breakpoints: {
          340: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
      },
                                 });
                              </script>
                              {{-- section danh muc --}}
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-17ade86b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="17ade86b" data-element_type="section">
                                 <div class="elementor-container elementor-column-gap-extended ">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4705129d" data-id="4705129d" data-element_type="column">
                                       <div class="elementor-widget-wrap elementor-element-populated">
                                          <div class="elementor-element elementor-element-bd546f8 elementor-hidden-desktop eael-dual-header-content-align-center elementor-widget elementor-widget-eael-dual-color-header" data-id="bd546f8" data-element_type="widget" data-widget_type="eael-dual-color-header.default">
                                             <div class="elementor-widget-container">
                                                <div class="eael-dual-header">
                                                   <span class="eael-dch-svg-icon"><i aria-hidden="true" class="material zmdi zmdi-shopping-cart-plus"></i></span>				<span class="subtext"></span>
                                                   <h3 class="title"><span  class="lead solid-color">DANH MỤC</span> <span></span></h3>
                                                </div>
                                             </div>
                                          </div>
                                          <section class="elementor-section elementor-inner-section elementor-element elementor-element-16e930ca elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="16e930ca" data-element_type="section">
                                             <div class="elementor-container elementor-column-gap-extended ">
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4527bef9" data-id="4527bef9" data-element_type="column">
                                                   <div class="elementor-widget-wrap elementor-element-populated">
                                                      <div class="elementor-element elementor-element-6f6c3c69 elementor-hidden-mobile elementor-widget elementor-widget-ct_heading" data-id="6f6c3c69" data-element_type="widget" data-widget_type="ct_heading.default">
                                                         <div class="elementor-widget-container">
                                                            <div class="ct-heading h-align-left item-st-default">
                                                               <div class="item--sub-title style-default">
                                                                  <span>
                                                                  PRODUCTS  CATEGORY          </span>
                                                               </div>
                                                               <div class="item--title case-animate-time st-default " data-wow-delay="ms">
                                                                  <span class="slide-in-container"><span class="d-inline-block wow case-fade-in-up">DANH</span></span> <span class="slide-in-container"><span class="d-inline-block wow case-fade-in-up">MỤC</span></span>    
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-63a1edbd" data-id="63a1edbd" data-element_type="column">
                                                   <div class="elementor-widget-wrap elementor-element-populated">
                                                      <div class="elementor-element elementor-element-24d8dc3 elementor-widget elementor-widget-ct_text_editor" data-id="24d8dc3" data-element_type="widget" data-widget_type="ct_text_editor.default">
                                                         <div class="elementor-widget-container">
                                                            <div id="ct_text_editor-24d8dc3" class="ct-text-editor " data-wow-delay="ms">
                                                               <div class="ct-inline-css"  data-css="
                                                                  ">
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </section>
                                          @foreach ($catehome as $key=>$cate)
                                          @if ($key % 2 == 0)
                                             <section class="elementor-section elementor-inner-section elementor-element elementor-element-4852fbc elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4852fbc" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default ">
                                                   
                                                      @foreach ($cate as $key=>$item)
                                                
                                                         <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-05a43b5" data-id="05a43b5" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                               <div class="elementor-element elementor-element-ba90ca6 elementor-align-center elementor-widget elementor-widget-ct_button" data-id="ba90ca6" data-element_type="widget" data-widget_type="ct_button.default">
                                                                  <div class="elementor-widget-container">
                                                                     <div id="ct_button-ba90ca6" class="ct-button-wrapper ct-button-layout1">
                                                                        <div class="ct-inline-css"  data-css="
                                                                           #ct_button-ba90ca6.ct-button-wrapper .btn {
                                                                           background-image: -webkit-gradient(linear, left top, left bottom, from(#CA3024), to(#5F0202)) !important;
                                                                           background-image: -webkit-linear-gradient(left, #CA3024, #5F0202) !important;
                                                                           background-image: -moz-linear-gradient(left, #CA3024, #5F0202) !important;
                                                                           background-image: -ms-linear-gradient(left, #CA3024, #5F0202) !important;
                                                                           background-image: -o-linear-gradient(left, #CA3024, #5F0202) !important;
                                                                           background-image: linear-gradient(left, #CA3024, #5F0202) !important;
                                                                           filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#CA3024', endColorStr='#5F0202') !important;
                                                                           background-color: transparent !important;
                                                                           }
                                                                           ">
                                                                        </div>
                                                                        <span class="ct-icon-active"></span>
                                                                        <a href="{{route('allListProCate',['danhmuc'=>$item['slug']])}}" class="btn btn-default btn-animate  icon-ps- " data-wow-delay="ms">
                                                                        <span class="ct-button-icon ct-align-icon-">
                                                                        </span>
                                                                        <span class="ct-button-text">{{languageName($item['name'])}}</span>
                                                                        </a>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="elementor-element elementor-element-fc816dc elementor-widget elementor-widget-image" data-id="fc816dc" data-element_type="widget" data-widget_type="image.default">
                                                                  <div class="elementor-widget-container">
                                                                     <a href="{{route('allListProCate',['danhmuc'=>$item['slug']])}}" rel="nofollow">
                                                                     <img decoding="async" width="300" height="300" src="{{$item['avatar']}}" class="elementor-animation-shrink attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="thang-may-trang-chu" srcset="{{$item['avatar']}} " sizes="(max-width: 300px) 100vw, 300px" />								</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      @endforeach
                                                </div>
                                             </section>
                                             <div class="elementor-element elementor-element-3808734 elementor-widget elementor-widget-spacer" data-id="3808734" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-spacer">
                                                      <div class="elementor-spacer-inner"></div>
                                                   </div>
                                                </div>
                                             </div>
                                          @else
                                             <section class="elementor-section elementor-inner-section elementor-element elementor-element-279a5dd elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="279a5dd" data-element_type="section">
                                                <div class="elementor-container elementor-column-gap-default ">
                                                   @foreach ($cate as $key=>$item)
                                                      <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5c83421" data-id="5c83421" data-element_type="column">
                                                         <div class="elementor-widget-wrap elementor-element-populated">
                                                            <div class="elementor-element elementor-element-0243fcf elementor-align-center elementor-widget elementor-widget-ct_button" data-id="0243fcf" data-element_type="widget" data-widget_type="ct_button.default">
                                                               <div class="elementor-widget-container">
                                                                  <div id="ct_button-0243fcf" class="ct-button-wrapper ct-button-layout1">
                                                                     <div class="ct-inline-css"  data-css="
                                                                        #ct_button-0243fcf.ct-button-wrapper .btn {
                                                                        background-image: -webkit-gradient(linear, left top, left bottom, from(#CA3024), to(#5F0202)) !important;
                                                                        background-image: -webkit-linear-gradient(left, #CA3024, #5F0202) !important;
                                                                        background-image: -moz-linear-gradient(left, #CA3024, #5F0202) !important;
                                                                        background-image: -ms-linear-gradient(left, #CA3024, #5F0202) !important;
                                                                        background-image: -o-linear-gradient(left, #CA3024, #5F0202) !important;
                                                                        background-image: linear-gradient(left, #CA3024, #5F0202) !important;
                                                                        filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#CA3024', endColorStr='#5F0202') !important;
                                                                        background-color: transparent !important;
                                                                        }
                                                                        ">
                                                                     </div>
                                                                     <span class="ct-icon-active"></span>
                                                                     <a href="{{route('allListProCate',['danhmuc'=>$item['slug']])}}" class="btn btn-default btn-animate  icon-ps- " data-wow-delay="ms">
                                                                     <span class="ct-button-icon ct-align-icon-">
                                                                     </span>
                                                                     <span class="ct-button-text">{{languageName($item['name'])}}</span>
                                                                     </a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-5747081 elementor-widget elementor-widget-image" data-id="5747081" data-element_type="widget" data-widget_type="image.default">
                                                               <div class="elementor-widget-container">
                                                                  <a href="{{route('allListProCate',['danhmuc'=>$item['slug']])}}" rel="nofollow">
                                                                  <img decoding="async" width="300" height="300" src="{{$item['avatar']}}" class="elementor-animation-shrink attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="thang-máy-quan-sát-trang-chủ1" srcset="{{$item['avatar']}} " sizes="(max-width: 300px) 100vw, 300px" />								</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   @endforeach
                                                </div>
                                             </section>
                                             <div class="elementor-element elementor-element-3808734 elementor-widget elementor-widget-spacer" data-id="3808734" data-element_type="widget" data-widget_type="spacer.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-spacer">
                                                      <div class="elementor-spacer-inner"></div>
                                                   </div>
                                                </div>
                                             </div>
                                          @endif
                                          @endforeach
                                       </div>
                                    </div>
                                 </div>
                              </section>
                              {{-- end danh muc --}}
                              <section class="elementor-section elementor-top-section elementor-element elementor-element-e66447a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e66447a" data-element_type="section">
                                 <div > <h5 class="h5-cus">ẢNH PRODUCT & DỰ ÁN</h5></div>
                                 <div class="elementor-container elementor-column-gap-default ">
                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-928af16" data-id="928af16" data-element_type="column">
                                       <div class="elementor-widget-wrap elementor-element-populated">
                                          <section class="elementor-section elementor-inner-section elementor-element elementor-element-8024653 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8024653" data-element_type="section">
                                          </section>
                                          <div class="elementor-element elementor-element-507cd44 elementor--h-position-center elementor--v-position-middle elementor-arrows-position-inside elementor-pagination-position-inside elementor-widget elementor-widget-slides" data-id="507cd44" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;,&quot;transition_speed&quot;:500}" data-widget_type="slides.default">
                                             <div class="elementor-widget-container">
                                                <div class="elementor-swiper">
                                                   <div class="elementor-slides-wrapper elementor-main-swiper swiper-container swiper mySwiperpicture" dir="ltr" data-animation="fadeInUp">
                                                      <div class="swiper-wrapper elementor-slides">
                                                  
                                                      
                                                         @foreach ($picturehome as $item)
                                                              <div class="swiper-slide"><img  src="{{$item->image}}" alt="" srcset=""></div>
                                                         @endforeach
                                                          
                                                      </div>
                                                      <div class="swiper-button-next"></div>
                                                      <div class="swiper-button-prev"></div>
                                                      <div class="swiper-pagination"></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </section>
                                          <script>
                                             var swiper = new Swiper(".mySwiperpicture", {
                                                                              pagination: {
                                                el: ".swiper-pagination",
                                                type: "progressbar",
                                                },
                                                navigation: {
                                                nextEl: ".swiper-button-next",
                                                prevEl: ".swiper-button-prev",
                                                },
                                             });
                                          </script>
                                             <br>
                                             <div style="transform: translateY(40px)"> <h5 class="h5-cus">DỰ ÁN THỰC TẾ</h5></div>
                                             <div class="elementor-element elementor-element-507cd44 elementor--h-position-center elementor--v-position-middle elementor-arrows-position-inside elementor-pagination-position-inside elementor-widget elementor-widget-slides" data-id="507cd44" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;,&quot;transition_speed&quot;:500}" data-widget_type="slides.default">
                                                <div class="elementor-widget-container">
                                                   <div class="elementor-swiper">
                                                      <div class="elementor-slides-wrapper elementor-main-swiper swiper-container swiper mySwiperproject" dir="ltr" data-animation="fadeInUp">
                                                         <div class="swiper-wrapper elementor-slides">
                                                     
                                                         
                                                            @foreach ($project as $item)
                                                            @php
                                                                $imgs = json_decode($item->images);
                                                            @endphp
                                                                 <div class="swiper-slide cus-box">
                                                                  <div class="title-cus">{{$item->name}}</div>
                                                                  <a href="{{route('detailConstruction',['id'=>$item->id,'slug'=>$item->slug])}}">
                                                                     <img src="{{$imgs[0]}}" alt="" srcset=""></div>

                                                                  </a>
                                                            @endforeach
                                                             
                                                         </div>
                                                         <div class="swiper-button-next"></div>
                                                         <div class="swiper-button-prev"></div>
                                                         <div class="swiper-pagination"></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </section>
                                 <script>
                                    var swiper = new Swiper(".mySwiperproject", {
                                       slidesPerView: 2,
                                       spaceBetween: 20,
                                       navigation: {
                                       nextEl: ".swiper-button-next",
                                       prevEl: ".swiper-button-prev",
                                       },
                                    });
                                  </script>
                               
                        
                           </div>
                        </div>
                     </div>
                     <style>
                    
                        .swiper {
                          width: 100%;
                          padding-top: 50px;
                          padding-bottom: 50px;
                        }
                    
                        .swiper-slide {
                          background-position: center;
                          background-size: cover;
                          width: 300px;
                         
                        }
                        .mySwiperproject .swiper-button-next,.mySwiperproject .swiper-button-prev{
                           color: white;
                           height: 20px !important;
                        }
                        .mySwiperproject img{
                           height: 100%;
                           background-size: cover;
                           object-fit: cover;
                        }
                        .swiper-slide img {
                          display: block;
                          width: 100%;
                        }
                   
                      </style>
                
                     <!-- .entry-content -->
                  </article>
                  <!-- #post-19 -->
               </main>
               <!-- #main -->
            </div>
            <!-- #primary -->
         </div>
      </div>
   </div>
   <!-- #content inner -->
</div>
@endsection