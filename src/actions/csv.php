<?php
namespace smd\actions;
use smd\controllers\AdminController;

$controller = new AdminController();

$file = $_FILES['fileUpload'];
if (isset($file) && isset($_POST['page'])) {
    $content = file_get_contents($file['tmp_name']);
    $controller->writeCSVContent($_POST['page'], $content);
}
