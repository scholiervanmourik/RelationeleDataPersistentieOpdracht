<?php
namespace smd\actions;

require_once __DIR__ . '/../../vendor/autoload.php';

use smd\controllers\UserController;

$controller = new UserController();
echo $controller->login($_POST['email'], $_POST['password']);