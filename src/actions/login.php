<?php
namespace smd\actions;

require_once __DIR__ . '/../../vendor/autoload.php';

use smd\controllers\UserController;
use smd\Database;
use smd\repositories\UserRepository;

$controller = new UserController(new UserRepository(Database::getConnection()));
echo json_encode($controller->login($_POST['email'], $_POST['password']));