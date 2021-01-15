<?php
// Initialize the session
include "config.php";
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: calculate.php");
    exit;
}







?>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <head>
    <title>অ্যাকাউন্ট খুলুন</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>
  </head>
  <body>
	  <div class="bg-top navbar-light d-flex flex-column-reverse">
    	<div class="container py-3">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.html">কৃষি উন্নয়ন<br><span>আছে  কৃষকের পাশে</span></br></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span>তথ্য</span><span class="iconify" data-icon="emojione-v1:information" data-inline="false"></span></div>
					    	<div class="text">
					    
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span>জিজ্ঞেসা </span><span class="iconify" data-icon="emojione-v1:exclamation-question-mark" data-inline="false"></span></div>
						    <div class="text">
						    	
						 
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span>সেবা</span><span class="iconify" data-icon="medical-icon:i-social-services" data-inline="false"></span></div>
						    <div class="text">
						    </div>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
		
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="খুঁজুন">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	       <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        
<div class="btn-group">
	               <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <?php 
				$us = $_SESSION["username"]; 
				$query = "SELECT name FROM   users WHERE  username = '$us' ";
				if ($result = mysqli_query($link,$query)) {

				/* fetch associative array */
				while ($row = mysqli_fetch_assoc($result)) {
					printf ("%s\n", $row["name"]);
							}

    mysqli_free_result($result);
} ?>                          
                   </button>
				      <div class="dropdown-menu">
                       <a class="dropdown-item" href="logout.php">তথ্য পরিবর্তন</a>   
				<a class="dropdown-item" href="logout.php">লগ আউট</a>  					   
                     </div>
					 
				</div>

	        	<li class="nav-item"><a href="about.html" class="nav-link">বার্তা পাঠান</a></li>
	        	<li class="nav-item"><a href="team.html" class="nav-link">বিশেষজ্ঞ</a></li>
	        	<li class="nav-item"><a href="project.html" class="nav-link">পরামর্শ</a></li>
	        	<li class="nav-item"><a href="services.html" class="nav-link">সেবা</a></li>
				<li class="nav-item"><a href="contact.html" class="nav-link">যোগাযোগ</a></li>
				<li class="nav-item"><a href="reset.php" class="nav-link">reset pass</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_1.jpeg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate mb-md-5">
          	<span class="subheading">tag ling</span>
            <h1 class="mb-4">কৃষক বাঁচলে দেশ বাঁচবে</h1>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
          </div>
        </div>
        </div>
      </div>
  <div class="slider-item" style="background-image:url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate mb-md-5">
          	<span class="subheading">tag</span>
            <h1 class="mb-4">কৃষি এ দেশের অর্থনীতির মূল চালিকা শক্তি</h1>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
          </div>
        </div>
        </div>
      </div>
      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate mb-md-5">
          	<span class="subheading">tag</span>
            <h1 class="mb-4">আমাদের কৃষি আমাদের প্রাণ</h1>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-consult">
			<div class="container">
				
					<div class="col-md-6 wrap-about2 align-items-stretch d-flex">
						<div class="ftco-animate wrap-about2  bg-primary align-self-stretch px-4 py-5 w-100">
							<h2  align="center" class="heading-white mb-4">Shar porimap korun</h2>
							<form action="action_calculate.php" method="post" accept-charset="utf-8">
		    			<label for="cars" style="color:black">jomir ekkok:</label>
						<select name="calculate" id="cars">
							<option value="1" selected>বিঘা</option>
							<option value="2">শতাংশ</option>
							<option value="3">হেক্টর</option>
						</select>
							  <div class="form-group ">
                <input type="text"  placeholder="জমির পরিমাণ" name="num" class="form-control">
            </div>
			<div class="form-group" style="color:black">
						ইউরিয়া =  কেজি
				</div>
				<div class="form-group" style="color:black">
						টি এস পি()  বা ডি এ পি()	= কেজি
				</div>
				<div class="form-group" style="color:black">
						জিপ্সাম বা গন্ধক =	কেজি
				</div>
				<div class="form-group" style="color:black">
						দস্তা = কেজি	
				</div>			
		    				
			
	    				
	    			 <div class="wrap-about2">	
		            <div class="form-group ">
                <input type="submit" class="btn-success" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset" style="color:red">
				<a href="profile.php"> <font style="color:black">Back </font></a>
            </div>
</div>
			</form>
						</div>
					</div>
	
				
			</div>
		</section>
		
		<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
    	
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
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>