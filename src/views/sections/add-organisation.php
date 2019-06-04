<?php
require_once('../template/head.php');
?>
    <section>
        <article>
            <h3>Organisatie aanmaken</h3>
            <form class="xhr-form" action="../../actions/add-organisation.php" data-callback="addOrganisation" method="post">
                <input type="text" name="name" placeholder="name">
                <input type="submit">
            </form>
        </article>
    </section>
<?php require_once('../template/bottom.php') ?>