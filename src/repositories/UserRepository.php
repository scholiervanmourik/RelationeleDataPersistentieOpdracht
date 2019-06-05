<?php
namespace smd\repositories;

use smd\models\User;

class UserRepository extends Repository
{
    public function __construct($conn)
    {
        parent::__construct($conn);
    }

    public function register(string $email, string $password, string $screenName, string $firstName, string $lastName, string $role = 'user')
    {
        $stmt = $this->prepare('
				INSERT INTO `users` (`Email`, `Password`, `Screen_Name`, `First_Name`, `Last_Name`, `Role`)
				VALUES (?, ?, ?, ?, ?, ?);
			');
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bind_param('ssssss', $email, $hashed, $screenName, $firstName, $lastName, $role);
        return $stmt->execute();
    }

    /**
     * @param string $email
     * @param string $password
     * @return User|null
     */
    public function login(string $email, string $password)
    {
        $user = $this->getByEmail($email);
        if (isset($user) && password_verify($password, $user->getPassword())) {
            return $user;
        }
        return null;
    }

    /**
     * @param string $email
     * @param string $newFirstName
     * @param string $newLastName
     * @returns boolean
     */
    public function editUser(string $email, string $newFirstName, string $newLastName)
    {
        $stmt = $this->prepare('
            UPDATE `users`
            SET `First_Name` = ?, `Last_Name` = ?
            WHERE `Email` = ?;
        ');
        $stmt->bind_param('sss', $newFirstName, $newLastName, $email);
        return $stmt->execute();
    }

    public function setOrganisation(string $email, int $organisationId)
    {
        $stmt = $this->prepare('
            UPDATE `users`
            SET `Organisation_ID` = ?
            WHERE `Email` = ?;
        ');
        $stmt->bind_param('is', $organisationId, $email);
        return $stmt->execute();
    }

    /**
     * @param string $email
     * @return User|null
     */
    public function getByEmail(string $email)
    {
        $stmt = $this->prepare('
				SELECT * FROM `users`
				WHERE `Email` = ?;
			');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        return $stmt->get_result()->fetch_object('smd\models\User');
    }

    public function getAll()
    {
        return $this->query('SELECT * FROM `users`;');
    }
}