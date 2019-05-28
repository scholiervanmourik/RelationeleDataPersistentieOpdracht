<?php
namespace smd\actions;

require_once __DIR__ . '/../../vendor/autoload.php';

use smd\controllers\FestivalController;

$controller = new FestivalController();
$controller->removeFestival($_GET['id']);