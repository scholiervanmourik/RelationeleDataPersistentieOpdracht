<?php
require_once('../views/render.php');
require_once('../Database.php');
require_once('../repositories/Repository.php');
require_once('../repositories/FestivalRepository.php');
require_once('../controllers/FestivalController.php');

$controller = new FestivalController();
$controller->removeFestival($_GET['id']);