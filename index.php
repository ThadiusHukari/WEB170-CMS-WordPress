<!-- Main -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/angel.ico">

    <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!--load font awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      
<!-- ESTATE style sheet -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- ESTATE js -->
<script src="js/estate.js"></script>
      

      
  </head>
    
<!-- NAVBAR
================================================== -->
  <body <?php body_class(); ?>>
<section>
<header>
<a href="index.html">
    <img id="logo" href="estate.html" src="<?php bloginfo('template_directory'); ?>/images/estate-logo.png" alt="ESTATE">
</a>
    
<div class="social">
    <ul>
        <li><a href="https://www.facebook.com/shopestate/?fref=ts"><i class="fa fa-lg fa-facebook"></i></a></li>
         <li><a href="https://www.instagram.com/shopestate/"><i class="fa fa-lg fa-instagram"></i></a></li>
  </ul>
</div>
    
<!-- Begin WP Head Function -->
<?php wp_head(); ?>
<!-- End WP Head Function -->
    
</header>
    
</section>


<!-- Begin WP Menu -->
<?php wp_nav_menu(array('theme_location' => 'navbar-wrapper')); ?>
<!-- Begin WP Menu -->
      
      
    <div class="navbar-wrapper">
      <div class="container-fluid">

        <nav class="navbar navbar-inverse">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              </button>
              <a class="navbar-brand" href="#"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="#">NEW ARRIVALS</a></li>
                  
                  <li class="dropdown">
                  <a href="product.html" role="button" aria-haspopup="true" aria-expanded="false">PRODUCT <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header"><a href="#">TOPS</a></li>
                    <li><a href="#">Outerwear</a></li>
                    <li><a href="#">Button-Ups</a></li>
                    <li><a href="shirts.html">Shirts</a></li>
                    <li><a href="#">Tanks</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header"><a href="#">BOTTOMS</a></li>
                    <li><a href="#">Pants</a></li>
                    <li><a href="#">Shorts</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header"><a href="#">ACCESSORIES</a></li>
                    <li><a href="#">Hats</a></li>
                    <li><a href="#">Jewelry</a></li>
                  </ul>
                </li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#contact">CONTACT</a></li>
              </ul>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-search"></span>Search</a></li>
                <li><a href="log-in.html"><span class="glyphicon glyphic-log-in"></span>Log In</a></li>
                <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
            </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

<!-- Breadcrumbs -->
<ul class="breadcrumb">
  <li><a href="index.html">Home</a> <span class="divider"></span></li>
  <li class="active"><a href="product.html"><b>Product</b></a>
</ul>


<!-- Begin WP Side Menu -->
<?php wp_list_pages(array('title_li' => 'col-md-3')); ?>   
<!-- End WP Side Menu -->

      
<!-- side nav -->
<div class="col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li role="presentation" class="active"><a href="#">TOPS</a></li>
        <li role="presentation"><a href="#">Outerwear</a></li>
        <li role="presentation"><a href="#">Button-Ups</a></li>
        <li role="presentation"><a href="shirts.html">Shirts</a></li>
        <li role="presentation"><a href="#">Tanks</a></li>
</ul>
    
  <ul class="nav nav-pills nav-stacked">
        <li role="presentation" class="active"><a href="#">BOTTOMS</a></li>
        <li role="presentation"><a href="#">Pants</a></li>
        <li role="presentation"><a href="#">Shorts</a></li>
</ul>   
    
  <ul class="nav nav-pills nav-stacked">
        <li role="presentation" class="active"><a href="#">ACCESSORIES</a></li>
        <li role="presentation"><a href="#">Hats</a></li>
        <li role="presentation"><a href="#">Jewerly</a></li>
</ul>

<div class="container">
  <h3>PRICE</h3>
  <form role="form">
    <div class="radio">
      <label><input type="radio" name="optradio">$0-$24.99</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">$25-$49.99</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">$50-$99.99</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">$100-$149.99</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">$150+</label>
    </div>
  </form>
</div>
    
<div class="container">
  <h3>COLOR</h3>
  <form role="form">
    <div class="checkbox">
      <label><input type="checkbox" value="">Black</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">White</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Red</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Blue</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Green</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" value="">Yellow</label>
    </div>
  </form>
