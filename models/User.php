<?php

class User
{
    private $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * @returns {string}
     */
    public function getEmail()
    {
        return $this->email;
    }
}