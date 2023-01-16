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
	<title>Cararo – Car Table</title>
</head>

<body>
	
	<?php

	include 'header-logged.php';

	if ($userType == 2) {
				redirect("index-logged.php?nicetry");
	}

	?>

	<main class="main">

		<div class="container">

			<button class="btn btn-primary my-5"><a href="car-add.php" class="text-light"> Add Car </a></button>
			<button class="btn btn-primary my-5"><a href="car-search.php" class="text-light"> Search Car </a></button>

			<table class="table table-dark">
		  		<thead>
		    		<tr>
		      			<th scope="col">carId</th>
		      			<th scope="col">Featured</th>
		      			<th scope="col">Brand</th>
		      			<th scope="col">CarName</th>
		      			<th scope="col">Make Year</th>
		      			<th scope="col">Capacity</th>
		      			<th scope="col">Fuel</th>     
		      			<th scope="col">FuelCons</th>
		      			<th scope="col">Transmission</th>
		      			<th scope="col">Price/Day</th>
		    		</tr>
		  		</thead>
		  		
		  		<tbody>

		  			<?php

		  			include 'php/connect.php';

		  			$sql="SELECT * from cars";
		  			$result=mysqli_query($conn, $sql);

		  			if($result){

			  			while ($row=mysqli_fetch_assoc($result)) {

			  				$CarId = $row['CarId'];
			  				$Featured = $row['Featured'];
			  				$Brand = $row['Brand'];
			  				$CarName = $row['CarName'];
			  				$MakeYear = $row['MakeYear'];
			  				$Capacity = $row['Capacity'];
			  				$Fuel = $row['Fuel'];
			  				$FuelCons = $row['FuelConsumption'];
			  				$Transmission = $row['Transmission'];
			  				$Price = $row['Price'];

			  				echo ' <tr>

			  				<th scope="row">'.$CarId.'</th>
			  				<td>'.$Featured.'</td>
			  				<td>'.$Brand.'</td>
			  				<td>'.$CarName.'</td>
			  				<td>'.$MakeYear.'</td>
			  				<td>'.$Capacity.'</td>
			  				<td>'.$Fuel.'</td>
			  				<td>'.$FuelCons.'</td>
			  				<td>'.$Transmission.'</td>
			  				<td>'.$Price.'</td>
			  				<td>
			  				<button class="btn btn-primary"><a href="car-update.php?updateid='.$CarId.'" ; class="text-light"> Update </a></button>

		  					<button class="btn btn-danger"><a href="crud/delete-car.php?deleteid='.$CarId.'"; class="text-light"> Delete </a></button>
		  					</td>';
			  			}
			  		}
		  			?>
		  			
		  		</tbody>
		  	</table>
		</div>
	</main>
</body>