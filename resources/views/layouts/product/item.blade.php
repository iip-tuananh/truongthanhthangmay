@php
$img = json_decode($pro['images']);
@endphp
<li style="list-style:none" class="product type-product post-8099 status-publish first instock product_cat-thang-may-hitachi has-post-thumbnail downloadable shipping-taxable product-type-simple">
   <a href="{{route('detailProduct',['cate'=>$pro['cate_slug'],'slug'=>$pro['slug']])}}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>	
   <div class="woocommerce-product-inner">
      <div class="woocommerce-product-header">
         <a class="woocommerce-product-details img-cus" href="{{route('detailProduct',['cate'=>$pro['cate_slug'],'slug'=>$pro['slug']])}}">
         <img width="300" height="300" src="{{$img[0]}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async" srcset="{{$img[0]}} 300w, {{$img[0]}}" sizes="(max-width: 300px) 100vw, 300px" />			</a>
         <div class="woocommerce-product-meta">
        
         </div>
      </div>
      <div class="woocommerce-product-content">
         <div class="woocommerce-product-holder">
            <h3 class="woocommerce-product-title limit-text-2">
               <a href="{{route('detailProduct',['cate'=>$pro['cate_slug'],'slug'=>$pro['slug']])}}" >{{languageName($pro['name'])}}</a>
            </h3>
         </div>
      </div>
   </div>
</li>