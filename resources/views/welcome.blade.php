@extends('site.layout')


@section('content')
<section id="main-slider" class="carousel">
  <div class="carousel slide">
    <div class="carousel-inner">
      <div class="item active" style="background-image: url({{asset('frontend/assets/images/banner-1.jpg')}})">
        <div class="container text-center">
          <div class="row">
            <div class="col-sm-12">
              <div class="carousel-content">
                <h2 class="animation animated-item-4"> Welcome to Beauty & Spa </h2>
                <h1 class="animation animated-item-5"> Exhaustive Resource of Spa Treatments </h1>
                <a class="btn-slide animation animated-item-1 hvr-ripple-out" href="#">Read More</a> </div>
            </div>
          </div>
        </div>
      </div><!--/.item-->
      
      <div class="item" style="background-image:url({{asset('frontend/assets/images/banner-2.jpg')}})">
        <img src="">
        <div class="container text-center">
          <div class="row">
            <div class="col-sm-12">
              <div class="carousel-content">
                <h2 class="animation animated-item-4">Welcome to Beauty & Spa</h2>
                <h1 class="animation animated-item-5">Exhaustive Resource of Spa Treatments</h1>
                <a class="btn-slide animation animated-item-1 hvr-ripple-out" href="#">Read More</a> </div>
            </div>
          </div>
        </div>
      </div><!--/.item-->
      
      <div class="item" style="background-image:url({{asset('frontend/assets/images/banner-3.jpg')}})">
        <div class="container text-center">
          <div class="row">
            <div class="col-sm-12">
              <div class="carousel-content">
                <h2 class="animation animated-item-4">Welcome to Beauty & Spa</h2>
                <h1 class="animation animated-item-5">Exhaustive Resource of Spa Treatments</h1>
                <a class="btn-slide animation animated-item-1 hvr-ripple-out" href="#">Read More</a> </div>
            </div>
          </div>
        </div>
      </div><!--/.item--> 
    </div>
  </div>
  <!--/.carousel--> 
  <a class="prev hidden-xs" href="#main-slider" data-slide="prev"> <i class="fa fa-chevron-left"></i> </a> 
  <a class="next hidden-xs" href="#main-slider" data-slide="next"> <i class="fa fa-chevron-right"></i> </a> 
</section>



<!-- About Us -->
<section class="page-block padding_top" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center"> <img src="{{asset('frontend/assets/images/heading-icon.png')}}" alt="section heading">
        <h2>Well Come To Beauty & Spa</h2>
        <p class="padding">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5 col-sm-5 col-xs-12 text-center">
        <div class="aboutImg"> <img alt="About" src="{{asset('frontend/assets/images/about.png')}}" data-wow-offset="300" class="img-responsive wow fadeInLeftBig animated" style="visibility: visible;"> <img alt="Seperator shadow" src="{{asset('frontend/assets/images/seperator-shadow.png')}}" class="shadow img-responsive"> </div>
      </div>
      
      <div class="col-md-7 wow fadeInRightBig animated">
        <div class="row">
          <div class="col-md-3 text-center">
            <div class="icon-box iconbox-theme-colored mb-0 pb-10"> <a class="icon icon-dark icon-circled icon-border-effect effect-circled icon-lg" href="#"> <i class="fa fa-coffee"></i></a>
              <h6 class="text-uppercase letter-space-3">Relaxation</h6>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="icon-box iconbox-theme-colored mb-0 pb-10"> <a class="icon icon-dark icon-circled icon-border-effect effect-circled icon-lg" href="#"> <i class="fa fa-leaf"></i></a>
              <h6 class="text-uppercase letter-space-3">Massages</h6>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="icon-box iconbox-theme-colored mb-0 pb-10"> <a class="icon icon-dark icon-circled icon-border-effect effect-circled icon-lg" href="#"> <i class="fa fa-street-view"></i></a>
              <h6 class="text-uppercase letter-space-3">Decor Set</h6>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="icon-box iconbox-theme-colored mb-0 pb-10"> <a class="icon icon-dark icon-circled icon-border-effect effect-circled icon-lg" href="#"> <i class="fa fa-bed"></i></a>
              <h6 class="text-uppercase letter-space-3">Detoxification</h6>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-uppercase">Beauty & Spa <span class="text-theme-colored font-playball text-lowercase font-28 letter-space-4">What Do You Need? </span> </h3>
          </div>
          <div class="col-md-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus iusto, possimus enim natus iure inventore, s
              unt. Minima, possimus id sint exercitationem inventore nihil! 
              Incidunt laudantium ea in excepturi praesentium explicabo aperiam! Itaque aperiam commodi distinctio,</p>
            <a href="#" class="btn-slide_about hvr-ripple-out">Read more</a> </div>
        </div>
      </div>
    </div>    
  </div>
</section>
<!-- About Us --> 




