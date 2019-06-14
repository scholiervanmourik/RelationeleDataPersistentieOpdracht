<?php
namespace smd\actions;

require_once __DIR__ . '/../../vendor/autoload.php';

use smd\controllers\FestivalController;
use smd\Database;
use smd\repositories\FestivalRepository;

$controller = new FestivalController(new FestivalRepository(Database::getConnection()));
$res = $controller->removeFestival($_GET['id']);
header('Location: /views/sections/festivals.php');
showDialog($res['message']);