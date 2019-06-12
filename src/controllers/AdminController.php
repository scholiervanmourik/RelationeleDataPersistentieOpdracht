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
        file_put_contents("../public/CSV/$pageName.csv", $content);
    }

    // Reads the csv of the given page
    public function readCSVContent(string $pageName):string
    {
        return file_get_contents("../public/CSV/$pageName.csv"); 
    }
}
