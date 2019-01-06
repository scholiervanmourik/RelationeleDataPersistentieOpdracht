<?php 
	if (session_status() == PHP_SESSION_NONE) session_start();
	error_log('Error: ', 3, 'errors.log');
?>
<nav class="navbar navbar-expand-lg navbar-light">
	<button class="burgerBtn" onclick="openClose()" id="toggle">
		<div class="one"></div>
		<div class="two"></div>
		<div class="three"></div>
	</button>
	<ul id="overlay" class="Closed">
		<?php if (isset($_SESSION['user'])): ?>
			<li class="nav-item">
				<a href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a href="organisations.php">Organisaties</a>
			</li>
		<?php endif; ?>
	</ul>
	<div class="float-right">
		<?php if (isset($_SESSION['user'])): ?>
			<a href="logout.php" class="contactBtn">Logout</a>
		<?php else: ?>
			<a href="register.php" class="logo">Registreren</a>
			<a href="login.php" class="contactBtn">Login</a>
		<?php endif; ?>
	</div>
</nav>
<div class="container mt-5">
