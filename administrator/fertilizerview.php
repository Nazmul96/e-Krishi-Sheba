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


$query = "SELECT * FROM fertilizer ORDER BY fid DESC";
$result = mysqli_query($link, $query);
mysqli_query($link,'SET CHARACTER SET utf8');




















?>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="jquery.tabledit.min.js"></script>
  </head>

      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Fertilizer Information</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Fertilizer Information</li>
            </ul>
          </div>
        </div>
        <div class="row">
		<body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
         
 <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Fertilizer Details</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add New Fertilizer </a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM fartilizer";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Price</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['price'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='read.php?id=". $row['id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>








		 
   </div>  
  </div>  

   
        </div>
      </div>
	   </body> 
</html> 
<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'action.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'first_name'], [2, 'last_name']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
});  
 </script>

       <?php 
    if (isset($submit)){
        echo '<script type="text/javascript">alert("' . $submit . '")</script>';
  }?>
    <script>
      $('#summernote').summernote({
        placeholder: 'Product Information.',
        tabsize: 2,
        height: 100
      });
    </script>
	

<?php include "include/footer.php";?>