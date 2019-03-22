<?php

class UserController {
    private $repository;

    public function __construct() {
        $this->repository = new UserRepository(Database::getConnection());
    }

    public function login(string $email, string $password) {
        if (isset($email) && isset($password)) {
            $user = $this->repository->login($email, $password);
            if (isset($user)) {
                $_SESSION['user'] = $user;
                header('Location: index.php');
            } else {
                echo 'Incorrecte gebruikersnaam en wachtwoord combinatie';
            }
        }
    }
}