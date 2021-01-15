<?php 
		$jat;
		$type;
		$jomi_area;
		$uria ;
		$tsp  ;
		$mop  ;
		$zipsam ;
		$dosta  ;
		$gobor;







if(isset($_POST['jat'])) 	{
	
	if(isset($_POST['type']))
								{
			$jat= $_POST['jat'];
			echo $jat;echo" ";
			
			$type = $_POST['type'];
			echo $type; echo" ";
			$jomi_area=$_POST['jomi'];
			echo $jomi_area; echo" ";
			$number=$jomi_area;
	if ($jat==1)
	{
		//<option value="1">পেঁয়াজ</option>
										  
		
	}
	
	else if ($jat==2)
	{
		// <option value="2">আদা</option>
										  
		switch ($type) {
        case '1':
			//bigha

	$uria = ((float)$number*350)/7.47 ; 
	$tsp =  ((float)$number*300)/7.47;
	$mop = ((float) $number*300)/7.47; 
	//$zipsam =  (float)$number*15*(float)7.47 ;
	//$dosta =  (float)$number*1.5*(float)7.47 ;
	$gobor =  ((float)$number*10000)/7.47;	
		
            break;
        case '2':
           //shotangsho
	
		$uria = (float)$number*1.4 ;
		$tsp = (float) $number*1.2 ;
		$mop =  (float)$number*1.4;
		//$zipsam =  (float)$number*15/33 ;
		//$dosta =  (float)$select* (float)(1.55/33) ;
        $gobor =  (float)$number*40;
		
			break;
			case '3':
			//hector
   
	$uria = (float) $number*350 ; 
	$tsp =  (float)$number*300 ;
	$mop = (float) $number*300; 
	//$zipsam =  (float)$number*15*(float)7.47 ;
	//$dosta =  (float)$number*1.5*(float)7.47 ;
	$gobor =  (float)$number*10000;	
            break;
        default:
          echo 'Plese select an option';
		break;} ?>
						

<html lang="en">
  <head>
    <title>পরামর্শ</title>
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
    				<a class="navbar-brand" href="index.php">কৃষি উন্নয়ন<br><span>আছে  কৃষকের পাশে</span></br></a>
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
	        	<li class="nav-item active"><a href="index.php" class="nav-link">হোম</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">আমাদের সম্পর্কে</a></li>
	        	<li class="nav-item"><a href="team.php" class="nav-link">বিশেষজ্ঞ</a></li>
	        	<li class="nav-item"><a href="services.php" class="nav-link">পরামর্শ</a></li>
				<li class="nav-item"><a href="singup.php" class="nav-link">অ্যাকাউন্ট খুলুন</a></li>
				<li class="nav-item"><a href="contact.php" class="nav-link">যোগাযোগ</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    

    
   

    <section class="ftco-section ftco-no-pb">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading"style="font-size:30px;">মূলা</span>
          </div>
        </div>
  			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-analysis mr-2"></span> জমি ও মাটি</a>
						  </li>
						 
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-business mr-2"></span>জাত</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span> বীজ হার ও বপন </a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-money mr-2"></span>সারের মাত্রা</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-rating mr-2"></span>সার প্রয়োগ পদ্ধতি</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-search-engine mr-2"></span>পরিচর্যা</a>
						  </li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
					
						  	<h3><a href="#">জমি ও মাটি</a></h3>
						  	<p>উঁচু, মাঝারি উঁচু ও মাঝারি নিচু জমিতে মূলা চাষ করা যায়। সুনিষ্কাশিত বেলে দোয়াশ মাটি মূলা চাষের জন্য ভাল। এটেল মাটিতে মূলার বাড় বাড়তি কম হয়। মূলা চাষের জন্য জমি গভীরভাবে ধুলো ধুলো করে চাষ করতে হয়। ছাই ও জৈব সার বেশী ব্যবহারে মূলার বাড় বাড়তি ভাল হয়।</p>
						  </div>
						 
						  <div class="tab-pane container p-0 fade" id="services-2">
						  
						  	<h3><a href="#">জাত</a></h3>
						  	<p>একসময় জাপানের বিখ্যাত তাসাকি সান জাতের মূলার মাধ্যমে এ দেশে উচ্চফলনশীল মূলার আবাদ শুরু হলেও এখন মূলার প্রায় ২৫টি জাত চাষ হচ্ছে। 
							আসছে নিত্য নতুন স্বল্প জীবনকালের অধিক ফলনশীল হাইব্রিড জাত। উল্লেখযোগ্য জাত সমূহ হল বারি মূলা ১, বারি মূলা ২, বারি মূলা ৩, এভারেষ্ট, হোয়াইট প্রিন্স, বিপ্লব ৯৪, হিমালয় এফ১, সুপার ৪০, মুক্তি এফ১, তাসাকী, কুইক ৪০, রকি ৪৫, হোয়াইট রকেট, হোয়াইট ৪০, জি চেটকি, সুফলা ৪০, বিএসবিডি ২১০১ এফ১, আনারকলি, দুর্বার, রকেট এফ১, সামার বেষ্ট এফ১, হ্যাভেন এফ১, মিনো আর্লি লং হোয়াই, বরকতি ৪০ এফ১, পাইলট এফ১, সিগমা ৪০ ইত্যাদি। 
							নিচে মূলার বিভিন্ন জাতের সংক্ষিপ্ত পরিচিতি দেয়া হল-</p>
							<h4>বারিমূলা ১ (তাসাকিসান)-</h4><p>  ভাদ্র থেকে কার্তিক মাসে বীজ বুনতে হয়। বীজ বোনার ৪০-৪৫ দিন পর থেকেই মূলা তোলা যায়। মূলার রঙ ধবধবে সাদা, বেলুনাকৃতি, লম্বা ও বড়, দৈর্ঘ্যে প্রায় ৩৫ সেন্টিমিটার, প্রতিটি মূলার গড় ওজন ১ কেজি। 
							দেশী মূলার মত অত ঝাঁঝ নেই। প্রতি হেক্টরে ফলন ৬৫-৭০ টন।</p>
							<h4>বারিমূলা ২ (পিংকী)-</h4>
							<p> ভাদ্র থেকে কার্তিক মাসে বীজ বুনতে হয়। বীজ বোনার ৪০-৪৫ দিন পর থেকেই মূলা তোলা যায়। মূলার রঙ লালচে, নলাকৃতি, দৈর্ঘ্যে প্রায় ২৫-৩০ সেন্টিমিটার, মধ্যমাকার, প্রতিটি মূলার গড় ওজন ৯০০ গ্রাম। শাক খাওয়ার উপযুক্ত। প্রতি হেক্টরে ফলন ৬৫-৭০ টন। </p>
							<h4>বারিমূলা ৩ (দ্রুতি)-</h4>
							<p>ভাদ্র থেকে কার্তিক মাসে বীজ বুনতে হয়। বীজ বোনার ৪০-৪৫ দিন পর থেকেই মূলা তোলা যায়। মূলার রঙ সাদা, নলাকৃতি। পাতার কিনারা ঢেউ খেলানো।
							মূলার অর্ধেক অংশ মাটির উপরে থাকে। প্রতিটি মূলার গড় ওজন ৪০০-৬০০ গ্রাম। প্রতি হেক্টরে ফলন ৪০-৪৫ টন। জীবনকাল ৪০-৪৫ দিন। রোগ পোকার আক্রমণ প্রতিরোধী। 
							এ দেশের আবহাওয়ায় ভাল বীজ উৎপাদন করা যায়। প্রতি হেক্টরে প্রায় ১.২-১.৩ টন বীজ পাওয়া যায়</p>
							<h4>এভারেষ্ট এফ১-</h4>
							<p>সারা বছর চাষ করা যায়। একই জমিতে একই মৌসুমে ৩ বার চাষ করা যায়। সহজে ফুল আসেনা। 
							বীজ বোনার ৪০-৪৫ দিন পর থেকেই মূলা তোলা যায়। মূলার রঙ সাদা, নলাকৃতি, ছোট আকারের, প্রতিটি মূলার গড় ওজন ৪০০-৫০০ গ্রাম। শাক খাওয়ার উপযুক্ত। প্রতি হেক্টরে ফলন ৫০-৬০ টন।</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  
						  	<h3><a href="#">বীজ হার ও বপন</a></h3>
						  	<p>আশ্বিন থেকে কার্তিক মাসের মধ্যেই অধিকাংশ মূলার বীজ বপন করা হয়। প্রতি হেক্টরে বপনের জন্য ২.৫-৩.০ কেজি বীজের প্রয়োজন হয়।
							সাধারণতঃ ছিটিয়ে বীজ বপন করা হয়। তবে সারিতে বপন করলে পরিচর্যার সুবিধে হয়। সারিতে বুনতে হলে এক সারি থেকে আর এক সারির দূরত্ব দিতে হবে ২৫-৩০ সেমি.।</P>

                      
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	
						  	<h3><a href="#">সারের মাত্রা</a></h3>
						  
							<p>   
							<table>	
							<tr>						
                            <td>ইউরিয়াঃ </td>	 <td align ="center"><?php  print round($uria, 2);?>  কেজি</td>
							</tr>
							<tr>						
                            <td>টি এস পিঃ </td>        <td td align ="right"><?php  print round($tsp, 2);?>  কেজি</td>
							</tr>
							<tr>						
                            <td>এমওপিঃ  </td>         <td align ="center"><?php  print round($mop, 2);?>  কেজি</td>
							</tr>
							<tr>						
                            <td> গোবরঃ </td>          <td align ="center"><?php  print round($gobor, 2);?>  কেজি</td>
							</tr>                          
							</table>
                              </p>
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-5">
						  	
						  	<h3><a href="#">সার প্রয়োগ পদ্ধতি</a></h3>
						  	<p>জমি তৈরির সময় সবটুকু জৈব সার, টিএসপি ও অর্ধেক এমওপি সার মাটির সাথে মিশিয়ে দিতে হবে। 
							ইউরিয়া ও বাকি অর্ধেক এমওপি সার সমান ২ কিস্তিতে ভাগে ভাগ করে বীজ বপনের পর তৃতীয় ও পঞ্চম সপ্তাহে ছিটিয়ে সেচ দিতে হবে। 
							মূলার বীজ উৎপাদন করতে হলে জমিতে অবশ্যই বোরন সার হিসেবে বোরিক পাউডার/বোরক্স ব্যবহার করতে হবে। প্রতি হেক্টরে ১০-১৫ কেজি বোরিক এসিড/বোরাক্স দিলেই চলে।</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	
						  	<h3><a href="#">পরিচর্যা</a></h3>
						  	
						<p> বীজ বপনের ৭-১০ দিন পর অতিরিক্ত চারা তুলে পাতলা করে দিতে হবে। ৩০ সেমি. দূরত্বে একটি করে চারা রাখা ভাল।
						মাটিতে রস কম থাকলে সেচ দিতে হবে। প্রতি কিসি-র সার উপরি প্রয়োগের পর পরই সেচ দিতে হবে। 
						আগাছা পরিষ্কার করে দিতে হবে। মাটি শক্ত হয়ে গেলে নিড়ানী দিয়ে মাটির উপরের চটা ভেঙ্গে দিতে হবে।</p>
						  
						  </div>
						  
						  
						</div>
					</div>
				</div>
    	</div>
    </section>
<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0">You Always Get the Best Guidance</h2>
          </div>
        </div>	
    	</div>
    </section>
    

		
    
    
  

  <!-- loader -->


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

<?php
	}					
				
						

	?>
	<?php
	 if ($jat==3)
	{
		// <option value="3">রসুন</option>
										    
	}
	else if ($jat==4)
	{
		//<option value="4">হলুদ</option>
															  
	}
	else if ($jat==5)
	{
		//  <option value="5">মরিচ</option>								  
	}
	
								}
}
	
	?>
	
