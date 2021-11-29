<?php
// Initialize the session
session_start();
 


?>
 


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Interactive Game</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
   

  <audio autoplay>
      <source src="audio.mpeg">
</audio>


	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Interactive<span>Game</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="Play.html" class="nav-link">Play</a></li>
				<li class="nav-item"><a href="Rules.html" class="nav-link">Rules</a></li>
				<li class="nav-item"><a href="Trending.html" class="nav-link">Trending</a></li>
				<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
				<li class="nav-item"><a href="regestration.php" class="nav-link">Sign Up</a></li>
				<li class="nav-item"><a href="login.php" class="nav-link">Sign In</a></li>
				<li class="nav-item"><a href="logout.php" class="nav-link">Sign Out</a></li>
				
				<li class="nav-item" style="margin-top:16px;"><a class="my-5" style="color:orange;margin-top:30px;"><b>
				<?php
						if(isset($_SESSION["username"])==true)
						{
							echo htmlspecialchars($_SESSION["username"]);
							 }
						else{}
				?>
				</b></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	
    <div class="hero-wrap" style="background-image: url('images/pg1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text">
	            <h1 class="mb-4">You never <span> win any games </span> <span>If you don't play.</span></h1>
	            <p style="font-size: 18px;"></p>
	            <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4">
	            	<div class="icon d-flex align-items-center justify-content-center">
	            		<span class="ion-ios-play"></span>
	            	</div>
	            	<div class="heading-title ml-5">
		            	<span></span>
	            	</div>
	            </a>
            </div>
          </div>
		  

          <div class="col-lg-2 col"></div>
          <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
          	<form action="#" class="request-form ftco-animate">
          		<h2>Sign In</h2>
	    				<div class="form-group">
	    					<label for="" class="label">Email</label>
	    					<input type="text" class="form-control" placeholder="username@gmail.com">
	    				</div>
	    				<div class="form-group">
	    					<label for="" class="label">Password</label>
	    					<input type="text" class="form-control" placeholder="user123">
	    				</div>
	    				<div class="d-flex">
	    					<div class="form-group mr-2">
	               
	            <div class="form-group">
	              <input type="submit" value="Log In" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
          </div>
        </div>
      </div>
    </div>


   

    <section class="ftco-section">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading"</span>
            <h2 class="mb-2">Choose Your Game</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-3">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url(images/game1.jpeg);">
    						<div class="price-wrap d-flex">
    							<span class="rate">Play</span>
    							
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="#">Find Ball</a></h2>
    						
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Play now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url(images/game2.jpg);">
    						<div class="price-wrap d-flex">
    							<span class="rate">Play</span>
    							
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="#">Object Finding</a></h2>
    						
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Play now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url(images/game3.jpg);">
    						<div class="price-wrap d-flex">
    							<span class="rate">Play</span>
    							
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="#">Solve the Puzzle</a></h2>
    						
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Play now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url(images/game4.png);">
    						<div class="price-wrap d-flex">
    							<span class="rate">Play</span>
    							
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="#">Tic Tak Toe</a></h2>
    						
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Play now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>

    			
    		</div>
    	</div>
    </section>

    <section class="ftco-section services-section img" style="background-image: url(images/bg_2.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate" >
          	<span class="subheading"></span>
            <h2 class="mb-3">How it works</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-3 d-flex align-self-stretch ftco-animate" >
            <div class="media block-6 services services-2" >
              <div class="media-body py-md-4 text-center" style="margin-left: 70px;">
              	<div class="icon d-flex align-items-center justify-content-center" ><span class="flaticon-route"></span></div>
                <h3 style="margin-left: 10px;">Choose Game</h3>
                
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate" >
            <div class="media block-6 services services-2" >
              <div class="media-body py-md-4 text-center" style="margin-left: 70px;" >
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-select" ></span></div>
                <h3 style="margin-left: 10px;">View Rules</h3>
                
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center" style="margin-left: 50px;" >
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                <h3 style="margin-left: 10px;">Play</h3>
                
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2">
              <div class="media-body py-md-4 text-center">
              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-review"></span></div>
                <h3>Enjoy The Game</h3>
                
              </div>
            </div>      
          </div>
    		</div>
    	</div>
    </section>

   
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container" style="margin-top: 40px;">
        <div class="row mb-5">
          <h1 style="color: rgb(255, 156, 7); margin-left: 200px;" >Contact Us</h1>
		  
          <div class="col-md" style="margin-left: 50px; margin-top: 100px;">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2" style="color: cornflowerblue;">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>