<?php
namespace smd\controllers;

class AdminController
{
    public function __construct()
    {
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
            $arr[$row[0]] = $row[1];
        }
        return $arr;
    }
}