<!--  Treatments Section  -->
<section id="treatments" class="section_space bg-grey">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center"> <img src="images/heading-icon.png" alt="section heading">
        <h2>An Exhaustive Resource of Spa Treatments</h2>
        <p class="padding">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6 treatment-box text-center wow fadeInDown team_block effects">
        <div class="img-items"> <img src="{{asset('frontend/assets/images/luxury-spa.png')}}" alt="Luxury Spa">
          <div class="overlay">
            <div class="expand">
              <p>Luxury Spa</p>
              <p>Natural substances</p>
              <a class="btn hvr-ripple-out" href="services-details.html">Details</a> </div>
          </div>
          <h3>Luxury Spa</h3>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id<br>
            est laborum.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 treatment-box text-center wow fadeInDown team_block effects">
        <div class="img-items"> <img src="{{asset('frontend/assets/images/herbal-spa.png')}}" alt="Luxury Spa">
          <div class="overlay">
            <div class="expand">
              <p>Herbal Spa</p>
              <p>Natural substances</p>
              <a class="btn hvr-ripple-out" href="services-details.html">Details</a> </div>
          </div>
          <h3>Herbal Spa</h3>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id<br>
            st laborum.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 treatment-box text-center wow fadeInDown team_block effects">
        <div class="img-items"> <img src="{{asset('frontend/assets/images/detox-spa.png')}}" alt="Luxury Spa">
          <div class="overlay">
            <div class="expand">
              <p>Detox Spa</p>
              <p>Natural substances</p>
              <a class="btn hvr-ripple-out" href="services-details.html">Details</a> </div>
          </div>
          <h3>Detox</h3>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id<br>
            est laborum.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 treatment-box text-center wow fadeInDown team_block effects">
        <div class="img-items"> <img src="{{asset('frontend/assets/images/massage-spa.png')}}" alt="Luxury Spa">
          <div class="overlay">
            <div class="expand">
              <p>Massages</p>
              <p>Natural substances</p>
              <a class="btn hvr-ripple-out" href="services-details.html">Details</a> </div>
          </div>
          <h3>Massages</h3>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id<br>
            est laborum.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Treatments Section --> 




<!-- PARALLAX PRODUCT -->
<div class="slide" id="parallax">
  <div class="effect_3 clearfix">
    <div class="col-md-6"> </div>
    <div class="col-md-6 double-box"> <img src="{{asset('frontend/assets/images/product_box.pn')}}g" class="img-responsive para_img" alt="" />
      <h4 class="txt-discount">Today Discounted Offer<br>
        <span>30%</span></h4>
      <div class="txt-discount"><a href="product-page-1.html" class="hvr-ripple-out">Join Now</a></div>
    </div>
  </div>
</div>




