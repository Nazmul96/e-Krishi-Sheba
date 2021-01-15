<?php 
$filepath=realpath (dirname(__FILE__));
include_once ($filepath.'/../libraries/database.php');
include_once ($filepath.'/../helpers/format.php');
?>
<?php
class gnc{
private $db;
private $fm;
public function __construct(){
$this->db =new Database();
$this->fm =new Format();
}

 //get logged admin info..
public function getAdminData($adminid){
  $adminid=$adminid;
 $query="SELECT * FROM admins where id='$adminid'";
$result = $this->db->select($query);
return $result;
}
//get all notices list..
public function getAllNotices(){
 $query="SELECT *FROM notices";
$result = $this->db->select($query);
return $result;
}
//get all published notices list..
public function getAllNoticesPub(){
 $query="SELECT *FROM notices WHERE flag=1";
$result = $this->db->select($query);
return $result;
}
//get introduction information..
public function getBasicCompanyInfo(){
 $query="SELECT *FROM informations";
$result = $this->db->select($query);
return $result;
}

//getting contact information...
public function getcontact(){
$query = "SELECT * FROM companycontact";
$result=$this->db->select($query);
return $result;
}
//getting all product ...
public function getallproduct(){
$query = "SELECT * FROM products";
$result=$this->db->select($query);
return $result;
}

//getting approve product...
public function getApproveproduct(){
$query = "SELECT * FROM products WHERE flag=1";
$result=$this->db->select($query);
return $result;
}
//get buyersGuideInformation ..
public function getBuyerInfo(){
 $query="SELECT *FROM buyersguide";
$result = $this->db->select($query);
return $result;
}
//Function for update introduction....
public function updateintro($data,$file){

$id = mysqli_real_escape_string($this->db->link,$data['id']);
$introduction = mysqli_real_escape_string($this->db->link,$data['introduction']);

if($introduction ==""){
$msg="<span class='error '>Must fill the introduction field.</span>";
return $msg;
}
else {
$query ="UPDATE informations
SET 
introduction='$introduction'
WHERE id ='$id'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Introduction update successfully.";
return $msg;
}else{$msg="Operation failed!";}
  }
 }

 //Function for update mission vision....
public function updatemission($data,$file){

$id = mysqli_real_escape_string($this->db->link,$data['id']);
$mission = mysqli_real_escape_string($this->db->link,$data['mission']);

if($mission ==""){
$msg="<span class='error '>Must fill the mission & vision field.</span>";
return $msg;
}
else {
$query ="UPDATE informations
SET 
missionvission='$mission'
WHERE id ='$id'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Mission & Vision update successfully.";
return $msg;
}else{$msg="Operation failed!";}
  }
 }

 //Function for update qualitypolicy....
public function updatequality($data,$file){

$id = mysqli_real_escape_string($this->db->link,$data['id']);
$quality = mysqli_real_escape_string($this->db->link,$data['quality']);

if($quality ==""){
$msg="<span class='error '>Must fill the Quality policy field.</span>";
return $msg;
}
else {
$query ="UPDATE informations
SET 
qualitypolicy='$quality'
WHERE id ='$id'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Quality policy update successfully.";
return $msg;
}else{$msg="Operation failed!";}
  }
 }

 //Function for update codeofconduct....
public function updatecodeofconduct($data,$file){

$id = mysqli_real_escape_string($this->db->link,$data['id']);
$codeofconduct = mysqli_real_escape_string($this->db->link,$data['codeofconduct']);

if($codeofconduct ==""){
$msg="<span class='error '>Must fill the codeofconduct field.</span>";
return $msg;
}
else {
$query ="UPDATE informations
SET 
codeofconduct='$codeofconduct'
WHERE id ='$id'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Codeofconduct update successfully.";
return $msg;
}else{$msg="Operation failed!";}
  }
 }

 //Function for update updatesocialresponsibility....
