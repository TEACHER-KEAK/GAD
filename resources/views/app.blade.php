<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Green GLOBAL Dedign and Architecture</title>
    <meta name="keywords" content="Green GLOBAL Dedign and Architecture">
	<meta name="description" content="Green GLOBAL Dedign and Architecture">
    <meta name="author" content="Green GLOBAL Dedign and Architecture">


	<!--Plugin and default Stylesheets -->
	 <link href="{{ asset('/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
	 <link href="{{ asset('/bootstrap/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />

	 <link href="{{ asset('/dist/css/style.css') }}" rel="stylesheet" type="text/css" />
	 <link href="{{ asset('/dist/css/owl-carousel.css') }}" rel="stylesheet" type="text/css" />
	 

	 <!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' 
type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

    <script src="{{ asset('/dist/js/vendor/modernizr-2.6.2.min.js') }}"></script>
	<!-- favicon -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	

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
    <div id="front">
        <div class="site-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-6 bg-adjust">
                        <div id="greenad_logo">
                           <img src="{{ asset('/images/green-logo.png') }}" alt="logo">
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-8 col-sm-6 col-xs-6 bg-adjust main-menu-bg">
                       
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>     
                        <div class="top_bar  main-menu">
                    		<div class="row">
                    			<div class="col-md-5">
                    			 	<h1> Green Architecture & Design Co,. Ltd.</h1>
                    			</div>
                    			 <div class="col-md-3">
                    			 	<i class="glyphicon glyphicon-earphone"> </i> (+855)81 799 961
                    			 </div>
                    			 <div class="col-md-4">
                    			 	Language: <img src="{{ asset('/images/kh_lan.gif') }}">
                    			 	<img src="{{ asset('/images/en_lan.gif') }}">
                    			 	<img src="{{ asset('/images/ch_lan.gif') }}">
                    			 </div>
                    		</div>
                        	
                         </div>
                        
                        <div class="main-menu">
                            <ul>
                                <li><a href="#front">Home</a></li>
                                <li><a href="#services">MAIN PROJECT</a></li>
                                <li><a href="#products">FURNITURE</a></li>
                                <li><a href="#products">CATALOG</a></li>
                                <li><a href="#products">ABOUT US</a></li>
                                <li><a href="#contact">CONTACT</a></li>
                            </ul>
                        </div> <!-- /.main-menu -->

                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="responsive">
                            <div class="main-menu">
                                <ul>
                                    <li><a href="#front">Home</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#products">Pro ucts</a></li>
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
	
    <div class="footer_site">
        <div class="footer_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="footer_headline">CONTACT US</h1>
                        <p>
                            <i class="glyphicon glyphicon-earphone"></i>  (+855) 81 799 961<br />
                            <i class="glyphicon glyphicon-envelope"></i>  info@greenglobale.com
                        </p>
                        <p>
                            #70, First Floor, Preah Shihanuk Blv,<br />
Sangkat Tunle Basak Khan Chhomkamon, Phnom Penh.
                        </p>
                    </div>

                     <div class="col-md-3"><h1 class="footer_headline">MENU</h1>
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">MAIN PROJECT</a></li>
                            <li><a href="#">FURNITURE</a></li>
                            <li><a href="#">CATALOG</a></li>
                            <li><a href="#">ABOUT US</a></li>
                            <li><a href="#">CONTACT</a></li> 
                        </ul>
                     </div>
                     
                    <div class="col-md-4"><div class="fb-page" data-href="https://www.facebook.com/thephnompenhtime" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/thephnompenhtime"><a href="https://www.facebook.com/thephnompenhtime">The Phnom Penh Times</a></blockquote></div></div></div>
                </div>
            </div>
        </div>

        <div class="box_copy_right">
            Copy Right 2014 Green Architecture & Design
        </div>
        
    </div>






    <!-- script -->
    <script src="{{ asset('/dist/js/vendor/jquery-1.10.1.min.js') }}"></script>
    <script src="{{ asset('/dist/js/vendor/jquery-1.10.1.min.js') }}"></script>
    <script src="{{ asset('/dist/js/jquery.easing-1.3.js') }}"></script>
    <script src="{{ asset('/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/dist/js/plugins.js') }}"></script>
    <script src="{{ asset('/dist/js/main.js') }}"></script>
    <script src="{{ asset('/dist/js/plugins_carousel.js') }}"></script>
    <script src="{{ asset('/dist/js/main_carousel.js') }}"></script>
</body>
</html>