<!--  Wellness Treatment Section  -->
<section id="wellness" class="section_space">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center"> <img src="images/heading-icon.png" alt="section heading">
        <h2>WELLNESS TREATMENTS</h2>
        <p class="padding">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="tab-wrap">
      <div class="media">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInDown">
            <div class="parrent pull-left">
              <ul class="nav nav-tabs nav-stacked">
                <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">Pain Relief Massage</a></li>
                <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Pool Practices</a></li>
                <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Skincare Treatment</a></li>
                <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Special Treatment</a></li>
                <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">Grotto</a></li>
                <li class=""><a href="#tab6" data-toggle="tab" class="tehnical">Cabanas</a></li>
                <li class=""><a href="#tab7" data-toggle="tab" class="tehnical">Hot Springs Specials</a></li>
                <li class=""><a href="#tab8" data-toggle="tab" class="tehnical">Predefine Layout</a></li>
                <li class=""><a href="#tab9" data-toggle="tab" class="tehnical">Best Experiences</a></li>
                <li class=""><a href="#tab10" data-toggle="tab" class="tehnical">Neck Massage</a></li>
              </ul>
              <div class="btn-slide"><a href="#" class="hvr-ripple-out">Book An Appointment!</a></div>
            </div>
            <!-- /Parrent pull left --> 
          </div>
          <!--/.col-sm-4-->
          
          <div class="col-md-8 col-sm-8 col-xs-12 wow fadeInDown">
            <div class="parrent media-body">
              <div class="tab-content">
                <div class="tab-pane fade active in" id="tab1">
                  <div class="media">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="pull-left"> <img class="img-responsive" src="{{asset('frontend/assets/images/1-370x402.jpg')}}" alt="images1"> </div>
                        <!-- /pull left --> 
                      </div>
                      <!-- /.col-md-6 -->
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="media-body">
                          <div class="wellness_text">
                            <h2>Pain Relief Massage</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                            <div class="wellness_dicount"> <a class="wln_time" href="#"> <i class="fa fa-clock-o"></i> 40 minutes — $90</a> <a class="wln_discount" href="#">20% Discount</a></div>
                          </div>
                          <!-- /wellness text --> 
                        </div>
                        <!-- /media body --> 
                      </div>
                      <!-- /.col-md-6 --> 
                    </div>
                    <!-- /row --> 
                  </div>
                  <!-- /media --> 
                </div>
                <!-- /tab-1 -->
                
                <div class="tab-pane fade" id="tab2">
                  <div class="media">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="pull-left"> <img class="img-responsive" src="{{asset('frontend/assets/images/2-370x402.jpg')}}" alt="images2"> </div>
                      </div>
                      <!-- /.col-md-6 -->
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="media-body">
                          <div class="wellness_text">
                            <h2>Pool Practices</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                            <div class="wellness_dicount"> <a class="wln_time" href="#"> <i class="fa fa-clock-o"></i> 40 minutes — $90</a> <a class="wln_discount" href="#">20% Discount</a></div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-md-6 --> 
                    </div>
                    <!-- /row --> 
                  </div>
                  <!-- /media --> 
                </div>
                <!-- /tab-2 -->
                
                <div class="tab-pane fade" id="tab3">
                  <div class="media">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="pull-left"> <img class="img-responsive" src="{{asset('frontend/assets/images/3-370x402.jpg')}}" alt="images3"> </div>
                      </div>
                      <!-- /.col-md-6 -->
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="media-body">
                          <div class="wellness_text">
                            <h2>Skincare Treatment</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                            <div class="wellness_dicount"> <a class="wln_time" href="#"> <i class="fa fa-clock-o"></i> 40 minutes — $90</a> <a class="wln_discount" href="#">20% Discount</a></div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-md-6 --> 
                    </div>
                    <!-- /row --> 
                  </div>
                  <!-- /media --> 
                </div>
                <!-- /tab-3 -->
                
                <div class="tab-pane fade" id="tab4">
                  <div class="media">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="pull-left"> <img class="img-responsive" src="{{asset('frontend/assets/images/4-370x402.jpg')}}" alt="images4"> </div>
                      </div>
                      <!-- /.col-md-6 -->
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="media-body">
                          <div class="wellness_text">
                            <h2>Special Treatment</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                            <div class="wellness_dicount"> <a class="wln_time" href="#"> <i class="fa fa-clock-o"></i> 40 minutes — $90</a> <a class="wln_discount" href="#">20% Discount</a></div>
                          </div>
                        </div>
                      </div>
                      <!-- /.col-md-6 --> 
                    </div>
                    <!-- /row --> 
                  </div>
                  <!-- /media --> 
                </div>
                <!-- /tab-4 -->
                
                <div class="tab-pane fade" id="tab5">
                  <div class="media">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="pull-left"> <img class="img-responsive" src="{{asset('frontend/assets/images/5-370x402.jpg')}}" alt="images5"> </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="media-body">
                          <div class="wellness_text">
                            <h2>Grotto</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                            <div class="wellness_dicount"> <a class="wln_time" href="#"> <i class="fa fa-clock-o"></i> 40 minutes — $90</a> <a class="wln_discount" href="#">20% Discount</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /tab-5 -->
                
                <div class="tab-pane fade" id="tab6">
                  <div class="media">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="pull-left"> <img class="img-responsive" src="{{asset('frontend/assets/images/6-370x402.jpg')}}" alt="images6"> </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="media-body">
                          <div class="wellness_text">
                            <h2>Cabanas</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                            <div class="wellness_dicount"> <a class="wln_time" href="#"> <i class="fa fa-clock-o"></i> 40 minutes — $90</a> <a class="wln_discount" href="#">20% Discount</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /tab-6 -->
                
                <div class="tab-pane fade" id="tab7">
                  <div class="media">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="pull-left"> <img class="img-responsive" src="{{asset('frontend/assets/images/7-370x402.jpg')}}" alt="images7"> </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="media-body">
                          <div class="wellness_text">
                            <h2>Hot Springs Specials</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                            <div class="wellness_dicount"> <a class="wln_time" href="#"> <i class="fa fa-clock-o"></i> 40 minutes — $90</a> <a class="wln_discount" href="#">20% Discount</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /tab-7 -->
                
                <div class="tab-pane fade" id="tab8">
                  <div class="media">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="pull-left"> <img class="img-responsive" src="{{asset('frontend/assets/images/8-370x402.jpg')}}" alt="images1"> </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="media-body">
                          <div class="wellness_text">
                            <h2>Predefine Layout</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                            <div class="wellness_dicount"> <a class="wln_time" href="#"> <i class="fa fa-clock-o"></i> 40 minutes — $90</a> <a class="wln_discount" href="#">20% Discount</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /tab-8 -->
                
                <div class="tab-pane fade" id="tab9">
                  <div class="media">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="pull-left"> <img class="img-responsive" src="{{asset('frontend/assets/images/9-370x402.jpg')}}" alt="images9"> </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="media-body">
                          <div class="wellness_text">
                            <h2>Best Experiences</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                            <div class="wellness_dicount"> <a class="wln_time" href="#"> <i class="fa fa-clock-o"></i> 40 minutes — $90</a> <a class="wln_discount" href="#">20% Discount</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /tab-9 -->
                
                <div class="tab-pane fade" id="tab10">
                  <div class="media">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="pull-left"> <img class="img-responsive" src="{{asset('frontend/assets/images/10-370x402.jpg')}}" alt="images10"> </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="media-body">
                          <div class="wellness_text">
                            <h2>Neck Massage</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                            <div class="wellness_dicount"> <a class="wln_time" href="#"> <i class="fa fa-clock-o"></i> 40 minutes — $90</a> <a class="wln_discount" href="#">20% Discount</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /tab-10 --> 
                
              </div>
              <!--/.tab-content--> 
            </div>
            <!--/.media-body--> 
          </div>
          <!--/.col-sm-8--> 
        </div>
        <!--/.Row--> 
      </div>
      <!--/.media--> 
    </div>
    <!--/.tab-wrap--> 
  </div>
  <!--/.container--> 
</section>




