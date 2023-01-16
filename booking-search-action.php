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

	<meta name="description" content="Search">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<title>Cararo – Booking Search</title>

</head>

<body>
	<?php
		include 'header-logged.php';
	?>

	<main class="main">
		<div class="container">
			<button class="btn btn-primary my-5"><a href="booking-search.php" class="text-light">Back to Search Bar</a></button>

			<table class="table table-dark">
  				<thead>
    				<tr>
    					<th scope="col">IdRezervare</th>
		      			<th scope="col">userID</th>
		      			<th scope="col">carID</th>
		      			<th scope="col">Name</th>
		      			<th scope="col">PhoneNum</th>
		      			<th scope="col">DelAdress</th>
		      			<th scope="col">DelDate</th>
		      			<th scope="col">ReturnAdress</th>
		      			<th scope="col">ReturnDate</th>
		      			<th scope="col">Status</th>
		      			<th scope="col">Operations</th>
    				</tr>
 				</thead>
				<tbody>

					<?php

					include 'php/connect.php';

					$Name = $phoneNum ="";

					if (empty($_POST["Name"]) AND empty($_POST["phoneNum"])) {
						$NameErr = "At least one field required!";
						echo $NameErr;
					}

					else {
						$Name = $_POST["Name"];
					}

					if (empty($_POST["phoneNum"])) {
						$sql ="SELECT * FROM rezervari WHERE Name = '$Name' ";
					}

					else {
						$phoneNum = $_POST["phoneNum"];
						$sql = "SELECT * FROM rezervari WHERE Name = '$Name' or phoneNum = '$phoneNum'";
					}

					$result = mysqli_query($conn, $sql);

					if($result){

			  			while ($row=mysqli_fetch_assoc($result)) {

			  				$IdRezervare = $row['IdRezervare'];
			  				$userID = $row['userID'];
			  				$carID = $row['CarId'];
			  				$Name = $row['Name'];
			  				$PhoneNum = $row['phoneNum'];
			  				$DelAddress = $row['DelAddress'];
			  				$DelDate = $row['DelDate'];
			  				$ReturnAddress = $row['ReturnAddress'];
			  				$ReturnDate = $row['ReturnDate'];
			  				$Status = $row['Status'];

			  				echo ' <tr>

			  				<th scope="row">'.$IdRezervare.'</th>
			  				<td>'.$userID.'</td>
			  				<td>'.$carID.'</td>
			  				<td>'.$Name.'</td>
			  				<td>'.$PhoneNum.'</td>
			  				<td>'.$DelAddress.'</td>
			  				<td>'.$DelDate.'</td>
			  				<td>'.$ReturnAddress.'</td>
			  				<td>'.$ReturnDate.'</td>
			  				<td>'.$Status.'</td>
			  				<td>
			  				<button class="btn btn-primary"><a href="booking-update.php?updateid='.$IdRezervare.'" ; class="text-light"> Update </a></button>

		  					<button class="btn btn-danger"><a href="crud/delete-booking.php?deleteid='.$IdRezervare.'"; class="text-light"> Delete </a></button>
		  					</td>';
			  			}
			  		}
				?>
				</tbody>
			</table>
		</div>
	</main>
</body>
</html>