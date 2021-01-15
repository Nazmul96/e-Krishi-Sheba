<?php
include "config.php" ;
// define variables and set to empty values
$nameErr = $emailErr = $subjectErr = $messageErr = "";
$name = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["sub"])) {
    $subjectErr = "Enter a subject or topic";
  } else {
    $subject = test_input($_POST["sub"]);
  }

  if (empty($_POST["msg"])) {
   $messageErr = "Enter your feedback message";
  } else {
    $message = test_input($_POST["msg"]);
  }


}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$sql = "INSERT INTO feedback (name, email, subject,message)VALUES ('$name', '$email', '$subject','$message')";

if (mysqli_query($link, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}




?>











 
