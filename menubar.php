<aside class="main-sidebar"style="background-color: #051b31;">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" >
    <!-- Sidebar user panel -->
    <div class="user-panel" >
      <div class="pull-left image">
        <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info" >
        <p><?php echo $admin['firstname'].' '.$admin['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree"  >
      <li class="header"style="background-color: #051b31;">REPORTS</li>
      <li><a href="home.php" style="background-color: #051b31;"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li><a href="sales.php"style="background-color: #051b31;"><i class="fa fa-money"></i> <span>Sales</span></a></li>
      <li class="header"style="background-color: #051b31;">MANAGE</li>
      <li><a href="users.php"style="background-color: #051b31;"><i class="fa fa-users"></i> <span>Users</span></a></li>
      <li class="treeview"style="background-color: #051b31;">
        <a href="#"style="background-color: #051b31;">
          <i class="fa fa-barcode"></i>
          <span>Products</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="products.php"style="background-color: #051b31;"><i class="fa fa-circle-o"></i> Product List</a></li>
          <li><a href="category.php"style="background-color: #051b31;"><i class="fa fa-circle-o"></i> Category</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>