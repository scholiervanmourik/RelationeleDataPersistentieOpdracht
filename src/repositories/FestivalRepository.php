<?php

namespace smd\repositories;

class FestivalRepository extends Repository
{
    public function __construct($conn)
    {
        parent::__construct($conn);
    }

    public function insert(string $name): bool
    {
        $stmt = $this->prepare('
					INSERT INTO `Festivals` (name)
					VALUES (?);
				');
        $stmt->bind_param('s', $name);
        return $stmt->execute();
    }

    public function getById(int $id)
    {
        $stmt = $this->prepare('
					SELECT * FROM `Festivals`
					WHERE `Festival_ID` = ?;
				');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_object('Festival');
    }

    public function delete(int $festivalId): bool
    {
        $stmt = $this->prepare('
            DELETE FROM `Festivals`
            WHERE `Festival_ID` = ?;
        ');
        $stmt->bind_param('i', $festivalId);
        return $stmt->execute();
    }

    public function getAll()
    {
        return $this->query('SELECT * FROM `festivals`;');
    }

    public function findByName(string $name)
    {
        $stmt = $this->prepare('
            SELECT * FROM `Festivals`
            WHERE `Name` LIKE ?;');

        $query = "%".$name."%";
        $stmt->bind_param('s', $query);
        $stmt->execute();
        return $stmt->get_result();
    }

}