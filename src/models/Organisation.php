<?php

namespace smd\models;

class Organisation
{
    private $Organisation_ID, $Name, $Email;

    public function getOrganisationID(): string
    {
        return $this->Organisation_ID;
    }

    public function getName(): string
    {
        return $this->Name;
    }

    public function getEmail()
    {
        return $this->Email;
    }
}