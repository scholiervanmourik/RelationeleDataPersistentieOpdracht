<?php
require_once('../../render.php');
require_once('../../../Database.php');
require_once('../../../repositories/UserRepository.php');
require_once('../../../controllers/UserController.php');
require_once('../../template/head.php');
$controller = new UserController();

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['screenName'])) {
    $controller->register($_POST['email'], $_POST['password'], $_POST['screenName'], $_POST['firstName'], $_POST['lastName']);
}
?>
    <section>
        <article>
            <h3>Registreren</h3>
            <form action="register.php" method="POST">
                <div class="form-group">
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Wachtwoord">
                </div>
                <div class="form-group">
                    <input type="text" name="screenName" placeholder="Gebruikersnaam">
                </div>
                <div class="form-group">
                    <input type="text" name="firstName" placeholder="Voornaam">
                </div>
                <div class="form-group">
                    <input type="text" name="lastName" placeholder="Achternaam">
                </div>
                <div class="form-group">
                    <button type="submit">Registreren</button>
                </div>
            </form>
        </article>
    </section>
<?php require_once('../../template/bottom.php') ?>