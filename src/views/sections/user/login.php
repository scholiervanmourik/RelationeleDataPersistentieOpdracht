<?php
require_once('../../template/head.php');
?>
    <section>
        <article>
            <h3>Login</h3>
            <form class="xhr-form" action="../../../actions/login.php" data-callback="login" method="POST">
                <div class="form-group">   
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Email</div>
                        </div>
                        <input type="text" placeholder="Email" name="email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Password</div>
                        </div>
                        <input type="password" name="password" placeholder="Wachtwoord" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" style="background:transparent; border:0; outline:none; padding:0;">
                        <a class="btn">
                            <div class="btn-text">Login</div>
                            <div class="button"></div>
                        </a>
                    </button>

                    <a href="register.php" class="btn" target="_self">
                        <div class="btn-text">Registreren</div>
                        <div class="button"></div>
                    </a>
                </div>
            </form>
        </article>
    </section>
<?php require_once('../../template/bottom.php') ?>