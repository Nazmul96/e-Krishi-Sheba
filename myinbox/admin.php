<?php
	include 'connection.php';
	// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ='../adminlogin.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script >
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function() {
				if(req.readyState == 4 && req.status == 200){
					document.getElementById('chat').innerHTML = req.responseText;	
				}
			}
			req.open('GET','achat.php',true);
			req.send();
		}
		setInterval(function() {ajax()}, 1000);
	</script>
</head>
<body onload="ajax();">

	<h2 align="center" style="border-bottom: 1px solid grey;"> Service Provider Inbox</h2>
	<h1 align="center">Hi,<b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to your Dashboard.</h1>
	<div class="ibox-content">
        <div class="row">
            <div style="margin-left: 10%;" class=" col-md-10">
                <div class="chat-discussion">
                    <div class="chat-message left">
                        <div id="chat"></div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<div style="background-color:white;" class="row">
     	<div style="margin-left: 20%;" class="col-md-8">
		<h3>rerply to :</h3>
			<form method="POST" action="admin.php" accept-charset="utf-8" enctype='multipart/form-data'>
				<div></div>
				<input type="text" name="idval" placeholder="User" required=""/>
				<textarea name="message" placeholder="Solution" required=""></textarea>
				     <input type='file' name='file'>	
				<input type="submit" style="color: white;" name="submit" value="Send it"/>
			</form>
				
		</div>
	
	</div>
	
	<div class="footer">
	Developed by : <a href="admin.php">e-KRISHI SEBA TEAM</a>
	<button align= "center" type="button" onclick="location.href='adminlogout.php';" style="width:150px;height:100px;background-color:tomato"> লগ আউট</button> 
	</div>
	<?php
		if(isset($_POST['submit'])){
			
				
			$maxsize = 5242880000; // 500MB
        $vid = "upload/".$_FILES['file']['name'];
	   $tmp = $_FILES['file']['tmp_name'];
	if(($_FILES["file"]["size"] == 0)) 
           $vid="0";
	   

$pic=10;
$supported_image = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);


$ext = strtolower(pathinfo($vid, PATHINFO_EXTENSION)); // Using strtolower to overcome case sensitive
if (in_array($ext, $supported_image)) {
 $pic=1;
} else {
   $pic=0;
}
			  
       
       move_uploaded_file($_FILES['file']['tmp_name'],$vid);
			$name = $_POST['idval'];
			$id=1;
			$message = $_POST['message'];
			$admin = $_SESSION['username'];
			$query = "INSERT INTO chat (id,name,message,admin,file,image) VALUES ('$id','$name','$message','$admin','$vid','$pic')";
			$query2 = "UPDATE chat SET id = 1 WHERE name = '$name'";
			$run2 = $con -> query($query2);
			$run = $con -> query($query);

			if($run){
				?>
				<audio src='audio/notification.mp3' hidden='true' autoplay='true'/>
				<?php
			}
			if($run2){
				?>
				<audio src='audio/notification.mp3' hidden='true' autoplay='true'/>
				<?php
			}
		}
	?>
</body>

</html>