<?php
// Initialize the session
include "../config/config.php";
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	echo hello;
    header("location: ./index.php");
    exit;
}


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>যাবতীয় তথ্য</title>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
        <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
 
  
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
			
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/mainc.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
  </head>
  <body>
  <!-- Banner -->
			<section id="banner">
				
				
			
			</section>

		<!-- One -->
			<section id="one" class="wrapper special">
				<div class="inner">
					<header class="major">
					
			 <?php



			 if(isset($_POST['submit'])){
			   $hostname = "localhost";
			   $username = "root";
			   $password = "";
			   $databaseName = "krishi_unnayon";
			   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
			   $connect -> set_charset("utf8");

			   $names = $_POST['crop_name'];
			   $unit = $_POST['unit'];
			   $size = $_POST['size'];



			   foreach ($names as $key => $value) {
			     // code...
			     $sql = "SELECT * FROM crops WHERE id = $value";
			     $result = mysqli_query($connect, $sql);

			     while($row = mysqli_fetch_array($result)):;?>
           <h2>নাম : <?php echo $row['name'] ?></h2>
					</header> 

					 <?php echo $row['description'] ?>
					 <h2>সারের প্রয়োগের মাত্রা , দর এবং খরচ </h2>
					 <table class="table table-bordered" align="center">
							 <tr>
								<th style="text-align:center">সারের নাম</th>
								<th style="text-align:center">পরিমাণ ( প্রতি কেজি )</th>
								<th style="text-align:center">মূল্য ( প্রতি কেজি )</th>
								<th style="text-align:center">খরচ</th>
							 </tr>


			     <?php
			         $fertilizers = json_decode($row['fertilizer'], true);
			         $quantities = json_decode($row['quantity'], true);
					$totalCost = 0;
			         foreach ($fertilizers as $key => $value) {
			           // code...

			         //  echo $value . " " . $quantities[$key] . "\n";
			 				$sql = "SELECT * FROM fartilizer";
			 				$result = mysqli_query($connect, $sql);
			 					while($row = mysqli_fetch_array($result)):;
			 							if($row['id'] == $value){
                         ?>
                   <tr>
	                       <td><b><?php echo $row['name']  ?></b></td>
                        <?php
												   if($unit == "hector"){
														 ?>
														 <td><?php echo round(($quantities[$key] * $size),2) ?></td>
														<td><?php echo $row['price'] ?></td>
														<td><?php echo round(($row['price'] * ($quantities[$key]*$size) ),2) ?></td>
														<?php
														$totalCost += round(($row['price'] * ($quantities[$key]*$size) ),2);
													 }
												?>

												<?php
												   if($unit == "bigha"){
														 ?>
														 <td><?php echo round((($quantities[$key] * $size)/3.953686105),2) ?></td>
														<td><?php echo $row['price'] ?></td>
														<td><?php echo round(($row['price'] * (($quantities[$key] * $size)/3.953686105) ),2) ?></td>
														<?php
													$totalCost += round(($row['price'] * (($quantities[$key] * $size)/3.953686105) ),2);
													 }
												?>

												<?php
												   if($unit == "sotangsho"){
														 ?>
														 <td><?php echo round((($quantities[$key] * $size)/(3.953686105 * 33)),2) ?></td>
														<td><?php echo $row['price'] ?></td>
														<td><?php echo round(($row['price'] * (($quantities[$key] * $size)/(3.953686105*33)) ),2) ?></td>
														<?php
														$totalCost += round(($row['price'] * (($quantities[$key] * $size)/(3.953686105*33)) ),2);
													 }
												?>


                   </tr>



												 <?php
			 							}
			 				endwhile;

			         }
							 ?>
						<tr><td></td>	<td></td><td></td> <td> <b>মোট খরচ = <?php echo $totalCost ?></b></td> 
               </table>

							 <?php

			 			endwhile;



			   }

			 }

			 ?>
				<div>
			<a href="profile.php">প্রোফাইলে ফিরে যাই</a>
				</div>
		
					</div>
				
			</section>

		
		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	<footer id="footer">
				<div class="copyright">
					Copyright&copy; 2021: <a href="#">2021 - ই-কৃষি সেবা</a>.
				</div>
			</footer>
	</body>
  
  
  
  
  
  
  
  
  



  </body>
</html>
