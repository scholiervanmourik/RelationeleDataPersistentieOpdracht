<!doctype html>
<html lang="nl">
<head>
	<?php require_once('template/head.php'); ?>
	<title>Organisatie toevoegen</title>
</head>
<body>
	<?php require_once('template/top.php'); ?>
	<?php
		require_once('database.php');
		require_once('repositories/organisation-repository.php');
		$organisationRepo = new OrganisationRepository($conn);
		if (isset($_POST['name'])) {
			$organisationRepo->insert($_POST['name']);
			header('Location: organisations.php');
		}
	?>

	<h3>Organisatie aanmaken</h3>
	<form action="add-organisation.php" method="POST">
		<input type="text" name="name" placeholder="name">
		<input type="submit">
	</form>
	<?php require_once('template/bottom.php') ?>
</body>
</html>