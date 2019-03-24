<?php
require_once('Repository.php');

class UserRepository extends Repository
{
    public function __construct($conn)
    {
        parent::__construct($conn);
    }

    public function register(string $email, string $password, string $screenName, string $firstName, string $lastName): bool
    {
        $stmt = $this->prepare('
				INSERT INTO `users` (`Email`, `Password`, `Screen_Name`, `First_Name`, `Last_Name`)
				VALUES (?, ?, ?, ?, ?);
			');
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bind_param('sssss', $email, $hashed, $screenName, $firstName, $lastName);
        return $stmt->execute();
    }

    /**
     * @param string $email
     * @param string $password
     * @return User|null
     */
    public function login(string $email, string $password): ?User
    {
        $stmt = $this->prepare('
				SELECT * FROM `users`
				WHERE `Email` = ?;
			');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $user = $stmt->get_result()->fetch_object('User');
        if (isset($user) && password_verify($password, $user->getPassword())) {
            return $user;
        }
        return null;
    }

    public function editUser(string $email, string $firstName, string $lastName): bool
    {
        $stmt = $this->prepare('
            UPDATE `users`
            SET `First_Name` = ?, `Last_Name` = ?
            WHERE `Email` = ?;
        ');
        $stmt->bind_param('sss', $firstName, $lastName, $email);
        return $stmt->execute();
    }

    public function getByEmail(string $email): ?User
    {
        $stmt = $this->prepare('
				SELECT * FROM `users`
				WHERE `Email` = ?;
			');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        return $stmt->get_result()->fetch_object('User');
    }

    public function getAll()
    {
        return $this->query('SELECT * FROM `users`;');
    }
}