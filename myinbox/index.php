<?php
	include 'connection.php';
	header('Content-Type: text/html; charset=utf-8');
	include ("../config.php");
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}


?>
<!DOCTYPE html>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>ইনবক্স</title>
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
			req.open('GET','chat.php',true);
			req.send();
		}
		setInterval(function() {ajax()}, 1000);
	</script>
</head>
<body onload="ajax();">
	<h2 align="center" style="border-bottom: 1px solid grey;"> ইনবক্স</h2>
	<h4 align="center" style="border-bottom: 1px solid grey;"><a href="../profile/profile.php">প্রফাইল</a></h4>
	<marquee  ><b>কৃষকের সাথে , কৃষকের পাঁশে, সর্বদা সব সময়</b></marquee>
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
			<form method="POST" action="action.php" accept-charset="utf-8" enctype='multipart/form-data'>
				<div></div>
				
				<textarea name="message" placeholder="আপনার বার্তা লিখুন" required=""></textarea>
				  <input type='file' name='file'>		
				<input type="submit" style="color: white;" name="submit" value="প্রেরণ করুন">
			</form>
		</div>
	</div>
	<div class="footer">
		Developed by : <a href="#">ই-কৃষি সেবা টীম</a>
	</div>
	
</body>
</html>