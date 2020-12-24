
    <!-- Sidebar open -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fa fa-fw fa-tachometer"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="view-user.php">
          <i class="fa fa-fw fa-eye"></i>
          <span>View Users</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-folder"></i>
          <span>Product</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
          <a class="dropdown-item" href="add-s.php"><i class="fa fa-fw fa-plus"></i>Add Product</a>
          <a class="dropdown-item" href="view-s.php"><i class="fa fa-fw fa-eye"></i>View Product</a>
           <a class="dropdown-item" href="view-os.php"><i class="fa fa-fw fa-eye"></i>View Ordered Product</a>
           <a class="dropdown-item" href="view-ps.php"><i class="fa fa-fw fa-eye"></i>View Payed Product</a>
           <a class="dropdown-item" href="view-ups.php"><i class="fa fa-fw fa-eye"></i>View Unpayed Product</a>
           <a class="dropdown-item" href="view-dps.php"><i class="fa fa-fw fa-eye"></i>View Delivered Product</a>
               <a class="dropdown-item" href="view-udps.php"><i class="fa fa-fw fa-eye"></i>View Undelivered Product</a>
         
        </div>
      </li>


<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-comment"></i>
          <span>Complain</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
          <a class="dropdown-item" href="add-c.php"><i class="fa fa-fw fa-plus"></i>Reply Complain</a>
          <a class="dropdown-item" href="view-c.php"><i class="fa fa-fw fa-eye"></i>View Complain</a>
      
         
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="profile.php">
          <i class="fa fa-fw fa-user"></i>
          <span>Profile</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../inc/logout.php" data-toggle="modal" data-target="#logoutModal">
          <i class="fa fa-fw fa-arrow-right"></i>
          <span>Logout</span></a>
      </li>
    </ul>

    <!-- Sidebar close -->