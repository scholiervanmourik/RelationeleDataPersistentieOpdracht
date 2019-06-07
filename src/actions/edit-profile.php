<?php
namespace smd\actions;
use smd\controllers\UserController;
use smd\Database;
use smd\repositories\UserRepository;

require_once __DIR__ . '/../../vendor/autoload.php';

$controller = new UserController(new UserRepository(Database::getConnection()));
$controller->editUser($_GET['email'], $_POST['firstName'], $_POST['lastName']);