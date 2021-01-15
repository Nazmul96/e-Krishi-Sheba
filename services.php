<?php ?>
<html lang="en">
  <head>
    <title>পরামর্শ</title>
  </head>
<?php include "slice/header.php";
require_once "config/config.php";?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">পরামর্শ</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Advice <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pb">
    	<div class="container">
    		
    			<div class="row tabulation ftco-animate">
  				<div class="col-md-12">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						
								<?php
         $sql = "SELECT * FROM products WHERE flag=1 ORDER BY id DESC";
         mysqli_query($link,'SET CHARACTER SET utf8');
         mysqli_query($link,"SET SESSION collation_connection ='utf8_general_ci'");

         $result = mysqli_query($link, $sql);
         while($row = mysqli_fetch_assoc($result)){
        ?>
						  <li class="nav-item text-left">
						    <a class="nav-link  py-4" targer="_blank" href="services2.php?infID=<?php echo $row['id']?>"><span class="flaticon-analysis mr-2"></span> <?php echo $row['productName']?></a>
						  </li>
				<?php } ?>		 
						  
						</ul>
					</div>

				</div>
    	</div>
    </section>

<?php include "slice/footer.php";?>