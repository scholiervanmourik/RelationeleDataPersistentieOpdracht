<?php
require_once('../Database.php');
require_once('../repositories/OrganisationRepository.php');
require_once('../controllers/OrganisationController.php');
$controller = new OrganisationController();
$controller->addOrganisation($_POST['name']);