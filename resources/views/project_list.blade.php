@extends('app')
@section('content')
<div id="navigation">
	<div class="container">
		<div class="row">	
			<ol class="breadcrumb">
			  <li><a href="{{url()}}">@lang('application.home')</a></li>
			  @if($category->parent_id)
			  	@if($category->parentCategory->parent_id)
			  	<li><a href="{{ url('categories/'.$category->parentCategory->parentCategory->id.'/projects') }}">{{ $category->parentCategory->parentCategory->title }}</a></li>
			  	<li><a href="{{ url('categories/'.$category->parentCategory->id.'/projects')}}">{{ $category->parentCategory->title }}</a></li>
			  	@else
			  		<li><a href="{{ url('categories/'.$category->parentCategory->id.'/projects')}}">{{ $category->parentCategory->title }}</a></li>
			  	@endif
			  @endif
			  <li class="active">{{ $category->title }}</li>
			</ol>
		</div>
	</div>
</div>
<div id="data-projecct">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				@include('includes.categories')
			</div>
			<div class="col-md-10">
				<div class="project-item">
					<div class="row">
						<div class="col-md-12"> </div>
					</div>
					<div class="row">
						@foreach($contents as $content)
						  <div class="col-sm-6 col-md-4">
						    <div class="thumbnail">
						    @if(is_array(json_decode($content->thumb_images,true)))
						    	@if(count(json_decode($content->thumb_images,true))>0)
									<img src="{{json_decode($content->thumb_images,true)[0]}}"></a>
								@else
									<img src="{{ asset('/images/sample_img.jpg')}}" />	
								@endif
							@else
						       <img src="{{ asset('/images/sample_img.jpg')}}" />
							@endif
						      <div class="caption">
						        <h3><a href="{{url('categories/'.$content->category_id.'/projects/'.$content->id)}}">{{str_limit($content->translation(Lang::locale())->first() ? $content->translation(Lang::locale())->first()->title: $content->title, $limit = 27, $end = '...')}}</a></h3> 
						      </div>
						    </div><!--/ thumbnail-->
						  </div><!--/ col--
					</div><!--/row-->
						@endforeach
					
				</div>
			</div><!--/ col-md-10-->
		</div><!-- / row -->
	</div><!--/ container -->
</div><!--/ data project-->
@endsection