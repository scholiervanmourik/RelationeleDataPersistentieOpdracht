<?php
namespace smd\actions;

require_once __DIR__ . '/../../vendor/autoload.php';

use smd\controllers\AdminController;

$controller = new AdminController();

if (isset($_GET['searchterm']))
{
    $msg = $controller->removeSearchTerm($_GET['searchterm'])['message'];
} else {
    $msg = 'Zoekterm kan niet worden verwijderd';
}

header('Location: /src/views/sections/admin.php');
showDialog($msg);