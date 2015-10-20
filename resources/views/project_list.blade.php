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
						<div class="col-md-12"> </div>
					</div>
					<div class="row">
						  <div class="col-sm-6 col-md-4">
						    <div class="thumbnail">
						       <img src="{{ asset('/images/sample_img.jpg') }}" />
						      <div class="caption">
						        <h3><a href="#">Thumbnail label</a></h3> 
						      </div>
						    </div><!--/ thumbnail-->
						  </div><!--/ col-->

						  <div class="col-sm-6 col-md-4">
						    <div class="thumbnail">
						       <img src="{{ asset('/images/sample_img.jpg') }}" />
						      <div class="caption">
						        <h3><a href="#">Thumbnail label</a></h3> 
						      </div>
						    </div><!--/ thumbnail-->
						  </div><!--/ col-->

						  <div class="col-sm-6 col-md-4">
						    <div class="thumbnail">
						       <img src="{{ asset('/images/sample_img.jpg') }}" />
						      <div class="caption">
						        <h3><a href="#">Thumbnail label</a></h3> 
						      </div>
						    </div><!--/ thumbnail-->
						  </div><!--/ col-->

						  <div class="col-sm-6 col-md-4">
						    <div class="thumbnail">
						       <img src="{{ asset('/images/sample_img.jpg') }}" />
						      <div class="caption">
						        <h3><a href="#">Thumbnail label</a></h3> 
						      </div>
						    </div><!--/ thumbnail-->
						  </div><!--/ col-->

						  <div class="col-sm-6 col-md-4">
						    <div class="thumbnail">
						       <img src="{{ asset('/images/sample_img.jpg') }}" />
						      <div class="caption">
						        <h3><a href="#">Thumbnail label</a></h3> 
						      </div>
						    </div><!--/ thumbnail-->
						  </div><!--/ col-->
						   
					</div><!--/row-->
				</div>
			</div><!--/ col-md-10-->
		</div><!-- / row -->
	</div><!--/ container -->
</div><!--/ data project-->
@endsection