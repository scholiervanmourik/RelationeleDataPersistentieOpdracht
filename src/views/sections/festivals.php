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
            <h3>Festivals</h3>
            <a href="add-organisation.php">Toevoegen organisatie</a>
        </article>
    </section>
    <section>
        <article>
            <h3>Festivals</h3>
            <!-- Fomulier die festivals zoekt-->
            <form action="festivals.php" method="post">
                <input placeholder="Festival" name="filter">
                <input type="submit" value="Zoek">
            </form>
            <br>
            <table class="table table-striped table-light">
                <thead class="thead thead-light">
                <tr>
                    <th>Naam</th>
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
            <p>Totaal: <?= $festivals->num_rows; ?></p>
        </article>
    </section>
<?php require_once('../template/bottom.php'); ?>