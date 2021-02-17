<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Beauty & Spa Business Template" />
<meta name="keywords" content="hotels,resturent,cleaning,beauty & spa,barbar & hair shop,beauty salon" />
<meta name="author" content="Logicsforest" />

<title>Home | Beauty Spa</title>

<link  href="{{asset('frontend/assets/css/master.css')}}" rel="stylesheet">
<link rel="shortcut icon" href="{{asset('frontend/assets/images/heading-icon.png')}}">
</head>

<body>
<!--Loader-->


<!-- Back-To-Top -->
<div class="container"> 
  <a href="#" class="back-to-top text-center"> <i class="fa fa-angle-up"></i> </a> 
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
            <a class="navbar-brand" href="#"><img src="{{asset('frontend/assets/images/logo.png')}}" alt="logo"></a> </div>
          
          <div class="fixed-collapse-navbar" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="{{url('spa/sobre')}}">Sobre</a></li>
              <li class="dropdown"> <a data-toggle="dropdown" href="#">Serviços <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a href="{{url('/spa/servico')}}">Serviço1</a></li>
                  <li><a href="{{url('/spa/servico')}}">Serviço2</a></li>
                  <li><a href="{{url('/spa/servico')}}">Serviço3</a></li>
                </ul>
              </li>
              
             
              <li><a href="{{url('spa/sobre')}}">Contactos</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="col-md-2 booking">
      <a class="btn-booking text-center try sans hvr-ripple-out" href="#" data-toggle="modal" data-target="#myModal">
      <i class="fa fa-calendar"></i> Reserva agora
      </a>
      </div>
    </div>
  </div>
  
</header>
 @yield('content')


<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-left">
        <p> &copy; 2016 Beauty & Spa All Rights Reserved </p>
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

<script src="{{asset('frontend/assets/js/jquery-2.1.4.js')}}"></script> 
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script> 
<script src="{{asset('frontend/assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.mixitup.min.js')}}"></script> 
<script src="{{asset('frontend/assets/js/jquery.appear.js')}}"></script>  
<script src="{{asset('frontend/assets/js/jquery-countTo.js')}}"></script> 

<!-- /logicsforest custom js --> 
<script src="{{asset('frontend/assets/js/custom-js.js')}}"></script> 
<script type="text/javascript">
    $(window).load(function() {
           $('#modal-default').modal('show');
      });
</script>

<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
</body>
</html>
