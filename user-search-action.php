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
	<title>Cararo – User Search</title>

</head>

<body>
	<?php
		include 'header-logged.php';
	?>

	<main class="main">
		<div class="container">
			<button class="btn btn-primary my-5"><a href="user-search.php" class="text-light">Back to Search Bar</a></button>

			<table class="table table-dark">
  				<thead>
    				<tr>
    					<th scope="col">userId</th>
		      			<th scope="col">Name</th>
		      			<th scope="col">Username</th>
		      			<th scope="col">Hashed Password</th>
		      			<th scope="col">userType</th>
		      			<th scope="col">Email</th>     
		      			<th scope="col">Operations</th>
    				</tr>
 				</thead>
				<tbody>

					<?php

					include 'php/connect.php';

					$Name = $Email ="";

					if (empty($_POST["Name"]) AND empty($_POST["Email"])) {
						$NameErr = "At least one field required!";
						echo $NameErr;
					}

					else {
						$Name = $_POST["Name"];
					}

					if (empty($_POST["Email"])) {
						$sql ="SELECT * FROM users WHERE Name = '$Name' ";
					}

					else {
						$Email = $_POST["Email"];
						$sql = "SELECT * FROM users WHERE Name = '$Name' or Email = '$Email'";
					}

					$result = mysqli_query($conn, $sql);

		  			if($result){

				  		while ($row=mysqli_fetch_assoc($result)) {

				  			$userId = $row['userId'];
				  			$Name = $row['Name'];
				  			$Username = $row['Username'];
				  			$Password = $row['Password'];
				  			$Type = $row['UserType'];
				  			$Email = $row['Email'];

				  			echo ' <tr>

				  			<th scope="row">'.$userId.'</th>
				  			<td>'.$Name.'</td>
				  			<td>'.$Username.'</td>
				  			<td>'.$Password.'</td>
				  			<td>'.$Type.'</td>
				  			<td>'.$Email.'</td>
				  			<td>
				  			<button class="btn btn-primary"><a href="user-update.php?updateid='.$userId.'" ; class="text-light"> Update </a></button>

			  				<button class="btn btn-danger"><a href="crud/delete-user.php?deleteid='.$userId.'"; class="text-light"> Delete </a></button>
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