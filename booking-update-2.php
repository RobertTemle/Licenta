<?php
include 'php/connect.php';

$IdRezervare = $_GET['updateid'];

$sql = "SELECT * FROM rezervari WHERE IdRezervare=$IdRezervare";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$Name = $row['Name'];
$phoneNum = $row['phoneNum'];
$DelAddress = $row['DelAddress'];
$DelDate = $row['DelDate'];
$ReturnAddress = $row['ReturnAddress'];
$ReturnDate = $row['ReturnDate'];

if (isset($_POST['submit'])) {

	$Name = $_POST['Name'];
	$phoneNum = $_POST['phoneNum'];
	$DelAddress = $_POST['DelAddress'];
	$DelDate = $_POST['DelDate'];
	$ReturnAddress = $_POST['ReturnAddress'];
	$ReturnDate = $_POST['ReturnDate'];

	$sql = "UPDATE rezervari set IdRezervare = $IdRezervare, Name = '$Name', phoneNum = '$phoneNum', DelAddress = '$DelAddress', DelDate = '$DelDate', ReturnAddress = '$ReturnAddress', ReturnDate = '$ReturnDate' WHERE IdRezervare = $IdRezervare ";

	$result = mysqli_query($conn, $sql);

	if ($result) {

		header('location:account.php');
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
	<title>Cararo – Users</title>

</head>

<body>
	<?php

	include 'header-logged.php'; 

	?>

	<div class="container my-5">

		<br><br><br>

		<form method="post">

  			<div class="form-group">
			    <label>Name</label>
			    <input type="text" class="form-control"  placeholder="Enter changed Name" name="Name" value="<?php echo $Name?>">
  			</div>

  			<div class="form-group">
			    <label>Phone Number</label>
			    <input type="text" class="form-control"  placeholder="Change Contact Number" name="phoneNum" value="<?php echo $phoneNum?>">
  			</div>

  			<div class="form-group">
			    <label>Delivery Address</label>
			    <input type="text" class="form-control"  placeholder="Change Delivery Address" name="DelAddress" value="<?php echo $DelAddress?>">
  			</div>

  			<div class="form-group">
			    <label>Delivery Date</label>
			    <input type="date" class="form-control"  placeholder="Change Delivery Date" name="DelDate" value="<?php echo $DelDate?>">
  			</div>

  			<div class="form-group">
			    <label>Return Address</label>
			    <input type="text" class="form-control"  placeholder="Change PickUp Adress" name="ReturnAddress" value="<?php echo $ReturnAddress?>">
  			</div>

  			<div class="form-group">
			    <label>Return Date</label>
			    <input type="date" class="form-control"  placeholder="Change Pick Up Date" name="ReturnDate" value="<?php echo $ReturnDate?>">
  			</div>

  			<br><br>
  			<button type="submit" name="submit" class="btn btn-primary">Update</button>
		</form>

	</div>


</body>