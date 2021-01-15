<?php include "include/header.php";?>
<?php include "include/sidebar.php";?>

 <?php 
if (isset($_GET['premove'])){
$premove=$_GET['premove'];
$premove = $gncl->premove($premove);
}
?>
<?php 
if (isset($_GET['paccept'])){
$paccept=$_GET['paccept'];
$paccept = $gncl->paccept($paccept);
}
?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Information List</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Information List</li>
            </ul>
          </div>
        </div>
        <div class="row">



          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">


                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Type</th>
                      <th>View</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>

              <?php
			
		$query = "SELECT * FROM crops";
		 mysqli_query($link,'SET CHARACTER SET utf8');
		mysqli_query($link,"SET SESSION collation_connection ='utf8_general_ci'");
		$result = mysqli_query($link, $query);
		while($row = mysqli_fetch_assoc($result)){
             ?>
                    <tr>
                      <td><?php echo $row['name'];?></td>


                      <td><?php $stst = $row['crop_type'];$query  = "SELECT name FROM crops_type WHERE id =$stst" ; 
$res = mysqli_query($link, $query);
$row1 = mysqli_fetch_assoc($res);

echo $row1['name']; 
  $res->free();

 ?></td>

                      <td><a class="btn btn-info" href="viewCrop.php?productid=<?php echo $row['id'];  ?>"><i class="fa fa-eye" aria-hidden="true"></i>
&nbsp;View</a></td>

                      <td><a class="btn btn-danger" href="deleteCrop.php?id=<?php echo $row['id'];  ?>"><i class="fa fa-eye" aria-hidden="true"></i>
&nbsp;Remove</a></td>
                    </tr>
            <?php }?>       
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  <?php 
    if (isset($premove)){
        echo '<script type="text/javascript">alert("' . $premove . '")</script>';
  }?>

  <?php 
    if (isset($paccept)){
        echo '<script type="text/javascript">alert("' . $paccept . '")</script>';
  }?>


        </div>
      </div>
<?php include "include/footer.php";?>
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>