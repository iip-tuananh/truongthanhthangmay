@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
Tin tức nổi bật và mới nhất
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/post-9513.css')}}">
@endsection
@section('content')
<div id="pagetitle" class="page-title bg-image ">
   <div class="container">
      <div class="page-title-inner">
         <div class="page-title-holder">
            <h1 class="page-title">{{$title_page}} </h1>
         </div>
         <ul class="ct-breadcrumb">
            <li><a class="breadcrumb-entry" href="{{route('home')}}">TRANG CHỦ</a></li>
            <li><span class="breadcrumb-entry">{{$title_page}}</span></li>
         </ul>
      </div>
   </div>
</div>
<main id="main" class="site-main">
   <article id="post-9513" class="post-9513 page type-page status-publish hentry">
      <div class="entry-content clearfix">
         <div data-elementor-type="wp-page" data-elementor-id="9513" class="elementor elementor-9513" data-elementor-settings="[]">
            <div class="elementor-section-wrap">
               <section class="elementor-section elementor-top-section elementor-element elementor-element-3081c6a elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3081c6a" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-container elementor-column-gap-default ">
                     <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9d27238" data-id="9d27238" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                           <section class="elementor-section elementor-inner-section elementor-element elementor-element-c6c64c6 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c6c64c6" data-element_type="section">
                              <div class="elementor-container elementor-column-gap-extended ">
                                 <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a5b7180" data-id="a5b7180" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                       <div class="elementor-element elementor-element-81d7d86 elementor-widget elementor-widget-ct_heading" data-id="81d7d86" data-element_type="widget" data-widget_type="ct_heading.default">
                                          <div class="elementor-widget-container">
                                             <div class="ct-heading h-align- item-st-default">
                                                <div class="item--sub-title style-default">
                                                   <span>
                                                   BLOG            </span>
                                                </div>
                                                <h3 class="item--title case-animate-time st-default " data-wow-delay="ms">
                                                   <span>{{$title_page}}</span>    
                                                </h3>
                                             </div>
                                          </div>
                                       </div>
                                 
                                    </div>
                                 </div>
                   
                                
                              </div>
                           </section>
                           <div class="elementor-element elementor-element-8aed5ba elementor-widget elementor-widget-ct_blog_grid" data-id="8aed5ba" data-element_type="widget" data-widget_type="ct_blog_grid.default">
                              <div class="elementor-widget-container">
                                 <div id="ct_blog_grid-8aed5ba" class="ct-grid ct-blog-grid ct-blog-grid-layout2" data-layout="masonry" data-start-page="1" data-max-pages="1" data-total="2" data-perpage="6" data-next-link="">
                                    <div class="ct-grid-overlay"></div>
                                    <div class="ct-grid-inner ct-grid-masonry row animate-time" data-gutter="15">
                                       @foreach ($blog as $item)
                                          <div class="grid-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 ">
                                             <div class="grid-item-inner " data-wow-duration="1.2s">
                                                <div class="item--featured image-effect-white">
                                                   <a href="{{route('detailBlog',['slug'=>$item->slug])}}"><img decoding="async" class="no-lazyload " src="{{$item->image}}" width="350" height="292" alt="MAR-tuyen-dung" title="MAR-tuyen-dung" /></a>
                                                </div>
                                                <div class="item--body">
                                                   <h3 class="item--title"><a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></h3>
                                                   <div class="item--content">
                                                   </div>
                                                   <div class="item--holder">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       @endforeach
                                   
                                    </div>
                                    <div class="ct-grid-pagination" data-loadmore="{&quot;startPage&quot;:1,&quot;maxPages&quot;:1,&quot;total&quot;:2,&quot;perpage&quot;:6,&quot;nextLink&quot;:&quot;&quot;,&quot;source&quot;:[&quot;tuyen-dung|category&quot;],&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;limit&quot;:6,&quot;post_ids&quot;:&quot;&quot;,&quot;col_xl&quot;:3,&quot;col_lg&quot;:3,&quot;col_md&quot;:6,&quot;col_sm&quot;:6,&quot;col_xs&quot;:12,&quot;thumbnail_size&quot;:&quot;custom&quot;,&quot;thumbnail_custom_dimension&quot;:{&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;pagination_type&quot;:&quot;pagination&quot;,&quot;show_comment&quot;:&quot;&quot;,&quot;show_author&quot;:&quot;&quot;,&quot;show_date&quot;:&quot;&quot;,&quot;show_button&quot;:&quot;&quot;,&quot;button_text&quot;:&quot;&quot;,&quot;show_excerpt&quot;:&quot;true&quot;,&quot;num_words&quot;:24,&quot;ct_animate&quot;:&quot;&quot;,&quot;template_type&quot;:&quot;post_grid_layout2&quot;,&quot;tax&quot;:[]}" data-query="{&quot;post_type&quot;:&quot;post&quot;,&quot;posts_per_page&quot;:6,&quot;order&quot;:&quot;desc&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;tax_query&quot;:{&quot;relation&quot;:&quot;OR&quot;,&quot;0&quot;:{&quot;taxonomy&quot;:&quot;category&quot;,&quot;field&quot;:&quot;slug&quot;,&quot;operator&quot;:&quot;IN&quot;,&quot;terms&quot;:[&quot;tuyen-dung&quot;]}},&quot;post__not_in&quot;:[9513]}">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="elementor-section elementor-top-section elementor-element elementor-element-4916c681 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default" data-id="4916c681" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                  <div class="elementor-background-overlay"></div>
                  <div class="elementor-container elementor-column-gap-default ">
                     <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-745eb331" data-id="745eb331" data-element_type="column">
                        <div class="elementor-widget-wrap">
                        </div>
                     </div>
                     <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-7ce4c554" data-id="7ce4c554" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                           <div class="elementor-element elementor-element-42f2fdcb eael-dual-header-content-align-center elementor-widget elementor-widget-eael-dual-color-header" data-id="42f2fdcb" data-element_type="widget" data-widget_type="eael-dual-color-header.default">
                              <div class="elementor-widget-container">
                                 <div class="eael-dual-header">
                                    <p class="title"><span  class="lead solid-color">YÊU CẦU BÁO GIÁ, TƯ VẤN THANG MÁY HITACHI</span> <span></span></p>
                                    <br>
                                    <div class="eael-dch-separator-wrap"><span class="separator-one"></span>
                                       <span class="separator-two"></span>
                                    </div>
                                    <span class="subtext"></span>
                                 </div>
                              </div>
                           </div>
                           <div class="elementor-element elementor-element-3776c9ef elementor-widget elementor-widget-ct_contact_form" data-id="3776c9ef" data-element_type="widget" data-widget_type="ct_contact_form.default">
                              <div class="elementor-widget-container">
                                 <div class="ct-contact-form ct-contact-form-layout1 style1 ">
                                    <div class="ct-contact-form">
                                       <div role="form" class="wpcf7" id="wpcf7-f3392-p9513-o1" lang="en-US" dir="ltr">
                                          <div class="screen-reader-response">
                                             <p role="status" aria-live="polite" aria-atomic="true"></p>
                                             <ul></ul>
                                          </div>
                                     @include('layouts.contact.formcontact')
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3c7a97d0" data-id="3c7a97d0" data-element_type="column">
                        <div class="elementor-widget-wrap">
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>
      <!-- .entry-content -->
   </article>
   <!-- #post-9513 -->
</main>

@endsection