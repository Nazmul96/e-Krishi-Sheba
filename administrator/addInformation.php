<?php include "include/header.php";?>
<?php include "include/sidebar.php";?>

<?php 
if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['addProduct'])){
 $productName=$_POST["productName"];
 $productInfo=$_POST["productInfo"];

$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        //for image 
        $filenamet = $_FILES["productImg"]["name"];
        $filetype = $_FILES["productImg"]["type"];
        $filesize = $_FILES["productImg"]["size"];

        $filenamett = str_replace(' ','',$filenamet);
        date_default_timezone_set("Asia/Dhaka");
        $r2= date("Ymd_his");
		$rand=rand(0,1000);
        $filename1=$rand.$r2.$filenamett;
        // Verify file extension for img 1
        $ext1 = pathinfo($filename1, PATHINFO_EXTENSION);
    if(!array_key_exists($ext1, $allowed))die("Error: Please select a valid file format.");
		
        // Verify file size - 5MB maximum
	$maxsize = 5*1024 * 1024 ;
	if($filesize> $maxsize)
	die("Error: File size is larger than the allowed limit.");
if(in_array($filetype, $allowed))
{
//move_uploaded_file($source,$save);
move_uploaded_file($_FILES["productImg"]["tmp_name"], "../images/product/".$filename1);
mysqli_query($link,'SET CHARACTER SET utf8');
mysqli_query($link,"SET SESSION collation_connection ='utf8_general_ci'");
$query = "INSERT INTO products (productName,productimage,productinfo)
VALUES('$productName','$filename1','$productInfo')";
if ($link->query($query) === TRUE) {
	  echo"<script>alert('Successfuly Saved');</script>"; 
} else {
    echo "Error: " . $query . "<br>" . $link->error;
}


}
$link->close();
}
?>

  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
  </head>

      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Add Information</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Add Information</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <div class="col-md-12">
            <div class="card">
              <h3 class="card-title">Add Information</h3>
              <div class="card-body">
                
                
                  <div class="form-group">
                    <label class="control-label">Information Tag</label>
                    <input class="form-control" type="text" placeholder="Product Name" name="productName">
                  </div>
                 
                  <div class="form-group">
                    <label class="control-label">Page Image (.jpeg/.jpg.png.gif allowed. Max 5 MB)</label>
                    <input class="form-control" type="file" name="productImg">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Details Information</label>
                    <textarea class="form-control" rows="4" id="summernote" name="productInfo"></textarea>
                  </div>
                
              </div>
                <div class="card-footer">
                <div class="row">
                  <div class="col-md-8 col-md-offset-3">
                    <button class="btn btn-primary icon-btn" type="submit" name="addProduct"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add Product</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </form>
        </div>
      </div>
       <?php 
    if (isset($addProduct)){
        echo '<script type="text/javascript">alert("' . $addProduct . '")</script>';
  }?>
    <script>
      $('#summernote').summernote({
        placeholder: 'Product Information.',
        tabsize: 2,
        height: 100
      });
    </script>
<?php include "include/footer.php";?>