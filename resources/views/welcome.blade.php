@extends('header.headers')
@section('content')
<!-- about -->
<section class="deliabout py-sm-5 py-4" id="about">
	<div>
		<div class="containerr">
				<div class="about-grids">
						<div class="col-lg-12">
							<h6 class="mt-4">Be your own boss</h6>
							<h4 class="mt-3">Become a trusted delivery service in  Your City With DeliPack</h4>
							<p class="mt-sm-4 mt-3">We provide you with a vibrant and state of the art platform to make your product/service readily available to a wide audience. No need to worry about advertisement. DeliPack aims at making your company known to every busy/idle person in Ghana.</p>
							<p class="mt-sm-4 mt-3">Why worry about paperwork, when DeliPack can provide you with a safe, secure and user – friendly platform. In few simple steps, DeliPack gives you the power to control your business from the comfort of your home or office.</p>
						</div>
				</div>
		</div>
	</div>

	<div id="requestservice">
		<div class="about-grids">
			<div class="padding">
				<form id="sendClientRequestForm">
				  <span id="requestMessage"> <h5>Request our service </h5></span>
        		  <img id="requestMessageSpinner" style="display:none;" src="{{asset('images/ajaxspinner.gif')}}" width="20%" alt="">
				<meta name="csrf-token" content="{{csrf_token()}}">
				<div class="form-style-agile">
					<input placeholder="Company Name" id="company_name" name="company_name" type="text" required="">
					<input placeholder="Phone Number" id="phone_number" name="phonenumber" type="text" required="">
					<input placeholder="Location" id="location" name="location" type="text" required="">
					<input placeholder="Email" id="email" name="email" type="text" required="">
					<p class="text-white" for="Message">Request Message (optional)</p>
					<textarea placeholder="Message" id="message" name="message" rows="6" type="text" class="form-control"> 
					</textarea>
					<br>
					<!-- <input placeholder="Password" name="password" type="password" required=""> -->
					<button class="book-btn btn sendClientRequestBtn"> Request Now</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<div>
		<img src="images/laptop1.jpeg" width="100%" alt="" class="img-fluid"/>
	</div>
	<!-- <div class="container py-lg-5">
		<div class="row about-grids">
			<div class="col-lg-5">
				<h6 class="mt-4">Be your own boss</h6>
				<h4 class="mt-3">Become a trusted delivery service in  Your City With DeliPack</h4>
				<p class="mt-sm-4 mt-3">We are providing you with a vibrant and state of the art platform to make your product/service readily available to a wider audience. No need to worry about advertisement. DeliPack is aimed at making your company known to every busy/idle person in Ghana.</p>
				<p class="mt-sm-4 mt-3">Why worry about paper work, when delipack is providing you with a safe, secure and easy to use platform. In just some few simple steps, delipack is giving you the power to control your business from the comfort of your home or office.</p>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
				<div class="padding">
					<form action="#" method="post">
						<h5 class="mb-3">Request our service</h5>
						<div class="form-style-agile">
							<input placeholder="Name" name="name" type="text" required="">
							<input placeholder="Phone Number" name="number" type="text" required="">
							<input placeholder="Source(From)" type="text" required="">
							<input placeholder="Destination(To)" type="text" required="">
							<select>
							  <option value="0">Choose Vehicle</option>
							  <option value="1">Vehicle1</option>
							  <option value="2">Vehicle2</option>
							  <option value="3">Vehicle3</option>
							  <option value="3">Vehicle4</option>
							  <option value="3">Vehicle5</option>
							</select>
							<input placeholder="Password" name="password" type="password" required="">
							<button class="book-btn btn">Book Now</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-4">
				<img src="images/phone.png" width="80%" alt="" class="img-fluid"/>
			</div>
		</div>
	</div> -->
</section>
<!-- //about -->
<!---728x90--->

