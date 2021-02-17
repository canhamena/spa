@extends('site.layout')


@section('content')
<!-- Page Title -->
<section id="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4>Our Services</h4>
      </div>
      <div class="col-md-6 text-right"> 
        <a href="index.html">Home <i class="fa fa-angle-double-right"></i></a> <span>Our Services</span> 
      </div>
    </div>
  </div>
</section>
<!-- section --> 



<!-- Services -->
<section id="our_services" class="section_space">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
       <img src="{{asset('frontend/assets/images/heading-icon.png')}}" alt="section heading">
        <h2>Our SPA Services</h2>
        <p class="padding">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
        <div class="effect"> 
          <img class="img-responsive" alt="services" src="{{asset('frontend/assets/images/1-370x402.jpg')}}"> 
          <span class="overlay-effect"> Body Treatments </span> 
          <span class="button-effect"> <a href="#" class="red-button  btn-4 btn-4c"> <span>read more</span> </a> </span> 
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="500ms">
        <div class="effect"> 
         <img class="img-responsive" alt="services" src="{{asset('frontend/assets/images/2-370x402.jpg')}}">
         <span class="overlay-effect"> Deep Tissue Massage </span> 
         <span class="button-effect"> <a href="#" class="red-button  btn-4 btn-4c"> <span>read more</span> </a> </span>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="700ms">
        <div class="effect"> 
          <img class="img-responsive" alt="services" src="{{asset('frontend/assets/images/3-370x402.jpg')}}"> 
          <span class="overlay-effect"> Stone Massage </span> 
          <span class="button-effect"> <a href="#" class="red-button  btn-4 btn-4c"> <span>read more</span> </a> </span> 
         </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="900ms">
        <div class="effect"> 
          <img class="img-responsive" alt="services" src="{{asset('frontend/assets/images/4-370x402.jpg')}}"> 
          <span class="overlay-effect"> Vita-Rich Body Treatment </span> 
          <span class="button-effect"> <a href="#" class="red-button  btn-4 btn-4c"> <span>read more</span> </a> </span> 
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1100ms">
        <div class="effect"> 
          <img class="img-responsive" alt="services" src="{{asset('frontend/assets/images/5-370x402.jpg')}}"> 
          <span class="overlay-effect"> Full Face  (Excludea Eyebrow) </span> 
          <span class="button-effect"> <a href="#" class="red-button  btn-4 btn-4c"> <span>read more</span> </a> </span> 
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1300ms">
        <div class="effect"> 
          <img class="img-responsive" alt="services" src="{{asset('frontend/assets/images/6-370x402.jpg')}}"> 
          <span class="overlay-effect"> Face Treatment </span> 
          <span class="button-effect"> <a href="#" class="red-button  btn-4 btn-4c"> <span>read more</span> </a> </span> 
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1500ms">
        <div class="effect"> 
          <img class="img-responsive" alt="services" src="{{asset('frontend/assets/images/7-370x402.jpg')}}"> 
          <span class="overlay-effect"> Body Treatments </span> 
          <span class="button-effect"> <a href="#" class="red-button  btn-4 btn-4c"> <span>read more</span> </a> </span> 
       </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1700ms">
        <div class="effect"> 
          <img class="img-responsive" alt="services" src="{{asset('frontend/assets/images/8-370x402.jpg')}}"> 
          <span class="overlay-effect"> Stone Massage </span> 
          <span class="button-effect"> <a href="#" class="red-button  btn-4 btn-4c"> <span>read more</span> </a> </span>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1900ms">
        <div class="effect"> 
          <img class="img-responsive" alt="services" src="{{asset('frontend/assets/images/5-370x402.jpg')}}"> 
          <span class="overlay-effect"> Body Treatments </span> 
          <span class="button-effect"> <a href="#" class="red-button  btn-4 btn-4c"> <span>read more</span> </a> </span> 
       </div>
      </div>
    </div>
  </div>
</section>



<!-- Footer top -->
<section id="footer-top">
  <div class="container">
    <div class="row white_bg">
      <div class="col-md-3 footer-about">
        <h4>About</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit quis dolor tristique accumsan. Pellentesque elit tortorvurna semulla facilisi. Vestibulum ut...</p>
        <img alt="logo" src="images/logo.png"> </div>
      <!-- col-md-3 -->
      <div class="col-md-3">
        <h4>Links</h4>
        <ul class="footer-links">
          <li><a href="#">About us</a></li>
          <li><a href="#">Book Now</a></li>
          <li><a href="#">Our Services</a></li>
          <li><a href="#">Our Staff</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact us</a></li>
        </ul>
      </div>
      <!-- col-md-3 -->
      <div class="col-md-3">
        <h4>News</h4>
        <ul class="news">
          <li><a href="#">Nunc arcu magna, egestas non gravida vel, condimentum eu elit.</a></li>
          <li><a href="#">Suspendisse varius nisi vitae quam porta convallis. Aliquam ac quam neque</a></li>
          <li><a href="#">Vestibulum sed sapien ac risus pulvinar</a></li>
          <li><a href="#">Nulla a urna a nibh consectetur semper quis hendrerit felis.</a></li>
        </ul>
      </div>
      <!-- col-md-3 -->
      <div class="col-md-3 footer-contact">
        <h4>Contact</h4>
        <p><span>Adress</span><br>
          Third Avenue New York, NY 10003</p>
        <p><span>Phone Number</span> <br>
          123-456-789</p>
        <p><span>Email</span><br>
          <a href="mailto:info@yourdomain.com">info@yourdomain.com</a></p>
      </div>
    </div>
  </div>
</section>
<!-- section -->
@endsection



