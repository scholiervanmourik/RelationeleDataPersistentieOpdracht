<?php
require_once('../views/render.php');
require_once('../Database.php');
require_once('../repositories/UserRepository.php');
require_once('../controllers/UserController.php');
$controller = new UserController();
$controller->register($_POST['email'], $_POST['password'], $_POST['screenName'], $_POST['firstName'], $_POST['lastName']);