<?php
require_once('./Repository.php');

class FestivalRepository extends Repository
{
    public function __construct($conn)
    {
        parent::__construct($conn);
    }

    public function insert(string $name)
    {
        $stmt = $this->prepare('
					INSERT INTO `Festivals` (name)
					VALUES (?);
				');
        $stmt->bind_param('s', $name);
        $stmt->execute();
    }

    public function getById(int $id)
    {
        $stmt = $this->prepare('
					SELECT * FROM `Festivals`
					WHERE `UID` = ?;
				');
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function getAll()
    {
        return mysqli_fetch_all($this->query('SELECT * FROM `Festivals`;'), MYSQLI_ASSOC);
    }
}