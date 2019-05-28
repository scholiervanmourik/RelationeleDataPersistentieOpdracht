<?php

namespace smd\models;

class Organisation
{
    private $Organisation_ID, $Name;

    /**
     * @return mixed
     */
    public function getOrganisationID(): string
    {
        return $this->Organisation_ID;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->Name;
    }
}