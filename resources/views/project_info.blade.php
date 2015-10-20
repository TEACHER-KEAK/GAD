@extends('app')
@section('content')
<div id="navigation">
	<div class="container">
		<div class="row">	
			<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li><a href="#">Landscape</a></li>
			  <li class="active">Garden</li>
			</ol>
		</div>
	</div>
</div>
<div id="data-projecct">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
					<h1 class="title_cat">Categories</h1>
					<ul class="category-sidepbar">
						<li> <a href="#">Landscape</a>
							<ul class="sub-category-sidebar">
								<li> <a href="#">FASHION (1210)</a></li>
								<li> <a href="#">SHOES (224)</a></li>
								<li> <a href="#">LUXURY (164)</a></li>
								<li> <a href="#">POP-UP (155)</a></li>
								<li> <a href="#">COSMETICS (144)</a></li>
							</ul>
						</li>

						<li> <a href="#">Landscape</a>
							<ul class="sub-category-sidebar">
								<li> <a href="#">FASHION (1210)</a></li>
								<li> <a href="#">SHOES (224)</a></li>
								<li> <a href="#">LUXURY (164)</a></li>
								<li> <a href="#">POP-UP (155)</a></li>
								<li> <a href="#">COSMETICS (144)</a></li>
							</ul>
						</li>

						<li> <a href="#">Landscape</a>
							<ul class="sub-category-sidebar">
								<li> <a href="#">FASHION (1210)</a></li>
								<li> <a href="#">SHOES (224)</a></li>
								<li> <a href="#">LUXURY (164)</a></li>
								<li> <a href="#">POP-UP (155)</a></li>
								<li> <a href="#">COSMETICS (144)</a></li>
							</ul>
						</li>

						<li> <a href="#">Landscape</a>
							<ul class="sub-category-sidebar">
								<li> <a href="#">FASHION (1210)</a></li>
								<li> <a href="#">SHOES (224)</a></li>
								<li> <a href="#">LUXURY (164)</a></li>
								<li> <a href="#">POP-UP (155)</a></li>
								<li> <a href="#">COSMETICS (144)</a></li>
							</ul>
						</li>
					</ul>
			</div>
			<div class="col-md-10">
				<div class="project-item">
					<div class="row">
						<h1> King Cole Ducks office by Studio Forma</h1>
					</div>
					<div class="row">
						 <ul class="bxslider">
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
		            <li>
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
		            </li>
		        </ul> <!-- /.bxslider -->	   
					</div><!--/row-->
				</div>
			</div><!--/ col-md-10-->
		</div><!-- / row -->
	</div><!--/ container -->
</div><!--/ data project-->
@endsection