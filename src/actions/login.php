<?php
namespace smd\actions;
use smd\controllers\UserController;

$controller = new UserController();
$controller->login($_POST['email'], $_POST['password']);