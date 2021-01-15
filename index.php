<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: profile/profile.php");
 
  exit;}
 
// Include config file
require_once "config/config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: profile/profile.php");
							//echo "welcome " ;
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<html lang="en">
  <head>
    <title>ই-কৃষি সেবা</title>
  </head>
<?php include "slice/header.php";?>	
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_1.jpeg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate mb-md-5">
          	<span class="subheading"></span>
            <h1 class="mb-4">কৃষক বাঁচলে দেশ বাঁচবে</h1>
 
          </div>
        </div>
        </div>
      </div>
  <div class="slider-item" style="background-image:url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate mb-md-5">
          	<span class="subheading"></span>
            <h1 class="mb-4">কৃষি এ দেশের অর্থনীতির মূল চালিকা শক্তি</h1>
            
          </div>
        </div>
        </div>
      </div>
      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate mb-md-5">
          	<span class="subheading"></span>
            <h1 class="mb-4">আমাদের কৃষি আমাদের প্রাণ</h1>
           
          </div>
        </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-consult">
			<div class="container">
				<div class="row d-flex no-gutters align-items-stretch	consult-wrap">
					<div class="col-md-5 wrap-about align-items-stretch d-flex">
						<div class="ftco-animate bg-primary align-self-stretch px-4 py-5 w-100">
							<h2 align="center" class="heading-white mb-4" >লগ ইন করুন</h2>
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="appointment-form ftco-animate">
		    				            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <input type="text" name="username"  placeholder="ইউজার নেম" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
              
                <input type="password" placeholder="পাসওয়ার্ড" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

	    					
		            <div class="form-group">
		              <input type="submit" value="লগ ইন" class="btn btn-secondary py-3 px-4">
		            </div>
				<div class="accountButton">
		        <a class="btn btn-default" href="singup.php" >অ্যাকাউন্ট খুলুন</a></div>
				<div class="accountButton2">
				<a class="btn btn-default" href="recovery.php" >পাসওয়ার্ড ভুলে গেছেন ????</a></div>
			
		    			</form>
						</div>
					</div>
					<div class="col-md-7 wrap-about ftco-animate align-items-stretch d-flex">
						<div class="bg-white p-5">
							
							<div class="row">
								<div class="col-lg-6">
									<div class="services">
										<div class="icon mt-2 d-flex align-items-center"><span class="flaticon-collaboration"></span></div>
										<div class="text media-body">
											<h4>সার্বক্ষনিক সেবা</h4>
											<p>আপনার যেকোনো কৃষি সংক্রান্ত সমস্যা সমাধানে  আমরা আছি সর্বক্ষণ আপনার সাথে ।</p>
										</div>
									</div>
									<div class="services">
										<div class="icon mt-2"><span class="flaticon-analysis"></span></div>
										<div class="text media-body">
											<h4>আপনার সমস্যা আমাদের সমাধান</h4>
											<p>কৃষকের সমস্যাকে সর্বোচ্চ গুরুত্ব দিয়ে সমাধানে আমরা নিয়জিত</p>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="services">
										<div class="icon mt-2"><span class="flaticon-search-engine"></span></div>
										<div class="text media-body">
											<h4>সঠিক দিক নির্দেশনা উচ্চ ফলন</h4>
											<p>অর্থনীতিক দিক থেকে প্রযুক্তিগত উন্নয়ন অবহত রেখে শস্যের উচ্চ ফলন অর্জনের জন্য সঠিক দিক নির্দেশনা প্রদান</p>
										</div>
									</div>
									<div class="services">
										<div class="icon mt-2"><span class="flaticon-handshake"></span></div>
										<div class="text media-body">
											<h4>সমন্বয়</h4>
											<p>কৃষক এবং কৃষি কর্মকর্তার দূরত্ব কমিয়ে আনার দৃঢ় প্রচেষ্টায়</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
<?php include "slice/footer.php";?>