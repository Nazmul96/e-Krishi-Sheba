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
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>প্রোফাইল</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/templatemo-ocean-vibe.css">
<!--

TemplateMo 554 Ocean Vibes

https://templatemo.com/tm-554-ocean-vibes

-->
</head>
<body>
    <header class="tm-site-header">
	<link rel = "stylesheet"
							   type = "text/css"
							   href = "myStyle.css" />
    <header class="tm-site-header">
        <h1 class="tm-mt-0 tm-mb-15"><span class="tm-color-primary">ই</span> <span class="tm-color-gray-2">-কৃষি সেবা</span></h1>
        <em class="tm-tagline tm-color-light-gray">আছে কৃষকের পাশে</em>
    </header>

    <!-- Video banner 400 px height -->
    <div id="tm-video-container">
        <video autoplay muted loop id="tm-video">
            <source src="video/paddy.mp4" type="video/mp4">
        </video>
        <i id="tm-video-control-button" class="fas fa-pause"></i>
    </div>
    <div class="tm-container">
        <nav class="tm-main-nav">
            <ul>
                <li class="tm-nav-item">
                    <a href="../myinbox/index.php" class="tm-nav-link">
						বার্তা পাঠান
                        <i class="far fa-3x fa-comments"></i>
                    </a>
                </li>
				<ul id="inline-popups">
                <li class="tm-nav-item">
                    <a href="#gallery" data-effect="mfp-move-from-top" class="tm-nav-link" id="tm-gallery-link">
							সারের দর
                        <i class="fas fa-3x fa-hand-holding-usd"></i>
                    </a>
                </li></ul>
                <li class="tm-nav-item">
                    <a href="../editprofile.php" data-effect="mfp-move-from-top" class="tm-nav-link">
							তথ্য পরিবর্তন
                        <i class="fas fa-3x fa-edit"></i>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="../changepassword.php" data-effect="mfp-move-from-top" class="tm-nav-link">
						পাসওয়ার্ড পরিবর্তন
                        <i class="fas fa-3x fa-user-lock"></i>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="../logout.php" data-effect="mfp-move-from-top" class="tm-nav-link">
						লগ আউট
                        <i class="fas fa-3x fa-sign-out-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>

        <!-- Popup itself -->
		 <div id="gallery" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                return home
                <i class="fas fa-times"></i>
            </a>
            <div class="tm-row tm-gallery-row">
                <div class="tm-gallery">
                    <div class="tm-gallery-container">  
				
                          <?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "krishi_unnayon";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					$conn -> set_charset("utf8");
					// Check connection
					if ($conn->connect_error) {
					  die("Connection failed: " . $conn->connect_error);
					}

					$sql = "SELECT * FROM fartilizer";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					  echo "<table>
						<thead>
							<tr class='table100-head'>
								<th style='text-align:center' class='column2'>সারের নাম</th>
								<th style='text-align:center' class='column2'>সারের বর্তমান বাজার দর</th></tr></thead><tbody>";
					  // output data of each row
					  while($row = $result->fetch_assoc()) {
						echo "<tr><td style='text-align:center' class='column2'>".$row["name"]."</td><td style='text-align:center' class='column2'>".$row["price"]."</td></tr>";
					  }
					  echo "</tbody></table>";
					} else {
					  echo "0 results";
					}
					$conn->close();
					?>             
									   
									   
									   
									   
                    </div>
                </div>
                <!-- Gallery navigation and description -->
                <div class="tm-col tm-gallery-right">
                    <h2 class="tm-color-primary tm-mt-35 tm-page-title">ঘোষণা</h2>
                    <div class="tm-gallery-right-inner">
                        <ul class="tm-gallery-links">
                          
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="portrait">
                                    <i></i>
									ঢাকা
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="nature">
                                    <i></i>
									রাজশাহী
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="animal">
                                    <i></i>
									বরিশাল
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="building">
                                    <i></i>
                          
                                </a>
                            </li>
                        </ul>
                        <p>
                          *** সারের দাম এলাকা / উপজেলা / জেলা / থানা / বিভাগ ভেদে তারতম্য হতে পারে ***
                        </p>
                        <p>
                            *** এইখানে ওয়েব সাইটে সার্বজনীন ভাবে সারের দাম ধরা হয়েছে ***
                        </p>
                    </div>
                </div>
            </div>
        </div>
		

         
            <h2 class="tm-contact-col tm-color-primary tm-page-title tm-mb-40">ফসলের বিস্তারিত তথ্য</h2>
            <div class="tm-row tm-contact-row">
                <div class="tm-col tm-contact-col">

                <!-- Do you need a working HTML contact form?
                	Please visit https://templatemo.com/contact page -->

                    <form id="contact-form" action="handle_req.php" method="POST" class="tm-contact-form">
                            <div class="form-group">
							        <label class="control-label">ফসলের ধরণ</label>
							<?php

				$hostname = "localhost";
				$username = "root";
				$password = "";
				$databaseName = "krishi_unnayon";
				$connect = mysqli_connect($hostname, $username, $password, $databaseName);
				$connect -> set_charset("utf8");
				$query = "SELECT id,name FROM crops_type";
				$result = mysqli_query($connect, $query);

				$options = "";?>
				 <select class="form-control" id="crop_type" name="crop_type" required>
				 <option value="">নির্বাচন করুন</option>
				 <?php while($row = mysqli_fetch_array($result)):;?>


					<option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>

       <?php endwhile;?>


                            </select>
                        </div>






                        <div class="form-group tm-text-right">
                            <button type="submit" class="tm-btn tm-btn-primary" name="send">পরবর্তী ধাপ</button>
                        </div>
                    </form>
                </div>
                <div class="tm-col tm-contact-col tm-contact-col-r">
                    <!-- Map -->
                    

                    <!-- Address -->
               

                    <!-- Links -->
                
                </div>
            </div>
        </div>
    </div>

    <footer class="tm-footer">
        <span>Copyright &copy; 2021  - ই-কৃষি সেবা</span>
        <span>Web Designed by
        <a href="#" title="free website templates" target="_parent" rel="nofollow">e-krishi sheba team</a></span>
</footer>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/templatemo-script.js"></script>



</body>
</html>
