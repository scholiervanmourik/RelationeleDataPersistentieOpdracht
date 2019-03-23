<?php

class User
{
    private $Email, $Screen_Name, $First_Name, $Last_Name, $Password;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getScreenName()
    {
        return $this->Screen_Name;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->First_Name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->Last_Name;
    }

    /**
     * @returns string
     */
    public function getEmail(): string
    {
        return $this->Email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return strval($this->Password);
    }
}