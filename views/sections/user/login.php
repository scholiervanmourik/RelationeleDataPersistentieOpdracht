<?php
require_once('../../render.php');
require_once('../../../models/User.php');
require_once('../../../Database.php');
require_once('../../../repositories/UserRepository.php');
require_once('../../../controllers/UserController.php');
require_once('../../template/head.php');
$controller = new UserController();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $controller->login($_POST['email'], $_POST['password']);
}
?>
    <section>
        <article>
            <h3>Login</h3>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Wachtwoord">
                </div>
                <div class="form-group">
                    <button type="submit">Login</button>
                    <a href="/actions/register.php">Registreren</a>
                </div>
            </form>
        </article>
    </section>
<?php require_once('../../template/bottom.php') ?>