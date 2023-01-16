<?php
include 'php/connect.php';

$userId = $_GET['updateid'];

$sql = "SELECT * FROM users WHERE userId=$userId";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$Name = $row['Name'];
$Username = $row['Username'];
$Email = $row['Email'];

if (isset($_POST['submit'])) {

	$Name = $_POST['Name'];
	$Username = $_POST['Username'];
	$Email = $_POST['Email'];

	$sql = "UPDATE users set userId = $userId, Name = '$Name', Username = '$Username', Email = '$Email' WHERE UserId = $userId ";

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
    			<input type="text" class="form-control"  placeholder="Enter changed name" name="Name"  value="<?php echo $Name?>">
  			</div>

  			<div class="form-group">
			    <label>Username</label>
			    <input type="text" class="form-control"  placeholder="Enter changed username" name="Username" value="<?php echo $Username?>">
  			</div>

  			<div class="form-group">
			    <label>Email</label>
			    <input type="text" class="form-control"  placeholder="Change User Email" name="Email" value="<?php echo $Email?>">
  			</div>

  			<br><br>
  			<button type="submit" name="submit" class="btn btn-primary">Update</button>
		</form>

	</div>


</body>