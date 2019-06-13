<?php

use smd\controllers\AdminController;

require_once('../template/head.php');

$adminController = new AdminController();
$csv = $adminController->readCSVContent('app');
$searchTerms = $adminController->getSearchTerms();
?>
<section>
    <article>
        <h2>Content beheren</h2>
        <form class="container quill-wrapper xhr-form" action="/src/actions/write-content.php"
              enctype="multipart/form-data" method="post" data-callback="uploadContent">
            <div class="form-group row">
                <label class="col-2">Pagina</label>
                <select id="pageSelect" class="col-10 custom-select" size="4" name="page" onchange="updateAdminPage()">
                    <option selected value="home">Home</option>
                    <option value="app">App page</option>
                    <option value="organisations">Organisaties</option>
                    <option value="festivals">Festivals</option>
                </select>
            </div>
            <!-- <div class="form-group" id="quilljsEditor">
                <div id="quill" class="col"></div>
            </div>
            <div class="form-group">
                <label for="quillHtml">Html</label>
                <textarea id="quillHtml" name="html"></textarea>
            </div> -->
            <a id="downloadCsv" class="btn btn-primary" href="/src/public/csv/home.csv" download>Download</a>

            <h5>CSV bestand</h5>
            <div class="custom-file">
                <input class="custom-file-input" type="file" accept=".csv" name="fileUpload">
                <label class="custom-file-label">Kies bestand</label>
            </div>
            <input type="submit">
        </form>
    </article>
    <article>
        <h2>Niet gevonden zoektermen</h2>
        <table class="table table-striped table-light">
            <thead class="thead thead-light">
            <tr>
                <th>Tekst</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php while ($searchTerm = $searchTerms->fetch_object('smd\\models\\SearchTerm')): ?>
                <tr>
                    <td><?= $searchTerm->getText(); ?></td>
                    <td>
                        <a href="../../actions/remove-search-term.php?searchterm=<?= $searchTerm->getText() ?>"><i
                                    class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </article>
</section>
<script>
    function updateAdminPage() {
        var downloadCsvEl = document.getElementById('downloadCsv'),
            pageSelect = document.getElementById('pageSelect');

        downloadCsvEl.href = `/src/public/csv/${pageSelect.value}.csv`;
    }
</script>

<!-- <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>
<script src="/src/public/scripts/quill.js"></script> -->

<?php require_once '../template/bottom.php' ?>
