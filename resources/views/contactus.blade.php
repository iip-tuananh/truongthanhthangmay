@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main id="main" class="site-main">
	<article id="post-25" class="post-25 page type-page status-publish hentry">
	   <div class="entry-content clearfix">
		  <div data-elementor-type="wp-page" data-elementor-id="25" class="elementor elementor-25" data-elementor-settings="[]">
			 <div class="elementor-section-wrap">
				<section class="elementor-section elementor-top-section elementor-element elementor-element-7a9fd1bf elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7a9fd1bf" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
				   <div class="elementor-container elementor-column-gap-extended ">
					  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-26f38106" data-id="26f38106" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<section class="elementor-section elementor-inner-section elementor-element elementor-element-56464b89 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="56464b89" data-element_type="section">
							   <div class="elementor-container elementor-column-gap-extended ">
								  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-673df171" data-id="673df171" data-element_type="column">
									 <div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-3cd2e102 elementor-widget elementor-widget-ct_heading" data-id="3cd2e102" data-element_type="widget" data-widget_type="ct_heading.default">
										   <div class="elementor-widget-container">
											  <div class="ct-heading h-align- item-st-default">
												 <div class="item--sub-title style-default">
													<span>
													Get in touch            </span>
												 </div>
												 <h3 class="item--title case-animate-time st-default " data-wow-delay="ms">
													<span>{{$setting->company}}</span>    
												 </h3>
											  </div>
										   </div>
										</div>
									 </div>
								  </div>
								  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-33fd33c9" data-id="33fd33c9" data-element_type="column">
									 <div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-6fc40edf elementor-widget elementor-widget-ct_text_editor" data-id="6fc40edf" data-element_type="widget" data-widget_type="ct_text_editor.default">
										   <div class="elementor-widget-container">
											  <div id="ct_text_editor-6fc40edf" class="ct-text-editor " data-wow-delay="ms">
												 <div class="ct-inline-css"  data-css="
													">
												 </div>
												 <div class="ct-text-editor elementor-clearfix">
													<p>Hỗ trợ tư vấn thang máy 24/7. </p>
												 </div>
											  </div>
										   </div>
										</div>
									 </div>
								  </div>
							   </div>
							</section>
							<section class="elementor-section elementor-inner-section elementor-element elementor-element-23e5c084 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="23e5c084" data-element_type="section">
							   <div class="elementor-container elementor-column-gap-extended ">
								  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1f7288b8" data-id="1f7288b8" data-element_type="column">
									 <div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-159c8dcb elementor-widget elementor-widget-ct_point" data-id="159c8dcb" data-element_type="widget" data-widget_type="ct_point.default">
										   <div class="elementor-widget-container">
											  <div class="ct-point">
												 <div class="ct-point-image">
													<img decoding="async" width="483" height="363" src="https://nsh-group.vn/wp-content/uploads/2020/11/maps-point.png" class="attachment-full" alt="" />	        					    
												
												 </div>
											  </div>
										   </div>
										</div>
									 </div>
								  </div>
								  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6dc78a9f" data-id="6dc78a9f" data-element_type="column">
									 <div class="elementor-widget-wrap elementor-element-populated">
										<div class="elementor-element elementor-element-7f746ba7 elementor-widget elementor-widget-ct_heading" data-id="7f746ba7" data-element_type="widget" data-widget_type="ct_heading.default">
										   <div class="elementor-widget-container">
											  <div class="ct-heading h-align- item-st-default">
												 <h3 class="item--title case-animate-time st-default " data-wow-delay="ms">
													<span>Liên Hệ Tư Vấn</span>    
												 </h3>
											  </div>
										   </div>
										</div>
										<div class="elementor-element elementor-element-a32b540 elementor-widget elementor-widget-ct_contact_form" data-id="a32b540" data-element_type="widget" data-widget_type="ct_contact_form.default">
										   <div class="elementor-widget-container">
											  <div class="ct-contact-form ct-contact-form-layout1 style1 ">
												 <div class="ct-contact-form">
													<div role="form" class="wpcf7" id="wpcf7-f626-p25-o1" lang="en-US" dir="ltr">
													   <div class="screen-reader-response">
														  <p role="status" aria-live="polite" aria-atomic="true"></p>
														  <ul></ul>
													   </div>
													   <form action="{{route('postcontact')}}" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
														@csrf
														  <div class="row">
															 <div class="input-filled col-lg-6 col-md-6"><label>Họ tên*</label><span class="wpcf7-form-control-wrap hoten"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="..." /></span></div>
															 <div class="input-filled col-lg-6 col-md-6"><label>Điện thoại*</label><span class="wpcf7-form-control-wrap dienthoai"><input type="phone" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="090xxx" /></span></div>
														  </div>
														  <div class="row">
															
															 <div class="input-filled col-lg-6 col-md-6"><label>Email</label><span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="abc@abc.com" /></span></div>
														  </div>
														  <div class="row">
															 <div class="input-filled col-12"><label>Nhu cầu tư vấn*</label><span class="wpcf7-form-control-wrap your-message"><textarea name="mess" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Nhu cầu..."></textarea></span></div>
															 <div class="input-filled col-12"><button type="submit" class="wpcf7-submit btn btn-secondary btn-icon-right btn-block btn-animate"><span>GỬI ĐI</span><i>+</i></button></div>
														  </div>
														  <div class="wpcf7-response-output" aria-hidden="true"></div>
													   </form>
													</div>
												 </div>
											  </div>
										   </div>
										</div>
									 </div>
								  </div>
							   </div>
							</section>
						
						 </div>
					  </div>
				   </div>
				</section>
			
			 </div>
		  </div>
	   </div>
	   <!-- .entry-content -->
	</article>
	<!-- #post-25 -->
 </main>
@endsection