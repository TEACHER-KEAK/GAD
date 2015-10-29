@extends('app')
@section('content')
<div id="navigation">
	<div class="container">
		<input type="hidden" value="{{URL::to('categories/'.$category->id.'/projects')}}" id="URL"/>
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
			  <li class="active"><strong>{{$category->title}}</strong></li>
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
						<div class="col-md-12"></div>
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
						  </div><!--/ col -->
						@endforeach
					</div><!--/row-->
					<div class="row">
						<div class="col-md-12">
							<div id="main_pagging"> 
								{!! $contents->render() !!}
								<!--<ul class = "pagination">
								   <li><a href = "#">&laquo;</a></li>
								   <li class = "active"><a href = "#">1</a></li>
								   <li class = "disabled"><a href = "#">2</a></li>
								   <li><a href = "#">3</a></li>
								   <li><a href = "#">4</a></li>
								   <li><a href = "#">5</a></li>
								   <li><a href = "#">&raquo;</a></li>
								</ul>-->
							</div>	
						</div>
					</div>
				 </div><!-- project-item -->
			</div><!--/ col-md-10-->
		</div><!-- / row -->
	</div><!--/ container -->
</div><!--/ data project-->
@endsection
@section('script')
	<script>
        $(document).on('click','.pagination a', function(e){
          e.preventDefault();
          var pageId = $(this).attr('href').split('page=')[1];
          var data = {
                page: pageId
          };
          /*var options = {
        	bg: '#e74c3c',
        
        	// leave target blank for global nanobar
        	target: document.getElementById('myDivId'),
        
        	// id for new nanobar
        	id: 'mynano'
          };*/
        
        //var nanobar = new Nanobar( options );
        $.ajax({
              url: "{{URL::to('/categories/projects')}}",
              data: data,
              dataType: "JSON",
              type: "POST",
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              beforeSend: function(){
                // move bar
                //nanobar.go( 30 ); // size bar 30%
              
              },
              success: function(data){
                $('#CONTENT').html(data);
                // Finish progress bar
                //nanobar.go(100);
              }
          });
        });
    </script>
@endsection