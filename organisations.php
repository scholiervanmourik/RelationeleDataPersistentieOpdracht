<!doctype html>
<html lang="nl">
  <head>
	<?php require_once('template/head.php'); ?>
    <title>Periode 2</title>
  </head>
  <body>
	<?php require_once('template/top.php'); ?>
	<?php
		require_once('Database.php');
		require_once('repositories/OrganisationRepository.php');
		$organisationRepo = new OrganisationRepository($conn);
		$organisations = $organisationRepo->getAll();
	?>
	
	<h3>Organisaties</h3>
	<a href="add-organisation.php">Toevoegen organisatie</a>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th class="col">Naam</th>
				<th class="col">Email</th>
			<tr>
		</thead>
		<?php foreach($organisations as $value): ?>
			<tr>
				<td><?php echo $value['Name']; ?></td>	
				<td><?php echo $value['Email']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	
	<?php require_once('template/bottom.php'); ?>
</body>
</html>