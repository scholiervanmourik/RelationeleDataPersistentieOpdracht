<?php
	class Database {
	    const SERVERNAME = '127.0.0.1',
            USERNAME = 'root',
            PASSWORD = '',
            DBNAME = 'support my day';
	    static $conn;

	    public static function getConnection() {
            if (!isset($conn)) $conn = new mysqli(self::SERVERNAME, self::USERNAME, self::PASSWORD, self::DBNAME);
	        return $conn;
	    }
    }