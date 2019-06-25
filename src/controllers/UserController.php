<?php

namespace smd\controllers;

use smd\Database;
use smd\models\User;
use smd\repositories\OrganisationRepository;
use smd\repositories\UserRepository;

require_once __DIR__ . '/../views/render.php';

// Controller for all users
class UserController
{
    // private class attribute
    private $repository;

    // run method when class will be initialised. 
    public function __construct($userRepository)
    {
        $this->repository = $userRepository;
        // check if there is a session other wise start a sesstion
        if (session_status() == PHP_SESSION_NONE) session_start();
    }

    // login method with two parameters (email and password)
    public function login($email, $password)
    {
        // if email and password contain content and are valid with the input
        if (isset($email) && isset($password)) {
            // add data to var user
            $user = $this->repository->login($email, $password);
            // check if the user has content (return a bolean, with a message)
            if (isset($user)) {
                $_SESSION['user'] = $user;
                return [
                    'success' => true,
                    'message' => 'Logged in'
                ];
            }
            return [
                'success' => false,
                'message' => 'Incorrecte gebruikersnaam en wachtwoord combinatie'
            ];
        }
        // else when missing input (error message)
        return [
            'success' => false,
            'message' => 'Geen email en/of wachtwoord ingevuld'
        ];
    }

    // register method with parameters (email password screenName firstname lastName role) *add the value of user to role
    public function register(string $email, string $password, string $screenName, string $firstName, string $lastName, string $role = 'user')
    {
        // check if email is not valid (TRUE == error message)
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return [
                'success' => false,
                'message' => 'Incorrecte email'
            ];
        }
        // check if all data is there (TRUE == succes message)
        if ($this->repository->register($email, $password, $screenName, $firstName, $lastName, $role)) {
            return [
                'success' => true,
                'message' => 'Succesvol geregistreerd'
            ];
        } else {
            return [
                'success' => false,
                'message' => 'Gebruiker kan niet worden geregistreerd'
            ];
        }

    }

    // logout method. 
    public function logout()
    {
        // Destroys the session
        session_destroy();
        // reroot to index.php
        header('Location: /index.php');
    }

    // is logged in method (value is a bolean TRUE or FALSE)
    public function isLoggedIn(): bool
    {
        // start the user session
        return isset($_SESSION['user']);
    }

    // edit a user method with parameters (email firstName lastName)
    public function editUser($email, $firstName, $lastName)
    {
        if ($this->repository->editUser($email, $firstName, $lastName)) {
            $_SESSION['user'] = $this->repository->getByEmail($email);
        } else {
            showDialog('Gebruiker kan niet bijgewerkt worden.');
        }
        redirect('/src/views/sections/user/profile.php');
    }

    // set organisation to a user
    public function setOrganisation($email, $organisationName)
    {
        // create an new organisation array in DB
        $organisationRepository = new OrganisationRepository(Database::getConnection());
        // set variable value organisation name on organisation id
        $organisationId = $organisationRepository->insert($organisationName);
        // bring content to userrepository -> set organisation
        $this->repository->setOrganisation($email, $organisationId);
    }

    // Sets a image to the given user
    public function setImage($email, $file)
    {
        $fileName = basename($file['name']);
        $path = __DIR__ . '/../public/img/' . $fileName;
        move_uploaded_file($file['tmp_name'], $path);
        $this->repository->setImage($email, $fileName);
    }

    // Gets the user from the session
    public function getUser(): ?User
    {
        return $_SESSION['user'];
    }
}