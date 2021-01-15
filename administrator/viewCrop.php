<?php include "include/header.php";?>
<?php include "include/sidebar.php";?>

<?php 
if (!isset($_GET['productid'])||$_GET['productid']==NULL){
echo "<script>window.location = '404.php';</script>";
}else{
$productid = $_GET['productid'];
}?>

<?php 
if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['productupdate'])){
//Function for update by id information....
$id =$_POST['id'];
$productName =$_POST['productName'];
$productInfo =$_POST['productInfo'];

if($productName ==""){
echo"<script>alert('Fill all fields.');</script>"; 
return $msg;
}
else {
mysqli_query($link,'SET CHARACTER SET utf8');
mysqli_query($link,"SET SESSION collation_connection ='utf8_general_ci'");	
$sqlx ="UPDATE crops
SET 
name='$productName',
description='$productInfo'
WHERE id ='$id'";
if ($link->query($sqlx) === TRUE) {
	  echo'<script type="text/javascript">
           window.location = "listCrop.php"
      </script>'; 
} else {
    echo "Error: " . $sqlx . "<br>" . $link->error;
}
  }$link->close();
 }?>
 <?php
if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['imgupdate'])){
$imgupdate = $gncl->imgupdate($_POST,$_FILES);
}
?>
  <head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
  </head>

      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i>Info.</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Info.</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <div class="col-md-12">
            <div class="card">
              <h3 class="card-title">Info.</h3>
            <?php
                    

  $productid=$productid;
 $sql="SELECT * FROM crops where id='$productid'";
 mysqli_query($link,'SET CHARACTER SET utf8');
 mysqli_query($link,"SET SESSION collation_connection ='utf8_general_ci'");
$resultx = mysqli_query($link, $sql);
while($result = mysqli_fetch_assoc($resultx)){

						
						
             ?>
              <div class="card-body">
              

                  <div class="form-group">
                    <label class="control-label">Crop Name : &nbsp;</label> : 
                    <?php echo $result['name'];?>
                  </div>
                 
                  <div class="form-group">
                    <label class="control-label">Details Information : &nbsp;</label>:
                     <?php echo $result['description'];?>
                  </div>
                
              </div>
          <?php } ?>
                <div class="card-footer">
                <div class="row">
                  <div class="col-md-8" style="margin-left:20%">

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#update"></i><i class="fa fa-opera" aria-hidden="true"></i>
</i>Update Information</button>
<a href="listcrop.php" class="btn btn-info"></i><i class="fa fa-chevron-left" aria-hidden="true"></i>Go Back</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </form>
        </div>
      </div>
<!-- Modal for change pic-->
<div class="modal fade" id="changeimg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="" method="post" enctype="multipart/form-data">
    
  </form>
  </div>
</div>

<!-- Modal for change data-->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body">
                    <?php
$productid=$productid;
 $sql="SELECT * FROM crops where id='$productid'";
 mysqli_query($link,'SET CHARACTER SET utf8');
 mysqli_query($link,"SET SESSION collation_connection ='utf8_general_ci'");
$resultx = mysqli_query($link, $sql);
while($result = mysqli_fetch_assoc($resultx)){
             ?>
            <input type="text" name="id" value="<?php echo $result['id'];?>" hidden />
            <div class="form-group">
                    <label class="control-label">Product Name</label>
                    <input class="form-control" type="text" value="<?php echo $result['name'];?>" name="productName">
            </div>
            <div class="form-group">
                    <label class="control-label">Product Information</label>
                    <textarea class="form-control" rows="4" id="summernote" name="productInfo"><?php echo $result['description'];?></textarea>
            </div>
          


        <?php }?>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit" name="productupdate">Save changes</button>
      </div></form>
    </div>
  </div>
</div>
  <?php 
    if (isset($productupdate)){
        echo '<script type="text/javascript">alert("' . $productupdate . '")</script>';
  }?>
  <?php 
    if (isset($imgupdate)){
        echo '<script type="text/javascript">alert("' . $imgupdate . '")</script>';
  }?>
    <script>
      $('#summernote').summernote({
        placeholder: 'Product Information.',
        tabsize: 2,
        height: 100
      });
    </script>
<?php include "include/footer.php";?>