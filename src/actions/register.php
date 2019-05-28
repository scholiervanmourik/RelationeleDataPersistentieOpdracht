<?php
namespace smd\actions;
use smd\controllers\UserController;

require_once __DIR__ . '/../../vendor/autoload.php';

$controller = new UserController();
$controller->register($_POST['email'], $_POST['password'], $_POST['screenName'], $_POST['firstName'], $_POST['lastName']);