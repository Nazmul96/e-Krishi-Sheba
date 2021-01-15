<?php


	header('Content-Type: text/html; charset=utf-8');
	include ("../config.php");
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: chat.php");
    exit;
}



	include 'connection.php';
	//$query = "SELECT * FROM chat ORDER BY id DESC";
	$query = "SELECT * FROM chat WHERE id = 0";
	//$query = "SELECT * FROM chat WHERE name='asd' OR name='sdf' ";
	$run = $con -> query($query);
	while ($row = $run->fetch_array()) :
?>
<div id="message">
	<img class="message-avatar" src="images/mypic.png" alt="logo">
	<a class="message-author" href="#"> <?php echo $row['myname'];?> </a></br>
	<span class="message-date"> <?php $new_datetime = DateTime::createFromFormat ( "Y-m-d H:i:s", $row["date"] );; echo $new_datetime->format('d/m/y, H:i:s');;?></span>
	<span class="message-content"> <?php echo $row['message'];?> </span>
	<a href="adminreply.php?id=<?php $nm=$row['name']; echo $nm; ?>">Reply : </a><?php echo $row['name'];?> </a>
	<?php
	 $file = $row['file'];
	 $pic= $row['image'];
	 if ($pic==1)
	{
		 $vid=$row['vid'];
	 echo "<div >";
	  echo "<a href='show.php?id=$vid'  target='_blank'>View Image</a>";
 
	 echo "</div>";
	 
	 }?>
	 <?php
	 if ($file=='0')
		 echo " ";
	 else if ($pic==0){
		 $vid=$row['vid'];
	 echo "<div >";
	  echo "<a href='view.php?id=$vid'  target='_blank'>Watch Video</a>";
       //echo "<video src='".$file."' controls width='320px' height='200px' >";
	 echo "</div>";}?>
</div>



    <div> 

</div>

<?php endwhile; ?>