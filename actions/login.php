<?php
require_once('../views/render.php');
require_once('../models/User.php');
require_once('../Database.php');
require_once('../repositories/UserRepository.php');
require_once('../controllers/UserController.php');
$controller = new UserController();
$controller->login($_POST['email'], $_POST['password']);