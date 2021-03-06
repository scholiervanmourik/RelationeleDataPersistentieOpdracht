<?php
namespace smd\controllers;
use smd\Database;
use smd\repositories\SearchTermsRepository;

require_once __DIR__ . '/../views/render.php';

// Controller for all festivals
class FestivalController
{
    private $repository;

    /**
     * FestivalController constructor.
     */
    public function __construct($festivalRepository)
    {
        $this->repository = $festivalRepository;
    }

    /**
     * Remove a festival at the given id
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

    // Get all records
    public function getAll()
    {
        return $this->repository->getAll();
    }

    // Filter by name in the database
    public function findByName($name)
    {
        if (isset($name))
        {
            $result = $this->repository->findByName($name);
            if (isset($result)){
                if ($result->num_rows < 1)
                {
                    $searchTermsRepository = new SearchTermsRepository(Database::getConnection());
                    $searchTermsRepository->insert($name);
                    return [
                        'success' => true,
                        'message' => 'Geen resultaten',
                        'result' => $result
                    ];
                }
                return [
                    'success' => true,
                    'message' => 'Geslaagd',
                    'result' => $result
                ];
            }
        }
        return[
            'success' => false,
            'message' => 'Naam is leeg'
        ];
    }
}