public function updatesocialresponsibility($data,$file){

$id = mysqli_real_escape_string($this->db->link,$data['id']);
$socialresponsibility = mysqli_real_escape_string($this->db->link,$data['socialresponsibility']);

if($socialresponsibility ==""){
$msg="<span class='error '>Must fill the Social Responsibility field.</span>";
return $msg;
}
else {
$query ="UPDATE informations
SET 
socialresponsibility='$socialresponsibility'
WHERE id ='$id'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Social Responsibility update successfully.";
return $msg;
}else{$msg="Operation failed!";}
  }
 }

 //Function for update presence....
public function updatepresence($data,$file){

$id = mysqli_real_escape_string($this->db->link,$data['id']);
$presence = mysqli_real_escape_string($this->db->link,$data['presence']);

if($presence ==""){
$msg="<span class='error '>Must fill the presence field.</span>";
return $msg;
}
else {
$query ="UPDATE informations
SET 
presence='$presence'
WHERE id ='$id'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Presence update successfully.";
return $msg;
}else{$msg="Operation failed!";}
  }
 }

  //Function for update buyers guide info....
public function updtbuyersGuideInfo($data,$file){

$id = mysqli_real_escape_string($this->db->link,$data['id']);
$buyersGuideInfo = mysqli_real_escape_string($this->db->link,$data['buyersGuideInfo']);

if($buyersGuideInfo ==""){
$msg="<span class='error '>Must fill the buyers guide information field.</span>";
return $msg;
}
else {
$query ="UPDATE buyersguide
SET 
buyersGuideInformation='$buyersGuideInfo'
WHERE id ='$id'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Data update successfully.";
return $msg;
}else{$msg="Operation failed!";}
  }
 }

//get contact information..
public function getContactInfo(){
 $query="SELECT *FROM companycontact";
$result = $this->db->select($query);
return $result;
}

//update contact information
public function updatecontact($data,$file){

$id = mysqli_real_escape_string($this->db->link,$data['id']);
$companyname = mysqli_real_escape_string($this->db->link,$data['companyname']);
$telnumber = mysqli_real_escape_string($this->db->link,$data['telnumber']);
$cellnumber = mysqli_real_escape_string($this->db->link,$data['cellnumber']);
$email = mysqli_real_escape_string($this->db->link,$data['email']);
$contactperson = mysqli_real_escape_string($this->db->link,$data['contactperson']);
$registrationid = mysqli_real_escape_string($this->db->link,$data['registrationid']);
$office = mysqli_real_escape_string($this->db->link,$data['office']);
$others = mysqli_real_escape_string($this->db->link,$data['others']);


if($companyname ==""){
$msg="<span class='error '>Must fill the company name field.</span>";
return $msg;
}
else {
$query ="UPDATE companycontact
SET 
companyname='$companyname',
telnumber='$telnumber',
cellnumber='$cellnumber',
email='$email',
contactperson='$contactperson',
registrationid='$registrationid',
office='$office',
others='$others'
WHERE id ='$id'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Data update successfully.";
return $msg;
}else{$msg="Operation failed!";}
  }
 }
//publish notice
public function publishNotice($data,$file){
$noticeName = mysqli_real_escape_string($this->db->link,$data['noticeName']);

  $fileName=$_FILES["fileupld"]["name"];
  $fileSize=$_FILES["fileupld"]["size"]/1024;
  $fileType=$_FILES["fileupld"]["type"];
  $fileTmpName=$_FILES["fileupld"]["tmp_name"];  

  if($fileType=="application/msword"||"application/pdf"||"application/vnd.openxmlformats-officedocument.wordprocessingml.document"){
    if($fileSize<=10249){

      //New file name
    $random=rand(1111,9999);
      $newFileName=$random.$fileName;

      //File upload path
      $uploadPath="../files/".$newFileName;

      //function for upload file
      if(move_uploaded_file($fileTmpName,$uploadPath)){

$query = "INSERT INTO notices (tagline,noticefile)
VALUES('$noticeName','$newFileName')";
$inserted_row = $this->db->insert($query);
if($inserted_row){

$msg="Notice published successfully. Notice Name is : ".$noticeName;
 return $msg;
      }
    }
    
  }else{
      $msg="Maximum upload file size limit is 10 MB.";
	  return $msg;
    }
}
  else{
    $msg="You can only upload a .doc/.docx/.pdf file.";
	return $msg;
  }
}

