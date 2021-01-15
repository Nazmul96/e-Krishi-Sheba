<?php
// Include config file
require_once "config/config.php";
 header('Content-Type: text/html; charset=utf-8');
 
// Define variables and initialize with empty values
$username = ""; $password = ""; $confirm_password = "";
$username_err = "";$password_err =""; $confirm_password_err = "";
$name = "" ; $name_err = "";
$vill ="" ; $vill_err = "";
$div = "";$div_err = "";
$dist = ""; $dist_err = "";
$thana= "";$thana_err="";
$posto = "";$posto_err="";
$mobile = "";$mobile_err="";
$email =""; $email_err= "";
 

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
	if(empty(trim($_POST["name"])))
        $name_err = "আপনার নাম লিখুন";
	else 
		$name=$_POST["name"];
		
    
	if(empty(trim($_POST["vill"])))
        $vill_err = "আপনার মহল্লা/এলাকা/গ্রামের নাম লিখুন";
	else 
		$vill=$_POST["vill"];
    
	if(empty(trim($_POST["div"])))
        $div_err = "আপনার বিভাগ নির্বাচন করুন";
	else 
		$div=$_POST["div"];
    
	if(empty(trim($_POST["dist"])))
        $dist_err = "আপনার জেলা নির্বাচন করুন";
	else 
		$dist=$_POST["dist"];
	
	
	if(empty(trim($_POST["thana"])))
        $thana_err = "আপনার থানা নির্বাচন করুন";
	else 
		$thana=$_POST["thana"];
    
	if(empty(trim($_POST["posto"])))
        $posto_err = "আপনার পোস্ট অফিস নির্বাচন করুন";
	else 
		$posto=$_POST["posto"];
    
	if(empty(trim($_POST["mobile"])))
        $mobile_err = "আপনার মোবাইল নাম্বার লিখুন" ;
	else 
		$mobile=$_POST["mobile"];
    


	
	
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "ব্যবহারকারী নাম লিখুন";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "দুঃখিত উক্ত নামে একজন ব্যবহারকারী  রয়েছে,দয়া করে অন্য নাম নির্বাচন করুন";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "আপনার পাসওয়ার্ড দিন";     
    } elseif(strlen(trim($_POST["password"])) < 3){
        $password_err = "পাসওয়ার্ড অবশ্যই ৬ অক্ষরের হতে হবে";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "পাসওয়ার্ড  কনফার্ম করুন";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "দুঃখিত আপনার পাসওয়ার্ডটি মিলেনি";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
		
		
		
		
		
		
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password,name,village,division,district,thana,post,phone,eamil) VALUES (?,?,?,?,?,?,?,?,?,?)";
         mysqli_query($link,'SET CHARACTER SET utf8');// for bangla 
         mysqli_query($link,"SET SESSION collation_connection ='utf8_general_ci'");// for bangla
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssss", $param_username, $param_password,$pname,$pvillage,$pdivision,$pdistrict,$pthana,$ppost,$pphone,$peamil);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
			$pname=$_POST["name"];
			$pvillage=$_POST["vill"];
			$pdivision=$_POST["div"];
			$pdistrict=$_POST["dist"];
			$pthana=$_POST["thana"];
			$ppost=$_POST["posto"];
			$pphone=$_POST["mobile"];
			$peamil=$_POST["email"];
			
			
			
            
            // Attempt to execute the prepared statement
            if((mysqli_stmt_execute($stmt) )){
				 
			//$sql = "INSERT INTO registration (username, name,village,division,district,thana,post,phone,jomi,item,eamil) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
		 
		 /*if($stmt = mysqli_prepare($link, $sql))
			mysqli_stmt_bind_param($stmt, "ssssssssdss", $pusername, $pname,$pvillage,$pdivision,$pdistrict,$pthana,$ppost,$pphone,$pjomi,$pitem,$peamil);
			
			$pusername=$username;
			$pname="tushar";
			$pvillage=$vill;
			$pdivision=$div;
			$pdistrict="ঢাকা";
			$pthana=$thana;
			$ppost=$posto;
			$pphone=$mobile;
			$pjomi=$jomi;
			$pitem=$item;
			$peamil=$email;
			if (mysqli_stmt_execute($stmt) )*/
			
                // Redirect to login page
               header("location: index.php");
			
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>