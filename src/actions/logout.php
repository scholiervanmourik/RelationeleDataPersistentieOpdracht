<?php
namespace smd\actions;
use smd\controllers\UserController;
use smd\Database;
use smd\repositories\UserRepository;

require_once __DIR__ . '/../../vendor/autoload.php';

# create a new user controller && a new user repository then connect to the db
$controller = new UserController(new UserRepository(Database::getConnection()));
# send data to the userController->logout method
$controller->logout();