<!-- Services -->
<Section id="Services">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center"> <img src="images/heading-icon.png" alt="section heading">
        <h2>Our Services</h2>
        <p class="padding">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 wow fadeInDown">
        <div id="services2" class="owl-carousel">
          <div class="item" >
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-1.png')}}" class="img-responsive" alt="images1"> </div>
          </div>
          <div class="item" >
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-2.png')}}" class="img-responsive" alt="images2"> </div>
          </div>
          <div class="item" >
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-3.png')}}" class="img-responsive" alt="images3"> </div>
          </div>
          <div class="item" >
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-4.png')}}" class="img-responsive" alt="images4"> </div>
          </div>
          <div class="item" >
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-5.png')}}" class="img-responsive" alt="images5"> </div>
          </div>
          <div class="item" >
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-6.png')}}" class="img-responsive" alt="images6"> </div>
          </div>
          <div class="item" >
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-1.png')}}" class="img-responsive" alt="images7"> </div>
          </div>
          <div class="item" >
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-2.png')}}" class="img-responsive" alt="images8"> </div>
          </div>
          <div class="item" >
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-3.png')}}" class="img-responsive" alt="images9"> </div>
          </div>
          <div class="item" >
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-4.png')}}" class="img-responsive" alt="images10"> </div>
          </div>
          <div class="item" >
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-5.png')}}" class="img-responsive" alt="images11"> </div>
          </div>
          <div class="item" >
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-6.png')}}" class="img-responsive" alt="images12"> </div>
          </div>
        </div>
        <div id="services1" class="owl-carousel">
          <div class="item">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="img_border"> <img src="{{asset('frontend/assets/images/1-370x402.jpg')}}" class="img-responsive" alt="images7"> </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <div class="tab_text">
                  <h2>Body Treatments</h2>
                  <p class="colr"> Enjoy one of our luxury body treatments for skin that radiates with health and is soft to the touch. Carefully balanced to both deeply cleanse and replenish, our body treatments lift the veil of dullness and dryness to restore hydrated silkiness to skin. - See more at: http://www.reddoorspas.com/services/body-treatments#.</p>
                  <ul class="services-link">
                    <li><a href="#">Pellentesque elit tortor</a></li>
                    <li><a href="#">Donec in urna sem Nulla facilisi.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit ame.</a></li>
                    <li><a href="#">Integer gravida velit quis dolor tristiqumsan.</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                <div class="package">
                  <h3 class="pack_col">Package</h3>
                  <h4>Start from</h4>
                  <h2>$75</h2>
                  <div class="buy_btn"> <a href="#" class="hvr-ripple-out">Buy Now!</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="img_border"> <img src="{{asset('frontend/assets/images/2-370x402.jpg')}}" class="img-responsive" alt="images2"> </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <div class="tab_text">
                  <h2>Deep Tissue Massage</h2>
                  <p class="colr"> Curabitur placerat, dui at malesuada tempus, nisl est mco per est, vel volutpat est tor tor ac felis. 
                    Pellentesque pulvinar vehicula ante, imperdiet placerat eros hendrerit eu. 
                    Praesent ac nibh congue elit interdum aliquet.</p>
                  <ul class="services-link">
                    <li><a href="#">Pellentesque elit tortor</a></li>
                    <li><a href="#">Donec in urna sem Nulla facilisi.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit ame.</a></li>
                    <li><a href="#">Integer gravida velit quis dolor tristiqumsan.</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                <div class="package">
                  <h3 class="pack_col">Package</h3>
                  <h4>Start from</h4>
                  <h2>$75</h2>
                  <div class="buy_btn"> <a href="#" class="hvr-ripple-out">Buy Now!</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="img_border"> <img src="{{asset('frontend/assets/images/3-370x402.jpg')}}" class="img-responsive" alt="images"> </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <div class="tab_text">
                  <h2>Stone Massage</h2>
                  <p class="colr"> Curabitur placerat, dui at malesuada tempus, nisl est mco per est, vel volutpat est tor tor ac felis. 
                    Pellentesque pulvinar vehicula ante, imperdiet placerat eros hendrerit eu. 
                    Praesent ac nibh congue elit interdum aliquet.</p>
                  <ul class="services-link">
                    <li><a href="#">Pellentesque elit tortor</a></li>
                    <li><a href="#">Donec in urna sem Nulla facilisi.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit ame.</a></li>
                    <li><a href="#">Integer gravida velit quis dolor tristiqumsan.</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                <div class="package">
                  <h3 class="pack_col">Package</h3>
                  <h4>Start from</h4>
                  <h2>$75</h2>
                  <div class="buy_btn"> <a href="#" class="hvr-ripple-out">Buy Now!</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="img_border"> <img src="{{asset('frontend/assets/images/4-370x402.jpg')}}" class="img-responsive" alt="images3"> </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <div class="tab_text">
                  <h2>Vita-Rich Body Treatment</h2>
                  <p class="colr"> Curabitur placerat, dui at malesuada tempus, nisl est mco per est, vel volutpat est tor tor ac felis. 
                    Pellentesque pulvinar vehicula ante, imperdiet placerat eros hendrerit eu. 
                    Praesent ac nibh congue elit interdum aliquet.</p>
                  <ul class="services-link">
                    <li><a href="#">Pellentesque elit tortor</a></li>
                    <li><a href="#">Donec in urna sem Nulla facilisi.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit ame.</a></li>
                    <li><a href="#">Integer gravida velit quis dolor tristiqumsan.</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                <div class="package">
                  <h3 class="pack_col">Package</h3>
                  <h4>Start from</h4>
                  <h2>$75</h2>
                  <div class="buy_btn"> <a href="#" class="hvr-ripple-out">Buy Now!</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="img_border"> <img src="{{asset('frontend/assets/images/5-370x402.jpg')}}" class="img-responsive" alt="images5"> </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <div class="tab_text">
                  <h2>Face Treatment</h2>
                  <p class="colr"> Curabitur placerat, dui at malesuada tempus, nisl est mco per est, vel volutpat est tor tor ac felis. 
                    Pellentesque pulvinar vehicula ante, imperdiet placerat eros hendrerit eu. 
                    Praesent ac nibh congue elit interdum aliquet.</p>
                  <ul class="services-link">
                    <li><a href="#">Pellentesque elit tortor</a></li>
                    <li><a href="#">Donec in urna sem Nulla facilisi.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit ame.</a></li>
                    <li><a href="#">Integer gravida velit quis dolor tristiqumsan.</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                <div class="package">
                  <h3 class="pack_col">Package</h3>
                  <h4>Start from</h4>
                  <h2>$75</h2>
                  <div class="buy_btn"> <a href="#" class="hvr-ripple-out">Buy Now!</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="img_border"> <img src="{{asset('frontend/assets/images/6-370x402.jpg')}}" class="img-responsive" alt="images10"> </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <div class="tab_text">
                  <h2>Full Face  (Excludea Eyebrow)</h2>
                  <p class="colr"> Curabitur placerat, dui at malesuada tempus, nisl est mco per est, vel volutpat est tor tor ac felis. 
                    Pellentesque pulvinar vehicula ante, imperdiet placerat eros hendrerit eu. 
                    Praesent ac nibh congue elit interdum aliquet.</p>
                  <ul class="services-link">
                    <li><a href="#">Pellentesque elit tortor</a></li>
                    <li><a href="#">Donec in urna sem Nulla facilisi.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit ame.</a></li>
                    <li><a href="#">Integer gravida velit quis dolor tristiqumsan.</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                <div class="package">
                  <h3 class="pack_col">Package</h3>
                  <h4>Start from</h4>
                  <h2>$75</h2>
                  <div class="buy_btn"> <a href="#" class="hvr-ripple-out">Buy Now!</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="img_border"> <img src="{{asset('frontend/assets/images/7-370x402.jpg')}}" class="img-responsive" alt="images4"> </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <div class="tab_text">
                  <h2>Stone Massage</h2>
                  <p class="colr"> Curabitur placerat, dui at malesuada tempus, nisl est mco per est, vel volutpat est tor tor ac felis. 
                    Pellentesque pulvinar vehicula ante, imperdiet placerat eros hendrerit eu. 
                    Praesent ac nibh congue elit interdum aliquet.</p>
                  <ul class="services-link">
                    <li><a href="#">Pellentesque elit tortor</a></li>
                    <li><a href="#">Donec in urna sem Nulla facilisi.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit ame.</a></li>
                    <li><a href="#">Integer gravida velit quis dolor tristiqumsan.</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                <div class="package">
                  <h3 class="pack_col">Package</h3>
                  <h4>Start from</h4>
                  <h2>$75</h2>
                  <div class="buy_btn"> <a href="#" class="hvr-ripple-out">Buy Now!</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="img_border"> <img src="{{asset('frontend/assets/images/8-370x402.jpg')}}" class="img-responsive" alt="images2"> </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <div class="tab_text">
                  <h2>Stone Massage</h2>
                  <p class="colr"> Curabitur placerat, dui at malesuada tempus, nisl est mco per est, vel volutpat est tor tor ac felis. 
                    Pellentesque pulvinar vehicula ante, imperdiet placerat eros hendrerit eu. 
                    Praesent ac nibh congue elit interdum aliquet.</p>
                  <ul class="services-link">
                    <li><a href="#">Pellentesque elit tortor</a></li>
                    <li><a href="#">Donec in urna sem Nulla facilisi.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit ame.</a></li>
                    <li><a href="#">Integer gravida velit quis dolor tristiqumsan.</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                <div class="package">
                  <h3 class="pack_col">Package</h3>
                  <h4>Start from</h4>
                  <h2>$75</h2>
                  <div class="buy_btn"> <a href="#" class="hvr-ripple-out">Buy Now!</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="img_border"> <img src="{{asset('frontend/assets/images/9-370x402.jpg')}}" class="img-responsive" alt="images"> </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <div class="tab_text">
                  <h2>Stone Massage</h2>
                  <p class="colr"> Curabitur placerat, dui at malesuada tempus, nisl est mco per est, vel volutpat est tor tor ac felis. 
                    Pellentesque pulvinar vehicula ante, imperdiet placerat eros hendrerit eu. 
                    Praesent ac nibh congue elit interdum aliquet.</p>
                  <ul class="services-link">
                    <li><a href="#">Pellentesque elit tortor</a></li>
                    <li><a href="#">Donec in urna sem Nulla facilisi.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit ame.</a></li>
                    <li><a href="#">Integer gravida velit quis dolor tristiqumsan.</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                <div class="package">
                  <h3 class="pack_col">Package</h3>
                  <h4>Start from</h4>
                  <h2>$75</h2>
                  <div class="buy_btn"> <a href="#" class="hvr-ripple-out">Buy Now!</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="img_border"> <img src="images/10-370x402.jpg" class="img-responsive" alt="images3"> </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <div class="tab_text">
                  <h2>Stone Massage</h2>
                  <p class="colr"> Curabitur placerat, dui at malesuada tempus, nisl est mco per est, vel volutpat est tor tor ac felis. 
                    Pellentesque pulvinar vehicula ante, imperdiet placerat eros hendrerit eu. 
                    Praesent ac nibh congue elit interdum aliquet.</p>
                  <ul class="services-link">
                    <li><a href="#">Pellentesque elit tortor</a></li>
                    <li><a href="#">Donec in urna sem Nulla facilisi.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit ame.</a></li>
                    <li><a href="#">Integer gravida velit quis dolor tristiqumsan.</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                <div class="package">
                  <h3 class="pack_col">Package</h3>
                  <h4>Start from</h4>
                  <h2>$75</h2>
                  <div class="buy_btn"> <a href="#" class="hvr-ripple-out">Buy Now!</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="img_border"> <img src="{{asset('frontend/assets/images/1-370x402.jpg')}}" class="img-responsive" alt="images5"> </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <div class="tab_text">
                  <h2>Stone Massage</h2>
                  <p class="colr"> Curabitur placerat, dui at malesuada tempus, nisl est mco per est, vel volutpat est tor tor ac felis. 
                    Pellentesque pulvinar vehicula ante, imperdiet placerat eros hendrerit eu. 
                    Praesent ac nibh congue elit interdum aliquet.</p>
                  <ul class="services-link">
                    <li><a href="#">Pellentesque elit tortor</a></li>
                    <li><a href="#">Donec in urna sem Nulla facilisi.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit ame.</a></li>
                    <li><a href="#">Integer gravida velit quis dolor tristiqumsan.</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                <div class="package">
                  <h3 class="pack_col">Package</h3>
                  <h4>Start from</h4>
                  <h2>$75</h2>
                  <div class="buy_btn"> <a href="#" class="hvr-ripple-out">Buy Now!</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="img_border"> <img src="{{asset('frontend/assets/images/2-370x402.jpg')}}" class="img-responsive" alt="images10"> </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <div class="tab_text">
                  <h2>Stone Massage</h2>
                  <p class="colr"> Curabitur placerat, dui at malesuada tempus, nisl est mco per est, vel volutpat est tor tor ac felis. 
                    Pellentesque pulvinar vehicula ante, imperdiet placerat eros hendrerit eu. 
                    Praesent ac nibh congue elit interdum aliquet.</p>
                  <ul class="services-link">
                    <li><a href="#">Pellentesque elit tortor</a></li>
                    <li><a href="#">Donec in urna sem Nulla facilisi.</a></li>
                    <li><a href="#">Lorem ipsum dolor sit ame.</a></li>
                    <li><a href="#">Integer gravida velit quis dolor tristiqumsan.</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-12 text-center">
                <div class="package">
                  <h3 class="pack_col">Package</h3>
                  <h4>Start from</h4>
                  <h2>$75</h2>
                  <div class="buy_btn"> <a href="#" class="hvr-ripple-out">Buy Now!</a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</Section>
