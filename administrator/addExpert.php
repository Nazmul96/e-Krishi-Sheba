<?php include "include/header.php";?>
<?php include "include/sidebar.php";?>

<?php 
if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['submit'])){
 $fullname=$_POST["fullname"];
    $cell=$_POST["cell"];
	$email=$_POST["email"];
	$designation=$_POST["designation"];
	$other=$_POST["other"];


        //$profile_picture=$_POST["profile_picture"];
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filenamet = $_FILES["profile_picture"]["name"];
        $filetype = $_FILES["profile_picture"]["type"];
        $filesize = $_FILES["profile_picture"]["size"];

        $filenamett = str_replace(' ','',$filenamet);
        $rand=rand(0,1000);
        $filename=$rand.$filenamett;
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
        if(in_array($filetype, $allowed))
              {
            // Check whether file exists before uploading it
            if(file_exists("images/experts/" . $filename)){
                echo $filename . " is already exists.";
            } else{
              move_uploaded_file($_FILES["profile_picture"]["tmp_name"], "images/experts/" . $filename);
			  mysqli_query($link,'SET CHARACTER SET utf8');
			  mysqli_query($link,"SET SESSION collation_connection ='utf8_general_ci'");
$sql = "INSERT INTO experts (name,designation,image,email,cell,otherInfo)
VALUES('$fullname','$designation','$filename','$email','$cell','$other')";
	
	if ($link->query($sql) === TRUE) {
	  echo"<script>alert('Successfuly Saved');</script>"; 
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
                //echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        } 
$link->close();

}?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Add Expert</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Add Expert</li>
            </ul>
          </div>
        </div>
        <div class="row">

          <form method="post" action="" enctype="multipart/form-data">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Add Expert</h3>
              <div class="card-body">
               
                  <div style="padding-left:38%;"><img id="blah1" src="" width="150" height="150" /></div>
                  <div class="form-group">
                    <label class="control-label">Expert Image (Maximum 2MB)*</label>
                    <input type="file" name="profile_picture" onchange="readURL1(this);" required />

                  </div>
                  <div class="form-group">
                    <label class="control-label">Expert Name*</label>
                    <input class="form-control" name="fullname" type="text" placeholder="Name" maxlength="50" required>
                  </div>

                  <div class="form-group">
                    <label class="control-label">Expert Phone*</label>
                    <input class="form-control" name="cell" pattern="^\d{11}$" type="text" placeholder="Phone" maxlength="11" required >
                  </div>

                  <div class="form-group">
                    <label class="control-label">Expert Email*</label>
                    <input class="form-control" name="email" type="text" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" maxlength="100" required="">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Expert Designation*</label>
                    <input class="form-control" name="designation" type="text" placeholder="Designation" maxlength="100" required="">
                  </div>
                 
                  <div class="form-group">
                    <label class="control-label">Expert's other info </label>
                    <textarea class="form-control"name="other"  rows="4" placeholder="Expert's other info " maxlength="500" ></textarea>
                  </div>
                
              </div>
               
              <div class="card-footer">
                <div class="row">
                  <div class="col-md-8 col-md-offset-3">
                     <input type="submit" class="btn btn-primary" style="float:right"  name="submit" value="Submit" />
                  </div>
                </div>
              </div>
             
            </div>
          </div>
        </form>
        </div>
      </div>

              <script>
            function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah1').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
<?php include "include/footer.php";?>