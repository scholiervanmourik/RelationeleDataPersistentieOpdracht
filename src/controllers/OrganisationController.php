<?php
namespace smd\controllers;
use smd\Database;
use smd\repositories\OrganisationRepository;
use function smd\render\showDialog;

class OrganisationController
{
    private $repository;

    public function __construct()
    {
        $this->repository = new OrganisationRepository(Database::getConnection());
    }

    public function addOrganisation(string $name)
    {
        if ($this->repository->insert($name)) {
            header('Location: /views/sections/organisations.php');
        } else {
            header('Location: /views/sections/add-organisation.php');
            showDialog('Organisatie kan niet worden toegevoegd.');
        }
    }

    public function removeOrganisation(int $id)
    {
        header('Location: /views/sections/organisations.php');
        if ($this->repository->deleteById($id)) {
            showDialog('Gebruiker succesvol verwijderd');
        } else {
            showDialog('Gebruiker kan niet worden verwijderd');
        }
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }
}