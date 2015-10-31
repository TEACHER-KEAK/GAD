<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>GREEN GLOBAL DESIGN AND ARCHITECTURE</title>
    <meta name="keywords" content="Green GLOBAL Dedign and Architecture">
	<meta name="description" content="Green GLOBAL Dedign and Architecture">
    <meta name="author" content="Green GLOBAL Dedign and Architecture">
    <!-- JQuery -->
    <script type="text/javascript" src="{{asset('/plugins/fancybox/lib/jquery-1.10.1.min.js')}}"></script>

	<!--Plugin and default Stylesheets -->
	 <link href="{{ asset('/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
	 <link href="{{ asset('/bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
	 <link href="{{ asset('/dist/css/style.css')}}" rel="stylesheet" type="text/css" />
	 <!-- slider -->
     <link href="{{ asset('/dist/css/owl-carousel.css')}}" rel="stylesheet" type="text/css" />

	 <!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' 
type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

    <script src="{{ asset('/dist/js/vendor/modernizr-2.6.2.min.js')}}"></script>
	<!-- favicon -->
	<link rel="shortcut icon" href="{{ asset('/images/favicon.ico')}}" type="image/x-icon" />

    <!-- dropdown menu thumnail -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/dropdown-menu/css/default.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/dropdown-menu/css/component.css')}}" />
    <script src="{{ asset('/plugins/dropdown-menu/js/modernizr.custom.js')}}"></script>

    <!-- popup master -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugins/bpopup-master/style-popup.css')}}" />
    

    <!--fancybox -->
     
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/fancybox/source/jquery.fancybox.css?v=2.1.5')}}" media="screen" />
    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5')}}" />
    <!-- Add Thumbnail helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7')}}" />
    <style>
        .pagination>.active>a, 
        .pagination>.active>a:focus, 
        .pagination>.active>a:hover, 
        .pagination>.active>span, 
        .pagination>.active>span:focus, 
        .pagination>.active>span:hover {
            background-color: #00A65A;
            border-color: #00A65A;
        }
        .btn{
            border-radius: 0;
        }
    </style>

    
	

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <!--ads popup-->        
    <div id="popup">
        <span class="button b-close"><span>X</span></span>
            <a href="#"><img src="{{ asset('/images/pop_ads.jpg')}}" /></a>
        
         <div class="counter">
            <div class="counter-align" style="width:330px">
                <span>This popup display in</span>
                <span class="timer"></span>
                <span>second,If</span>
                <span class="button small" data-click="0" id="pause">Pause</span>
                <span class="button small" id="skip">Skip</span>
            </div>
            
        </div>
    </div>

    <div id="front">
        <div class="site-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6 bg-adjust">
                        <div id="greenad_logo">
                           <a href="{{ url()}}"><img src="{{asset('/images/green-logo.png')}}" alt="logo"></a>
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-9 col-sm-6 col-xs-6 bg-adjust main-menu-bg">
                       
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>     
                        <div class="top_bar  main-menu">
                    		<div class="row">
                                <div class="col-md-7">
                                    <h1> @lang('application.company_name')</h1>
                                </div>
                                 <div class="col-md-5" id="LANGUAGES">
                                    <i class="glyphicon glyphicon-earphone"> </i> <b>@lang('application.telephone')</b>
                                    &nbsp&nbsp&nbsp&nbsp @lang('application.language'): 
                                    <a href="{{url('locale/kh')}}" title="KHMER"><img src="{{asset('/images/kh_lan.gif')}}" /></a>
                                    <a href="{{url('locale/en')}}" title="ENGLISH"><img src="{{asset('/images/en_lan.gif')}}" /></a>
                                    <a href="{{url('locale/ch')}}" title="CHINESE"><img src="{{asset('/images/ch_lan.gif')}}" /></a>
                                 </div>
                            </div>
                        	
                         </div>
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
                 
                @include('includes.header')

                <div class="row">
                    <div class="col-md-12">
                        <div class="responsive">
                            <div class="main-menu">
                                <ul>
                                    <li><a href="#front">Home</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#products">Proucts</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->
    </div> <!-- /#front -->
	
	@yield('content')
	
	@include('includes.footer')

    <!-- script -->
    <script>window.jQuery || document.write('<script src="dist/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="{{ asset('/dist/js/jquery.easing-1.3.js')}}"></script>
    <script src="{{ asset('/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{ asset('/dist/js/plugins.js')}}"></script>
    <script src="{{ asset('/dist/js/main.js')}}"></script>
    <script src="{{ asset('/dist/js/plugins_carousel.js')}}"></script>
    <script src="{{ asset('/dist/js/main_carousel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/plugins/bpopup-master/jquery.bpopup.js') }}"></script>

    <script src="{{ asset('/plugins/dropdown-menu/js/cbpHorizontalSlideOutMenu.js')}}"></script>
        <script>
            var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
        </script>

    

<script type="text/javascript">
 (function($){
     $(function() {
        $(document).ready(function(){
    
              $('#popup').bPopup(
                {content:'iframe'},
                function(){
                    $('#skip').click(function(){$('.b-close').click();})
          var count=10;
           $('.timer').text(count);
           var counter= setInterval( timer, 700);
            $('#pause').bind( "click", function(ev){
                ev.preventDefault();
                if($(this).attr('data-click') == 0) {
                    $(this).attr('data-click', 1)
                   clearInterval(counter);
                $(this).css('background-color', 'red');
                 } else {
                 $(this).attr('data-click', 0);
                    counter= setInterval( timer, 700);
                    $(this).css('background-color', '');
                }
            });
          function timer(){
            count=count-1;
          
            if(count<=0){
                clearInterval(counter);
                return;
            }
            if(count===1){
                $('.b-close').click();
            }
            $('.timer').text(count);
          }
        })
     });
    });

 })(jQuery);
 $("#LANGUAGES img").click(function(){
    location.href= $(this).parent('a').attr('href');
 });

</script>

<!--fancybox-->   

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="{{asset('/plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js')}}"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="{{asset('/plugins/fancybox/source/jquery.fancybox.js?v=2.1.5')}}"></script>
    

    <!-- Add Button helper (this is optional) -->
    <script type="text/javascript" src="{{asset('/plugins/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5')}}"></script>

    <!-- Add Thumbnail helper (this is optional) -->
    <script type="text/javascript" src="{{asset('/plugins/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7')}}"></script>

    <!-- Add Media helper (this is optional) -->
    <script type="text/javascript" src="{{asset('plugins/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6')}}"></script>
    
    <script src="{{ asset('/bower_components/nanobar/nanobar.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
             *  Simple image gallery. Uses default settings
             */

            $('.fancybox').fancybox();

            /*
             *  Different effects
             */

            // Change title type, overlay closing speed
            $(".fancybox-effects-a").fancybox({
                helpers: {
                    title : {
                        type : 'outside'
                    },
                    overlay : {
                        speedOut : 0
                    }
                }
            });

            // Disable opening and closing animations, change title type
            $(".fancybox-effects-b").fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                helpers : {
                    title : {
                        type : 'over'
                    }
                }
            });

            // Set custom style, close if clicked, change title type and overlay color
            $(".fancybox-effects-c").fancybox({
                wrapCSS    : 'fancybox-custom',
                closeClick : true,

                openEffect : 'none',

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    overlay : {
                        css : {
                            'background' : 'rgba(238,238,238,0.85)'
                        }
                    }
                }
            });

            // Remove padding, set opening and closing animations, close if clicked and disable overlay
            $(".fancybox-effects-d").fancybox({
                padding: 0,

                openEffect : 'elastic',
                openSpeed  : 150,

                closeEffect : 'elastic',
                closeSpeed  : 150,

                closeClick : true,

                helpers : {
                    overlay : null
                }
            });

            /*
             *  Button helper. Disable animations, hide close button, change title type and content
             */

            $('.fancybox-buttons').fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    buttons : {}
                },

                afterLoad : function() {
                    this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                }
            });


            /*
             *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
             */

            $('.fancybox-thumbs').fancybox({
                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,
                arrows    : false,
                nextClick : true,

                helpers : {
                    thumbs : {
                        width  : 50,
                        height : 50
                    }
                }
            });

            /*
             *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
            */
            $('.fancybox-media')
                .attr('rel', 'media-gallery')
                .fancybox({
                    openEffect : 'none',
                    closeEffect : 'none',
                    prevEffect : 'none',
                    nextEffect : 'none',

                    arrows : false,
                    helpers : {
                        media : {},
                        buttons : {}
                    }
                });

            /*
             *  Open manually
             */

            $("#fancybox-manual-a").click(function() {
                $.fancybox.open('1_b.jpg');
            });

            $("#fancybox-manual-b").click(function() {
                $.fancybox.open({
                    href : 'iframe.html',
                    type : 'iframe',
                    padding : 5
                });
            });

            $("#fancybox-manual-c").click(function() {
                $.fancybox.open([
                    {
                        href : '1_b.jpg',
                        title : 'My title'
                    }, {
                        href : '2_b.jpg',
                        title : '2nd title'
                    }, {
                        href : '3_b.jpg'
                    }
                ], {
                    helpers : {
                        thumbs : {
                            width: 75,
                            height: 50
                        }
                    }
                });
            });


        });
    </script>
	<script>
		$(function(){
    		var options = {
        		bg: '#85c91c',
        
        		// leave target blank for global nanobar
        		target: document.getElementById('myDivId'),
        
        		// id for new nanobar
        		id: 'mynano'
          	};
        
	        var nanobar = new Nanobar( options );
	        nanobar.go( 30 ); // size bar 30%
	        nanobar.go(100);
		});
		
		$("#SEARCH").submit(function(e){
		   e.preventDefault();
		   location.href= $(this).attr("action")+"/"+$("#txtSearch").val();
		});
	</script>
    @yield('script')
</body>
</html>