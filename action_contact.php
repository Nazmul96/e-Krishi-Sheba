<?php
include "config/config.php" ;

// define variables and set to empty values
$nameErr = $emailErr = $subjectErr = $messageErr = "";
$name = $email = $subject = $message = "";
 $flag1=0; $flag2=0; $flag3=0; $flag4=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
	  $flag1=1;
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
	   $flag2=1;
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["sub"])) {
    $subjectErr = "Enter a subject or topic";
  } else {
	   $flag3=1;
    $subject = test_input($_POST["sub"]);
  }

  if (empty($_POST["msg"])) {
   $messageErr = "Enter your feedback message";
  } else {
	   $flag4=1;
    $message = test_input($_POST["msg"]);
  }
  
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$link -> set_charset("utf8");
$sql = "INSERT INTO feedback (name, email, subject,message)VALUES ('$name', '$email', '$subject','$message')";
if($flag1==1 &&  $flag2==1 &&  $flag3==1 &&  $flag4==1)
if (mysqli_query($link, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

?>