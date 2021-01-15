<html lang="en">
  <head>
    <title>যোগাযোগ</title>
  </head>
<?php include "slice/header.php";?>	
<?php
include "action_contact.php";

?>

    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">যোগাযোগ</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>	
		<section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-10">
        		<div class="row mb-5">
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border w-100 p-4">
			          	<div class="icon">
			          		<span class="icon-map-o"></span>
			          	</div>
			            <p><span>ঠিকানা:</span> মিরপুর ২ ,ঢাকা</p>
			          </div>
		          </div>
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border w-100 p-4">
			          	<div class="icon">
			          		<span class="icon-tablet"></span>
			          	</div>
			             <p><span>ফোন:</span> <a href="tel://1234567920">০১৯৫১১৮৯৩৮৩</a></p>
			          </div>
		          </div>
		          <div class="col-md-4 text-center d-flex">
		          	<div class="border w-100 p-4">
			          	<div class="icon">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			           <p><span>ইমেইল:</span> <a href="mailto:info@yoursite.com">khandaker3047@gmail.com</a></p>
			          </div>
		          </div>
		        </div>
          </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
          <div class="col-md-10 mb-md-5">
          		<h2 class="text-center">যদি আপনার কোন প্রশ্ন / পরামর্শ থাকে<br>আমাদের একটি বার্তা প্রেরণ করুন</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" accept-charset="utf-8" class="border p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="নাম">
				<span class="error"> <?php echo $nameErr;?></span>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="ইমেইল ">
				<span class="error"><?php echo $emailErr;?></span>
              </div>
              <div class="form-group">
                <input type="text" class="form-control"name="sub" placeholder="বিষয়  ">
				<span class="error"><?php echo $subjectErr;?></span>
              </div>
              <div class="form-group">
                <textarea cols="30" rows="7" name="msg" class="form-control" placeholder="বার্তা"></textarea>
				<span class="error"><?php echo $messageErr;?></span>
              </div>
              <div class="form-group">
                <input type="submit" value="বার্তা পাঠান " class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>
      </div>
    </section>

<?php include "slice/footer.php";?>