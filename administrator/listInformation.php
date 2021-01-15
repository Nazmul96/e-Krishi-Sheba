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
                      <th>Information Tag</th>
                      <th>Status</th>
                      <th>View</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>

              <?php
			
		$query = "SELECT * FROM products";
		 mysqli_query($link,'SET CHARACTER SET utf8');
		mysqli_query($link,"SET SESSION collation_connection ='utf8_general_ci'");
		$result = mysqli_query($link, $query);
		while($row = mysqli_fetch_assoc($result)){
             ?>
                    <tr>
                      <td><?php echo $row['productName'];?></td>


                      <td><?php $stst = $row['flag']; if($stst=="1"){ ?> <span style="color:green;"> <i class="fa fa-check" aria-hidden="true"></i>
                      <?php echo"Publised";}else{?></span><span style="color:red;"><i class="fa fa-window-close" aria-hidden="true"></i>
                      <?php echo"Not Published";}?></span></td>

                      <td><a class="btn btn-info" href="viewProduct.php?productid=<?php echo $row['id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i>
&nbsp;View</a></td>

                      <td><?php $stst = $row['flag']; if($stst=="1"){ ?> <a class="btn btn-danger" href="?premove=<?php echo $row['id'];?>">Remove</a> <?php }else{?></span><a class="btn btn-success" href="?paccept=<?php echo $row['id'];?>">Publish</a><?php }?></td>
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