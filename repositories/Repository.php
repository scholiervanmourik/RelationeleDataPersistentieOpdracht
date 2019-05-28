<?php

namespace smd\repositories;

abstract class Repository
{
    protected $conn;

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

    public abstract function getAll();
}