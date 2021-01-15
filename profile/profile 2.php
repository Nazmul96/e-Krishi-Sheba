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
    <title>Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/magnific-popup.css"> 
    <link rel="stylesheet" href="css/templatemo-ocean-vibes.css"> 
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
        <h1 class="tm-mt-0 tm-mb-15"><span class="tm-color-primary">Profile</span> <span class="tm-color-gray-2">vibes</span></h1>
        <em class="tm-tagline tm-color-light-gray">simple and effective design</em>
    </header>

    <!-- Video banner 400 px height -->
    <div id="tm-video-container">
        <video autoplay muted loop id="tm-video">
            <source src="video/my.mp4" type="video/mp4">
        </video>  
        <i id="tm-video-control-button" class="fas fa-pause"></i>
    </div>
    <div class="tm-container">
        <nav class="tm-main-nav">
            <ul>
                <li class="tm-nav-item">
                    <a href="../myinbox/index.php" class="tm-nav-link">
						বার্তা পাঠান
                        <i class="fas fa-3x fa-water"></i>
                    </a>                
                </li> 
				<ul id="inline-popups">
                <li class="tm-nav-item">
                    <a href="#gallery" data-effect="mfp-move-from-top" class="tm-nav-link" id="tm-gallery-link">
							সারের দর
                        <i class="far fa-3x fa-images"></i>
                    </a>
                </li></ul>
                 <li class="tm-nav-item">
                    <a href="../editprofile.php" data-effect="mfp-move-from-top" class="tm-nav-link">
							তথ্য পরিবর্তন
                        <i class="far fa-3x fa-smile"></i>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="../changepassword.php" data-effect="mfp-move-from-top" class="tm-nav-link">
						পাসওয়ার্ড পরিবর্তন
                        <i class="fas fa-3x fa-tint"></i>
                    </a>
                </li>
                <li class="tm-nav-item">
                    <a href="../logout.php" data-effect="mfp-move-from-top" class="tm-nav-link">
						লগ আউট	
                        <i class="far fa-3x fa-comments"></i>
                    </a>
                </li>

            </ul>
        </nav>        <div id="gallery" class="popup mfp-with-anim mfp-hide tm-bg-gray">
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
								<th class='column2'>সারের নাম</th>
								<th class='column2'>সারের বর্তমান বাজার দর</th></tr></thead><tbody>";
					  // output data of each row
					  while($row = $result->fetch_assoc()) {
						echo "<tr><td class='column2'>".$row["name"]."</td><td class='column2'>".$row["price"]."</td></tr>";
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
                    <h2 class="tm-color-primary tm-mt-35 tm-page-title">Gallery</h2>
                    <div class="tm-gallery-right-inner">
                        <ul class="tm-gallery-links">
                            <li>
                                <a href="#" class="active tm-gallery-link" data-filter="*">
                                    <i class="fas fa-layer-group tm-gallery-link-icon"></i>
                                    All
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="portrait">
                                    <i class="fas fa-portrait tm-gallery-link-icon"></i>
                                    Portraits
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="nature">
                                    <i class="fas fa-leaf tm-gallery-link-icon"></i>
                                    Nature
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="animal">
                                    <i class="fas fa-paw tm-gallery-link-icon"></i>
                                    Animals
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tm-gallery-link" data-filter="building">
                                    <i class="far fa-building tm-gallery-link-icon"></i>
                                    Buildings
                                </a>
                            </li>
                        </ul>
                        <p>
                            Different icons are used for
                            different categories. There are 4 or more
                            pages of photos in this gallery. Each
                            thumbnail has a nice hover effect.
                        </p>
                        <p>
                            Proin lacus enim, finibus sed magna a,
                            molestie lacinia est. Maecenas id dolor
                            lorem. Donec sodales ex velit.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popup itself -->

            <a href="#" class="tm-close-popup">
                return home
                <i class="fas fa-times"></i>
            </a>
            <h2 class="tm-contact-col tm-color-primary tm-page-title tm-mb-40">ফসলের বিস্তারিত তথ্য</h2>
            <div class="tm-row tm-contact-row">
                <div class="tm-col tm-contact-col">
                
                <!-- Do you need a working HTML contact form?
                	Please visit https://templatemo.com/contact page -->
                    
                    <form id="contact-form" action="" method="POST" class="tm-contact-form">
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
				 <select class="form-control" id="country" name="country" onchange="change_country();">
				 <option value="">Select Country</option>
				 <?php while($row = mysqli_fetch_array($result)):;?>
				
				
					<option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
				
       <?php endwhile;?>

                       
                            </select>
                        </div>
                     
                        <div class="form-group">
                            <select class="form-control" name="state" id="state">
                                <option value="-">Subject</option>
             
                            </select>
							<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
							<script>
function change_country()
{
	var country = $("#country").val();
	
	   $.ajax({
		type: "POST",
		url: "state.php",
		data: "country="+country,
		cache: false,
		success: function(response)
			{
					//alert(response);return false;
				$("#state").html(response);
			}
			});
	
}
</script>

                        </div>
                         <div class="form-group">
                            <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required />
                        </div>

                        <div class="form-group tm-text-right">
                            <button type="submit" class="tm-btn tm-btn-primary">Send it now</button>
                        </div>
                    </form>
                </div>
                <div class="tm-col tm-contact-col tm-contact-col-r">
                    <!-- Map -->
                    <div class="mapouter tm-mb-40">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="520" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>

                    <!-- Address -->
                    <address class="tm-mb-40">
                        110-220 Nam vel ultricies mauris,<br>
                        Et gravida eros 10220
                    </address>

                    <!-- Links -->
                    <ul class="tm-contact-links">
                        <li>
                            <a href="tel:0100200340">
                                <i class="fas fa-phone tm-contact-link-icon"></i>
                                Tel: 010-020-0340
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@company.com">
                                <i class="fas fa-at tm-contact-link-icon"></i>
                                Email: info@company.com
                            </a>
                        </li>
                        <li>
                            <a href="https://www.company.com">
                                <i class="fas fa-link tm-contact-link-icon"></i>
                                URL: www.company.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer class="tm-footer">
        <span>Copyright &copy; 2020 Your Company</span>
        <span>Web Designed by 
        <a href="https://templatemo.com" title="free website templates" target="_parent" rel="nofollow">TemplateMo</a></span>
</footer>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/templatemo-script.js"></script>
</body>
</html>