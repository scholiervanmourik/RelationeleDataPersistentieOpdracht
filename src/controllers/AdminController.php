<?php
namespace smd\controllers;

// this is the controller to save your CSV file to the server 
class AdminController
{
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
