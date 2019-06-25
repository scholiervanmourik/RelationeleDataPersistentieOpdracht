<?php
namespace smd\actions;
use smd\controllers\UserController;
use smd\Database;
use smd\repositories\UserRepository;

require_once __DIR__ . '/../../vendor/autoload.php';

// create a new user controller && a new user repository then connect to the db
$controller = new UserController(new UserRepository(Database::getConnection()));
// set user role to user
$role = 'user';
// check if role is user > create a new user
if (isset($_GET['role'])) $role = $_GET['role'];
echo json_encode($controller->register($_POST['email'], $_POST['password'], $_POST['screenName'], $_POST['firstName'], $_POST['lastName'], $role));

// check if role is organisation 
if ($role === 'organisation')
{
    $controller->setOrganisation($_POST['email'], $_POST['organisation']);
}


