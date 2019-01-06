<!doctype html>
<html lang="nl">
  <head>
	<?php require_once('template/head.php'); ?>
    <title>Festivals</title>
  </head>
  <body>
	<?php require_once('template/top.php'); ?>
	<?php
		require_once('database.php');
		require_once('repositories/festival-repository.php');
		$festivalRepo = new FestivalRepository($conn);
		$festivals = $festivalRepo->getAll();
	?>
	
	<h3>Festivals</h3>
	<button href="add-organisation.php">Toevoegen organisatie</button>
	
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th class="col">Naam</th>
			<tr>
		</thead>
		<?php foreach($festivals as $value): ?>
			<tr>
				<td><?php echo $value['Name']; ?></td>	
			</tr>
		<?php endforeach; ?>
	</table>
		
	<?php require_once('template/bottom.php'); ?>
</body>
</html>