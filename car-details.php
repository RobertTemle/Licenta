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

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<title>Cararo – Rent A Car</title>

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
			<section class="row row--grid">
				<?php

				include 'php/connect.php';

				$CarId = $_GET['CarId'];

				$sql = "SELECT * FROM cars WHERE CarId=$CarId";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);

				$Featured = $row['Featured'];
				$Brand = $row['Brand'];
				$Name = $row['CarName'];
				$MakeYear = $row['MakeYear'];
				$Capacity = $row['Capacity'];
				$Fuel = $row['Fuel'];
				$FuelCons = $row['FuelConsumption'];
				$Transmission = $row['Transmission'];
				$Price = $row['Price'];
				$Image1 = $row['image1'];
				$Image2 = $row['image2'];
				$Image3 = $row['image3'];
				$Image1b = $row['image1-big'];
				$Image2b = $row['image2-big'];
				$Image3b = $row['image3-big'];

				echo'
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index-logged.php">Home</a></li>
						<li class="breadcrumb__item"><a href="catalog-logged.php">Explore cars</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">'.$Brand.' '.$Name.'</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1>'.$Brand.' '.$Name.'</h1>
					</div>
				</div>
				<!-- end title -->

				<!-- details -->
				<div class="col-12 col-lg-7">
					<div class="details">
						<div class="splide splide--details details__slider">
							<div class="splide__arrows">
								<button class="splide__arrow splide__arrow--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"></path></svg></button>
								<button class="splide__arrow splide__arrow--next" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path></svg></button>
							</div>

							<div class="splide__track">
								<ul class="splide__list">
									<li class="splide__slide">
										<img src="'.$Image1b.'" alt="">
									</li>
									<li class="splide__slide">
										<img src="'.$Image2b.'" alt="">
									</li>
									<li class="splide__slide">
										<img src="'.$Image3b.'" alt="">
									</li>
								</ul>
							</div>
						</div>

						<ul id="thumbnails" class="thumbnails">
							<li class="thumbnail">
								<img src="'.$Image1.'" alt="">
							</li>
							<li class="thumbnail">
								<img src="'.$Image2.'" alt="">
							</li>
							<li class="thumbnail">
								<img src="'.$Image3.'" alt="">
							</li>
						</ul>
					</div>
				</div>
				<!-- end details -->

				<!-- offer -->
				<div class="col-12 col-lg-5">
					<div class="offer">
						<span class="offer__title">Offer</span>
						<div class="offer__wrap">
							<span class="offer__price">$'.$Price.' '. ' Lei <sub>/ zi</sub></span>
							<a href="#rent-modal" class="offer__rent open-modal"><span>Rent now</span></a>
						</div>

						<span class="offer__title">Descriere mașină</span>
						<div class="offer__list">
							<span class="offer__list-name">Aici se va descrie mașina selectată astfel încât utilizatorul să aivă o vagă idee despre mașină și să asiste utilizitatorii cu cunoștințe limitate despre vehicule și ce înseamnă acestea.</span>
						</div>

						<span class="offer__title">Detalii mașină</span>
						<ul class="offer__details">
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"></path></svg>
								<span>'.$Capacity.' '.'People</span>
							</li>
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.54,6.29,19,4.75,17.59,3.34a1,1,0,0,0-1.42,1.42l1,1-.83,2.49a3,3,0,0,0,.73,3.07l2.95,3V19a1,1,0,0,1-2,0V17a3,3,0,0,0-3-3H14V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h6a3,3,0,0,0,3-3V16h1a1,1,0,0,1,1,1v2a3,3,0,0,0,6,0V9.83A5,5,0,0,0,20.54,6.29ZM12,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12h8Zm0-9H4V5A1,1,0,0,1,5,4h6a1,1,0,0,1,1,1Zm8,1.42L18.46,9.88a1,1,0,0,1-.24-1l.51-1.54.39.4A3,3,0,0,1,20,9.83Z"></path></svg>
								<span>'.$Fuel.'</span>
							</li>
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.088,4.95453c-.00732-.00781-.00952-.01819-.01715-.02582s-.01819-.00995-.02606-.01733a9.97886,9.97886,0,0,0-14.08948,0c-.00787.00738-.01837.00964-.02606.01733s-.00983.018-.01715.02582a10,10,0,1,0,14.1759,0ZM12,20a7.9847,7.9847,0,0,1-6.235-3H9.78027a2.9636,2.9636,0,0,0,4.43946,0h4.01532A7.9847,7.9847,0,0,1,12,20Zm-1-5a1,1,0,1,1,1,1A1.001,1.001,0,0,1,11,15Zm8.41022.00208L19.3999,15H15a2.99507,2.99507,0,0,0-2-2.81573V9a1,1,0,0,0-2,0v3.18427A2.99507,2.99507,0,0,0,9,15H4.6001l-.01032.00208A7.93083,7.93083,0,0,1,4.06946,13H5a1,1,0,0,0,0-2H4.06946A7.95128,7.95128,0,0,1,5.68854,7.10211l.65472.65473A.99989.99989,0,1,0,7.75732,6.34277l-.65466-.65466A7.95231,7.95231,0,0,1,11,4.06946V5a1,1,0,0,0,2,0V4.06946a7.95231,7.95231,0,0,1,3.89734,1.61865l-.65466.65466a.99989.99989,0,1,0,1.41406,1.41407l.65472-.65473A7.95128,7.95128,0,0,1,19.93054,11H19a1,1,0,0,0,0,2h.93054A7.93083,7.93083,0,0,1,19.41022,15.00208Z"></path></svg>
								<span>'.$FuelCons.'</span>
							</li>
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,12a1,1,0,1,0,1,1A1,1,0,0,0,12,12Zm9.71-2.36a0,0,0,0,1,0,0,10,10,0,0,0-19.4,0,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0,4.72,0,0,0,0,1,0,0A10,10,0,0,0,9.61,21.7h0a9.67,9.67,0,0,0,4.7,0h0a10,10,0,0,0,7.31-7.31,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0-4.72ZM12,4a8,8,0,0,1,7.41,5H4.59A8,8,0,0,1,12,4ZM4,12a8.26,8.26,0,0,1,.07-1H6v2H4.07A8.26,8.26,0,0,1,4,12Zm5,7.41A8,8,0,0,1,4.59,15H7a2,2,0,0,1,2,2Zm4,.52A8.26,8.26,0,0,1,12,20a8.26,8.26,0,0,1-1-.07V18h2ZM13.14,16H10.86A4,4,0,0,0,8,13.14V11h8v2.14A4,4,0,0,0,13.14,16ZM15,19.41V17a2,2,0,0,1,2-2h2.41A8,8,0,0,1,15,19.41ZM19.93,13H18V11h1.93A8.26,8.26,0,0,1,20,12,8.26,8.26,0,0,1,19.93,13Z"></path></svg>
								<span>'.$Transmission.'</span>
							</li>
						</ul>
					</div>
				</div>
				<!-- end offer -->
			</section>'

		?>
		</div>

		<div class="container">
			<!-- cars -->
			<section class="row row--grid">
				<!-- title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Try Our Featured Cars</h2>

						<a href="catalog-logged.php" class="main__link">View more <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"/></svg></a>
					</div>
				</div>
				<!-- end title -->

				<!-- car -->
				<?php


				$sql1="SELECT * from cars";
		  		$result=mysqli_query($conn, $sql1);

		  		if($result){

			  		while ($row=mysqli_fetch_assoc($result)) {

			  			$CarId1 = $row['CarId'];
			  			$Featured = $row['Featured'];
			  			$Brand1 = $row['Brand'];
			  			$CarName1 = $row['CarName'];
			  			$MakeYear1 = $row['MakeYear'];
			  			$Capacity1 = $row['Capacity'];
			  			$Fuel1 = $row['Fuel'];
			  			$FuelCons1 = $row['FuelConsumption'];
			  			$Transmission1 = $row['Transmission'];
			  			$Price1 = $row['Price'];
			  			$Image11 = $row['image1'];
			  			$Image21 = $row['image2'];
			  			$Image31 = $row['image3'];

			  			if ($Featured == 1) {

				echo'
				<div class="col-12 col-md-6 col-xl-4">
					<div class="car">
						<div class="splide splide--card car__slider">
							<div class="splide__arrows">
								<button class="splide__arrow splide__arrow--prev" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"></path></svg></button>
								<button class="splide__arrow splide__arrow--next" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path></svg></button>
							</div>

							<div class="splide__track">
								<ul class="splide__list">
									<li class="splide__slide">
										<img src="'.$Image11.'" alt="">
									</li>
									<li class="splide__slide">
										<img src="'.$Image21.'" alt="">
									</li>
									<li class="splide__slide">
										<img src="'.$Image31.'" alt="">
									</li>
								</ul>
							</div>
						</div>
						<div class="car__title">
							<h3 class="car__name"><a href="car-details.php?CarId='.$CarId1.'">'.$Brand1.' '.$CarName1.'</a></h3>
							<span class="car__year">2020</span>
						</div>
						<ul class="car__list">
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"/></svg>
								<span>'.$Capacity1.' '.' People</span>
							</li>
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.54,6.29,19,4.75,17.59,3.34a1,1,0,0,0-1.42,1.42l1,1-.83,2.49a3,3,0,0,0,.73,3.07l2.95,3V19a1,1,0,0,1-2,0V17a3,3,0,0,0-3-3H14V5a3,3,0,0,0-3-3H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3h6a3,3,0,0,0,3-3V16h1a1,1,0,0,1,1,1v2a3,3,0,0,0,6,0V9.83A5,5,0,0,0,20.54,6.29ZM12,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12h8Zm0-9H4V5A1,1,0,0,1,5,4h6a1,1,0,0,1,1,1Zm8,1.42L18.46,9.88a1,1,0,0,1-.24-1l.51-1.54.39.4A3,3,0,0,1,20,9.83Z"/></svg>
								<span>'.$Fuel1.'</span>
							</li>
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.088,4.95453c-.00732-.00781-.00952-.01819-.01715-.02582s-.01819-.00995-.02606-.01733a9.97886,9.97886,0,0,0-14.08948,0c-.00787.00738-.01837.00964-.02606.01733s-.00983.018-.01715.02582a10,10,0,1,0,14.1759,0ZM12,20a7.9847,7.9847,0,0,1-6.235-3H9.78027a2.9636,2.9636,0,0,0,4.43946,0h4.01532A7.9847,7.9847,0,0,1,12,20Zm-1-5a1,1,0,1,1,1,1A1.001,1.001,0,0,1,11,15Zm8.41022.00208L19.3999,15H15a2.99507,2.99507,0,0,0-2-2.81573V9a1,1,0,0,0-2,0v3.18427A2.99507,2.99507,0,0,0,9,15H4.6001l-.01032.00208A7.93083,7.93083,0,0,1,4.06946,13H5a1,1,0,0,0,0-2H4.06946A7.95128,7.95128,0,0,1,5.68854,7.10211l.65472.65473A.99989.99989,0,1,0,7.75732,6.34277l-.65466-.65466A7.95231,7.95231,0,0,1,11,4.06946V5a1,1,0,0,0,2,0V4.06946a7.95231,7.95231,0,0,1,3.89734,1.61865l-.65466.65466a.99989.99989,0,1,0,1.41406,1.41407l.65472-.65473A7.95128,7.95128,0,0,1,19.93054,11H19a1,1,0,0,0,0,2h.93054A7.93083,7.93083,0,0,1,19.41022,15.00208Z"/></svg>
								<span>'.$FuelCons1.'</span>
							</li>
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,12a1,1,0,1,0,1,1A1,1,0,0,0,12,12Zm9.71-2.36a0,0,0,0,1,0,0,10,10,0,0,0-19.4,0,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0,4.72,0,0,0,0,1,0,0A10,10,0,0,0,9.61,21.7h0a9.67,9.67,0,0,0,4.7,0h0a10,10,0,0,0,7.31-7.31,0,0,0,0,1,0,0,9.75,9.75,0,0,0,0-4.72ZM12,4a8,8,0,0,1,7.41,5H4.59A8,8,0,0,1,12,4ZM4,12a8.26,8.26,0,0,1,.07-1H6v2H4.07A8.26,8.26,0,0,1,4,12Zm5,7.41A8,8,0,0,1,4.59,15H7a2,2,0,0,1,2,2Zm4,.52A8.26,8.26,0,0,1,12,20a8.26,8.26,0,0,1-1-.07V18h2ZM13.14,16H10.86A4,4,0,0,0,8,13.14V11h8v2.14A4,4,0,0,0,13.14,16ZM15,19.41V17a2,2,0,0,1,2-2h2.41A8,8,0,0,1,15,19.41ZM19.93,13H18V11h1.93A8.26,8.26,0,0,1,20,12,8.26,8.26,0,0,1,19.93,13Z"/></svg>
								<span>'.$Transmission.'</span>
							</li>
						</ul>
						<div class="car__footer">
							<span class="car__price">$'.$Price1.' '.' Lei <sub>/ day</sub></span>
							<a href="car-details.php?CarId='.$CarId1.'" class="car__more"><span>Rent now</span></a>
						</div>
					</div>
				</div>

				';
				}
			}
		}
				?>
			</section>
		</div>
	</main>
	<!-- end main content -->

	<!-- footer -->
	<?php
		include 'footer-logged.php'
	?>
	<!-- end footer -->

	<!-- rent modal -->
	<div id="rent-modal" class="zoom-anim-dialog mfp-hide modal">
		<button class="modal__close" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/></svg></button>


		<?php

		$CarId = $_GET['CarId'];

		echo'
		<form action="booking-add-user.php?CarId='.$CarId.'" class="modal__form" method="post">
			<h4 class="modal__title">Rent car</h4>

			<div class="sign__group">
				<label for="Name" class="sign__label sign__label--modal">Nume</label>
				<input id="Name" type="text" name="Name" class="sign__input" placeholder="Nume">
			</div>

			<div class="sign__group">
				<label for="Phone" class="sign__label sign__label--modal">Telefon</label>
				<input id="phone" type="text" name="phoneNum" class="sign__input" placeholder="090 123 45 67">
			</div>

			<div class="sign__group">
				<label for="delivery" class="sign__label sign__label--modal">Adresă livrare</label>
				<input id="delivery" type="text" name="DelAddress" class="sign__input" placeholder="221B Baker St, Marylebone, London">
			</div>

			<div class="sign__group">
				<label for="date" class="sign__label sign__label--modal">Dată Livrare</label>
				<input id="date" type="date" name="DelDate" class="sign__input" placeholder="">
			</div>

			<div class="sign__group">
				<label for="pickup" class="sign__label sign__label--modal">Oraș Ridicare</label>
				<input id="pickup" type="text" name="ReturnAddress" class="sign__input" placeholder="221B Baker St, Marylebone, London">
			</div>

			<div class="sign__group">
				<label for="date" class="sign__label sign__label--modal">Dată Ridicare</label>
				<input id="date" type="date" name="ReturnDate" class="sign__input" placeholder="">
			</div>

			<button type="submit" name="submit" class="sign__btn sign__btn--modal">
				<span>Proceed</span>
			</button>
		</form>
		';
		?>
	</div>
	<!-- end rent modal -->

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