<?php
namespace smd\controllers;
use smd\Database;
use smd\models\User;
use smd\repositories\UserRepository;
use function smd\render\redirect;
use function smd\render\showDialog;

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
                redirect('/views/sections/user/login.php');
            }
        }
    }

    public function register(string $email, string $password, string $screenName, string $firstName, string $lastName)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            showDialog('Incorrecte email');
            redirect('/views/sections/user/register.php');
            return false;
        }
        if ($this->repository->register($email, $password, $screenName, $firstName, $lastName)) {
            showDialog('Succesvol geregistreerd');
        } else {
            showDialog('Gebruiker kan niet worden geregistreerd');
        }
        redirect('/views/sections/user/register.php');
        return true;
    }

    public function logout()
    {
        session_destroy();
        header('Location: /index.php');
    }

    public function isLoggedIn(): bool
    {
        return isset($_SESSION['user']);
    }

    public function editUser($email, $firstName, $lastName)
    {
        if ($this->repository->editUser($email, $firstName, $lastName)) {
            $_SESSION['user'] = $this->repository->getByEmail($email);
        } else {
            showDialog('Gebruiker kan niet bijgewerkt worden.');
        }
        redirect('/views/sections/user/profile.php');
    }

    public function getUser(): ?User
    {
        return $_SESSION['user'];
    }
}