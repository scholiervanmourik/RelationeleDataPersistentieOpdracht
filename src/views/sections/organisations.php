<?php
use smd\controllers\OrganisationController;
use smd\controllers\AdminController;


require_once('../template/head.php');
# retreive all data for the organisations and store them 
$controller = new OrganisationController();
$organisations = $controller->getAll();

$adminController = new AdminController();
$csv = $adminController->readCSVContent('organisations');

?>
    <section>
        <article>
            <h3><?= $csv['organisations'] ?></h3>
            <p><?= $csv['total'] ?> <?= $organisations->num_rows ?></p>
            <table class="table table-striped table-light">
                <thead class="thead-light">
                <tr>
                    <th><?= $csv['name'] ?></th>
                    <th><?= $csv['email'] ?></th>
                    <th></th>
                <tr>
                </thead>
                <!-- print the SQL query as an object you retreive -->
                <?php while ($organisation = $organisations->fetch_object('smd\\models\\Organisation')): ?>
                    <tr>
                        <td><?= $organisation->getName() ?></td>
                        <td><?= $organisation->getEmail() ?></td>
                        <td>
                            <a href="/src/actions/remove-organisation.php?id=<?php echo $organisation->getOrganisationID(); ?>"><i
                                        class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php endwhile; ?>
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