<?php
include("connection.php");
?>
<!doctype html>
<html>
  <head>
    <style>

    video{
     float: left;
    }
    </style>
  </head>
  <body>
    <div>
 
     <?php
	 if (isset($_GET['id']))
{			
	$id=$_GET['id'];
     $fetchVideos = mysqli_query($con, "SELECT file FROM chat WHERE  vid='$id'");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $name = $row['file'];
 
    echo "<img src='$name'>";
}
} 
    ?>
 
    </div>

  </body>
</html>
