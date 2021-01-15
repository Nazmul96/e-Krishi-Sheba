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
        <title>জাত নির্বাচন</title>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
        <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/templatemo-ocean-vibe.css">
		<meta charset="utf-8">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


  </head>
  <body>
  <style type="text/css">
  body {
    text-align: center;
}
.form {
    display: inline-block;
}
.middle {
	 text-align: center;
	  display: inline-block;
  border: 2px solid;
  padding: 20px;  
  width: 500px;
  resize: both;
  overflow: auto;
}
  </style>
  <div class="middle">
    <form id="=" action="handle_req2.php" method="POST" class=".form">
            <div class="form-group">
      <label class="control-label">ফসলের জাত নির্বাচন করুন (এক বা একাধিক)</label> <br>
<?php



if(isset($_POST['send'])){
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "krishi_unnayon";
  $connect = mysqli_connect($hostname, $username, $password, $databaseName);
  $connect -> set_charset("utf8");
  $cropType = $_POST['crop_type'];
  $query = "SELECT id,name FROM crops WHERE crop_type = $cropType";
  $result = mysqli_query($connect, $query);

  $options = "";
}

?>
<select class="form-control" id="crop_name" name="crop_name[]" multiple required>

<?php while($row = mysqli_fetch_array($result)):;?>


<option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>

<?php endwhile;?>


            </select>
        </div>



        <div class="form-group">
          <label for="measure">জমি পরিমাপের একক</label> <br>

                   <select class="form-control" name="unit" id="unit" required>
                     <option value="bigha">বিঘা</option>
                     <option value="hector">হেক্টর</option>
                     <option value="sotangsho">শতাংশ</option>
                   </select>
        </div>

        <div class="form-group">
          <label for="measure">জমির পরিমাপ</label> <br>

          <input type="text" name="size" value="" class="form-control" required>
        </div>

        <div class="form-group">
            <button type="submit" class="tm-btn tm-btn-primary" name="submit">বিস্তারিত</button>
        </div>
<div>
			<a href="profile.php">প্রোফাইলে ফিরে যাই</a>
				</div>
    </form>

</div>
  </body>
</html>
