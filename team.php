<?php include "slice/header.php";
require_once "config/config.php";?>	
<html lang="en">
  <head>
    <title>বিশেষজ্ঞ</title>
  </head>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">পেশাদার কর্মীরা</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Team <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row">
				
				

      <?php
         $sql = "SELECT * FROM experts WHERE flag=1";
         mysqli_query($link,'SET CHARACTER SET utf8');
         mysqli_query($link,"SET SESSION collation_connection ='utf8_general_ci'");

         $result = mysqli_query($link, $sql);
         while($row = mysqli_fetch_assoc($result)){
        ?>   
 
				
				
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff border">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(administrator/images/experts/<?php echo $row['image']?>);"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3><?php echo $row['name']?></h3>
								<span class="position mb-2"><?php echo $row['designation']?></span>
								<div class="faded">
									<p>Email: <a href="mailto:<?php echo $row['email']?>"><?php echo $row['email']?></a></br>
									Contact: <?php echo $row['cell']?></p>
									<p>Other Info.: <?php echo $row['otherInfo']?></p>
									
	              </div>
							</div>
						</div>
					</div><?php } ?>  


				</div>
			</div>
		</section>


    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-start">
    			<div class="col-md-6 py-5 px-md-5">
    				<div class="py-md-5">
		          <div class="heading-section heading-section-white ftco-animate mb-5">
		            <h2 class="mb-4">Request A Quote</h2>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		          </div>
		          
		    		</div>
    			</div>
        </div>
    	</div>
    </section>


    

		<?php include "slice/footer.php";?>