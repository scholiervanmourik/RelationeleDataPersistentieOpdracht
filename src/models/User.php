<?php

namespace smd\models;

class User
{
    private $Email, $Screen_Name, $First_Name, $Last_Name, $Password, $Role, $Image;

    public function getScreenName(): string
    {
        return $this->Screen_Name;
    }

    public function getFirstName(): string
    {
        return $this->First_Name;
    }

    public function getLastName(): string
    {
        return $this->Last_Name;
    }

    public function getEmail(): string
    {
        return $this->Email;
    }

    public function getPassword(): string
    {
        return strval($this->Password);
    }

    public function getRole(): string
    {
        return $this->Role;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }
}