<?php
namespace smd\controllers;
use smd\Database;
use smd\repositories\FestivalRepository;
require_once __DIR__ . '/../views/render.php';

class FestivalController
{
    private $repository;

    public function __construct()
    {
        $this->repository = new FestivalRepository(Database::getConnection());
    }

    public function removeFestival(int $id): bool
    {
        header('Location: /views/sections/festivals.php');
        if ($this->repository->delete($id)) {
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