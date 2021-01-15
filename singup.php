<?php
include "action_singup.php" ; 
header('Content-Type: text/html; charset=utf-8');
?>
<html lang="en">
  <head>
    <title>অ্যাকাউন্ট খুলুন</title>
  </head>
<?php include "slice/header.php";?>	
    
    	    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">অ্যাকাউন্ট খুলুন</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Create Account <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-consult">
			<div class="container">
				
					<div class="col-md-10 wrap-about2 align-items-centerd-flex">
						<div class="ftco-animate bg-primary align-self-center px-4 py-5 w-100">
							<h2  align="center" class="heading-white mb-4">অ্যাকাউন্ট খুলুন</h2>
							
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" accept-charset="utf-8" method="post" class="appointment-form ftco-animate">
							
		    				<div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
		    					<input type="text"  placeholder="নাম" name="name" class="form-control" value="<?php echo $name; ?>" required>
								<font style="color:blue">  <span class="help-block"><?php echo $name_err; ?></span> </font>  
		    				</div>
							
							
		    				<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
								  <input type="text"  placeholder="ইউজার নেম (In English)" name="username" class="form-control" value="<?php echo $username; ?>" required>
									<font style="color:blue"><span class="help-block"><?php echo $username_err; ?></span> </font>
		    				</div>
							
							<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
		    					  <input type="password"  placeholder="পাসওয়ার্ড" name="password" class="form-control" value="<?php echo $password; ?>" required>
								  <font style="color:blue"><span class="help-block"><?php echo $password_err; ?></span> </font>
		    				</div>
							
							
							
							<div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
		    					  <input type="password"  placeholder="কনফার্ম পাসওয়ার্ড" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>"required>
								<font style="color:blue"> <span class="help-block"><?php echo $confirm_password_err; ?></span> </font>
		    				</div>
							
							<div class="form-group <?php echo (!empty($vill_err)) ? 'has-error' : ''; ?>">
								  <input type="text"  placeholder="গ্রাম/এলাকা" name="vill" class="form-control" value="<?php echo $vill; ?>"required>
								<font style="color:blue"> <span class="help-block"><?php echo $vill_err; ?></span> </font>
		    				</div>
							
							<div class="form-group <?php echo (!empty($div_err)) ? 'has-error' : ''; ?>">
							<label  style="color:white">বিভাগ</label>

										<select name="div" id="div" required>
										 <option value="">--নির্বাচন করুন--</option>
										  <option value="ঢাকা">ঢাকা</option>
										  <option value="চট্টগ্রাম">চট্টগ্রাম</option>
										  <option value="খুলনা">খুলনা</option>
										  <option value="রাজশাহী">রাজশাহী</option>
										  <option value="বরিশাল">বরিশাল</option>
										  <option value="সিলেট"> সিলেট</option>
										  <option value="রংপুর">রংপুর</option>
										  <option value="সিলেট">সিলেট</option>
										</select>
		    					
								<font style="color:blue"> <span class="help-block"><?php echo $div_err; ?></span> </font>
		    				</div>
							
							
							<div class="form-group <?php echo (!empty($dist_err)) ? 'has-error' : ''; ?>">
		    					 <input type="text"  placeholder="জেলা" name="dist" class="form-control" value="<?php echo $dist; ?>"required>
								 <font style="color:blue"> <span class="help-block"><?php echo $dist_err; ?></span></font>
		    				</div>
							
							<div class="form-group <?php echo (!empty($thana_err)) ? 'has-error' : ''; ?>">
		    					 <input type="text"  placeholder="থানা" name="thana" class="form-control" value="<?php echo $thana; ?>"required>
								<font style="color:blue"> <span class="help-block"><?php echo $thana_err; ?></span></font>
		    				</div>
							
							<div class="form-group <?php echo (!empty($posto_err)) ? 'has-error' : ''; ?>">
		    					 <input type="text"  placeholder="পোষ্ট অফিস" name="posto" class="form-control" value="<?php echo $posto; ?>"required>
								 <font style="color:blue"> <span class="help-block"><?php echo $posto_err; ?></span> </font>
		    				</div>
							
							<div class="form-group <?php echo (!empty($mobile_err)) ? 'has-error' : ''; ?>">
		    					 <input type="text"  placeholder="মোবাইল  নাম্বার" name="mobile" class="form-control" value="<?php echo $mobile; ?>"required>
								<font style="color:blue">  <span class="help-block"><?php echo $mobile_err; ?></span> </font>
		    				</div>
							<div class="form-group">
							
		    					 <input type="text"  placeholder="ই-মেইল" name="email" class="form-control" value="<?php echo $email; ?>">
							<font style="color:black">**যদি থাকে**</font>
		    				</div>
	    			
	    		
		            <div class="form-group">
		              <input type="submit" value="খুলুন" class="btn btn-secondary py-3 px-4">
		            </div>
		    			</form>
						</div>
					</div>
	
				
			</div>
		</section>
	<?php include "slice/footer.php";?>	
