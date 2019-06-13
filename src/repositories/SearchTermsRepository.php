<?php

namespace smd\repositories;

class SearchTermsRepository extends Repository
{
    public function __construct($conn)
    {
        parent::__construct($conn);
    }

    public function insert(string $text): bool
    {
        $stmt = $this->prepare('
					INSERT INTO `SearchTerms`
					VALUES (?);
				');
        $stmt->bind_param('s', $text);
        return $stmt->execute();
    }

    public function delete($text)
    {
        $stmt = $this->prepare('DELETE FROM `SearchTerms` WHERE `Text` = ?;');
        $stmt->bind_param('s', $text);
        return $stmt->execute();
    }

    public function getAll()
    {
        return $this->query('SELECT * FROM `searchterms`;');
    }
}