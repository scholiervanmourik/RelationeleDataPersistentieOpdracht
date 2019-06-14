<?php

use smd\controllers\AdminController;
use smd\controllers\FestivalController;
use smd\Database;
use smd\repositories\FestivalRepository;

require_once('../template/head.php');

$controller = new FestivalController(new FestivalRepository(Database::getConnection()));
$adminController = new AdminController();

$csv = $adminController->readCSVContent('festivals');
if (isset($_POST['filter'])) {
    $result = $controller->findByName($_POST['filter']);
    if ($result['success']) {
        $festivals = $result['result'];
    }
}

if (!isset($festivals)) {
    $festivals = $controller->getAll();
}
?>
    <section>
        <article>
            <h3><?= $csv['festivals'] ?></h3>
            <p><?= $csv['total'] ?>: <?= $festivals->num_rows; ?></p>
            <!-- Fomulier die festivals zoekt-->
            <form action="festivals.php" method="post">
                <input placeholder="Festival" name="filter" class="form-control">
                <button type="submit" style="background:transparent; border:0; outline:none; padding:0;">
                    <a class="btn">
                        <div class="btn-text"><?= $csv['search'] ?></div>
                        <div class="button"></div>
                    </a>
                </button>
            </form>
            <br>
            <table class="table table-striped table-light">
                <thead class="thead thead-light">
                <tr>
                    <th><?= $csv['name'] ?></th>
                    <th></th>
                <tr>
                </thead>
                <tbody>
                <!-- print the SQL query as an object you retreive -->
                <?php while ($festival = $festivals->fetch_object('smd\\models\\Festival')): ?>
                    <tr>
                        <td><?= $festival->getName(); ?></td>
                        <td>
                            <a href="../../actions/remove-festival.php?id=<?= $festival->getFestivalID() ?>"><i
                                        class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
            <!-- show if an user is logged in and he hase admin status  -->
            <?php if ($userController->isLoggedIn() && $userController->getUser()->getRole() === 'admin'): ?>
                <a href="add-organisation.php" class="btn" target="_self" style="width: 400px !important; text-align: start;">
                    <div class="btn-text"><?= $csv['addOrganisation'] ?></div>
                    <div class="button"></div>
                </a>
            <?php endif; ?>
        </article>
    </section>
<?php require_once('../template/bottom.php'); ?>