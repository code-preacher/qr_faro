<?php
session_start();
error_reporting(0);
include '../inc/checklogin.php';
checkLogin();
?>
<?php
include("../inc/config.php");
if(isset($_POST['submit'])){
  $sn=$_POST['pn'];
  $sd=$_POST['pd'];
  $pr=$_POST['pr'];
  $date=date("d-m-y @ g:i A");
$da=mysqli_query($con,"insert into product(name,info,price,date) values('$sn','$sd','$pr','$date')");
if ($da) {
$_SESSION['qmsg']='<div class="alert alert-success hide alert-dismissible fade show" role="alert">
  <strong>Product was created successfully....</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
} else {
  $_SESSION['qmsg']='<div class="alert alert-danger hide alert-dismissible fade show" role="alert">
  <strong>Error Adding Product....</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

}

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

<div class="container-fluid col-lg-12">
  <?php
               if (!empty($_SESSION['qmsg'])) {
                      echo $_SESSION['qmsg'];
                       $_SESSION['qmsg']="";
               }
         
               ?>
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Add Product</div>
      <div class="card-body">
       <form action="#" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputName" class="form-control" name="pn" placeholder="Product Name" required="required" autofocus="autofocus">
              <label for="inputName">Product Name</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputDescription" class="form-control" name="pd" placeholder="Product Description" required="required">
              <label for="inputDescription">Product Description</label>
            </div>
          </div>
      
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputPrice" class="form-control" name="pr" placeholder="Product Price" required="required" autofocus="autofocus">
              <label for="inputPrice">Product Price</label>
            </div>
          </div>

          <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="submit">Add Product</button>
          </div>
         
        </form>
        <div class="text-center">
         
        </div>
      </div>
    </div>
  </div>

      <!-- /.container-fluid -->
<!-- Main close -->

<?php
include 'inc/footer.php';
?>