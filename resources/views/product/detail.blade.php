@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$img = json_decode($product->images);
@endphp
{{url(''.$img[0])}}
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/theme.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/post-9513.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/post-8619.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

@endsection
@section('js')

@endsection
@section('content')
<div id="pagetitle" class="page-title bg-image ">
   <div class="container">
       <div class="page-title-inner">
           <div class="page-title-holder">
      
                                   <h1 class="page-title">{{languageName($product->name)}}</h1>                </div>

                               <ul class="ct-breadcrumb"><li><a class="breadcrumb-entry" href="{{route('home')}}">TRANG CHỦ</a></li><li><a class="breadcrumb-entry" href="{{route('allListProCate',['danhmuc'=>$product->cate->slug])}}">{{languageName($product->cate->name)}}</a></li><li><span class="breadcrumb-entry">{{languageName($product->name)}}</span></li></ul>                            </div>
   </div>
</div>

<main id="main" class="site-main bg-custom">
  <div class="container ">
   <br>
   <div class="row description-cus">
       <div class="col-md-6 col-xs-12">
           <div style="padding: 10px 10px">
           <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
               <div class="swiper-wrapper">
        
                   @php
                       $imgs = json_decode($product->images);
                   @endphp
                   @foreach ($imgs as $img)
                       <div class="swiper-slide">
                       <img src="{{$img}}" />
                       </div>
                   @endforeach
             
              
               </div>
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
             </div>
             <br>
             <div thumbsSlider="" class="swiper mySwiper">
               <div class="swiper-wrapper">
                   @foreach ($imgs as $img)
                   <div class="swiper-slide">
                   <img src="{{$img}}" />
                   </div>
               @endforeach
               </div>
             </div>
       </div>
       </div>
       <div class="col-md-6 col-xs-12 ">
           <div style="padding: 10px 10px">
               {!!languageName($product->description)!!}
           </div>
       </div>
   </div>
   <br>
   <div class="row">
       <div class="col-md-12 col-xs-12 description-cus">
           <div style="padding: 10px 10px">    
            <h5 class="h5-cus">Chi tiết</h5>
               {!!languageName($product->content)!!}
           </div>
       </div>
   </div>
   <br>
   <div class="row description-cus">
      <div class="col-md-12 col-xs-12 ">
         <div style="padding: 10px 10px">    
          <h5 class="h5-cus">Sản phẩm liên quan</h5>
          <div class="swiper mySwiperlq" style="padding: 20px">
            <div class="swiper-wrapper">
               @foreach ($productlq as $pro)
                  
      
                  @php
                  $img = json_decode($pro->images);
                  @endphp
                  <li style="list-style:none" class=" swiper-slide product type-product post-8099 status-publish first instock product_cat-thang-may-hitachi has-post-thumbnail downloadable shipping-taxable product-type-simple">
                     <a href="{{route('detailProduct',['cate'=>$pro->cate_slug,'slug'=>$pro->slug])}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>	
                     <div class="woocommerce-product-inner product-custom-detail">
                        <div class="woocommerce-product-header">
                           <a class="woocommerce-product-details img-cus" href="{{route('detailProduct',['cate'=>$pro->cate_slug,'slug'=>$pro->slug])}}">
                           <img width="300" height="300" src="{{$img[0]}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="{{$img[0]}} 300w, {{$img[0]}}" sizes="(max-width: 300px) 100vw, 300px" />			</a>
                           <div class="woocommerce-product-meta">
                          
                           </div>
                        </div>
                        <div class="woocommerce-product-content ">
                           <div class="woocommerce-product-holder">
                              <br>
                              <h6 style="text-align: center" class="woocommerce-product-title limit-text-2">
                                 <a href="{{route('detailProduct',['cate'=>$pro->cate_slug,'slug'=>$pro->slug])}}" >{{languageName($pro->name)}}</a>
                              </h6>
                           </div>
                        </div>
                     </div>
                  </li>
           
               @endforeach
            </div>
            <div class="swiper-pagination"></div>
          </div>
         </div>
     </div>
   </div>
   <br>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <script>
   var swiper = new Swiper(".mySwiper", {
     spaceBetween: 10,
     slidesPerView: 4,
     freeMode: true,
     watchSlidesProgress: true,
   });
   var swiper2 = new Swiper(".mySwiper2", {
     spaceBetween: 10,
     navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
     },
     thumbs: {
       swiper: swiper,
     },
   });
 </script>
   <script>
      var swiper = new Swiper(".mySwiperlq", {
        slidesPerView: 4,
        spaceBetween: 20,
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
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
      },
      });
    </script>
</main>
@endsection

