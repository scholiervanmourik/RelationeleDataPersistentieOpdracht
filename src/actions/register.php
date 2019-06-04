<?php
namespace smd\actions;
use smd\controllers\UserController;

require_once __DIR__ . '/../../vendor/autoload.php';

$controller = new UserController();
$role = 'user';
if (isset($_GET['role'])) $role = $_GET['role'];
echo json_encode($controller->register($_POST['email'], $_POST['password'], $_POST['screenName'], $_POST['firstName'], $_POST['lastName'], $role));

if ($role === 'organisation')
{
    $controller->setOrganisation($_POST['email'], $_POST['organisation']);
}