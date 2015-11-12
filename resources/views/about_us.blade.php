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
	      	<div class="col-md-3">
	      		<ul style="font-size:16px; line-height:24px;" id="SIDEBAR_MENU">
	      			@foreach($menu->sidebar_menus as $sidebar_menu)
					<li><a href="javascript:;" id="{{$sidebar_menu->id}}"><span >{{$sidebar_menu->title}}</span></a></li>
					@endforeach
					<!--<li><a href="#">Our Partner</a></li> 
					<li><a href="#">Mission Statement</a></li>-->
				</ul>

	      	</div>
	      	<div class="col-md-9" id="CONTENT">
	        		{!!$menu->content!!}
	        		

				<a class="fancybox" href="{{ asset('/images/about-company-logo.png')}}" data-fancybox-group="gallery" >
	      				<img src="{{ asset('/images/about-company-logo-thumbnail.png')}}">
	      		</a>
	      		
	      

	        		<p style="font-size:16px; line-height:24px; text-align:justify;"><br/>Green Global Architecture Design & Construction Co.,Ltd Company repaired by Mr Ry Thyra. Mr Ry Thyra worked at BOREY LAYKONG in two years go with working and studying in one university in Cambodia. Than Mr Ry Thyra has studied more on object at Vietnam country wile 7 months of finishing on this object he came back to Cambodia. Mr Ry Thyra has worked in company part of Architecture & Design in these he got experience like Exterior Design, Interior Design, Furniture Design, Design electric system and Design water system. Mr Ry Thyra has good experience and focus on work and on time on work. Mr Ry Thyra has experience for meeting customer and partner very good also. Than Mr Ry Thyra has cooperation with partner 4 people. The time in cooperation with Mr Ry Thyra and members partners make this company name GAC-4 on there time Mr Ry Thyra has cooperation 3 months. Mr Ry Thyra make one company like title on up line in 3 months already. All of these like: </p>
						<ul style="list-style: disc; font-size:16px; line-height:24px;">
							<li>Architecture Design</li>
							<li>Exterior Decoration</li> 
							<li>Interior Decoration</li>
							<li>Furniture Design</li>
							<li>M & E water supply</li>
							<li>Construction & Management</li> 
							<li>Construction Contractor</li>
						</ul>
						<p style="font-size:16px; line-height:24px; text-align:justify;">
						* Location of company: #70, Phreak Shihanouk Bvl, Sangkat Tunle Basak, Khan chhomkamorn, Phnom Penh, Cambodia.<br>
						Website: www.green-globale.com<br>
						Email: Info@green-globale.com<br>
						Phone number: (+855) 93 411676 / 78 900 676</p>

	        		</p>
	        </div>
	    </div>
	</div>
</div>
@endsection
@section('script')
<script>
	$(function(){
        $(document).on('click','#SIDEBAR_MENU a', function(e){
          var id = $(this).attr("id");
          var options = {
        	bg: '#85c91c',
        
        	// leave target blank for global nanobar
        	target: document.getElementById('myDivId'),
        
        	// id for new nanobar
        	id: 'mynano'
          };
        var URL = "{{url('/menu/')}}";
        URL = URL + "/" + id;
        var nanobar = new Nanobar( options );
        $.ajax({
              url: URL,
              dataType: "JSON",
              type: "GET",
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              beforeSend: function(){
                // move bar
                nanobar.go( 30 ); // size bar 30%
              
              },
              success: function(data){
              	console.log(data);
                $('#CONTENT').html(data.sidebar_menu.content);
                // Finish progress bar
                nanobar.go(100);
              }
          });
        });
	})
    
</script>
@endsection