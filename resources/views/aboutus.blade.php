@extends('layouts.main.master')
@section('title')
Về chúng tôi
@endsection
@section('description')
Về chúng tôi
@endsection
@section('css')
@section('image')
{{url(''.$setting->logo)}}
@endsection
@endsection
@section('js')
@endsection
@section('content')
<style>
   body .page-title-inner{
    background-image: url('frontend/images/bg-page-title1.jpg');
    height: 215px;
    
}
ul.ct-breadcrumb {
    display: flex;
    justify-content: center;
}
</style>

   <div class="page-title-inner">
      <div class="page-title-holder">
         <h1 class="page-title">Giới Thiệu</h1>
      </div>
      <ul class="ct-breadcrumb">
         <li><a class="breadcrumb-entry" href="{{route('home')}}">TRANG CHỦ</a></li>
         <li><span class="breadcrumb-entry">Giới Thiệu</span></li>
      </ul>
 
</div>
</div>
<style>
   .cus-heder{
      text-align: center;
      color: rgb(134, 9, 9) !important;
      padding-top: 20px;
   }
</style>
                                       <div class="container cus-heder">
                                             <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default" style="color:rgb(170, 5, 5)">{{$setting->company}}</h2>
                                             </div>
                                       </div>
                                       <br>
                                       
                                       <div class="container">
                                          {!!$gioithieu->content!!}
                                       </div>
<!-- #content -->
@endsection