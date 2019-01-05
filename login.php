<!doctype html>
<html lang="nl">
<head>
	<?php require_once('template/head.php'); ?>
	<title>Login</title>
</head>
<body>
	<?php require_once('template/top.php'); ?>
	<?php
		require_once('database.php');
		require_once('user-repository.php');
		$userRepo = new UserRepository($conn);
		
		if (isset($_POST['name']) && isset($_POST['password'])) {
			$user = $userRepo->login($_POST['name'], $_POST['password']);
			if (isset($user)) {
				$_SESSION['user'] = $user;
				header('Location: index.php');
			} else {
				echo 'Incorrecte wachtwoord combinatie';
			}
		}
	?>
	<h3>Login</h3>
	<form action="login.php" method="POST">
		<div class="form-group">
			<input type="text" name="name" placeholder="name">
		</div>
		<div class="form-group">
			<input type="password" name="password" placeholder="wachtwoord">
		</div>
		<div class="form-group">
			<input type="submit">
		</div>
	</form>
	<a href="register.php">Registreren</a>
	<?php require_once('template/bottom.php') ?>
</body>
</html>