<!-- /#Services --> 


<!-- background image with button -->
<section id="slogan">
  <div class="container">
    <div class="row">
      <div class="col-md-2 wow fadeInDown"> <img src="{{asset('frontend/assets/images/slogan.png')}}" alt="" class="img-responsive"> </div>
      <div class="col-md-7 text-center wow fadeInDown">
        <h2>Buy Membership and Get Amazing Discounts</h2>
        <p>Call Us @ 2444 033 323</p>
      </div>
      <div class="col-md-3 padnig wow fadeInDown"> <a href="#" class="btn-appointment hvr-ripple-out">Membership Plans</a> </div>
    </div>
  </div>
</section>
<!-- background image with button --> 



<!-- counter Section -->
<section id="facts" class="facts bg-grey section_space">
  <div class="parallax-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center"> <img src="{{asset('frontend/assets/images/heading-icon.png')}}" alt="section heading">
          <h2>Some Fun Facts</h2>
          <p class="padding">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="row number-counters"> 
        <!-- first count item -->
        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown animated" data-wow-duration="500ms">
          <div class="counters-item"> <i class="fa fa-clock-o fa-3x"></i> <strong data-to="3200">0</strong> 
            <!-- Set Your Number here. i,e. data-to="56" -->
            <p>Hours of Work</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
          <div class="counters-item"> <i class="fa fa-users fa-3x"></i> <strong data-to="120">0</strong> 
            <p>Satisfied Clients</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
          <div class="counters-item"> <i class="fa fa-rocket fa-3x"></i> <strong data-to="360">0</strong> 
            <p> Projects Delivered </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
          <div class="counters-item"> <i class="fa fa-trophy fa-3x"></i> <strong data-to="6454">0</strong> 
            <p>Awards Won</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- counter Section --> 


