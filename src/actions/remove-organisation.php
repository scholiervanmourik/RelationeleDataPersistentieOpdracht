<?php
namespace smd\actions;

require_once __DIR__ . '/../../vendor/autoload.php';

use smd\controllers\OrganisationController;

$controller = new OrganisationController();
$controller->removeOrganisation($_GET['id']);