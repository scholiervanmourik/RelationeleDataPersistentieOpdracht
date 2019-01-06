<!doctype html>
<html lang="nl">
  <head>
	<?php require_once('template/head.php'); ?>
    <title>Periode 2</title>
  </head>
  <body>
	<?php require_once('template/top.php'); ?>
	<?php
		require_once('database.php');
		require_once('organisation-repository.php');
		$organisationRepo = new OrganisationRepository($conn);
		$organisations = $organisationRepo->getAll();
	?>
	
	<h3>Organisaties</h3>
	<table>
		<thead>
			<tr>
				<th>Naam</th>
				<th>Email</th>
			<tr>
		</thead>
		<?php foreach($organisations as $value): ?>
			<tr>
				<td><?php echo $value['Name']; ?></td>	
				<td><?php echo $value['Email']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
		
	<a href="add-organisation.php">Toevoegen organisatie</a>
	
	<?php require_once('template/bottom.php'); ?>
</body>
</html>