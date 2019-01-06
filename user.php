<!doctype html>
<html lang="nl">
<head>
	<?php require_once('template/head.php') ?>
	<title>Gebruiker</title>
</head>
<body>
	<?php require_once('template/top.php') ?>
	<?php
		require_once('database.php');
		require_once('repositories/user-repository.php');
		$userRepo = new UserRepository($conn);
		if (isset($_GET['email'])) {
			$user = $userRepo->getByEmail($_GET['email']);
		}
	?>
	<h3>Gebruikersnaam: <?php
		if (isset($user)) {
			echo $user['Email'];
		}
	?></h3>
	<?php require_once('template/bottom.php') ?>
</body>
</html>