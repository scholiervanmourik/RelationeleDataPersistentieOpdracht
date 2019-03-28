<?php
require_once('../../render.php');
require_once('../../../models/User.php');
require_once('../../../Database.php');
require_once('../../../repositories/UserRepository.php');
require_once('../../../controllers/UserController.php');
require_once('../../template/head.php');
$user = $userController->getUser();
?>
<section>
    <article>
        <h3>Profiel</h3>
    </article>
</section>
<section>
    <article>
        <h3>Profiel</h3>
        <form action="../../../actions/edit-profile.php?email=<?php echo $user->getEmail(); ?>" method="POST" class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">Email</div>
                </div>
                <input type="text" readonly placeholder="Email" name="email" value="<?php echo $user->getEmail(); ?>" class="form-control">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">Voornaam</div>
                </div>
                <input type="text" placeholder="Voornaam" name="firstName" value="<?php echo $user->getFirstName(); ?>" class="form-control">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">Achternaam</div>
                </div>
                <input type="text" placeholder="Achternaam" name="lastName" value="<?php echo $user->getLastName(); ?>" class="form-control">
            </div>
            <div class="input-group">
                <input type="submit" value="Bewerken" class="btn btn-primary">
            </div>
        </form>
    </article>
</section>
<?php require_once('../../template/bottom.php') ?>
