<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "krishi_unnayon";
$con = new mysqli($host, $user, $pass, $db_name);
function mydate($date){
	return date('g:i a', strtotime($date));
}
?>