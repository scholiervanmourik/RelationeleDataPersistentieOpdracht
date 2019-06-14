<?php
namespace smd\actions;

require_once __DIR__ . '/../../vendor/autoload.php';

use smd\controllers\OrganisationController;

$controller = new OrganisationController();
$res = $controller->removeOrganisation($_GET['id']);

header('Location: /src/views/sections/organisations.php');
showDialog($res['message']);