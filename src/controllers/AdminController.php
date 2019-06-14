<?php
namespace smd\controllers;

use smd\Database;
use smd\repositories\SearchTermsRepository;

// Controller for Admin users
class AdminController
{
    public function __construct()
    {
        $this->repository = new SearchTermsRepository(Database::getConnection());
    }

    // Writes the csv to the given page
    public function writeCSVContent(string $pageName, string $content)
    {
        file_put_contents(__DIR__ . "/../public/csv/$pageName.csv", $content);
    }

    // Reads the csv of the given page
    public function readCSVContent(string $pageName): array
    {
        $csv = array_map('str_getcsv', file(__DIR__ . "/../public/csv/$pageName.csv"));
        $arr = [];
        $headers = array_shift($csv);
        if ($headers) array_shift($headers);
        foreach($csv as $line)
        {
            $row = str_getcsv($line[0], ';');
            // $row[0] = key, $row[1] = value
            $arr[$row[0]] = $row[1];
        }
        return $arr;
    }

    public function getSearchTerms()
    {
        return $this->repository->getAll();
    }

    public function removeSearchTerm($searchTerm)
    {
        if ($this->repository->delete($searchTerm)) {
            return [
                'success' => true,
                'message' => 'Zoekterm verwijderd'
            ];
        }

        return [
            'success' => false,
            'message' => 'Zoekterm kan niet worden verwijderd'
        ];
    }
}
