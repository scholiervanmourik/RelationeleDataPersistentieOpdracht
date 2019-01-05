<?php if (session_status() == PHP_SESSION_NONE) session_start(); ?>
	<nav>
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
		<?php if (isset($_SESSION['user'])): ?>
			<a href="logout.php" class="contactBtn">Logout</a>
		<?php else: ?>
        <a href="login.php" class="logo">Registreren</a>
        <a class="contactBtn" href="register.php">Login</button>
		<?php endif; ?>
    </nav>
	<section>
