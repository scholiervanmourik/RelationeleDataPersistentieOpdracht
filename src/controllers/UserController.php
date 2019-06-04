<?php
namespace smd\controllers;
use smd\Database;
use smd\models\User;
use smd\repositories\OrganisationRepository;
use smd\repositories\UserRepository;
require_once __DIR__ . '/../views/render.php';

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
                return 'Succesvol ingelogd';
            } else {
                return 'Incorrecte gebruikersnaam en wachtwoord combinatie';
            }
        }
        return 'Geen email en/of wachtwoord ingevuld';
    }

    public function register(string $email, string $password, string $screenName, string $firstName, string $lastName, string $role = 'user')
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            showDialog('Incorrecte email');
            redirect('/src/views/sections/user/register.php');
            return false;
        }
        if ($this->repository->register($email, $password, $screenName, $firstName, $lastName, $role)) {
            showDialog('Succesvol geregistreerd');
        } else {
            showDialog('Gebruiker kan niet worden geregistreerd');
        }
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
        redirect('/src/views/sections/user/profile.php');
    }

    public function setOrganisation($email, $organisationName)
    {
        $organisationRepository = new OrganisationRepository(Database::getConnection());
        $organisationId = $organisationRepository->insert($organisationName);
        $this->repository->setOrganisation($email, $organisationId);
    }

    public function getUser(): ?User
    {
        return $_SESSION['user'];
    }
}