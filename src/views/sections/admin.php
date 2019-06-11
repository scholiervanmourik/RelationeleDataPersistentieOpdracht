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
        <label>
            Pagina
            <select>
                <option>Home</option>
            </select>
        </label>
        <label>
            Titel
            <input>
        </label>
        <div id="toolbar"></div>
        <div id="quill"></div>
        <label for="quill-html">Html</label>
        <textarea id="quill-html"></textarea>
    </article>
</section>
<script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>
<script src="/src/public/scripts/quill.js"></script>
<?php require_once '../template/bottom.php' ?>
