<?php
namespace smd\actions;
use smd\controllers\UserController;

$controller = new UserController();
$controller->editUser($_GET['email'], $_POST['firstName'], $_POST['lastName']);