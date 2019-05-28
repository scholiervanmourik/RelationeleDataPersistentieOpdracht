<?php
namespace smd\actions;
use smd\controllers\UserController;

require_once __DIR__ . '/../../vendor/autoload.php';

$controller = new UserController();
$controller->editUser($_GET['email'], $_POST['firstName'], $_POST['lastName']);