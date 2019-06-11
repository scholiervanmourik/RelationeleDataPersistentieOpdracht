<?php
namespace smd\controllers;
use smd\Database;
use smd\repositories\FestivalRepository;
require_once __DIR__ . '/../views/render.php';

class FestivalController
{
    private $repository;

    /**
     * FestivalController constructor.
     */
    public function __construct()
    {
        $this->repository = new FestivalRepository(Database::getConnection());
    }

    /**
     * @param int $id
     * @return array
     */
    public function removeFestival(int $id)
    {
        if ($this->repository->delete($id)) {
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

    public function getAll()
    {
        return $this->repository->getAll();
    }
}