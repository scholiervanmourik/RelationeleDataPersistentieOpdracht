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
        <h2>Artikel toevoegen</h2>
        <form class="container quill-wrapper" action="/src/actions/csv.php" method="post">
            <div class="form-group row">
                <label class="col-2">Pagina</label>
                <select class="col-10 custom-select" size="4" name="page">
                    <option selected>Home</option>
                    <option>App page</option>
                    <option>Organisaties</option>
                    <option>Festivals</option>
                    <option>Onderhoudsmodule</option>
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
    </article>
</section>


<!-- <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>
<script src="/src/public/scripts/quill.js"></script> -->

<?php require_once '../template/bottom.php' ?>
