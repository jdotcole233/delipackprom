@extends('header.headers')
@section('content')

<section class="delipackservices">

        <div class="container-fluid bg-info">
            <div class="row topBar about-grids" style="height:90px; padding:10px;">
                <h6 class="avail_txt">Available on Google Playstore</h6>
                <button class="btn btn-primary">Download</button>
            </div>
        </div>

        <div class="container-fluid about-grids service-layer-2">
            <div class="row" style="text-align:center">
                <h6>Finding a delivery guy has never been this easy!!</h6>
            </div>
            <div class="row mt-4 mb-3" style="text-align:center">
                <h3>Request an errand service and the closest delivery guy will pick up and delivery safely for you.</h3>
            </div>
            <div class="row layer-3" style="text-align:center">
              <h4>DeliPack works in 3 simple steps</h4>
            </div>
        </div>
        <div class="container-fluid">
          <div class="container">
              <div class="row about-grids">
                  <div class="col-md-4">
                        <div class="row">
                           <div class="col-md 12 d-flex justify-content-center">
                                <h6>1. Request</h6>
                           </div>
                        </div>

                        <div class="row" style="padding:60px">
                            <div class="col-md-12">
                                <img width="100%" height="100%" src="{{asset('images/search_bg.png')}}" alt="">
                            </div>
                        </div>

                        <div class="row" style="text-align:center; padding:10px;">
                            <div class="col-md-12">
                              <p>Input your desired pick up  and delivery locations. Allow delipack to find the best rider to . suit your need</p>
                            </div>
                        </div>
                  </div>


                  <div class="col-md-4">
                        <div class="row">
                           <div class="col-md 12 d-flex justify-content-center">
                                <h6>2. Select payment</h6>
                           </div>
                        </div>

                        <div class="row" style="padding:60px">
                            <div class="col-md-12">
                                <img width="100%" height="100%" src="{{asset('images/pay_bg.png')}}" alt="">
                            </div>
                        </div>

                        <div class="row" style="text-align:center; padding:10px;">
                            <div class="col-md-12">
                              <p>Choose a preferred mode of payment.Pay for your errand with little or no hustle</p>
                            </div>
                        </div>
                  </div>


                  <div class="col-md-4">
                        <div class="row">
                           <div class="col-md 12 d-flex justify-content-center">
                                <h6>3. Follow your errand</h6>
                           </div>
                        </div>

                        <div class="row" style="padding:60px">
                            <div class="col-md-12">
                                <img width="100%" height="100%" src="{{asset('images/track_bg.png')}}" alt="">
                            </div>
                        </div>

                        <div class="row" style="text-align:center; padding:10px;">
                            <div class="col-md-12">
                              <p>Keep an eye on your errand till delivered. Follow your rider as he/she delivers your request service</p>
                            </div>
                        </div>
                  </div>



              </div>  
          </div>
        </div>




        <div class="container-fluid bg-info">
            <div class="row topBar about-grids" style="height:100px; padding:10px; text-align:center;">
              <h6 class="avail_txt">Are you a delivery company? Don't be left out </h6>
                <button class="btn btn-primary">Request</button>
            </div>
        </div>
        <div class="container-fluid" style="background-color:#f6f6f6;">
          <div class="row">
            
            <div class="col-md-6 " style="padding:50px;">
                <div class="contanier about-grids more_than_text">
                  <div class="row d-flex justify-content-center">
                    <h4>More Than Just an App</h4>
                  </div>
                  <div class="row d-flex justify-content-center" style="text-align:center">
                    <p>We are connecting customers to the best local delivery guys.</p>
                  </div>
                  <div class="row d-flex justify-content-center" style="text-align:center">
                  <p>We are taking away the stress and hustle for your errands.</p>
                  </div>
                </div>
                <div class="col-md-12 ">
                  <img  src="{{asset('images/laptop.jpeg')}}" alt="">
                </div>
            </div>


            <div class="col-md-6">
            <section class="services-white py-5" >
                <div class="container py-lg-5 py-3">
                  <div class="row service-grid-grids text-center">
                    <div class="col-lg-4 col-md-6 service-white-grid service-grid1">
                      <div class="service-white-icon">
                        <span class="fa fa-motorcycle"></span>
                      </div>
                      <h4 class="mt-3">Fast and Safe</h4>
                      <p class="mt-3">Delivery is fast if your pick up is around you. Spare your customers no waiting time.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-white-grid service-grid2 mt-md-0 mt-5">
                      <div class="service-white-icon">
                        <span class="fa fa-user"></span>
                      </div>
                      <h4 class="mt-3">Experienced Riders</h4>
                      <p class="mt-3">We bring the customers to your business, you handle the elite riders for their need.</p>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 service-white-grid service-grid3 mt-lg-0 mt-5">
                      <div class="service-white-icon">
                        <span class="fa fa-mobile"></span>
                      </div>
                      <h4 class="mt-3">Quick Search</h4>
                      <p class="mt-3"> Your business can be located whenever, where-ever. Grow you business.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-white-grid service-grid4 mt-5">
                      <div class="service-white-icon">
                        <span class="fa fa-lock"></span>
                      </div>
                      <h4 class="mt-3">Secured Business</h4>
                      <p class="mt-3">Keep track of your rider's activities and don't worry about sales record.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-white-grid service-grid4 mt-5">
                      <div class="service-white-icon">
                        <span class="fa fa-file"></span>
                      </div>
                      <h4 class="mt-3">Accountability</h4>
                      <p class="mt-3">Be accountable for your customers product and they will know they can trust you.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 service-white-grid service-grid6 mt-5">
                      <div class="service-white-icon">
                        <span class="fa fa-cogs"></span>
                      </div>
                      <h4 class="mt-3">Business Growth</h4>
                      <p class="mt-3">Business is important to us, as it is to you. Keep servicing your clients to be in service</p>
                    </div>
                  </div>
                </div>		
            </section>
            </div>
          </div>
        </div>
        <div class="container-fluid bg-info">
            <div class="row d-flex justify-content-center" style="height:90px; padding:10px;">
              
            </div>
        </div>
</section>

@endsection