//Function for hide notice....
public function remove($remove){

$remove = $remove;
$val=0;
$query ="UPDATE notices
SET 
flag='$val'
WHERE id ='$remove'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Notice remove successfully.";
return $msg;
}else{$msg="Operation failed!";}
  
 }
 //Function for publish notice....
public function accept($accept){

$accept = $accept;
$val=1;
$query ="UPDATE notices
SET 
flag='$val'
WHERE id ='$accept'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Notice published successfully.";
return $msg;
}else{$msg="Operation failed!";}
  
 }

 //add product
public function addProduct($data,$file){

$productName = mysqli_real_escape_string($this->db->link,$data['productName']);
$productInfo = mysqli_real_escape_string($this->db->link,$data['productInfo']);

$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        //for image 
        $filenamet = $_FILES["productImg"]["name"];
        $filetype = $_FILES["productImg"]["type"];
        $filesize = $_FILES["productImg"]["size"];

        $filenamett = str_replace(' ','',$filenamet);
        date_default_timezone_set("Asia/Dhaka");
        $r2= date("Ymd_his");
        $filename1=$r2.$filenamett;
        // Verify file extension for img 1
        $ext1 = pathinfo($filename1, PATHINFO_EXTENSION);
    if(!array_key_exists($ext1, $allowed)) {$msg="Please select a valid IMAGE format. Maybe file name is invalid.";return $msg;}
        // Verify file size - 5MB maximum
  $maxsize = 5*1024 * 1024 ;
if($filesize> $maxsize){$msg="File size is larger than the allowed limit.Maximum 5 MB allowed.";
return $msg;}
else{
//move_uploaded_file($source,$save);
move_uploaded_file($_FILES["productImg"]["tmp_name"], "../img/product/".$filename1);
$query = "INSERT INTO products (productName,productimage,productinfo)
VALUES('$productName','$filename1','$productInfo')";
$inserted_row = $this->db->insert($query);
if($inserted_row){
$msg="Product added succesfully.";
return $msg;
}else{$msg="Operation failed !";return $msg;}
}
}
//Function for hide product....
public function premove($premove){

$premove = $premove;
$val=0;
$query ="UPDATE products
SET 
flag='$val'
WHERE id ='$premove'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Product remove successfully.";
return $msg;
}else{$msg="Operation failed!";}
  
 }
 //Function for publish product....
public function paccept($paccept){

$paccept = $paccept;
$val=1;
$query ="UPDATE products
SET 
flag='$val'
WHERE id ='$paccept'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Product published successfully.";
return $msg;
}else{$msg="Operation failed!";}
  
 }

 //get single product info
public function getproductinfo($productid){
  $productid=$productid;
 $query="SELECT * FROM products where id='$productid'";
$result = $this->db->select($query);
return $result;
}

 //Function for update product information....
public function productupdate($data,$file){

$id = mysqli_real_escape_string($this->db->link,$data['id']);
$productName = mysqli_real_escape_string($this->db->link,$data['productName']);
$productInfo = mysqli_real_escape_string($this->db->link,$data['productInfo']);

if($productName ==""){
$msg="<span class='error '>Must fill the Product Name field.</span>";
return $msg;
}
else {
$query ="UPDATE products
SET 
productName='$productName',
productinfo='$productInfo'
WHERE id ='$id'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Product information update successfully.";
return $msg;
}else{$msg="Operation failed!";}
  }
 }

  //update product image
