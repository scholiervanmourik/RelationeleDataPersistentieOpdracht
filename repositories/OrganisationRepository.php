<?php
require_once('./Repository.php');

class OrganisationRepository
{
    function __construct($conn)
    {
        parent::__construct($conn);
    }

    function insert($name)
    {
        $stmt = $this->prepare('
					INSERT INTO `Organisations` (name)
					VALUES (?);
				');
        $stmt->bind_param('s', $name);
        $stmt->execute();
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

    function getAll()
    {
        return mysqli_fetch_all($this->conn->query('SELECT * FROM Organisations;'), MYSQLI_ASSOC);
    }
}