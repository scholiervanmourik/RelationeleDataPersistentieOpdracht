<?php

class UserController
{
    private $repository;

    public function __construct()
    {
        $this->repository = new UserRepository(Database::getConnection());
        if (session_status() == PHP_SESSION_NONE) session_start();
    }

    public function login(string $email, string $password)
    {
        if (isset($email) && isset($password)) {
            $user = $this->repository->login($email, $password);
            if (isset($user)) {
                $_SESSION['user'] = $user;
                header('Location: /index.php');
            } else {
                showDialog('Incorrecte gebruikersnaam en wachtwoord combinatie');
            }
        }
    }

    public function register($email, $password, $screenName, $firstName, $lastName)
    {
        if ($this->repository->register($email, $password, $screenName, $firstName, $lastName)) {
            showDialog('Succesvol geregistreerd');
        } else {
            showDialog('Gebruiker kan niet worden geregistreerd');
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: login.php');
    }

    public function isLoggedIn(): bool
    {
        return isset($_SESSION['user']);
    }

    public function getUser(): ?User
    {
        return $_SESSION['user'];
    }
}