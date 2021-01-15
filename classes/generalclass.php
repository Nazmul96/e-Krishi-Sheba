<?php 
$filepath=realpath (dirname(__FILE__));
include_once ($filepath.'/../libraries/database.php');
include_once ($filepath.'/../helpers/format.php');
require_once "config/config.php";
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
//Function for hide exp....
public function removeexp($remove){

$remove = $remove;
$val=0;
$query ="UPDATE experts
SET 
flag='$val'
WHERE id ='$remove'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Remove successfully.";
return $msg;
}else{$msg="Operation failed!";}
  
 }
 //Function for publish exp....
public function acceptexp($accept){

$accept = $accept;
$val=1;
$query ="UPDATE experts
SET 
flag='$val'
WHERE id ='$accept'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Published successfully.";
return $msg;
}else{$msg="Operation failed!";}
  
 }

//////////////////////////////////////////////////////////////////////////////
//Function for hide Information....
public function premove($premove){

$premove = $premove;
$val=0;
$query ="UPDATE products
SET 
flag='$val'
WHERE id ='$premove'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Information remove successfully.";
return $msg;
}else{$msg="Operation failed!";}
  
 }
 //Function for publish Information....
public function paccept($paccept){
$paccept = $paccept;
$val=1;
$query ="UPDATE products
SET 
flag='$val'
WHERE id ='$paccept'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Information published successfully.";
return $msg;
}else{$msg="Operation failed!";}
  }
//update Information image by id
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
move_uploaded_file($_FILES["productImg"]["tmp_name"], "../images/product/".$filename1);

$query = "UPDATE products
SET 
productimage='$filename1'
WHERE id ='$id'";
$updated_row = $this->db->update($query);
if($updated_row){
$msg="Image change succesfully.";
return $msg;
}else{$msg="Operation failed !";return $msg;}
		}
	}
}
?>