<?php
namespace smd\actions;

use smd\controllers\OrganisationController;

$controller = new OrganisationController();
$controller->removeOrganisation($_GET['id']);