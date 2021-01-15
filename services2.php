<?php ?>
<html lang="en">
  <head>
    <title>পরামর্শ</title>
  </head>
<?php include "slice/header.php";
require_once "config/config.php";?>	

<?php 
if (!isset($_GET['infID'])||$_GET['infID']==NULL){
echo "<script>window.location = 'index.php';</script>";
}else{
$infID = $_GET['infID'];
}?>	
    
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
    		<div class="row tabulation mt-4 ftco-animate">

					<div class="col-md-12">
						<div class="tab-content">
						<?php
         $sql = "SELECT * FROM products WHERE id=$infID AND flag=1";
         mysqli_query($link,'SET CHARACTER SET utf8');
         mysqli_query($link,"SET SESSION collation_connection ='utf8_general_ci'");

         $result = mysqli_query($link, $sql);
         while($row = mysqli_fetch_assoc($result)){
        ?>
						  <div class="tab-pane container p-0 active">
						  <h3><?php echo $row['productName']?></h3></br>
						  	<div class="img" style="background-image: url(images//product/<?php echo $row['productimage']?>);"></div>
						  	
						  	<p><?php echo $row['productinfo']?></p>
						  </div><?php } ?>
						</div>
					</div>
				</div>
    	</div>
    </section>

<?php include "slice/footer.php";?>