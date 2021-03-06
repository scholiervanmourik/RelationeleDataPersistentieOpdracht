<?php
require_once('../../template/head.php');
?>
<!--
    This page contains two forms 

    one to register a user 
    email, password, screen name, first name, last name

    and one to register a organisation 
    email, password, screen name, first name, last name, organisation name
-->
    <section id="Registreren">
        <article>
            <h3>Registreren als gebruiker</h3>
            <form class="xhr-form" action="../../../actions/register.php" method="post" data-callback="register">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="password" name="password" placeholder="Wachtwoord" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                    <input type="text" name="screenName" placeholder="Gebruikersnaam" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="firstName" placeholder="Voornaam" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                <div class="input-group">
                        <input type="text" name="lastName" placeholder="Achternaam" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" style="background:transparent; border:0; outline:none; padding:0;">
                        <a class="btn">
                            <div class="btn-text">Registreren</div>
                            <div class="button"></div>
                        </a>
                    </button>
                </div>
            </form>
        </article>
        <article>
            <h3>Registreren als organisatie</h3>
            <form class="xhr-form" action="../../../actions/register.php?role=organisation" method="post" data-callback="register">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Wachtwoord" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="screenName" placeholder="Gebruikersnaam" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="firstName" placeholder="Voornaam" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="lastName" placeholder="Achternaam" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="organisation" placeholder="Organisatie" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" style="background:transparent; border:0; outline:none; padding:0;">
                        <a class="btn">
                            <div class="btn-text">Registreren</div>
                            <div class="button"></div>
                        </a>
                    </button>
                </div>
            </form>
        </article>
    </section>
<?php require_once('../../template/bottom.php') ?>