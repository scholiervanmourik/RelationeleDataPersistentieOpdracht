<?php
require_once('../../template/head.php');
?>
    <section>
        <article>
            <h3>Registreren</h3>
            <form action="../../../actions/register.php" method="POST">
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