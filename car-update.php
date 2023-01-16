<?php
include 'php/connect.php';

$CarId = $_GET['updateid'];

$sql = "SELECT * FROM cars WHERE CarId=$CarId";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$Featured = $row['Featured'];
$Brand = $row['Brand'];
$CarName= $row['CarName'];
$MakeYear= $row['MakeYear'];
$Capacity = $row['Capacity'];
$Fuel = $row['Fuel'];
$FuelCons = $row['FuelConsumption'];
$Transmission = $row['Transmission'];
$Price = $row['Price'];
$image1 = $row['image1'];
$image2 = $row['image2'];
$image3 = $row['image3'];
$image11 = $row['image1-big'];
$image21 = $row['image2-big'];
$image31 = $row['image3-big'];

if (isset($_POST['submit'])) {

	$Featured = $_POST['Featured'];
	$Brand = $_POST['Brand'];
	$CarName = $_POST['CarName'];
	$MakeYear = $_POST['MakeYear'];
	$Capacity = $_POST['Capacity'];
	$Fuel = $_POST['Fuel'];
	$FuelCons = $_POST['FuelConsumption'];
	$Transmission = $_POST['Transmission'];
	$Price = $_POST['Price'];
	$image1 = $_POST['image1'];
	$image2 = $_POST['image2'];
	$image3 = $_POST['image3'];
	$image11 = $_POST['image1-big'];
	$image21 = $_POST['image2-big'];
	$image31 = $_POST['image3-big'];


	$sql = "UPDATE cars set CarId = $CarId, Featured = '$Featured', Brand = '$Brand', CarName = '$CarName', MakeYear = '$MakeYear', Capacity = '$Capacity', Fuel = '$Fuel', FuelConsumption = '$FuelCons', Transmission = '$Transmission', Price= '$Price', image1= '$image1', image2= '$image2', image2= '$image3', image1-big= '$image11', image2-big= '$image21', image3-big= '$image31' WHERE CarId = $CarId";

	$result = mysqli_query($conn, $sql);

	if ($result) {

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

	<meta name="description" content="Home Page">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<title>Cararo – Car Update</title>

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
    			<input type="text" class="form-control"  placeholder="Change Feature Status" name="Featured"  value="<?php echo $Featured?>">
  			</div>

			<div class="form-group">
    			<label>Brand</label>
    			<input type="text" class="form-control"  placeholder="Enter changed Brand" name="Brand"  value="<?php echo $Brand?>">
  			</div>

  			<div class="form-group">
			    <label>Car Name</label>
			    <input type="text" class="form-control"  placeholder="Enter changed Car Name" name="CarName" value="<?php echo $CarName?>">
  			</div>

  			<div class="form-group">
			    <label>Make Year</label>
			    <input type="text" class="form-control"  placeholder="Enter changed Year" name="MakeYear" value="<?php echo $MakeYear?>">
  			</div>

  			<div class="form-group">
			    <label>Capacity</label>
			    <input type="text" class="form-control"  placeholder="Enter changed Capacity" name="Capacity" value="<?php echo $Capacity?>">
  			</div>

  			

  			<div class="form-group">
			    <label>Fuel</label>
			    <input type="text" class="form-control"  placeholder="Change Fuel Type" name="Fuel" value="<?php echo $Fuel?>">
  			</div>

  			  <div class="form-group">
			    <label>Fuel Consumption</label>
			    <input type="text" class="form-control"  placeholder="Change Fuel Consumption" name="FuelConsumption" value="<?php echo $FuelCons?>">
  			</div>

  			<div class="form-group">
			    <label>Transmission</label>
			    <input type="text" class="form-control"  placeholder="Change Transmission" name="Transmission" value="<?php echo $Transmission?>">
  			</div>

  			<div class="form-group">
			    <label>Price</label>
			    <input type="text" class="form-control"  placeholder="Change Price" name="Price" value="<?php echo $Price?>">
  			</div>

  			<div class="form-group">
			    <label>Image 1</label>
			    <input type="text" class="form-control"  placeholder="Change Image 1" name="image1" value="<?php echo $image1?>">
  			</div>

  			<div class="form-group">
			    <label>Image 2</label>
			    <input type="text" class="form-control"  placeholder="Change Image 2" name="image2" value="<?php echo $image2?>">
  			</div>

  			<div class="form-group">
			    <label>Image 3</label>
			    <input type="text" class="form-control"  placeholder="Change Image 3" name="image3" value="<?php echo $image3?>">
  			</div>

  			<div class="form-group">
			    <label>Image 1-big</label>
			    <input type="text" class="form-control"  placeholder="Change Image 1" name="image1-big" value="<?php echo $image11?>">
  			</div>

  			<div class="form-group">
			    <label>Image 2-big</label>
			    <input type="text" class="form-control"  placeholder="Change Price" name="image2-big" value="<?php echo $image21?>">
  			</div>

  			<div class="form-group">
			    <label>Image 3-big</label>
			    <input type="text" class="form-control"  placeholder="Change Price" name="image3-big" value="<?php echo $image31?>">
  			</div>


  			<br><br>
  			<button type="submit" name="submit" class="btn btn-primary">Update</button>
		</form>

	</div>


</body>