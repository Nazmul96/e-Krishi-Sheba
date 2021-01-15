<?php
$host= "localhost";
$username= "root";
$password = "";
$db_name = "krishi_unnayon";
$db = new mysqli($host,$username,$password,$db_name);
$db -> set_charset("utf8");	
if($db->connect_error)
{
	die("connection failed:". $db->connect_error);
	
}
?>