<!--  Pricing Section  -->
<section id="pricing_table" class="section_space">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center"> <img src="{{asset('frontend/assets/images/heading-icon.png')}}" alt="section heading">
        <h2>SPA PACKAGES</h2>
        <p class="padding padding-top">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms">
        <div class="pricetab">
          <div class="heading_pricing"> <img src="images/paricing-icon.png" alt="images1">
            <h2> FREE </h2>
          </div>
          <div class="price">
            <h1> Free </h1>
          </div>
          <div class="infos">
            <p> Spa Package One </p>
            <p> Spa Package Thre </p>
            <p> Spa Package Four </p>
            <p> Spa Package Five </p>
            <p> Spa Package Six </p>
            <p> Spa Package Seven </p>
          </div>
          <div class="pricefooter">
            <div class="button_price"> <a href="#"> Get started </a> </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
        <div class="pricetab">
          <div class="heading_pricing"> <img src="{{asset('frontend/assets/images/paricing-icon.png')}}" alt="images1">
            <h2> Basic </h2>
          </div>
          <div class="price">
            <h1> 10$ </h1>
          </div>
          <div class="infos">
            <p> Spa Package One </p>
            <p> Spa Package Thre </p>
            <p> Spa Package Four </p>
            <p> Spa Package Five </p>
            <p> Spa Package Six </p>
            <p> Spa Package Seven </p>
          </div>
          <div class="pricefooter">
            <div class="button_price"> <a href="#"> Get started </a> </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
        <div class="pricetab">
          <div class="heading_pricing"> <img src="{{asset('frontend/assets/images/paricing-icon.png')}}" alt="images1">
            <h2> Premium </h2>
          </div>
          <div class="price">
            <h1> 30$ </h1>
          </div>
          <div class="infos">
            <p> Spa Package One </p>
            <p> Spa Package Thre </p>
            <p> Spa Package Four </p>
            <p> Spa Package Five </p>
            <p> Spa Package Six </p>
            <p> Spa Package Seven </p>
          </div>
          <div class="pricefooter">
            <div class="button_price"> <a href="#"> Get started </a> </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="800ms">
        <div class="pricetab">
          <div class="heading_pricing"> <img src="{{asset('frontend/assets/images/paricing-icon.png')}}" alt="images1">
            <h2> Golden </h2>
          </div>
          <div class="price">
            <h1> 50$ </h1>
          </div>
          <div class="infos">
            <p> Spa Package One </p>
            <p> Spa Package Thre </p>
            <p> Spa Package Four </p>
            <p> Spa Package Five </p>
            <p> Spa Package Six </p>
            <p> Spa Package Seven </p>
          </div>
          <div class="pricefooter">
            <div class="button_price"> <a href="#"> Get started </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pricing Section --> 



