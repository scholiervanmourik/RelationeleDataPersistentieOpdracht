<?php

class Organisation
{
    private $Organisation_ID, $Name;


    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getOrganisationID()
    {
        return $this->Organisation_ID;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }
}