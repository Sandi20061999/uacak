<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/animate.css">
	<link rel="stylesheet" type="text/css" href="/css/icomoon.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<script type="text/javascript" src="/js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">	
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<div class="profile-thumb" style="background: url(images/user-3.jpg);"></div>
							<h1><span>Diki Rahmad Sandi</span></h1>
							<h3><span>Web Developer / Photographer</span></h3>
							<p>
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-twitter2"></i></a></li>
									<li><a href="#"><i class="icon-facebook2"></i></a></li>
									<li><a href="#"><i class="icon-linkedin2"></i></a></li>
									<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								</ul>
							</p>
							<hr>
							<p>
								<ul class="fh5co-social-icons">
									@section('sidebar')
									<li><a>HTML</a></li>
									<li><a>CSS</a></li>
									<li><a>JS</a></li>
									 
									@show
									</ul>
							</p>
							<h3>@include('layout.header')</h3>
							<h4>@yield('content')</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-about" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>About Me</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="info">
						<li><span class="first-block">Full Name:</span><span class="second-block">Diki Rahmad Sandi</span></li>
						<li><span class="first-block">Phone:</span><span class="second-block">+62 895 6062 2609 6</span></li>
						<li><span class="first-block">Email:</span><span class="second-block">dikisandi2006@gmail.com</span></li>
						<li><span class="first-block">Website:</span><span class="second-block">www.wicara.blog</span></li>
						<li><span class="first-block">Address:</span><span class="second-block">Rt:004 Rw:002, Desa Bojong, Kec.Sekampung Udik, Kab.Lampung Timur</span></li>
					</ul>
				</div>
				<div class="col-md-8">
					<h2>Hello There!</h2>
					<p>There live the blind texts far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in bookmarksgrove there live the blind texts far from the countries.</p>
					<p>Far far away, behind the word mountains, Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci there live the blind texts from the countries Vokalia and Consonantia, there live the blind texts. Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-facebook3"></i></a></li>
							<li><a href="#"><i class="icon-linkedin2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</div>

	
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<!-- Easy PieChart -->
	<script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>

		<script type="text/javascript" src="/js/google_map.js"></script>
		<script type="text/javascript" src="/js/main.js"></script>

	</body>
</html>
