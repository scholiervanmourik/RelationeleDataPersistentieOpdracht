<?php
namespace smd\actions;
use smd\controllers\OrganisationController;

$controller = new OrganisationController();
$controller->addOrganisation($_POST['name']);