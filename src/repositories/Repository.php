<?php

namespace smd\repositories;  // declare name space (location of the file)

// dwingt bepaalde methods of properties te gebruiken (abstract)
abstract class Repository
{
    // set attribut on protected (usable outside the class, within a chilld class "extend") 
    protected $conn;

    // create method    
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    
    protected function prepare(string $query) {
        return $this->conn->prepare($query);
    }

    protected function query(string $query) {
        return $this->conn->query($query);
    }

    // Force Extending class to define this method
    // de verantwoordelijkheid is van de child class om voor de functionaliteit van getAll() te zorgen
    public abstract function getAll();
}