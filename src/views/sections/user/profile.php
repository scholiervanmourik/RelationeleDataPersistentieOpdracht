<?php
require_once '../../template/head.php';
$user = $userController->getUser();
?>
<section>
    <article>
        <img src="/src/public/img/<?= $user->getImage() ?>">
        <h1>Welkom terug <?php echo $user->getFirstName(); ?>!</h1><br>
        <h3>Profiel</h3>
        <form action="../../../actions/edit-profile.php?email=<?php echo $user->getEmail(); ?>" method="POST" enctype="multipart/form-data"
              class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">Email</div>
                </div>
                <input type="text" readonly placeholder="Email" name="email" value="<?php echo $user->getEmail(); ?>"
                       class="form-control">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">Voornaam</div>
                </div>
                <input type="text" placeholder="Voornaam" name="firstName" value="<?php echo $user->getFirstName(); ?>"
                       class="form-control">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">Achternaam</div>
                </div>
                <input type="text" placeholder="Achternaam" name="lastName" value="<?php echo $user->getLastName(); ?>"
                       class="form-control">
            </div>
            <div class="input-group">
                <input type="file" accept="image/*" name="imageUpload">
            </div>
            <div class="input-group">
                <button type="submit" style="background:transparent; border:0; outline:none; padding:0;">
                    <a class="btn">
                        <div class="btn-text">Bewerken</div>
                        <div class="button"></div>
                    </a>
                </button>
            </div>
        </form>
    </article>
</section>
<?php require_once('../../template/bottom.php') ?>
