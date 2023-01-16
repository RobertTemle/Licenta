<?php

if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$username = $_POST['username'];
	$pwd = $_POST['pwd'];
	$pwdrepeat = $_POST['pwdrepeat'];
	$email = $_POST['email'];

	require_once 'connect.php';
	require_once 'functions.php';

	if (emptyInputSignup($name, $username, $pwd, $pwdrepeat, $email) !== false) {
		header("location: ../signup.php?error=emptyinput");
		exit();
	}

	if (invalidUsername($username) !== false) {
		header("location: ../signup.php?error=invalidusername");
		exit();
	}

	if (invalidEmail($email) !== false) {
		header("location: ../signup.php?error=invalidemail");
		exit();
	}

	if (pwdMatch($pwd, $pwdrepeat) !== false) {
		header("location: ../signup.php?error=pwdmatch");
		exit();
	}

	if (usernameExists($conn, $username, $email) !== false) {
		header("location: ../signup.php?error=usernametaken");
		exit();
	}

	createUser($conn, $name, $username, $pwd, $email);
}

else {
		header("location: ../signup.php");
		exit();
}