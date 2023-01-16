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

	<meta name="description" content="Sign In">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<title>Cararo – Sign In</title>

</head>
<body>

	<!-- main content -->
	<main class="main main--sign" data-bg="img/bg/bg.png">
		<!-- sign in -->
		<div class="sign">
			<div class="sign__content">
				<!-- authorization form -->
				<form action="php/signin.inc.php" class="sign__form" method="post">
					<a href="index.php" class="sign__logo">
						<img src="img/logo3.svg" alt="">
					</a>

					<div class="sign__group">
						<input type="text" class="sign__input" name ="username" placeholder="Username sau Email">
					</div>

					<div class="sign__group">
						<input type="password" class="sign__input" name ="pwd" placeholder="Parola">
					</div>

					<div class="sign__group sign__group--checkbox">
						<input id="remember" name="remember" type="checkbox">
						<label for="remember">Remember Me</label>
					</div>
					
					<button class="sign__btn" type="submit" name="submit"><span>Sign in</span></button>

					<span class="sign__text">Nu aveți cont? <a href="signup.php">Înscrie-te aici!</a></span>

					<span class="sign__text"><a href="forgot.php">V-ați uitat parola?</a></span>

					<br>
					<br>

					<?php
					if (isset($_GET["error"])) {
						if ($_GET["error"] == "emptyinput") {
							echo "<p style=font-size:160%;> Fill In All Fields! </p>";
						}

						else if ($_GET["error"] == "wrongsignin") {
							echo "<p style=font-size:140%;> Wrong Username or Password! </p>";
						}
					}
					?>
				</form>
				<!-- end authorization form -->
			</div>
		</div>
		<!-- end sign in -->
	</main>
	<!-- end main content -->

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