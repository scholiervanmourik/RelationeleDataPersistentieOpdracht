<?php
require_once('../../template/head.php');
?>
    <section>
        <article>
            <h3>Registreren als gebruiker</h3>
            <form class="xhr-form" action="../../../actions/register.php" method="post" data-callback="register">
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
        <article>
            <h3>Registreren als organisatie</h3>
            <form class="xhr-form" action="../../../actions/register.php?role=organisation" method="post" data-callback="register">
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
                    <input type="text" name="organisation" placeholder="Organisatie">
                </div>
                <div class="form-group">
                    <button type="submit">Registreren</button>
                </div>
            </form>
        </article>
    </section>
<?php require_once('../../template/bottom.php') ?>