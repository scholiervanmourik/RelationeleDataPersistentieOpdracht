<?php

class FestivalController
{
    private $repository;

    public function __construct()
    {
        $this->repository = new FestivalRepository(Database::getConnection());
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }
}