<?php
require_once('../../template/head.php');
?>
    <section>
        <article>
            <h3>Login</h3>
            <form class="xhr-form" action="../../../actions/login.php" method="POST">
                <div class="form-group">
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Wachtwoord">
                </div>
                <div class="form-group">
                    <button type="submit">Login</button>
                    <a href="register.php">Registreren</a>
                </div>
            </form>
        </article>
    </section>
<?php require_once('../../template/bottom.php') ?>