</div>
    
<button type="button" class="btn btn-default"><a  href="shirts.html">SUBMIT</a></button>

</div>

<!-- BOOSTRAP HOVER START -->
<div class="col-md-3">
    <div class="hovereffect">
        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/estate-rock-shirts900x900.png" alt="tops">
        <div class="overlay">
            <h2>OUTERWEAR</h2>
            <a class="info" href="#">Shop Now</a>
        </div>
    </div>
</div>
      
<div class="col-md-3">
    <div class="hovereffect">
        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/estate-rock-shirts900x900.png" alt="tops">
        <div class="overlay">
            <h2>BUTTON UPS</h2>
            <a class="info" href="#">Shop Now</a>
        </div>
    </div>
</div>
      
<div class="col-md-3">
    <div class="hovereffect">
        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/estate-rock-shirts900x900.png" alt="tops">
        <div class="overlay">
            <h2>SHIRTS</h2>
            <a class="info" href="shirts.html">Shop Now</a>
        </div>
    </div>
</div>

    
<div class="col-md-3">
    <div class="hovereffect">
        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/estate-rock-shirts900x900.png" alt="tops">
        <div class="overlay">
            <h2>TANKS</h2>
            <a class="info" href="#">Shop Now</a>
        </div>
    </div>
</div>
      
<div class="col-md-3">
    <div class="hovereffect">
        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/mr-completely-pants900x900.png" alt="tops">
        <div class="overlay">
            <h2>PANTS</h2>
            <a class="info" href="#">Shop Now</a>
        </div>
    </div>
</div>
      
<div class="col-md-3">
    <div class="hovereffect">
        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/mr-completely-pants900x900.png" alt="tops">
        <div class="overlay">
            <h2>SHORTS</h2>
            <a class="info" href="#">Shop Now</a>
        </div>
    </div>
</div>
      
<div class="col-md-3">
    <div class="hovereffect">
        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/estate-hats2-900x900.png" alt="tops">
        <div class="overlay">
            <h2>HATS</h2>
            <a class="info" href="#">Shop Now</a>
        </div>
    </div>
</div>
      
<div class="col-md-3">
    <div class="hovereffect">
        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/estate-hats2-900x900.png" alt="tops">
        <div class="overlay">
            <h2>JEWELRY</h2>
            <a class="info" href="#">Shop Now</a>
        </div>
    </div>
</div>
      

<!-- BOOSTRAP HOVER END --> 

      
      <!-- START THE FEATURETTES 
      <hr class="featurette-divider">
      END THE FEATURETTES -->


   <!--  
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer> -->
      
  <!-- FOOTER -->       
<footer>
    <div class="col-md-4">
    <div class="footer" list-style-type="none">
    <ul class="address-list">
        <li class="address">1509 2nd Ave</li>
        <li class="address">Seattle, WA 98101</li>
    </ul>
    </div>
    </div>    
    
    <div class="col-md-4">
    <div class="footer">
    <ul class="account-info-list" list-style-type="none">
        <li class="account"><a href="#"></a>My Account</li>
        <li class="account"><a href="#"></a>Shipping</li>
        <li class="account"><a href="#"></a>Returns</li>
        <li class="account"><a href="#"></a>Size Guide</li>
        <li class="account"><a href="#"></a>About</li>
        <li class="account"><a href="#"></a>Contact</li>
    </ul>
    </div>
    </div>
    
    <div class="col-md-4">
    <div class="footer">
    <ul class="hours-list">
        <li class="hours">Tues-Sat 12pm-7pm</li>
        <li class="hours">Sunday 12pm-6pm</li>
        <li class="hours">Monday Closed</li>
    </ul>
    </div>
    </div>
    
    <hr class="featurette-divider">
<div id="validator">
  <p><a href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a> and <a href="http://validator.w3.org/check/referer">Valid HTML5</a> ~ Website by Thadius Hukari, &copy; 2016</p>
</div>
</footer>

<!-- Begin WP Head Function -->
<?php wp_footer(); ?>
<!-- End WP Head Function -->

    </body>
</html>
   