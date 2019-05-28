<?php

namespace smd\models;

class Festival
{
    private $Name, $Festival_ID;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @return mixed
     */
    public function getFestivalID()
    {
        return $this->Festival_ID;
    }
}