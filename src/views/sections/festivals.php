<?php

use smd\controllers\AdminController;
use smd\controllers\FestivalController;

require_once('../template/head.php');

$controller = new FestivalController();
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
                        <div class="btn-text">Zoek</div>
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
                <?php while ($festival = $festivals->fetch_object('smd\\models\\Festival')): ?>
                    <tr>
                        <td><?= $festival->getName(); ?></td>
                        <td>
                            <a href="../../actions/remove-festival.php?id=<?php echo $festival->getFestivalID(); ?>"><i
                                        class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
            <?php if ($userController->isLoggedIn() && $userController->getUser()->getRole() === 'admin'): ?>
                <a href="add-organisation.php"><?= $csv['addOrganisation'] ?></a>
            <?php endif; ?>
        </article>
    </section>
<?php require_once('../template/bottom.php'); ?>