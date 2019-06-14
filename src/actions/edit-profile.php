<?php
namespace smd\actions;
use smd\controllers\UserController;
use smd\Database;
use smd\repositories\UserRepository;

require_once __DIR__ . '/../../vendor/autoload.php';

$controller = new UserController(new UserRepository(Database::getConnection()));

$image = $_FILES['imageUpload'];
if (isset($image))
{
    $controller->setImage($_GET['email'], $image);
}

$controller->editUser($_GET['email'], $_POST['firstName'], $_POST['lastName']);