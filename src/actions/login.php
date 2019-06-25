<?php
namespace smd\actions;

require_once __DIR__ . '/../../vendor/autoload.php';

use smd\controllers\UserController;
use smd\Database;
use smd\repositories\UserRepository;

# create a new user controller && a new user repository then connect to the db
$controller = new UserController(new UserRepository(Database::getConnection()));
# send data to the userController->login method
echo json_encode($controller->login($_POST['email'], $_POST['password']));