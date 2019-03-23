<?php

class OrganisationRepository extends Repository
{
    function __construct($conn)
    {
        parent::__construct($conn);
    }

    function insert($name): bool
    {
        $stmt = $this->prepare('
					INSERT INTO `organisations` (name)
					VALUES (?);
				');
        $stmt->bind_param('s', $name);
        return $stmt->execute();
    }

    public function deleteById(int $id): bool
    {
        $stmt = $this->prepare('DELETE FROM `organisations` WHERE `Organisation_ID` = ?;');
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }

    function getById($id)
    {
        $stmt = $this->prepare('
					SELECT * FROM `Organisations`
					WHERE `UID` = ?;
				');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function getAll()
    {
        return $this->query('SELECT * FROM `organisations`;');
    }
}