<!-- Our Staff -->
<section class="our_staff section_space">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center wow fadeInDown"> <img src="{{asset('frontend/assets/images/heading-icon.png')}}" alt="section heading">
        <h2>Our Staff</h2>
        <p class="padding">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center wow fadeInDown">
        <div id="staff-slider">
          <div class="item">
            <div class="view view-fifth"> <img src="{{asset('frontend/assets/images/staff-1.jpg')}}" alt="staff image"/>
              <div class="mask">
                <h2>Bill Santiago</h2>
                <p>Spa Expert</p>
                <ul class="staf_social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="item">
            <div class="view view-fifth"> <img src="{{asset('frontend/assets/images/staff-2.jpg')}}" alt="staff image"/>
              <div class="mask">
                <h2>Jenny Doe</h2>
                <p>Massager</p>
                <ul class="staf_social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="item">
            <div class="view view-fifth"> <img src="{{asset('frontend/assets/images/staff-3.jpg')}}" alt="staff image"/>
              <div class="mask">
                <h2>Kindra Doe</h2>
                <p>Beauty Expert</p>
                <ul class="staf_social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="item">
            <div class="view view-fifth"> <img src="{{asset('frontend/assets/images/staff-4.jpg')}}" alt="staff image"/>
              <div class="mask">
                <h2>Angelina Flores</h2>
                <p>SBeauty Expert</p>
                <ul class="staf_social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="item">
            <div class="view view-fifth"> <img src="{{asset('frontend/assets/images/staff-1.jpg')}}" alt="staff image"/>
              <div class="mask">
                <h2>Bill Santiago</h2>
                <p>Spa Expert</p>
                <ul class="staf_social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="item">
            <div class="view view-fifth"> <img src="{{asset('frontend/assets/images/staff-2.jpg')}}" alt="staff image"/>
              <div class="mask">
                <h2>Jenny Doe</h2>
                <p>Massager</p>
                <ul class="staf_social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="item">
            <div class="view view-fifth"> <img src="{{asset('frontend/assets/images/staff-3.jpg')}}" alt="staff image"/>
              <div class="mask">
                <h2>Kindra Doe</h2>
                <p>Beauty Expert</p>
                <ul class="staf_social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="item">
            <div class="view view-fifth"> <img src="{{asset('frontend/assets/images/staff-4.jpg')}}" alt="staff image"/>
              <div class="mask">
                <h2>Angelina Flores</h2>
                <p>Beauty Expert</p>
                <ul class="staf_social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Our Staff -->  



