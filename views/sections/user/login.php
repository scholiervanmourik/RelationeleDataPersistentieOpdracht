<?php
require_once('../../render.php');
require_once('../../../models/User.php');
require_once('../../../Database.php');
require_once('../../../repositories/UserRepository.php');
require_once('../../../controllers/UserController.php');
require_once('../../template/head.php');
?>
    <section>
        <article>
            <h3>Login</h3>
            <form action="../../../actions/login.php" method="POST">
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