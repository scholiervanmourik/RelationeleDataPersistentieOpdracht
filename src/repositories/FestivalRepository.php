<?php

namespace smd\repositories;

class FestivalRepository extends Repository
{
    public function __construct($conn)
    {
        parent::__construct($conn);
    }

    /**
     * @param string $name
     * @return bool
     */
    public function insert(string $name)
    {
        $stmt = $this->prepare('
					INSERT INTO `Festivals` (name)
					VALUES (?);
				');
        $stmt->bind_param('s', $name);
        return $stmt->execute();
    }

    /**
     * @param int $id
     * @return mixed
     */
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

    /**
     * @param int $festivalId
     * @return bool
     */
    public function delete(int $festivalId)
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

    // Query voor het opzoeken van festivals
    public function findByName(string $name)
    {
        $stmt = $this->prepare('
            SELECT * FROM `Festivals`
            WHERE `Name` LIKE ?;');

        $query = '%' . $name . '%';
        $stmt->bind_param('s', $query);
        $stmt->execute();
        return $stmt->get_result();
    }
}