public function imgupdate($data,$file){

$id = mysqli_real_escape_string($this->db->link,$data['id']);

$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        //for image 
        $filenamet = $_FILES["productImg"]["name"];
        $filetype = $_FILES["productImg"]["type"];
        $filesize = $_FILES["productImg"]["size"];

        $filenamett = str_replace(' ','',$filenamet);
        date_default_timezone_set("Asia/Dhaka");
        $r2= date("Ymd_his");
        $filename1=$r2.$filenamett;
        // Verify file extension for img 1
        $ext1 = pathinfo($filename1, PATHINFO_EXTENSION);
    if(!array_key_exists($ext1, $allowed)) {$msg="Please select a valid IMAGE format. Maybe file name is invalid.";return $msg;}
        // Verify file size - 5MB maximum
  $maxsize = 5*1024 * 1024 ;
if($filesize> $maxsize){$msg="File size is larger than the allowed limit.Maximum 5 MB allowed.";
return $msg;}
else{
//move_uploaded_file($source,$save);
move_uploaded_file($_FILES["productImg"]["tmp_name"], "../img/product/".$filename1);

$query = "UPDATE products
SET 
productimage='$filename1'
WHERE id ='$id'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Product Image change succesfully.";
return $msg;
}else{$msg="Operation failed !";return $msg;}
}
}

 //add admin
public function adminReg($data,$file){

$name = mysqli_real_escape_string($this->db->link,$data['name']);
$creator = mysqli_real_escape_string($this->db->link,$data['creator']);
$phone = mysqli_real_escape_string($this->db->link,$data['phone']);
$email = mysqli_real_escape_string($this->db->link,$data['email']);
$designation = mysqli_real_escape_string($this->db->link,$data['designation']);
$address = mysqli_real_escape_string($this->db->link,$data['address']);
$pass = mysqli_real_escape_string($this->db->link,md5($data['pass']));
$repass = mysqli_real_escape_string($this->db->link,md5($data['repass']));

$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        //for image 
        $filenamet = $_FILES["adminImage"]["name"];
        $filetype = $_FILES["adminImage"]["type"];
        $filesize = $_FILES["adminImage"]["size"];

        $filenamett = str_replace(' ','',$filenamet);
        date_default_timezone_set("Asia/Dhaka");
        $r2= date("Ymd_his");
        $filename1=$r2.$filenamett;
        // Verify file extension for img 1
  $ext1 = pathinfo($filename1, PATHINFO_EXTENSION);
  if(!array_key_exists($ext1, $allowed)) {$msg="Please select a valid IMAGE format. Maybe file name is invalid.";return $msg;}
        // Verify file size - 5MB maximum
  $maxsize = 2*1024 * 1024 ;
if($filesize> $maxsize){$msg="File size is larger than the allowed limit.Maximum 2 MB allowed.";
return $msg;}

elseif($pass!=$repass)
{$msg="Retype password not matched.";
return $msg;}
elseif($creator=="")
{$msg="Please login again to create an admin .";
return $msg;}
else{
//move_uploaded_file($source,$save);
move_uploaded_file($_FILES["adminImage"]["tmp_name"], "images/user/".$filename1);
$query = "INSERT INTO admins (createdby,name,phone,email,designation,address,image,password)
VALUES('$creator','$name','$phone','$email','$designation','$address','$filename1','$pass')";
$inserted_row = $this->db->insert($query);
if($inserted_row){
$msg="Admin Registration Completed.";
return $msg;
}else{$msg="Operation failed !";return $msg;}
}
}

/*
THIS WEBSITE DEVELOPED & DESIGN BY  "ABU RAYHAN MIAH (LIMON)"
AUTHOR FB:https://www.facebook.com/profile.php?id=100005471431678/
TWITTER:https://twitter.com/rayhan7530/
*/
}
?>