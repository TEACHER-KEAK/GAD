@extends('app')
@section('content')
<div id="navigation">
	<div class="container">
		<div class="row">
	        {!!$menu->content!!}
	    </div>
	</div>
</div>
@endsection