<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use smd\controllers\AdminController;

$controller = new AdminController();

$file = $_FILES['fileUpload'];
if (isset($file) && isset($_POST['page'])) {
    $content = file_get_contents($file['tmp_name']);
    $controller->writeCSVContent($_POST['page'], $content);
    echo json_encode([
        'message' => 'Content write'
    ]);
} else {
    echo json_encode([
        'message' => 'Content could not be writed'
    ]);
}
