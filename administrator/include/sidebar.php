      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="images/user/<?php echo $adminpic;?>" alt="<?php echo $adminName;?>"></div>
            <div class="pull-left info">
              <p><?php echo $adminName;?></p>
              <p class="designation"><?php echo $designation;?></p>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
           

            

            <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Information</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="addInformation.php"><i class="fa fa-circle-o"></i> Add Information</a></li>
                <li><a href="listInformation.php"><i class="fa fa-circle-o"></i> Information List</a></li>
              </ul>
            </li>
			 <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Experts</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="addExpert.php"><i class="fa fa-circle-o"></i> Add Expert</a></li>
                <li><a href="expertsList.php"><i class="fa fa-circle-o"></i> Experts List</a></li>
              </ul>
            </li>
			 <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Service Provider</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="/krishi/myinbox/adminsingup.php"><i class="fa fa-circle-o"></i>Add Service provicer</a></li>
				 <li><a href="./serviceProvider.php"><i class="fa fa-circle-o"></i>Delete Service provicer</a></li>
         
              </ul>
            </li>
			 <li class="treeview"><a href="#"><i class="fa fa-th-list"></i><span>Read User Feedback</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="feedback.php"><i class="fa fa-circle-o"></i>Feedback</a></li>
         
              </ul>
            </li>
			      <li class="treeview"><a href="fertilizerview.php"><i class="fa fa-th-list"></i><span>Fertilizer Price</span><i class="fa fa-angle-right"></i></a>
           
            </li>
			<li class="treeview"><a href="cropstype.php"><i class="fa fa-th-list"></i><span>Crops Type</span><i class="fa fa-angle-right"></i></a>
           
            </li>
			<li class="treeview"><a href="addcrops.php"><i class="fa fa-th-list"></i><span>Crops</span><i class="fa fa-angle-right"></i></a>
                         <ul class="treeview-menu">
                <li><a href="addcrops.php"><i class="fa fa-circle-o"></i>Add New Crops</a></li>
				 <li><a href="listcrop.php"><i class="fa fa-circle-o"></i>Modify Crops</a></li>
         
              </ul>
		   
		   
            </li>
			
			
				<li><a href="makeadmin.php"><i class="fa fa-circle-o"></i> Create Admin</a></li>
          </ul>
        </section>
      </aside>