<!-- //what we do -->
<section class="services py-5" id="services">
	<div class="container py-lg-5 py-3">
		<div class="row service-grid-grids text-center">
			<div class="col-lg-4 col-md-6 service-grid service-grid1">
				<div class="service-icon">
					<span class="fa fa-motorcycle"></span>
				</div>
				<h4 class="mt-3">Fast and Safe</h4>
				<p class="mt-3">Delivery is fast if your pick up is around you. Spare your customers no waiting time.</p>
			</div>
			<div class="col-lg-4 col-md-6 service-grid service-grid2 mt-md-0 mt-5">
				<div class="service-icon">
					<span class="fa fa-user"></span>
				</div>
				<h4 class="mt-3">Experienced Riders</h4>
				<p class="mt-3">We bring the customers to your business, you handle the elite riders for their need.</p>
			</div>
			
			<div class="col-lg-4 col-md-6 service-grid service-grid3 mt-lg-0 mt-5">
				<div class="service-icon">
					<span class="fa fa-mobile"></span>
				</div>
				<h4 class="mt-3">Quick Search</h4>
				<p class="mt-3"> Your business can be located whenever, where-ever. Grow you business.</p>
			</div>
			<div class="col-lg-4 col-md-6 service-grid service-grid4 mt-5">
				<div class="service-icon">
					<span class="fa fa-lock"></span>
				</div>
				<h4 class="mt-3">Secured Business</h4>
				<p class="mt-3">Keep track of your rider's activities and don't worry about sales record.</p>
			</div>
			<div class="col-lg-4 col-md-6 service-grid service-grid4 mt-5">
				<div class="service-icon">
					<span class="fa fa-file"></span>
				</div>
				<h4 class="mt-3">Accountability</h4>
				<p class="mt-3">Be accountable for your customers product and they will know they can trust you.</p>
			</div>
			<div class="col-lg-4 col-md-6 service-grid service-grid6 mt-5">
				<div class="service-icon">
					<span class="fa fa-cogs"></span>
				</div>
				<h4 class="mt-3">Business Growth</h4>
				<p class="mt-3">Business is important to us, as it is to you. Keep servicing your clients to be in service</p>
			</div>
		</div>
	</div>		
</section>
<!-- what we do -->
<!---728x90--->

<!-- tarrifs -->
			
</section> -->
<div class="container visible-sm visible-xs mb-4">
  <h2 class="text-center visible-sm visible-xs">Our  Partners/ Our Clients</h2>
   <section class="customer-logos slider visible-sm visible-xs">
      @foreach ($company_names as $company_name)
                @if($company_name->company_logo_path != "delipack1.png")
                    <div class="slide"> 
                        <img src="https://superuser.delipackport.com/company_logos/{{$company_name->company_logo_path}}" />
                    </div>
                @endif
            @endforeach
   </section>
</div>

<!-- //tarrifs -->

<!-- stats -->
<section class="stats py-5" id="stats">
	<div class="container py-sm-3">	
		<div class="row">
			<div class="col-sm-4 col-6 text-center">
				<span class="fa mr-1 fa-users"></span>
				<h4>10,000+</h4>
				<p>Customers</p>
			</div>	
			<div class="col-sm-4 col-6 text-center">
				<span class="fa mr-1 fa-motorcycle"></span>
				<h4>1200</h4>
				<p>Elite riders</p>
			</div>	
			<div class="col-sm-4 col-6 mt-sm-0 mt-4 text-center">
				<span class="fa mr-1 fa-map"></span>
				<h4>500+</h4>
				<p>Delivery Routes</p>
			</div>		
		</div>		
	</div>		
</section>
<!-- //stats -->

<!-- call us -->
<section class="customer-call" id="customercall">
	<div class="container">
		<div class="row">
			<div class="col-md-8 py-sm-5 py-4 mt-3">
				<h4 class="mt-2">24 Hours 7 Days a Week</h4>
				<p>Call Us Now</p>
				<h2><span class="fa mr-1 fa-phone"></span> +233 503 848404</h2>
				<p class="mt-4">Call to set up a meeting or <a href="#requestservice" ><b>Request DeliPack for your company</b></a>. An agent from Delipack will get intouch
				to make further arrangment with you.</p>
				<p class="mt-4"><a href="{{url('aboutdelipack')}}"> Read about us</a></p>
			</div>		
			<div class="col-lg-3 offset-lg-1 col-md-4 col-sm-6 col-8 pt-md-5 mt-lg-3">
				<img src="images/agent-18762.png" alt="">
			</div>		
		</div>		
	</div>		
</section>
<!-- //call us -->

<!--/app-->
<section class="mobile-app-sec py-5" id="app">
	<div class="container py-sm-3">
		<!--/mobile-app -->
		<div class="row inner-sec-wthree-agileits">
			<div class="col-lg-7 pt-lg-5 app-info text-left">
				<h3 class="tittle mob pb-sm-4">Download the Mobile App for free <br>Get More Exciting Offers</h3>
				<p class="para_vl">Customers can download the delipack app from App Store and Google play respectively to enjoy exciting offers</p>
				<div class="app-devices">
					<a href="#" class="mr-3">
						<img src="images/comingsoonapple.png" width="30%" alt="">
					</a>
					 <a href="http://bit.ly/2XJ3Unu">
						<img src="{{asset('images/googleplayicon.png')}}" width="40%" alt="">
					</a>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-lg-3 offset-lg-2 col-md-4 col-sm-6 col-8 app-img text-right">
				<img src="images/phone.png" width="100%" alt=" " class="img-fluid">
			</div>
			<!--//mobile-app -->
		</div>
	</div>
</section>
<!--//app-->
@endsection