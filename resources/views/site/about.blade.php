
@extends('site.layout')


@section('content')
<section id="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4>About us</h4>
      </div>
      <div class="col-md-6 text-right"> 
        <a href="index.html">Home <i class="fa fa-angle-double-right"></i></a> <span>About Us</span> 
      </div>
    </div>
  </div>
</section>



<section id="about-main" class="padding_top">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div id="about-slider" class="owl-carousel">
          <div class="item"><img src="{{asset('frontend/assets/images/570x376.jpg')}}" alt="The Last of us"></div>
          <div class="item"><img src="{{asset('frontend/assets/images/570x376.jpg')}}" alt="GTA V"></div>
          <div class="item"><img src="{{asset('frontend/assets/images/570x376.jpg')}}" alt="Mirror Edge"></div>
        </div> 
      </div>
      <div class="col-md-6">
        <h3>Hello, Meet Us!</h3>
        <h4>The Ultimate, Multipurpore Busiess template</h4>
        <p>Duis autem eumre dolor hendrerit vulputate vesse molestie consequat vel illum doloraeu feugiat nulla facilisis at vero eros accumsan et iusto odio dignissim. Qlandit praesent luptatum zzril delenit augue duis dolore feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Duis autem eumre dolor hendrerit vulputate velit esse molestie consequat vel illum doloraeu.</p>
        <a href="#" class="hvr-ripple-out">Read More</a> </div>
    </div>
  </div>
</section>
<!-- About us Main --> 



<!-- Services -->
<section id="Services" class="padding_top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center"> <img src="{{asset('frontend/assets/images/heading-icon.png')}}" alt="section heading">
        <h2>Our Services</h2>
        <p class="padding">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 wow fadeInDown">
        <div id="services2" class="owl-carousel">
          <div class="item">
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-1.png')}}" class="img-responsive" alt="images1"> </div>
          </div>
          <div class="item">
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-2.png')}}" class="img-responsive" alt="images2"> </div>
          </div>
          <div class="item">
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-3.png')}}" class="img-responsive" alt="images3"> </div>
          </div>
          <div class="item">
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-4.png')}}" class="img-responsive" alt="images4"> </div>
          </div>
          <div class="item">
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-5.png')}}" class="img-responsive" alt="images5"> </div>
          </div>
          <div class="item">
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-6.png')}}" class="img-responsive" alt="images6"> </div>
          </div>
          <div class="item">
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-1.png')}}" class="img-responsive" alt="images7"> </div>
          </div>
          <div class="item">
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-2.png')}}" class="img-responsive" alt="images8"> </div>
          </div>
          <div class="item">
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-3.png')}}" class="img-responsive" alt="images9"> </div>
          </div>
          <div class="item">
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-4.png')}}" class="img-responsive" alt="images10"> </div>
          </div>
          <div class="item">
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-5.png')}}" class="img-responsive" alt="images11"> </div>
          </div>
          <div class="item">
            <div class="round_img"> <img src="{{asset('frontend/assets/images/service-6.png')}}" class="img-responsive" alt="images12"> </div>
          </div>
        </div>
        <div id="services1" class="owl-carousel">
          <div class="item">
            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="img_border"> <img src="{{asset('frontend/assets/images/7-370x402.jpg')}}" class="img-responsive" alt="images7"> </div>
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
                <div class="img_border"> <img src="{{asset('frontend/assets/images/1-370x402.jpg')}}" class="img-responsive" alt="images2"> </div>
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
                <div class="img_border"> <img src="{{asset('frontend/assets/images/2-370x402.jpg')}}" class="img-responsive" alt="images"> </div>
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
                <div class="img_border"> <img src="{{asset('frontend/assets/images/3-370x402.jpg')}}" class="img-responsive" alt="images3"> </div>
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
                <div class="img_border"> <img src="{{asset('frontend/assets/images/4-370x402.jpg')}}" class="img-responsive" alt="images5"> </div>
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
                <div class="img_border"> <img src="{{asset('frontend/assets/images/5-370x402.jpg')}}" class="img-responsive" alt="images10"> </div>
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
                <div class="img_border"> <img src="{{asset('frontend/assets/images/6-370x402.jpg')}}" class="img-responsive" alt="images4"> </div>
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
                <div class="img_border"> <img src="{{asset('frontend/assets/images/1-370x402.jpg')}}" class="img-responsive" alt="images2"> </div>
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
                <div class="img_border"> <img src="{{asset('frontend/assets/images/2-370x402.jpg')}}" class="img-responsive" alt="images"> </div>
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
                <div class="img_border"> <img src="{{asset('frontend/assets/images/3-370x402.jpg')}}" class="img-responsive" alt="images3"> </div>
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
                <div class="img_border"> <img src="{{asset('frontend/assets/images/4-370x402.jpg')}}" class="img-responsive" alt="images5"> </div>
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
                <div class="img_border"> <img src="{{asset('frontend/assets/images/5-370x402.jpg')}}" class="img-responsive" alt="images10"> </div>
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
</section>




<!-- Our Staff -->
<section class="our_staff bg-grey padding_top">
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
        <div class="client_img"> <img src="{{asset('frontend/assets/images/partner4.jpg')}}" class="img-responsive" alt="client"> </div>
      </div>
      
      <div class="col-md-2 col-sm-2 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="800ms">
        <div class="client_img"> <img src="{{asset('frontend/assets/images/partner1.jpg')}}" class="img-responsive" alt="client"> </div>
      </div>
      
      <div class="col-md-2 col-sm-2 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1000ms">
        <div class="client_img"> <img src="{{asset('frontend/assets/images/partner2.jpg')}}" class="img-responsive" alt="client"> </div>
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
        <img alt="logo" src="images/logo.png"> 
      </div>
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
      <div class="col-md-3">
        <h4>News</h4>
        <ul class="news">
          <li><a href="#">Nunc arcu magna, egestas non gravida vel, condimentum eu elit.</a></li>
          <li><a href="#">Suspendisse varius nisi vitae quam porta convallis. Aliquam ac quam neque</a></li>
          <li><a href="#">Vestibulum sed sapien ac risus pulvinar</a></li>
          <li><a href="#">Nulla a urna a nibh consectetur semper quis hendrerit felis.</a></li>
        </ul>
      </div>
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
@endsection