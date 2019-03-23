<?php
require_once('../../Database.php');
require_once('../../models/User.php');
require_once('../../models/Festival.php');
require_once('../../models/Organisation.php');
require_once('../../repositories/Repository.php');
require_once('../../repositories/OrganisationRepository.php');
require_once('../../repositories/UserRepository.php');
require_once('../../controllers/OrganisationController.php');
require_once('../../controllers/UserController.php');
require_once('../template/head.php');
$controller = new OrganisationController();
$organisations = $controller->getAll();
?>
    <section>
        <article>
            <h3>Organisaties</h3>
            <a href="add-organisation.php">Toevoegen organisatie</a>
        </article>
    </section>
    <section>
        <article>
            <h3>Organisaties</h3>
            <p>Totaal <?php echo $organisations->num_rows; ?></p>
            <table class="table table-striped table-light">
                <thead class="thead-light">
                <tr>
                    <th>Naam</th>
                    <th></th>
                <tr>
                </thead>
                <?php while ($organisation = $organisations->fetch_object('Organisation')): ?>
                    <tr>
                        <td><?php echo $organisation->getName(); ?></td>
                        <td>
                            <a href="/actions/remove-organisation.php?id=<?php echo $organisation->getOrganisationID(); ?>"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </article>
    </section>
<?php require_once('../template/bottom.php'); ?>