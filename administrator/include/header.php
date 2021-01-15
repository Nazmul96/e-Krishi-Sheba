<?php 
include '../libraries/session.php';
Session::checkSession();
$adminID = Session::get("adminId");
?>
<?php
if(isset($_GET['action'])&&($_GET['action']=="logout"))
{session::destroy();}
?>
<?php 
include '../classes/generalclass.php';
include_once ($filepath.'/../helpers/format.php');
$gncl = new gnc();
$fm =new Format();
?>
<?php
  $adminid = Session::get("adminId");
  $getAdminData = $gncl->getAdminData($adminid);
  if($getAdminData){
  while($result = $getAdminData->fetch_assoc()){

$adminName=$result['name'];
$phone=$result['phone'];
$adminemail=$result['email'];
$adminpic=$result['image'];
$designation=$result['designation'];
}} ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin</title>
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="index.php">Admin Area</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <!--<li><a href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                  <li><a href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>-->

                  <li><a href="?action=logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>

                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>