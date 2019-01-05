<!doctype html>
<html lang="nl">
<head>
	<?php require_once('template/head.php') ?>
	<title>Registreren</title>
</head>
<body>
	<?php require_once('template/top.php') ?>
	<?php
		require_once('database.php');
		require_once('user-repository.php');
		$userRepo = new UserRepository($conn);
		
		if (isset($_POST['name']) && isset($_POST['password'])) {
			$userRepo->register($_POST['name'], $_POST['password']);
		}
	?>

	<h3>Gebruiker aanmaken</h3>
	<form action="register.php" method="POST">
		<input type="text" name="name" placeholder="name">
		<input type="password" name="password" placeholder="wachtwoord">
		<input type="submit">
	</form>
	<?php require_once('template/bottom.php') ?>
</body>
</html>