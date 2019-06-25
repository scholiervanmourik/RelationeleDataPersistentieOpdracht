<?php

namespace smd;  // declare name space (location of the file)
use mysqli; // wat doet dit ? 

// start class Database (object)
class Database
{
    // make values unchangeable (const)
    const SERVERNAME = 'localhost',
        USERNAME = 'root',
        PASSWORD = 'root',
        DBNAME = 'support my day';
    // maak het var beschikbaar buiten het object. (static)
    static $conn; 

    // method get connection 
    public static function getConnection()
    {
        // if var $conn is not set start a new sql with (value's)
        if (!isset($conn)) $conn = new mysqli(self::SERVERNAME, self::USERNAME, self::PASSWORD, self::DBNAME);
        return $conn;
    }
}

// difference between ($this->val) and (self::val)
// $this->val is a non static value
// self::val is a static value