<?php
namespace smd\actions;

require_once __DIR__ . '/../../vendor/autoload.php';

use smd\controllers\FestivalController;

$controller = new FestivalController();
$res = $controller->removeFestival($_GET['id']);
header('Location: /views/sections/festivals.php');
showDialog($res['message']);