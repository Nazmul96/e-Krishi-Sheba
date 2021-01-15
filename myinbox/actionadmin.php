<?php

include ("../config.php");

	
	


	
session_start();
 
// Check if the user is logged in, if not then redirect him to login page


?>

<?php
include 'connection.php';
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
				header("Location:admin.php");
			}
			if($run2){
				?>
				<audio src='audio/notification.mp3' hidden='true' autoplay='true'/>
				<?php
			}
		}
	?>