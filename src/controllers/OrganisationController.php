<?php
namespace smd\controllers;
use smd\Database;
use smd\repositories\OrganisationRepository;

// Controller for all organisations using a database
class OrganisationController
{
    private $repository;

    public function __construct()
    {
        $this->repository = new OrganisationRepository(Database::getConnection());
    }

    // Add a organisation with the given name
    public function addOrganisation(string $name)
    {
        if ($this->repository->insert($name)) {
            return [
                'success' => true,
                'message' => 'Organisatie toegevoegd'
            ];
        } else {
            return [
                'success' => false,
                'message' => 'Organisatie kan niet worden toegevoegd.'
            ];
        }
    }

    // Remove a organisation from the database
    public function removeOrganisation(int $id)
    {
        header('Location: /views/sections/organisations.php');
        if ($this->repository->deleteById($id)) {
            return [
                'success' => true,
                'message' => 'Gebruiker succesvol verwijderd'
            ];
        } else {
            return [
                'success' => false,
                'message' => 'Gebruiker kan niet worden verwijderd'
            ];
        }
    }

    // Get all records from the database
    public function getAll()
    {
        return $this->repository->getAll();
    }
}