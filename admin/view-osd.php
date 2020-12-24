<?php 
ob_start();
session_start();
include '../inc/checklogin.php';
checkLogin();
include('../inc/config.php');

$gt=mysqli_query($con,"select * from product_order where id='".$_GET['id']."'");
$kt=$gt->fetch_array();
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
          <li class="breadcrumb-item active">View Ordered Product Detail</li>
        </ol>



<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-archive"></i>
            ALL ORDERED PRODUCTS DETAIL</div>
      <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      
                  <div class="form-group">
                    <label for="exampleInputName">Customer Name :</label>
                    <?php echo $kt['cname'];?>
                  </div>
               
              
                  <div class="form-group">
                    <label for="exampleInputMatno">Customer Email :</label>
                    <?php echo $kt['cemail'];?>
                  </div>
             
         
                  <div class="form-group">
                    <label for="exampleInputPassword">Product Name :</label>
                    <?php echo $kt['product_name'];?>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword">Product Price :</label>
                    <?php echo "₦".$kt['price'];?>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Quantity :</label>
                  <?php echo $kt['quantity'];?>
                  </div> 

                  <div class="form-group">
                    <label for="exampleInputPassword">Product Charge :</label>
                    <?php echo "₦".$kt['charge'];?>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPhone">Payment Reference :</label>
                   <?php echo $kt['payment_ref'];?>
                  </div> 

                  <div class="form-group">
                    <label for="exampleInputCompanyName">Payment Status :</label>
                    <?php 
                    if ($kt['payment_status']=='1') {
 echo "<i class='fa fa-check-circle text-success'></i>";
} else {
   echo "<i class='fa fa-times-circle text-danger'></i>";
}
                    ?>
                  </div> 

                  <div class="form-group">
                     <label for="exampleInputCompanyName">Delivery Status :</label>
                    <?php
                    if ($kt['delivery_status']=='1') {
 echo "<i class='fa fa-check-circle text-success'></i>";
} else {
   echo "<i class='fa fa-times-circle text-danger'></i>";
}
                   ?>
                  </div>

                 
                   <div class="form-group">
                     <label for="exampleInputCompanyName">Date Of Order :</label>
                   <?php echo $kt['date'];?>
                  </div>


                </div> 

<div class="col-md-6">
        <div class="row">
          <div class="col-md-4">
                <div class="form-group">
   <label for="exampleInputFile">Qr Image:</label><br/>
                  <img src="../user/img/<?php echo $kt['qr_image'];?>" alt="Qr Image" class="img-responsive img-rounded" style="width:500px;height: inherit;"/>
                </div>
              </div>
            </div>


                </div>

                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->
        </div>

      </div>
      <!-- /.container-fluid -->
<!-- Main close -->

<?php
include 'inc/footer.php';
?>