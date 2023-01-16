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

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="Account">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<title>Cararo – Account</title>

</head>
<body>
	<!-- header -->
	<?php
		include 'header-logged.php'
	?>
	<!-- end header -->

	<!-- main content -->
	<main class="main">
		<div class="container">
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index.html">Acasă</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Contul Meu</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1>Contul Meu</h1>
					</div>
				</div>
				<!-- end title -->
			</div>

			<div class="row row--grid">
				<div class="col-12">
					<div class="profile">
						<!-- tabs nav -->
						<ul class="nav nav-tabs profile__tabs" id="profile__tabs" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Rezervările mele</a>
							</li>

							<li class="nav-item" role="presentation">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Detalii Cont</a>
							</li>

						</ul>
						<!-- end tabs nav -->
					</div>

					<!-- content tabs -->
					<div class="tab-content">

						<!-- Reservations -->

						<div class="tab-pane fade show active" id="tab-1" role="tabpanel">
							<div class="row row--grid">
								<div class="col-12">
									<!-- cart -->
									<div class="cart">
										<div class="cart__table-wrap">
											<div class="cart__table-scroll">
												<table class="cart__table">
													<thead>
														<tr>
															<th>Mașină</th>
															<th></th>
															<th>Nume</th>
															<th>Număr Contact</th>
															<th>Adresă Livrare</th>
															<th>Dată Livrare</th>
															<th>Oraș Ridicare</th>
															<th>Dată Returnare</th>
															<th>Preț / zi</th>
															<th></th>
															<th></th>
														</tr>
													</thead>

													<tbody>
														<?php

														$_SESSION["userid"];
														$userid = $_SESSION["userid"];

											  			$sql="SELECT * from rezervari WHERE userID = $userid";
											  			$result=mysqli_query($conn, $sql);

											  			if($result){
															while($row=mysqli_fetch_assoc($result)){
																$IdRezervare = $row['IdRezervare'];
																$CarId = $row['CarId'];
																$Name= $row['Name'];
																$phoneNum = $row['phoneNum'];
																$DelAddress = $row['DelAddress'];
																$DelDate = $row['DelDate'];
																$ReturnAddress = $row['ReturnAddress'];
																$ReturnDate = $row['ReturnDate'];

																$sql1="SELECT Brand, CarName, Price, image1 from cars WHERE carId = $CarId";
																$result1=mysqli_query($conn, $sql1);

																while($row=mysqli_fetch_assoc($result1)){
																	$Brand = $row['Brand'];
																	$CarName= $row['CarName'];
																	$Price= $row['Price'];
																	$image1= $row['image1'];

																}

		  												echo'
														<tr>
															<td>
																<div class="cart__img">
																	<img src="'.$image1.'" alt="">
																</div>
															</td>
															<td><a href="car-details.php?CarId='.$CarId.'">'.$Brand.' '.$CarName.'</a></td>
															<td> '.$Name.'</td>
															<td>'.$phoneNum.'</td>
															<td>'.$DelAddress.'</td>
															<td>'.$DelDate.'</td>
															<td>'.$ReturnAddress.'</td>
															<td>'.$ReturnDate.'</td>
															<td>'.$Price.'lei / zi </td>
															<td><button class="cart__delete" type="button" aria-label="Delete"><a href="crud/delete-booking-2.php?deleteid='.$IdRezervare.'";><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg></a></button></td>
															<td><a href="booking-update-2.php?updateid='.$IdRezervare.'">
																<img src="img/edit.svg" alt="" style="width:20px;height:30px;">
															</a></td>
														</tr>
														';
													}
												}
														?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!-- end cart -->
								</div>
							</div>
						</div>

						<!-- Profile -->
						<div class="tab-pane fade" id="tab-3" role="tabpanel">
							<div class="row row--grid">
								<!-- details form -->


								<div class="col-12 col-lg-6">
									<form action="#" class="sign__form sign__form--profile">
										<div class="row">
											<div class="col-12">
												<h4 class="sign__title">Detalii Cont</h4>
											</div>

											<?php

											$_SESSION["userid"];
											$userid = $_SESSION["userid"];

											$sql="SELECT * from users WHERE userID = $userid";
											$result=mysqli_query($conn, $sql);

											if($result){
												while($row=mysqli_fetch_assoc($result)){
													$Name = $row['Name'];
													$Username= $row['Username'];
													$Email = $row['Email'];


											echo'

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
													<label class="sign__label" for="username">Username</label>
													<input id="username" type="text" name="username" class="sign__input" value="'.$Username.'">
												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
													<label class="sign__label" for="email">E-mail</label>
													<input id="email" type="text" name="email" class="sign__input" value="'.$Email.'">
												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
													<label class="sign__label" for="firstname">Nume</label>
													<input id="firstname" type="text" name="Name" class="sign__input" value="'.$Name.'">
												</div>
											</div>

											<div class="col-12 col-md-6 col-lg-12 col-xl-6">
												<div class="sign__group">
												<label class="sign__label" for="firstname">Editează Detalii</label>
												<button class="sign__input">
													<a href="user-update-2.php?updateid='.$userid.'">
														Click aici!
													</a>
												<button>
													
												</div>
											</div>


											';
										}
									}

											?>

										</div>
									</form>
								</div>
								<!-- end details form -->

							</div>
						</div>
					</div>
					<!-- end content tabs -->
				</div>
			</div>
		</div>
	</main>
	<!-- end main content -->

	<!-- footer -->
	<?php
		include 'footer-logged.php'
	?>
	<!-- end footer -->

	<!-- JS -->
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/splide.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/main.js"></script>
</body>
</html>