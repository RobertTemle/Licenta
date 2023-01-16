<?php

include 'php/connect.php';

if(isset($_POST['submit'])){

  $Featured=$_POST['Featured'];
  $Brand=$_POST['Brand'];
  $CarName=$_POST['CarName'];
  $MakeYear=$_POST['MakeYear'];
  $Capacity=$_POST['Capacity'];
  $Fuel=$_POST['Fuel'];
  $FuelConsumption=$_POST['FuelConsumption'];
  $Transmission=$_POST['Transmission'];
  $Price=$_POST['Price'];
  $image1 = $_POST['image1'];
  $image2 = $_POST['image2'];
  $image3 = $_POST['image3'];
  $image11 = $_POST['image1-big'];
  $image21 = $_POST['image2-big'];
  $image31 = $_POST['image3-big'];



$sql = "INSERT INTO cars (Featured, Brand, CarName, MakeYear, Capacity, Fuel, FuelConsumption, Transmission, Price)
values('$Featured', '$Brand', '$CarName' , '$MakeYear' ,'$Capacity' , '$Fuel', '$FuelConsumption', '$Transmission', '$Price', '$image1', '$image2', '$image3', '$image11', '$image21', '$image31')";

$result=mysqli_query($conn,$sql);

if($result){
  header('location:car-display.php');
}
  else{
    die(mysqli_error($conn));
  }
}

?>


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="css/splide.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/select2.min.css">
  <link rel="stylesheet" href="css/main.css">

  <!-- Bootstrap stuff -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
  <link rel="apple-touch-icon" href="icon/favicon-32x32.png">

  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <title>Cararo – Car Add</title>

</head>

<body>
  <?php

  include 'header-logged.php'; 

  ?>

  <div class="container my-5">

    <br><br><br>

    <form method="post">

      <div class="form-group">
          <label>Featured</label>
          <input type="text" class="form-control"  placeholder="Show on Front Page? 1 - Yes, 2 - No" name="Featured">
        </div>

      <div class="form-group">
          <label>Brand</label>
          <input type="text" class="form-control"  placeholder="Enter Car Brand" name="Brand">
        </div>

        <div class="form-group">
          <label>Car Name</label>
          <input type="text" class="form-control"  placeholder="Enter Car Name" name="CarName">
        </div>

        <div class="form-group">
          <label>Make Year</label>
          <input type="text" class="form-control"  placeholder="Enter Car Make Year" name="MakeYear">
        </div>

        <div class="form-group">
          <label>Capacity</label>
          <input type="text" class="form-control"  placeholder="User Car Capacity" name="Capacity">
        </div>

        <div class="form-group">
          <label>Fuel</label>
          <input type="text" class="form-control"  placeholder="Enter Car Fuel" name="Fuel">
        </div>

        <div class="form-group">
          <label>Fuel Consumption</label>
          <input type="text" class="form-control"  placeholder="Enter Car Fuel Consumption / 1km" name="FuelConsumption">
        </div>

        <div class="form-group">
          <label>Transmission</label>
          <input type="text" class="form-control"  placeholder="Enter Car Transmission" name="Transmission">
        </div>

        <div class="form-group">
          <label>Price</label>
          <input type="text" class="form-control"  placeholder="Enter Car Price / Day" name="Price">
        </div>

        <div class="form-group">
          <label>Image 1</label>
          <input type="text" class="form-control"  placeholder="Enter path to image 1" name="image1">
        </div>

        <div class="form-group">
          <label>Image 2</label>
          <input type="text" class="form-control"  placeholder="Enter path to image 2" name="image2">
        </div>

        <div class="form-group">
          <label>Image 3</label>
          <input type="text" class="form-control"  placeholder="Enter path to image 3" name="image3">
        </div>

        <div class="form-group">
          <label>Image 1-big</label>
          <input type="text" class="form-control"  placeholder="Enter path to image 1" name="image1-big">
        </div>

        <div class="form-group">
          <label>Image 2-big</label>
          <input type="text" class="form-control"  placeholder="Enter path to image 2" name="image2-big">
        </div>

        <div class="form-group">
          <label>Image 3-big</label>
          <input type="text" class="form-control"  placeholder="Enter path to image 3" name="image3-big">
        </div>

        <br><br>
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
    </form>
  </div>
</body>
