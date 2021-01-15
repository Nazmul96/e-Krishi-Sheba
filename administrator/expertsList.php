<?php include "include/header.php";?>
<?php include "include/sidebar.php";?>

<?php 
if (isset($_GET['remove'])){
$remove=$_GET['remove'];
$remove = $gncl->removeexp($remove);
}
?>
<?php 
if (isset($_GET['accept'])){
$accept=$_GET['accept'];
$accept = $gncl->acceptexp($accept);
}
?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Expert List</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Expert List</li>
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
                      <th>Expert Name</th>
					   <th>Expert Designation</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>

            <?php
         $sql = "SELECT * FROM experts";
         mysqli_query($link,'SET CHARACTER SET utf8');
         mysqli_query($link,"SET SESSION collation_connection ='utf8_general_ci'");

         $result = mysqli_query($link, $sql);
         while($row = mysqli_fetch_assoc($result)){
             ?>
                    <tr>
                      <td><?php echo $row['name'];?></td>
					  <td><?php echo $row['designation'];?></td>
                      <td><img src="images/experts/<?php echo $row['image'];?>" alt="Image" width="50" height="50"></td>

                        <td><?php $stst = $row['flag']; if($stst=="1"){ ?> <span style="color:green;"> <?php echo"Publised";}else{?></span><span style="color:red;"><?php echo"Not Published";}?></span></td>

<td><?php $stst = $row['flag']; if($stst=="1"){ ?> <a class="btn btn-danger" href="?remove=<?php echo $row['id'];?>">Remove</a> <?php }else{?></span><a class="btn btn-success" href="?accept=<?php echo $row['id'];?>">Publish</a><?php }?></td>
                    </tr>
              <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  <?php 
    if (isset($remove)){
        echo '<script type="text/javascript">alert("' . $remove . '")</script>';
  }?>

  <?php 
    if (isset($accept)){
        echo '<script type="text/javascript">alert("' . $accept . '")</script>';
  }?>
<?php include "include/footer.php";?>
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>