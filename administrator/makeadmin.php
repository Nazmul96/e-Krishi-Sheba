<?php include "include/header.php";?>
<?php include "include/sidebar.php";?>
<?php 
if($_SERVER['REQUEST_METHOD']== 'POST' && isset($_POST['adminReg'])){
$adminReg = $gncl->adminReg($_POST,$_FILES);
}
?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Create Admin</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="index.php">Dashboard</a></li>
              <li>Create Admin</li>
            </ul>
          </div>
        </div>
        <div class="row">

          <form method="post" action="" enctype="multipart/form-data">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Create Admin</h3>
              <div class="card-body">
               
                  <div style="padding-left:38%;"><img id="blah1" src="" width="150" height="150" /></div>
                  <div class="form-group">
                    <label class="control-label">Admin Image (Maximum 2MB)*</label>
                    <input type="file" name="adminImage" onchange="readURL1(this);" required />

                  </div>
                  <div class="form-group">
                    <label class="control-label">Name*</label>
                    <input class="form-control" name="name" type="text" placeholder="Name" maxlength="50" required>
                    <input type="name" name="creator" id="name"  value="<?php echo"$adminID"?>" hidden required/>
                  </div>

                  <div class="form-group">
                    <label class="control-label">Phone*</label>
                    <input class="form-control" name="phone" pattern="^\d{11}$" type="text" placeholder="Phone" maxlength="11" required >
                  </div>

                  <div class="form-group">
                    <label class="control-label">Email*</label>
                    <input class="form-control" name="email" type="text" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" maxlength="100" required="">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Designation*</label>
                    <input class="form-control" name="designation" type="text" placeholder="Designation" maxlength="100" required="">
                  </div>
                 
                  <div class="form-group">
                    <label class="control-label">Address*</label>
                    <textarea class="form-control"name="address"  rows="4" placeholder="Enter your address" maxlength="200" required></textarea>
                  </div>
                
              </div>
               <div class="form-group">
                    <label class="control-label">Password*</label>
                    <input class="form-control" name="pass"  type="password" placeholder="Password" maxlength="20" required >
              </div>
              <div class="form-group">
                    <label class="control-label">Retype Password*</label>
                    <input class="form-control" name="repass"  type="password" placeholder="Retype Password" maxlength="20" required >
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-md-8 col-md-offset-3">
                    <button class="btn btn-primary icon-btn" type="submit" name="adminReg"><i class="fa fa-fw fa-lg fa-check-circle"></i>Create</button>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
        </form>
        </div>
      </div>
       <?php 
    if (isset($adminReg)){
        echo '<script type="text/javascript">alert("' . $adminReg . '")</script>';
  }?>
              <script>
            function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah1').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
<?php include "include/footer.php";?>