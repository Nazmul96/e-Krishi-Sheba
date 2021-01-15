<?php 
$filepath=realpath (dirname(__FILE__));
include_once ($filepath.'/../libraries/database.php');
include_once ($filepath.'/../helpers/format.php');
include_once ($filepath.'/../libraries/session.php');
session::checkLogin();
?>
<?php
class adminlogin{
private $db;
private $fm;
public function __construct(){
$this->db =new Database();
$this->fm =new Format();
}
public function adminlogin($adminEmail,$adminPass){
$adminEmail = $this->fm->validation($adminEmail);
$adminPass = $this->fm->validation($adminPass);
$adminEmail = mysqli_real_escape_string($this->db->link,$adminEmail);
$adminPass = mysqli_real_escape_string($this->db->link,$adminPass);
if(empty($adminEmail)||empty($adminPass))
{$loginmsg="E-mail and password must not be empty  !";
return $loginmsg;
}else{
$query = "SELECT * FROM admins WHERE email = '$adminEmail' AND password  = '$adminPass'";
$result = $this->db->select($query);
if($result !=false){
$value =$result->fetch_assoc();
Session::set("adminlogin",true);
Session::set("adminId",$value['id']);
header("Location:index.php");
}else{$loginmsg="E-mail and password not match !";
return $loginmsg;}
}
}}
?>