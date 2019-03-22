<?php
require_once('Repository.php');

class UserRepository extends Repository
{
    function __construct($conn)
    {
        parent::__construct($conn);
    }

    function register($email, $password, $screenName, $firstName, $lastName)
    {
        $stmt = $this->conn->prepare('
				INSERT INTO `Users` (`Email`, `Password`, `Screen_Name`, `First_Name`, `Last_Name`)
				VALUES (?, ?, ?, ?, ?);
			');
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bind_param('sssss', $email, $hashed, $screenName, $firstName, $lastName);
        $stmt->execute();
    }

    function login($email, $password)
    {
        $stmt = $this->conn->prepare('
				SELECT * FROM `Users`
				WHERE `Email` = ?;
			');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        if (password_verify($password, $result['Password'])) {
            return $result;
        }
        return null;
    }

    function getByEmail($email)
    {
        $stmt = $this->conn->prepare('
				SELECT * FROM `Users`
				WHERE `Email` = ?;
			');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}