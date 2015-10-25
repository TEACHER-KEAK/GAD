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
						<div class="col-md-12">
							<h1> King Cole Ducks office by Studio Forma</h1>
							<p> Posted: Landscape | Date: 10-November-2015 </p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							
							<!--images-->
							<div style="width:750px;">
<div class="car-detail flexslider">
  <ul class="slides">
   
	      <li>
	        <img class='lazy' style="width:700px;" data-original="{{ asset('/images/uploads/slide1.jpg') }}" />
	      </li>
            <li>
	        <img class='lazy' data-original="{{ asset('/images/uploads/slide2.jpg') }}" />
	      </li>
	       <li>
	        <img class='lazy' data-original="{{ asset('/images/uploads/slide3.jpg') }}" />
	      </li>
	       <li>
	        <img class='lazy' data-original="{{ asset('/images/uploads/slide4.jpg') }}" />
	      </li>

  </ul>
</div> 

<div class="detail-image-list clearfix">
    <a class="boxer boxer_image" data-index="0" >
        <img class='lazy' data-original="{{ asset('/images/uploads/thumb1.jpg') }}" />
    </a> 
    <a class="boxer boxer_image" data-index="1" >
        <img class='lazy' data-original="{{ asset('/images/uploads/thumb2.jpg') }}" />
    </a> 
    <a class="boxer boxer_image" data-index="2" >
        <img class='lazy' data-original="{{ asset('/images/uploads/thumb3.jpg') }}" />
    </a> 
    <a class="boxer boxer_image" data-index="3" >
        <img class='lazy' data-original="{{ asset('/images/uploads/thumb4.jpg') }}" />
    </a> 
    
</div>
</div>
<!--/images-->
						</div><!--/col-12 -->
					</div><!--/row-->
					<div class="row">
							<div class="col-md-8">
								<div class="project_description">
									<h2>Description</h2>
									<p>Ontario’s leading farm-to-fork duck producer – have transitioned to a new 10,000 sq ft office complex and farm fresh store located on the company’s main farm property in Newmarket, ON.
	The new building combines a farm fresh store, gourmet presentation kitchen, corporate offices and boardroom. Located on the lower level is a new home for the farm production team including a lab, space for veterinary staff, a galley kitchen and event space for up to 180 people.</p>
									<p><b>List</b></p>
									<li>The new building combines</li>
									<li>The new building combines</li>
									<li>The new building combines</li>
									<li>The new building combines</li>
								</div>	
							</div>
							<div class="col-md-4">
								<div class="company_contact_info">
									<h4>Contact us</h4>
									<p>For more details contact:</p>
									<p>
										<i class="glyphicon glyphicon-earphone"></i><b>  (+855) 81 799 961</b><br/>
										<i class="glyphicon glyphicon-envelope"></i><b>  info@greenglobale.com</b>
									</p>
									<p>
									Or give us your best contact 
details and we will follow up 
with you.
									</p>
									<div class="form-group">
            							<input type="text" class="form-control" id="name" 
            							name="name" placeholder="First & Last Name" value="">
    								</div>
    								<div class="form-group">
            							<input type="text" class="form-control" id="name" 
            							name="name" placeholder="your e-mail address" value="">
    								</div>
    								<div class="form-group">
            							<input type="text" class="form-control" id="name" 
            							name="name" placeholder="best telephone number" value="">
    								</div>
    								<div class="form-group">
								        
								            <textarea class="form-control" rows="4" name="message"></textarea>
								        
								    </div>
								    <div class="form-group">
								        <label for="human" class="control-label">2 + 3 = ?</label>
								     
								            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
								       
								    </div>
								    <div class="form-group">
								      
								            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
								       
								    </div>
    								 <div class="form-group">
								      
								            Will be used to display an alert to the user
								      
								    </div>
								</div>
							</div>
					</div>
				</div>
			</div><!--/ col-md-10-->
		</div><!-- / row -->
	</div><!--/ container -->
</div><!--/ data project-->
<!--images-->
							<div style="width:750px;">
<div class="car-detail flexslider">
  <ul class="slides">
   
	      <li>
	        <img class='lazy' style="width:700px;" data-original="{{ asset('/images/uploads/slide1.jpg') }}" />
	      </li>
            <li>
	        <img class='lazy' data-original="{{ asset('/images/uploads/slide2.jpg') }}" />
	      </li>
	       <li>
	        <img class='lazy' data-original="{{ asset('/images/uploads/slide3.jpg') }}" />
	      </li>
	       <li>
	        <img class='lazy' data-original="{{ asset('/images/uploads/slide4.jpg') }}" />
	      </li>

  </ul>
</div> 

<div class="detail-image-list clearfix">
    <a class="boxer boxer_image" data-index="0" >
        <img class='lazy' data-original="{{ asset('/images/uploads/thumb1.jpg') }}" />
    </a> 
    <a class="boxer boxer_image" data-index="1" >
        <img class='lazy' data-original="{{ asset('/images/uploads/thumb2.jpg') }}" />
    </a> 
    <a class="boxer boxer_image" data-index="2" >
        <img class='lazy' data-original="{{ asset('/images/uploads/thumb3.jpg') }}" />
    </a> 
    <a class="boxer boxer_image" data-index="3" >
        <img class='lazy' data-original="{{ asset('/images/uploads/thumb4.jpg') }}" />
    </a> 
    
</div>
</div>
<!--/images-->
@endsection