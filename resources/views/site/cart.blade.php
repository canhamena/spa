<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Beauty Spa</title>
<link rel="stylesheet" type="text/css" href="css/master.css">
<link rel="shortcut icon" href="images/heading-icon.png">
</head>

<body>
<!--Loader-->
<div class="loader">
  <div class="loading">
    <span>L</span><span>o</span><span>a</span><span>d</span><span>i</span><span>n</span><span>g</span>
  </div>
</div>

<!-- Back-To-Top -->
<div class="container"> 
  <a href="#" class="back-to-top text-center" style="display: inline;"> <i class="fa fa-angle-up"></i> </a> 
</div>
 

<!-- Header Starts -->
<div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
            <ul class="contactinfo">
              <li><a href="#"><i class="fa fa-phone-square"></i> +92 95 01 88 821</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i> info@beautyspa.com</a></li>
            </ul>
        </div>
        <div class="col-sm-8">
            <ul class="shop-menu pull-right">
              <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
              <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
            </ul>
        </div>
      </div>
    </div>
  </div>
<header id="navigation" class="navigation affix-top" data-offset-top="2" data-spy="affix">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <nav class="navbar navbar-default"> 
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"></a> </div>
          
          <div class="fixed-collapse-navbar" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li class="dropdown"> <a data-toggle="dropdown" href="#">Services <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="services.html">Services</a></li>
                  <li><a href="services-details.html">Services Details</a></li>
                  <li><a href="services-itme-details.html">Services Item Details</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a data-toggle="dropdown" href="#">Blog <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="blog-1.html">Blog Classic</a></li>
                  <li><a href="blog-2.html">Blog Three Col </a></li>
                  <li><a href="blog-single-1.html">Blog Single Col</a></li>
                </ul>
              </li>
              <li class="dropdown active"> <a data-toggle="dropdown" href="#">Product / Shope <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="product-page-1.html">Products</a></li>
                  <li><a href="product-details.html">Products Details</a></li>
                  <li><a href="checkout.html">Checkout Products</a></li>
                  <li class="active"><a href="cart.html">Cart Products</a></li>
                  <li><a href="shop.html">Products Shop</a></li>
                  <li><a href="login.html">Login Form For Products</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a data-toggle="dropdown" href="#">Contact Us <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="contact-2.html">Contact US V2</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="col-md-2 booking">
      <a class="btn-booking text-center try sans hvr-ripple-out" href="#" data-toggle="modal" data-target="#myModal">
      <i class="fa fa-calendar"></i> Booking Now
      </a>
      </div>
    </div>
  </div>
  
</header>
<!-- Header Ends --> 



<!--About us Main-->
<section id="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4>Spa Products</h4>
      </div>
      <div class="col-md-6 text-right"> 
        <a href="index.html">Home <i class="fa fa-angle-double-right"></i></a> <span>Spa Products</span> 
      </div>
    </div>
  </div>
</section>



<!-- Products -->
<section id="cart_items" class="padding_top">
		<div class="container">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
                                <div class="cart_product">
								<a href=""><img src="images/one.png" alt=""></a>
                                </div>
							</td>
							<td>
								<div class="cart_description">
                                <h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
                                </div>
							</td>
							<td>
								<div class="cart_price">
                                <p>$59</p>
                                </div>
							</td>
							<td>
                            <div class="cart_quantity">
								<div class="cart_quantity_button">
									<div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                  <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
          <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>
      </div>
								</div>
                            </div>
							</td>
							<td>
								<div class="cart_total">
                                <p class="cart_total_price">$59</p>
                                </div>
							</td>
							<td>
								<div class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                </div>
							</td>
						</tr>

						<tr>
							<td>
								<div class="cart_product">
                                <a href=""><img src="images/two.png" alt=""></a>
                                </div>
							</td>
							<td>
								<div class="cart_description">
                                <h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
                                </div>
							</td>
							<td>
								<div class="cart_price">
                                <p>$59</p>
                                </div>
							</td>
							<td>
                            <div class="cart_quantity">
								<div class="cart_quantity_button">
									<div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                  <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
          <input type="text" name="quant[2]" class="form-control input-number" value="1" min="1" max="10">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[2]">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>
      </div>
								</div>
                            </div>
							</td>
							<td>
								<div class="cart_total">
                                <p class="cart_total_price">$59</p>
                                </div>
							</td>
							<td>
								<div class="cart_delete">
                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                </div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="cart_product">
                                <a href=""><img src="images/three.png" alt=""></a>
                                </div>
							</td>
							<td>
								<div class="cart_description">
                                <h4><a href="">Colorblock Scuba</a></h4>
								<p>Web ID: 1089772</p>
                                </div>
							</td>
							<td>
								<div class="cart_price">
                                <p>$59</p>
                                </div>
							</td>
							<td>
                            <div class="cart_quantity">
								<div class="cart_quantity_button">
									
                                    <div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[3]">
                  <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
          <input type="text" name="quant[3]" class="form-control input-number" value="1" min="1" max="10">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[3]">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>
      </div>
								</div>
                            </div>
							</td>
							<td>
								<div class="cart_total">
                                <p class="cart_total_price">$59</p>
                                </div>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td>$59</td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>$2</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>$61</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading_1">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
