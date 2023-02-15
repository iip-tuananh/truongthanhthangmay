@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div id="pagetitle" class="page-title bg-image ">
	<div class="container">
	   <div class="page-title-inner">
		  <div class="page-title-holder">
			 <h1 class="page-title">{{languageName($blog_detail->title)}}</h1>
		  </div>
		  <ul class="ct-breadcrumb">
			 <li><a class="breadcrumb-entry" href="{{route('home')}}">TRANG CHỦ</a></li>
			 <li><a class="breadcrumb-entry" href="{{route('listCateBlog',['slug'=>$blog_detail->cate->slug])}}">{{languageName($blog_detail->cate->name)}}</a></li>
			 <li><span class="breadcrumb-entry">{{languageName($blog_detail->title)}}</span></li>
		  </ul>
	   </div>
	</div>
 </div>
 <div id="content" class="site-content bg-custom" >
	<div class="content-inner">
	   <div class="container content-container">
		  <div class="row content-row" style="padding-top: 50px; padding-bottom:50px">
			 <div id="primary"  class="content-area content-has-sidebar float-left col-xl-8 col-lg-8 col-md-12 col-sm-12">
				<main id="main" class="site-main">
				   <article id="post-10046" class="single-hentry post-10046 post type-post status-publish format-standard has-post-thumbnail hentry category-hoat-dong-cong-ty category-tin-tuc tag-cap-nhat-thang-may-hang-ve tag-kien-hang-thang-may tag-kien-hang-thang-may-ve">
					  <div class="entry-blog">
						 <div class="entry-featured">
							<img width="980" height="432" src="{{$blog_detail->image}}" class="attachment-intime-large size-intime-large wp-post-image" alt="" decoding="async" />                                    
							<div class="entry-date ct-date-box">
							   <div class="entry-date-inner">
								  <span>{{date('d', strtotime($blog_detail->created_at))}}</span>
								  <span>Th{{date('m', strtotime($blog_detail->created_at))}}, {{date('y', strtotime($blog_detail->created_at))}}</span>
							   </div>
							</div>
						 </div>
						 <div class="entry-body">
							<ul class="entry-meta ct-item-meta">
								<a class="breadcrumb-entry" href="{{route('listCateBlog',['slug'=>$blog_detail->cate->slug])}}">{{languageName($blog_detail->cate->name)}}</a>
							
							</ul>
							<div class="entry-content clearfix">
								{!!languageName($blog_detail->content)!!}
							</div>
						 </div>
					  </div>
				
				   </article>
				   <!-- #post -->
			
				   <!-- #comments -->            
				</main>
				<!-- #main -->
			 </div>
			 <!-- #primary -->
			 <aside id="secondary"  class="widget-area widget-has-sidebar sidebar-fixed col-xl-4 col-lg-4 col-md-12 col-sm-12">
				<div class="sidebar-sticky">
					@foreach ($listblogcate as $item)
						<section id="ct_recent_posts-1" class="widget widget_ct_recent_posts">
						<div class="widget-content">
							<h2 class="widget-title"><span>{{languageName($item->name)}}</span></h2>
							<div class="posts-list recent">
								@foreach ($item->listBlog as $blog)
									<div class="entry-brief" style="padding-bottom: 0px;
									margin-bottom: 23px;">
										<div class="entry-media image-effect-white">
										<a href="{{route('detailBlog',['slug'=>$blog->slug])}}"><img src="{{$blog->image}}" alt="{{languageName($blog->title)}}" /></a>
										</div>
										<div class="entry-content">
										<h4 class="entry-title"><a href="{{route('detailBlog',['slug'=>$blog->slug])}}" title="{{languageName($blog->title)}}">{{languageName($blog->title)}}</a></h4>
										</div>
									</div>
								@endforeach
							</div>
						</div>
						</section>
					@endforeach
				</div>
			 </aside>
		  </div>
	   </div>
	</div>
	<!-- #content inner -->
 </div>
 <!-- #content -->
@endsection