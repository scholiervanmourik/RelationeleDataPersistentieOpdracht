<?php

namespace smd\models;

class Festival
{
    private $Name, $Festival_ID;

    public function __construct()
    {
    }

    public function getName(): string
    {
        return $this->Name;
    }

    public function getFestivalID(): string
    {
        return $this->Festival_ID;
    }
}