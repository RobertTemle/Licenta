<!DOCTYPE html>
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

	<meta name="description" content="Sign Up">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<title>Cararo – Sign Up</title>

</head>
<body>
	<!-- main content -->
	<main class="main main--sign" data-bg="img/bg/bg.png">
		<!-- registration form -->
		<div class="sign">
			<div class="sign__content">
				<form action="php/signup.inc.php" class="sign__form" method="post">
					<a href="index.php" class="sign__logo">
						<img src="img/logo3.svg" alt="">
					</a>

					<div class="sign__group">
						<input type="text" class="sign__input" name="name" placeholder="Nume">
					</div>

					<div class="sign__group">
						<input type="text" class="sign__input" name="email" placeholder="Email">
					</div>

					<div class="sign__group">
						<input type="text" class="sign__input" name="username" placeholder="Username">
					</div>

					<div class="sign__group">
						<input type="password" class="sign__input" name="pwd" placeholder="Parola">
					</div>

					<div class="sign__group">
						<input type="password" class="sign__input" name="pwdrepeat" placeholder="Repetati Parola">
					</div>

					<div class="sign__group sign__group--checkbox">
						<input id="remember" name="remember" type="checkbox">
						<label for="remember">Sunt de acord cu <a href="privacy1.php">Politica de Confidențialitate.</a></label>
					</div>
					
					<button class="sign__btn" type="submit" name="submit"><span>Sign up</span></button>
					<span class="sign__text">Aveți deja un cont? <a href="signin.php">Loghează-te!</a></span>

					<br>
					<br>

				<?php
				if (isset($_GET["error"])) {
					if ($_GET["error"] == "emptyinput") {
						echo "<p style=font-size:160%;>Fill In All Fields!</p>";
					}

					else if ($_GET["error"] == "invalidusername") {
						echo "<p style=font-size:160%;>Username Is Invalid!</p>";
					}

					else if ($_GET["error"] == "invalidemail") {
						echo "<p style=font-size:160%;>Email Is Invalid!</p>";
					}

					else if ($_GET["error"] == "pwdmatch") {
						echo "<p style=font-size:160%;>Passwords Don't Match!</p>";
					}

					else if ($_GET["error"] == "usernametaken") {
						echo "<p style=font-size:160%;>Username Already Taken!</p>";
					}

					else if ($_GET["error"] == "stmtfailed") {
						echo "<p style=font-size:160%;>Something went wrong. Try Again!</p>";
					}

					else if ($_GET["error"] == "none") {
						echo "<p style=font-size:160%;>You have been registered!</p>";
					}
				}
				?>

				</form>
			</div>
		</div>
		<!-- end registration form -->
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