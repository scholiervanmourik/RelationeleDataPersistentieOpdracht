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
        <form class="container">
            <div class="form-group row">
                <label class="col-2">Titel</label>
                <input class="col-10" name="title">
            </div>
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
            <div class="form-group">
                <div id="quill" class="col"></div>
            </div>
            <div class="form-group row">
                <label for="quillHtml">Html</label>
                <textarea id="quillHtml" name="html"></textarea>
            </div>
            <input type="submit">
        </form>
    </article>
</section>
<script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>
<script src="/src/public/scripts/quill.js"></script>
<?php require_once '../template/bottom.php' ?>
