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
 
       echo "<div class='video'>";
       echo "<video src='".$name."'  controls width='320px' height='200px' >";
       echo "</div>";
}
} 
    ?>
 
    </div>

  </body>
</html>
