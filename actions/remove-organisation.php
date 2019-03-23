<?php
require_once('../views/render.php');
require_once('../Database.php');
require_once('../repositories/Repository.php');
require_once('../repositories/OrganisationRepository.php');
require_once('../controllers/OrganisationController.php');

$controller = new OrganisationController();
$controller->removeOrganisation($_GET['id']);