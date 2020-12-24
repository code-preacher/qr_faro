<?php 
ob_start();
session_start();
include '../inc/checklogin.php';
checkLogin();
include('../inc/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FARO WATER</title>

  <?php
include 'inc/header.php';
  ?>



  <div id="wrapper">
<?php
include 'inc/sidebar.php';
?>


    <div id="content-wrapper">

<!-- Main open -->
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">View Ordered Product</li>
        </ol>



<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-archive"></i>
            ALL ORDERED PRODUCTS</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Product Name</th>
                    <th>Quantity</th>

                    <th>Payment Reference</th>
                    <th>Payment Status</th>
                    <th>Delivery Status</th>
                    <th>Date of Order</th>
                    <th>View</th>
                    <th>Payment Toggle</th>
                    <th>Delivery Toggle</th>

                  </tr>
                </thead>
                
                <tbody>
<?php

 $seat=mysqli_query($con,"SELECT * FROM product_order  order by id desc");
 while($dy=mysqli_fetch_array($seat)){
?>
                  <tr>
                     <td><?php echo $dy['cname']; ?></td>
                      <td><?php echo $dy['cemail']; ?></td>
                       <td><?php echo $dy['product_name']; ?></td>
                        <td><?php echo $dy['quantity']; ?></td>
                   
                    <td><?php echo $dy['payment_ref']; ?></td>
                  
    <td><?php 

if ($dy['payment_status']=='1') {
 echo "<i class='fa fa-check-circle text-success'></i>";
} else {
   echo "<i class='fa fa-times-circle text-danger'></i>";
}

?></td>
                  
    <td><?php 

if ($dy['delivery_status']=='1') {
 echo "<i class='fa fa-check-circle text-success'></i>";
} else {
   echo "<i class='fa fa-times-circle text-danger'></i>";
}

?></td>

                  <td><?php echo $dy['date']; ?></td>
                   <td><a href="view-osd.php?id=<?php echo $dy['id']; ?>"><i class="fa fa-eye"></i></a></td>
                  <td><a href="toggle1.php?id=<?php echo $dy['id']; ?>"><button class="btn btn-info btn-sm">Yes/No</button></a></td>
                        
                    <td><a href="toggle2.php?id=<?php echo $dy['id']; ?>"><button class="btn btn-info btn-sm">Yes/No</button></a></td>
                
                  </tr>
                <?php
}
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->
<!-- Main close -->

<?php
include 'inc/footer.php';
?>