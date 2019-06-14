<?php

use smd\controllers\AdminController;

require_once('../template/head.php');

$adminController = new AdminController();
$searchTerms = $adminController->getSearchTerms();
?>
<section id="ContentAdmin">
    <article>
        <h3>Content beheren</h3>
        <form class="container quill-wrapper xhr-form" action="/src/actions/write-content.php"
              enctype="multipart/form-data" method="post" data-callback="uploadContent">
            <div class="form-group row">
                <label >Pagina</label>
                <select id="pageSelect" class="custom-select" size="3" name="page" onchange="updateAdminPage()">
                    <option selected value="home">Home</option>
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
            <a id="downloadCsv" class="btn" href="/src/public/csv/home.csv" download>
                    <div class="btn-text">Download</div>
                    <div class="button"></div>
            </a>

            <h5>CSV bestand</h5>
            <div class="custom-file">
                <input class="custom-file-input" type="file" accept=".csv" name="fileUpload">
                <label class="custom-file-label">Kies bestand</label>
            </div>
            <button type="submit" style="background:transparent; border:0; outline:none; padding:0;">
                        <a class="btn">
                            <div class="btn-text">Submit</div>
                            <div class="button"></div>
                        </a>
            </button>
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