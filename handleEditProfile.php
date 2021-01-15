<?php

$nm;
$vl;
$di;
$ds;
$th;
$po;
$ph;
$em;
session_start();
include "config/config.php";
header('Content-Type: text/html; charset=utf-8');
$us = $_SESSION["username"]; 

				$query = "SELECT name,village,division,district,thana,post,phone,eamil FROM   users WHERE  username = '$us' ";
				         mysqli_query($link,'SET CHARACTER SET utf8');// for bangla 
         mysqli_query($link,"SET SESSION collation_connection ='utf8_general_ci'");// for bangla
				if ($result = mysqli_query($link,$query)) {
					
				/* fetch associative array */
				while ($row = mysqli_fetch_assoc($result)) {
				$nm=$row["name"];
				$vl=$row["village"];
				$di=$row["division"];
				$ds=$row["district"];
				$th=$row["thana"];
				$po=$row["post"];
				$ph=$row["phone"];
				$em=$row["eamil"];
				
						}

    mysqli_free_result($result);
				}
	if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['submit'])){

	$name = $_POST['name'];  
		
		$vill=$_POST["vill"];

		$div=$_POST["div"];
    

		$dist=$_POST["dist"];
	

		$thana=$_POST["thana"];
    

		$posto=$_POST["posto"];
    

		$mobile=$_POST["mobile"];

		$mail=$_POST["email"];
    
        
			  mysqli_query($link,'SET CHARACTER SET utf8');
			  mysqli_query($link,"SET SESSION collation_connection ='utf8_general_ci'");
$sql = "UPDATE users SET name='$name',village='$vill',division='$div',district='$dist',thana='$thana',post='$posto',phone='$mobile',eamil='$mail' WHERE username='$us'"; 
	
	if ($link->query($sql) === TRUE) {
		
	  echo"<script>alert('Successfuly Saved');</script>"; 
	 header("location: editprofile.php");
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
                //echo "Your file was uploaded successfully.";
            
        } 
$link->close();

	
	
?>
