<?php
namespace smd\actions;
use smd\controllers\OrganisationController;

require_once __DIR__ . '/../../vendor/autoload.php';

$controller = new OrganisationController();
$controller->addOrganisation($_POST['name']);