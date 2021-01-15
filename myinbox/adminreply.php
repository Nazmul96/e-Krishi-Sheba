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
			req.open('GET','indivulchatfromadmin.php',true);
			req.send();
		}
		setInterval(function() {ajax()}, 1000);
	</script>

</head>
<body onload="ajax();">

	<h2 align="center" style="border-bottom: 1px solid grey;">User's Chat Log</h2>
	<h1 align="center">Reply to <b><?php echo htmlspecialchars($_GET["id"]); ?></b></h1>
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
		<h3>rerply to: <a href='#'><?php echo $uname=$_GET['id']; ?></a></h3>
			<form method="POST" action="actionadmin.php" accept-charset="utf-8" enctype='multipart/form-data'>
				<div></div>
				<?php  if (isset($_GET['id'])) $uname=$_GET['id']; $_SESSION['passname'] = $uname;//echo $uname;?>
				<input type="text" name="idval" value="<?php echo $uname=$_GET['id']; ?>" />
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
	
</body>

</html>