<!-- Testinomial Slider -->
<section id="testinomial" class="section_space">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="testinomial_text"> <img src="{{asset('frontend/assets/images/heading-icon.png')}}" alt="section heading">
          <h2>From Clients review</h2>
          <p class="padding padding-top">Excepteur sint occaecat cupidatat non proident, </p>
        </div>
      </div>
      <div class="col-md-12 wow fadeInDown">
        <div id="testinomial-slider" class="owl-carousel">
          <div class="item text-center"> <img src="{{asset('frontend/assets/images/testinomial.png')}}" alt="customer">
            <div class="testinomial-content">
              <p>Curabitur placerat, dui at malesuada tempus, nisl est mco per est, vel volutpat est tor tor ac felis. 
                Pellentesque pulvinar vehicula ante, imperdiet placerat eros hendrerit eu. </p>
            </div>
            <h4>Jonathan Doe</h4>
            <span>Webdesigner</span> </div>
          <div class="item text-center"> <img src="{{asset('frontend/assets/images/testinomial.png')}}" alt="customer">
            <div class="testinomial-content">
              <p>Curabitur placerat, dui at malesuada tempus, nisl est mco per est, vel volutpat est tor tor ac felis. 
                Pellentesque pulvinar vehicula ante, imperdiet placerat eros hendrerit eu. </p>
            </div>
            <h4>Jonathan Doe</h4>
            <span>Webdesigner</span> </div>
          <div class="item text-center"> <img src="{{asset('frontend/assets/images/testinomial.png')}}" alt="customer">
            <div class="testinomial-content">
              <p>Curabitur placerat, dui at malesuada tempus, nisl est mco per est, vel volutpat est tor tor ac felis. 
                Pellentesque pulvinar vehicula ante, imperdiet placerat eros hendrerit eu. </p>
            </div>
            <h4>Jonathan Doe</h4>
            <span>Webdesigner</span> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Testinomial Slider --> 



<!-- Our Cliente -->
<section class="our_client section_space">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center"> <img src="{{asset('frontend/assets/images/heading-icon.png')}}" alt="section heading">
        <h2>Honourable Partners</h2>
        <p class="padding">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    
    <div class="row client_bg">
      <div class="col-md-2 col-sm-2 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms">
        <div class="client_img"> <img src="{{asset('frontend/assets/images/partner1.jpg')}}" class="img-responsive" alt="client"> </div>
      </div>
      
      <div class="col-md-2 col-sm-2 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="200ms">
        <div class="client_img"> <img src="{{asset('frontend/assets/images/partner2.jpg')}}" class="img-responsive" alt="client"> </div>
      </div>
      
      <div class="col-md-2 col-sm-2 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="400ms">
        <div class="client_img"> <img src="{{asset('frontend/assets/images/partner3.jpg')}}" class="img-responsive" alt="client"> </div>
      </div>
      
      <div class="col-md-2 col-sm-2 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
        <div class="client_img"> <img src="{{asset('frontend/assets/images/partner1.jpg')}}" class="img-responsive" alt="client"> </div>
      </div>
      
      <div class="col-md-2 col-sm-2 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="800ms">
        <div class="client_img"> <img src="{{asset('frontend/assets/images/partner2.jpg')}}" class="img-responsive" alt="client"> </div>
      </div>
      
      <div class="col-md-2 col-sm-2 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1000ms">
        <div class="client_img"> <img src="{{asset('frontend/assets/images/partner3.jpg')}}" class="img-responsive" alt="client"> </div>
      </div>
    </div>    
  </div>
</section>
<!-- Our Cliente --> 



<!-- Footer top -->
<section id="footer-top">
  <div class="container">
    <div class="row white_bg">
      <div class="col-md-3 footer-about">
        <h4>About</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit quis dolor tristique accumsan. Pellentesque elit tortorvurna semulla facilisi. Vestibulum ut...</p>
        <img alt="logo" src="images/logo.png"> </div>
      <!-- /col-md-3 -->
      <div class="col-md-3">
        <h4>Links</h4>
        <ul class="footer-links">
          <li><a href="about.html">About us</a></li>
          <li><a href="#">Book Now</a></li>
          <li><a href="services.html">Our Services</a></li>
          <li><a href="#">Our Staff</a></li>
          <li><a href="blog-1.html">Blog</a></li>
          <li><a href="contact.html">Contact us</a></li>
        </ul>
      </div>
      <!-- /col-md-3 -->
      <div class="col-md-3">
        <h4>News</h4>
        <ul class="news">
          <li><a href="#">Nunc arcu magna, egestas non gravida vel, condimentum eu elit.</a></li>
          <li><a href="#">Suspendisse varius nisi vitae quam porta convallis. Aliquam ac quam neque</a></li>
          <li><a href="#">Vestibulum sed sapien ac risus pulvinar</a></li>
          <li><a href="#">Nulla a urna a nibh consectetur semper quis hendrerit felis.</a></li>
        </ul>
      </div>
      <!-- /col-md-3 -->
      <div class="col-md-3 footer-contact">
        <h4>Contact</h4>
        <p><span>Adress</span><br>
          Third Avenue New York, NY 10003</p>
        <p><span>Phone Number</span> <br>
          123-456-789</p>
        <p><span>Email</span><br>
          <a href="#">info@beautyspa.com</a></p>
      </div>
    </div>
  </div>
</section>
@endsection
<!-- section -->


