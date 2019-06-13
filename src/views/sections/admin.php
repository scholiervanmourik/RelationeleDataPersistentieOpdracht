<?php
require_once('../template/head.php');
?>
<section>
    <article>
        <h1>Onderhoudsmodule</h1>
    </article>
</section>
<section>
    <article>
        <h2>Content beheren</h2>
        <form class="container quill-wrapper xhr-form" action="/src/actions/write-content.php" enctype="multipart/form-data" method="post" data-callback="uploadContent">
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
            <input type="file" accept=".csv" name="fileUpload">
            <input type="submit">
        </form>
        <a id="downloadCsv" href="/src/public/csv/home.csv" download>Download</a>
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
