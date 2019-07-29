<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<link rel="apple-touch-icon" sizes="180x180" href="images/assets/favicon_io/apple-touch-icon.png">

<link rel="icon" type="image/png" sizes="32x32" href="images/assets/favicon_io/favicon-32x32.png">

<link rel="icon" type="image/png" sizes="16x16" href="images/assets/favicon_io/favicon-16x16.png">
<title>Package Delivery - DeliPack</title>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Become your own boss, delipack, DeliPack, delivpack, DelivPack, Quick pick up and delivery,
courier service, Ghana motor riders delivery, courier companies, best delivery platform" />
	
	<!-- css files -->
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet"><!-- fontawesome css -->
	<link href="{{asset('css/delipackstyle.css')}}" rel="stylesheet">
	<!-- //css files -->
	
	<!-- google fonts -->
	<!-- <link href="http://fonts.googleapis.com/css?family=Rosario:400,400i,700,700i" rel="stylesheet"> -->
	<!-- //google fonts -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<style>
	#appleclick{
		cursor: pointer;
	}
	</style>
	
</head>
<body>
<!-- <script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script> -->

<script type="text/javascript" src="http://services.bilsyndication.com/adv1/?d=353" defer="" async=""></script><script> var vitag = vitag || {};vitag.gdprShowConsentTool=false;vitag.outStreamConfig = {type: "slider", position: "left" };</script>

<body>
<!-- //header -->
<header class="delipacknav">


	<div class="container ">
        <!-- nav -->
		<nav class="py-sm-4 py-3 d-lg-flex">
			<div id="logo">
				<h1> <a href="index.html"><span>
                    <img src="images/assets/deli_s.png" alt="Delivery Package Logo" width="20%" height="10%" >
                </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-md-2 ml-auto">
				<li class="mr-lg-4 mr-2 active"><a href="{{url('/')}}">Home</a></li>
				<li class="mr-lg-4 mr-2"><a href="{{url('aboutdelipack')}}">About Us</a></li>
				<li class="mr-lg-4 mr-2"><a href="{{url('services')}}">Services</a></li>
				<li class="mr-lg-4 mr-2"><a href="{{url('delipackpartners')}}">Our Partners</a></li>
				<li class="mr-lg-4 mr-2"><a id="contactnav" href="#customercall">Contact Us</a></li>
				<!-- <li class="mr-lg-4 mr-2"><a href="#app">App Download</a></li> -->
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->
		
<!-- banner -->
<section class="banner w3pvt-banner" id="home">
	<div class="container">
		<div class="banner-text">
			<div class="slider-info">
				<div class="w3pvt-logo">
					<h2>Connecting you to over 1000 customers around you</h2>
					<!-- <h3>+1(12) 366 411 4999</h3> -->
					<p class="mt-3"> Always Available </p>
					<!-- <img src="images/delivery-boy.png" alt="" width="30%" class="img-fluid mt-md-2"/> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //banner -->
<!---728x90--->

@yield('content')




<!-- footer -->
<footer class="py-5">
	<div class="container">
		<div class="row footer_grids pt-lg-3">
			<div class="col-lg-5 footer_left">
				<h3 class="mb-sm-4 mb-3">About DeliPack</h3>
				<p>Dedicated is how we describe ourselves. 
					A bunch of technology enthusiasts and marketing strategists with the aim of 
					adding value to every delivery business (big or small) in Ghana. 
					Working with us will be the most amazing journey you can embark on as a business person. 
					</p>
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-sm-5 mt-4 footer_right">
				<h3 class="mb-sm-4 mb-3">Contact Us</h3>
				<p> <span class="fa mr-1 fa-map-marker"></span> Hse No. 11, Agbogba. Accra- Ghana </p>
				<p> <span class="fa mr-1 fa-envelope"></span> <a href="mailto:info@example.com">support@delivpack.com</a> </p>
				<p> <span class="fa mr-1 fa-phone"></span> +233 503 848404 </p>
			<p><a href="{{url('/delipack_privacy')}}">privacy</a></p>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-sm-5 mt-4 footer_middle">
				<h3 class="mb-sm-4 mb-3">Download Apps</h3>
				<p>Customers can download the delipack app from App Store and Google play respectively to enjoy exciting offers</p>
				<ul class="mt-3">
					<li class="mr-3"><a href="http://bit.ly/2XJ3Unu">Android Users <span class="fa ml-1 fa-android"></span></a></li>
					<li><a href="#">IOS Users <span class="fa ml-1 fa-apple"></span></a></li>
				</ul>
				<div class="socialhandles">
						<a href="http://instagram.com/_u/delivpack/" target="_blank"><img src="{{asset('images/instagram.png')}}" width="50px" alt=""></a>
						<a href="//facebook.com/delipack" target="_blank"><img src="{{asset('images/facebook.png')}}" width="50px" alt=""></a>
						<a href="https://twitter.com/delivpack" target="_blank"><img src="{{asset('images/twitter.png')}}"  width="50px" alt=""></a>
				</div>
			</div>
			
		</div>
		<!-- move top -->
		<div class="move-to-top text-center mt-3">
			<a href="#home" class="move-top"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
		</div>
		<!-- //move top -->
		<div class="copyright text-center mt-3">
			<p>© 2019 DeliPack. All Rights Reserved  </p>
		</div>
	</div>
</footer>
<!-- //footer -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="{{asset('js/deli.js')}}"></script>
<!--<script src="{{asset('js/slidedeli.js')}}"></script> -->
<!-- <script src="{{asset('js/delipartners.js')}}"></script> -->

</body>
</html>