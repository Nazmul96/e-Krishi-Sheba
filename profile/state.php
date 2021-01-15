<?php
include('db_config.php');
$country = $_POST['country'];
$sql= "select id,name from crops where crop_type=$country";
$query = $db->query($sql);
echo '<option value="">Select State</option>';
while($res = $query->fetch_assoc()){
echo '<option value="'.$res['name'].'">'.$res['name'].'</option>';
	
}
?>