<!-- /#Products --> 




<!-- Footer top -->
<section id="footer-top">
  <div class="container">
    <div class="row white_bg">
      <div class="col-md-3 footer-about">
        <h4>About</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer gravida velit quis dolor tristique accumsan. Pellentesque elit tortorvurna semulla facilisi. Vestibulum ut...</p>
        <img alt="logo" src="images/logo.png"> </div>
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
<!-- section -->


<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-left">
        <p>&copy; 2016 Beauty & Spa All Rights Reserved </p>
      </div>
      <div class="col-md-8 text-right">
        <ul class="social">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a href="#"><i class="fa fa-flickr"></i></a></li>
        </ul>
      </div>
    </div> 
  </div> 
</footer>


<div class='modal fade' id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
        <div class="large-heading">
        <h2>Make an <small>Apppointment</small></h2>
        </div>
      </div>
      <form  method="post" action="include/form/sendemail.php" class="form floating-labels" id="modal-mail-form" data-toggle="validator" novalidate>
        <div class="modal-notice">
          <div id="contact-form-result"></div>
        </div>
        <div id="template-contactform" class="modal-body">
          <div class="row bottom-10">
            <div class="col-md-6 form-group">
              <div class="icon">
                <label for="modalname" class="cd-label">Name</label>
                <input type="text" value="" required id="modalname" name="modalname" class="user form-control">
              </div>
            </div>
            <div class="col-md-6 form-group">
              <div class="icon">
                <label for="modalemail" class="cd-label">Email</label>
                <input type="text" required id="modalemail" name="modalemail" class="user form-control">
              </div>
            </div>
          </div>
          <div class="row bottom-10">
            <div class="col-md-6 form-group">
              <div class="icon">
                <label for="modalphone" class="cd-label">Phone</label>
                <input type="text" id="modalphone" name="modalphone" class="user form-control">
              </div>
            </div>
            <div class="col-md-6 form-group">
              <div class="icon">
                <label for="modaltime" class="cd-label">Date Time</label>
                <input type="text" required  class="user form-control">
              </div>
            </div>
          </div>
          <div class="row bottom-20">
            <div class="col-md-12">
              <div class="icon">
                <label class="cd-labe2">Service</label>
                <ul class="cd-form-list inline">
                <li>
                <input type="checkbox" id="cd-checkbox-1" class="form-control">
                <label for="cd-checkbox-1">Option 1</label>
                </li>
                <li>
                <input type="checkbox" id="cd-checkbox-2" class="form-control">
                <label for="cd-checkbox-2">Option 2</label>
                </li>
                <li>
                <input type="checkbox" id="cd-checkbox-3" class="form-control">
                <label for="cd-checkbox-3">Option 3</label>
                </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="bottom-20 form-group">
            <label for="modal-content" class="cd-label">Note</label>
            <textarea id="modal-content" name="content" class="small"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <input type="text" class="hidden form-control" value="" name="template-contactform-botcheck" id="template-contactform-botcheck">
          <button type="submit" style="pointer-events: all; cursor: pointer;">Book an Apppointment</button>
        </div>
      </form>
    </div>
  </div> 
</div>
          
<script src="js/jquery-2.1.4.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.min.js"></script> 
<script src="js/jquery.mixitup.min.js"></script> 
<script src="js/jquery-countTo.js"></script> 
<script src="js/jquery.appear.js"></script> 
<script src="js/jquery.fancybox.js"></script>

<!-- /logicsforest custom js --> 
<script src="js/custom-js.js"></script> 

</body>
</html>
