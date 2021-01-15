<?php
require_once "config.php";
 require_once "tempdata.php";
  session_start();
// Include config file

 header('Content-Type: text/html; charset=utf-8');

 
$username = ""; $password = ""; $confirm_password = "";
$username_err = "";$password_err =""; $confirm_password_err = "";
 $email =""; $email_err= "";
 $mobile = "";$mobile_err="";

// Processing form data when form is submitted
$flag1=0;
$flag2=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["mobile"])) {
  $mobile_err = "Please enter Your MObile Num";
  } else {
   $mobile = test_input($_POST["mobile"]);
   $_SESSION['mob']= test_input($_POST["mobile"]);
  $flag1=1;
   
  }

  if (empty($_POST["username"])) {
    $username_err = "Please enter a username.";
  } else {
    $username = test_input($_POST["username"]);
	$_SESSION['user']= test_input($_POST["username"]);
	$flag2=1;
	
  }




}
  


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$database_username="";
$database_phone="";
  $query = "SELECT username,phone FROM   users WHERE  username = '$username' AND phone='$mobile'";
  if ($flag1==1 && $flag2==1)
  {
  if ($result = mysqli_query($link,$query)) {
	  
	  
	  /* fetch associative array */
				while ($row = mysqli_fetch_assoc($result)) {
					
					$database_username = $row["username"];
					$database_phone = $row["phone"];
					
							}
						

    mysqli_free_result($result);
	echo $database_username ;
	echo "</br>" ;
	echo $database_phone ;
	if((strcmp($database_username,$username)==0)&&(strcmp($database_phone,$mobile)==0))
		  header("location: forgetpass.php");
		 
	  else{
		   $mobile_err = "Username or MObile Number is not Valid";
		  
	  }
		 

	
  
  }
  }
					

?>