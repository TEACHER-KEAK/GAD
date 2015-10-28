@extends('app')
@section('content')
	<div class="site-slider">
		<div class="container">
			<div class="row">
		        <ul class="bxslider">
		        @foreach($sliders as $slider)
		        	@if($slider->image)
						<li>
			                <img src="{{$slider->image}}" alt="{{$slider->title}}">
			                <div class="container">
			                    <div class="row">
			                        <div class="col-md-12 text-right">
			                            <div class="slider-caption">
			                                <h2>{{ $slider->title}}</h2>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </li>
					@else
				       <li>
		                <img src="{{ asset('/images/slider/slide1.jpg') }}" alt="slider image 1">
		                <div class="container">
		                    <div class="row">
		                        <div class="col-md-12 text-right">
		                            <div class="slider-caption">
		                                <h2>Green Achitecture and Design</h2>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </li>
					@endif
		         @endforeach
		            <!--<li>
		                <img src="{{ asset('/images/slider/slide2.jpg') }}" alt="slider image 2">
		                <div class="container caption-wrapper">
		                    <div class="slider-caption">
		                        <h2>Green Achitecture and Design</h2>
		                    </div>
		                </div>
		            </li>
		            <li>
		                <img src="{{ asset('/images/slider/slide3.jpg') }}" alt="slider image 3">
		                <div class="container">
		                    <div class="row">
		                        <div class="col-md-12 text-right">
		                            <div class="slider-caption">
		                                <h2>Green Achitecture and Design</h2>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </li>
		            <li>
		                <img src="{{ asset('/images/slider/slide4.jpg') }}" alt="slider image 4">
		                <div class="container">
		                    <div class="row">
		                        <div class="col-md-12 text-right">
		                            <div class="slider-caption">
		                                <h2>Green Achitecture and Design</h2>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </li>
		            <li>
		                <img src="{{ asset('/images/slider/slide5.jpg') }}" alt="slider image 5">
		                <div class="container">
		                    <div class="row">
		                        <div class="col-md-12 text-right">
		                            <div class="slider-caption">
		                                <h2>DGreen Achitecture and Design</h2>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </li>-->
		        </ul> <!-- /.bxslider -->
			</div><!--row-->
		</div><!-- container -->
	</div> <!-- /.site-slider -->


<div class="bx-thumbnail-wrapper">
    <div class="container">
        <div class="row">
         	<div id="bx-pager">
         	@foreach($sliders as $key => $slider)
		        @if($slider->thumb_image)	
                	<a data-slide-index="{{$key}}" href=""><img src="{{ $slider->thumb_image }}" alt="{{$slider->title}}" style="width:170px; height:80px;"/></a>
                @endif
           	@endforeach
<!--                <a data-slide-index="1" href=""><img src="{{ asset('/images/slider/thumb2.jpg') }}" alt="image 2" /></a>
                <a data-slide-index="2" href=""><img src="{{ asset('/images/slider/thumb3.jpg') }}" alt="image 3" /></a>
                <a data-slide-index="3" href=""><img src="{{ asset('/images/slider/thumb4.jpg') }}" alt="image 4" /></a>
                <a data-slide-index="4" href=""><img src="{{ asset('/images/slider/thumb5.jpg') }}" alt="image 5" /></a>-->
            </div>
        </div>
        <div class="row">
        	<div class="col-md-12">
            	<div class="intro_content">
            		<p><span>Green Global Architecture Design & Construction Co., Ltd.</span>  is a Cambodia base Company in Phnom  Penh. Green branding have been in Phnom Penh since 2007. </p>
            		<p>We provide Architectural and Interior Design with Consultancy, Construction with Renovation services for turnkey project for villa, condominium, apartment, hotel, lifestyle retail shop, cafe, ...</p>
            	</div>
        	</div>
        </div>
    </div>
</div><!-- / thumbnail-wrapper -->

<div class="box_intro_services">
	<div class="container intro_box_color">
    	 <div class="row">
        	<div class="col-md-2">
    			<img src="{{ asset('/images/architecture_services_icon.png') }}">
				<h3>Architural Design</h3>
        	</div>
        	<div class="col-md-2">
    			<img src="{{ asset('/images/lanscape_services_icon.png') }}">
				<h3>Exterior Design</h3>
        	</div>
        	<div class="col-md-2">
    			<img src="{{ asset('/images/interior_design_services_icon.png') }}">
				<h3>Interior Decoration</h3>
        	</div>
        	<div class="col-md-2">
    			<img src="{{ asset('/images/furniture_design_services_icon.png') }}">
				<h3>Furniture Design</h3>
        	</div>
        	<div class="col-md-2">
    			<img src="{{ asset('/images/water_services_icon.png') }}">
				<h3>M&E Water Supply</h3>
        	</div>
        	<div class="col-md-2">
    			<img src="{{ asset('/images/consultant_icon.png') }}">
				<h3>Consultant & Management </h3>
        	</div>
        </div><!--row-->	
    </div><!--container-->	
</div> <!--/ box info services -->

<div class="box_recently_project">
	<div class="container">
        <div class="page-section text-center">
            <div class="row">
                 <h3 style="padding:0 0 20px 0">Recently Project</h3>
                <div class="owl-carousel">
                    <div class="service-item">
                        <div class="img-project">
                             <a href="#"> <img src="{{ asset('/images/sample_img.jpg') }}" /></a>
                         </div>
                         <div class="project-title"><a href="#"> Read Documents</a></div>
                    </div>
                     <div class="service-item">
                        <div class="img-project">
                             <a href="#"> <img src="{{ asset('/images/sample_img.jpg') }}" /></a>
                         </div>
                         <div class="project-title"><a href="#"> Read Documents</a></div>
                    </div>
                    <div class="service-item">
                        <div class="img-project">
                             <a href="#"> <img src="{{ asset('/images/sample_img.jpg') }}" /></a>
                         </div>
                         <div class="project-title"><a href="#"> Read Documents</a></div>
                    </div>
                     <div class="service-item">
                        <div class="img-project">
                             <a href="#"> <img src="{{ asset('/images/sample_img.jpg') }}" /></a>
                         </div>
                         <div class="project-title"><a href="#"> Read Documents</a></div>
                    </div>                  
                </div>
            </div>
        </div><!-- ./ page section -->
    </div><!-- ./ container -->
</div><!--/ recently project -->

<div class="client_reference">
    <div class="container">
        <div class="row">
            <h3 style="padding:0 0 20px 0; margin:0px; text-align:center;">Our Client</h3>
            <div class="col-md-2">
                <div class="img_client_box"><img src="{{ asset('/images/client_logo_1.jpg') }}"></div>
            </div>
             <div class="col-md-2">
                 <div class="img_client_box"><img src="{{ asset('/images/client_logo_2.jpg') }}"></div>
            </div>
             <div class="col-md-2">
                  <div class="img_client_box"><img src="{{ asset('/images/client_logo_3.jpg') }}"></div>
            </div>
             <div class="col-md-2">
                  <div class="img_client_box"><img src="{{ asset('/images/client_logo_4.jpg') }}"></div>
            </div>
             <div class="col-md-2">
                  <div class="img_client_box"><img src="{{ asset('/images/client_logo_5.jpg') }}"></div>
            </div>
             <div class="col-md-2">
                  <div class="img_client_box"><img src="{{ asset('/images/client_logo_6.jpg') }}"></div>
            </div>

        </div>
    </div>
</div>
@endsection