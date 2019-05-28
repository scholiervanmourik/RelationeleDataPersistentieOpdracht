<?php
namespace smd\actions;

use smd\controllers\FestivalController;

$controller = new FestivalController();
$controller->removeFestival($_GET['id']);