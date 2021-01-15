<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "krishi_unnayon";
$con = new mysqli($host, $user, $pass, $db_name);
//echo "Initial character set is: " . $con -> character_set_name();
$con -> set_charset("utf8");
//echo "Current character set is: " . $con -> character_set_name();
function formatDate($date){
	return date('g:i a', strtotime($date));
}
?>