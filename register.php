<!doctype html>
<html lang="nl">
<head>
	<?php require_once('template/head.php') ?>
	<title>Registreren</title>
</head>
<body>
	<?php require_once('template/top.php') ?>
	<?php
		require_once('Database.php');
		require_once('repositories/UserRepository.php');
		$userRepo = new UserRepository($conn);

		if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['screenName']) && isset($_POST['firstName']) && isset($_POST['lastName'])) {
			$userRepo->register($_POST['email'], $_POST['password'], $_POST['screenName'], $_POST['firstName'], $_POST['lastName']);
			header('Location: login.php');
		}
	?>

	<h3>Registreren</h3>
	<form action="register.php" method="POST">
		<input type="text" name="email" placeholder="Email">
		<input type="password" name="password" placeholder="Wachtwoord">
		<input type="text" name="screenName" placeholder="Gebruikersnaam">
		<input type="text" name="firstName" placeholder="Voornaam">
		<input type="text" name="lastName" placeholder="Achternaam">
		<input type="submit">
	</form>
	<?php require_once('template/bottom.php') ?>
</body>
</html>