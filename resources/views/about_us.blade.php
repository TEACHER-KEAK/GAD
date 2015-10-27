<div id="navigation">
	<div class="container">
		<div class="row">	
			<ol class="breadcrumb" style="text-transform: uppercase;">
			  <li><a href="{{url()}}">@lang('application.home')</a></li>
			  @if($category->parent_id)
			  	@if($category->parentCategory->parent_id)
			  	<li><a href="{{ url('categories/'.$category->parentCategory->parentCategory->id.'/projects') }}">{{ $category->parentCategory->parentCategory->title }}</a></li>
			  	<li><a href="{{ url('categories/'.$category->parentCategory->id.'/projects')}}">{{ $category->parentCategory->title }}</a></li>
			  	@else
			  		<li><a href="{{ url('categories/'.$category->parentCategory->id.'/projects')}}">{{ $category->parentCategory->title }}</a></li>
			  	@endif
			  @endif
			  <li><a href="{{ url('categories/'.$category->id.'/projects')}}">{{ $category->title }}</a></li>
			  <li class="active"><strong>{{$content->title}}</strong></li>
			</ol>
		</div>
	</div>
</div>


<div id="box_about_us">
	About us
</div>