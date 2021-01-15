<?php include "include/header.php";?>
<?php include "include/sidebar.php";?>

<?php 
header('Content-Type: text/html; charset=utf-8');
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
            <h1><i class="fa fa-edit"></i> Feedback</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Feedback</li>
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
                      <th>Subject</th>
					   <th>Message</th>
                      <th>Name</th>
                      <th>e-Mail</th>
                      <th>date</th>
                    </tr>
                  </thead>

                  <tbody>

            <?php
         $sql = "SELECT * FROM feedback";
         mysqli_query($link,'SET CHARACTER SET utf8');
         mysqli_query($link,"SET SESSION collation_connection ='utf8_general_ci'");

         $result = mysqli_query($link, $sql);
         while($row = mysqli_fetch_assoc($result)){
             ?>
                    <tr>
                      <th><?php echo $row['subject'];?></th>
					  <td><?php echo $row['message'];?></td>
                    <td><?php echo $row['name'];?></td>
					 <td><?php echo $row['email'];?></td>
					  <td><?php echo $row['date'];?></td>
                        
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