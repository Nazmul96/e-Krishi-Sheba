<?php

include ("../config.php");

	
	


	
session_start();
 
// Check if the user is logged in, if not then redirect him to login page


?>
<?php
include 'connection.php';
					$myname;
				$us = $_SESSION["username"]; 
				$query = "SELECT name FROM   users WHERE  username = '$us' ";
				if ($result = mysqli_query($link,$query)) {
					
				/* fetch associative array */
				while ($row = mysqli_fetch_assoc($result)) {
					$myname= $row["name"];
							}

				mysqli_free_result($result);}
	
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
			$name = $_SESSION["username"];
			$message = $_POST['message'];
			$query = "INSERT INTO chat (name,myname,message,file,image) VALUES ('$name','$myname','$message','$vid','$pic')";
			$run = $con -> query($query);
		
			
			
			if($run){
				?>
				<audio src='audio/notification.mp3' hidden='true' autoplay='true'/>
			
				<?php
					header("Location:index.php");
			}
		}
	?>

				
  