<?php

namespace smd\models;
// het aan maken van een object (class)
class User
{
    // set attriut's on private (only readable in this class) * public and protected
    private $Email, $Screen_Name, $First_Name, $Last_Name, $Password, $Role, $Image;

    //start method (get te screen name of the User)
    // : string stands for return  type declaration
    public function getScreenName(): string
    {
        // return's the Screen_Name as a string
        return $this->Screen_Name;
    }

    //start method (get te screen name of the User)
    // : string stands for return  type declaration
    public function getFirstName(): string
    {
        // return's the First_Name as a string
        return $this->First_Name;
    }

    //start method (get te screen name of the User)
    // : string stands for return  type declaration
    public function getLastName(): string
    {
        // return's the Last_Name as a string
        return $this->Last_Name;
    }

    //start method (get te screen name of the User)
    // : string stands for return  type declaration
    public function getEmail(): string
    {
        // return's the Email as a string
        return $this->Email;
    }

    //start method (get te screen name of the User)
    // : string stands for return  type declaration
    public function getPassword(): string
    {
        // return's the Password as a string
        // get string value without formatting™
        return strval($this->Password);
    }

    //start method (get te screen name of the User)
    // : string stands for return  type declaration
    public function getRole(): string
    {
        // return's the Role as a string
        return $this->Role;
    }

    //start method (get te screen name of the User)
    // : string stands for return  type declaration
    public function getImage(): ?string
    {
        // return's the Image as a string
        return $this->Image;
    }
}