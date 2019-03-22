<?php
	class Database {
	    const SERVERNAME = 'localhost',
            USERNAME = 'root',
            PASSWORD = '',
            DBNAME = 'support my day';

	    public static function getConnection() {
            return new mysqli(self::SERVERNAME, self::USERNAME, self::PASSWORD, self::DBNAME);
	    }
    }