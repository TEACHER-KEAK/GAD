@extends('app')
@section('content')
<div id="navigation">
	<div class="container">
		<div class="row">	
			<ol class="breadcrumb" style="text-transform: uppercase;">
			  <li><a href="{{url()}}">@lang('application.home')</a></li>
			  <li class="active"><strong>{{$menu->title}}</strong></li>
			</ol>
		</div>
	</div>
</div>
<div id="data-projecct">
	<div class="container">
		<div class="row">
	        {!!$menu->content!!}
	    </div>
	</div>
</div>
@endsection