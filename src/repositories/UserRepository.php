<?php

namespace smd\repositories;  // declare name space (location of the file)
use smd\models\User; 

// create class user repository an extendsion from (repository.php)
class UserRepository extends Repository
{

    // create method __construct (this will be triggerd when the class will initialise)
    public function __construct($conn)
    {
        // override connection from parent:: (repository.php)
        parent::__construct($conn);
    }

    // register method with string variables (email, password screenName firstName lastName and role) role has a default value of user
    public function register(string $email, string $password, string $screenName, string $firstName, string $lastName, string $role = 'user')
    {
        // stmt = statement
        // prepare = an SQL statement 
        $stmt = $this->prepare('
				INSERT INTO `users` (`Email`, `Password`, `Screen_Name`, `First_Name`, `Last_Name`, `Role`)
                VALUES (?, ?, ?, ?, ?, ?); 
			');
        $hashed = password_hash($password, PASSWORD_DEFAULT);
        // assign value's to the SQL in order. 
        $stmt->bind_param('ssssss', $email, $hashed, $screenName, $firstName, $lastName, $role);
        // True or False
        return $stmt->execute();
    }

    /**
     * @param string $email
     * @param string $password
     * @return User|null
     */
    // login method with string variables (email and password)
    public function login(string $email, string $password)
    {
        // create user var. 
        $user = $this->getByEmail($email);
        // check if user and password are set (password has a verify)
        if (isset($user) && password_verify($password, $user->getPassword())) {
            // if the data is correct return the user
            return $user;
        }
        // esle retrun null
        return null;
    }

    /**
     * @param string $email
     * @param string $newFirstName
     * @param string $newLastName
     * @returns boolean
     */
    // edit a user method with string value's (email newFirstName newLastName)
    public function editUser(string $email, string $newFirstName, string $newLastName)
    {
        // prepare an SQL statement 
        $stmt = $this->prepare('
            UPDATE `users`
            SET `First_Name` = ?, `Last_Name` = ?
            WHERE `Email` = ?;
        ');
        // place variable's in the SQL statement in order (email is used to find the correct user)
        $stmt->bind_param('sss', $newFirstName, $newLastName, $email);
        // True or False
        return $stmt->execute();
    }

    // set organisation method (add an organisation id to the user where email is ..)
    public function setOrganisation(string $email, int $organisationId)
    {
        // prepare an SQL statement
        $stmt = $this->prepare('
            UPDATE `users`
            SET `Organisation_ID` = ?
            WHERE `Email` = ?;
        ');
        // place variables in the SQL statement
        $stmt->bind_param('is', $organisationId, $email);
        // True or False
        return $stmt->execute();
    }

    // add image to a user (add a image to the user where email is ..)
    public function setImage($email, string $img)
    {
        // prepare an SQL statement 
        $stmt = $this->prepare('
            UPDATE `users`
            SET `Image` = ?
            WHERE `Email` = ?;
        ');
        // place variables in the SQL statement
        $stmt->bind_param('ss', $img, $email);
        // True or False
        return $stmt->execute();
    }

    /**
     * @param string $email
     * @return User|null
     */
    // select user info (select * from the user where email is ..)
    public function getByEmail(string $email)
    {
        // prepare an SQL statement
        $stmt = $this->prepare('
				SELECT * FROM `users`
				WHERE `Email` = ?;
            ');
        // place variable in the SQL statement
        $stmt->bind_param('s', $email);
        // True or False
        $stmt->execute();
        // return * data from user
        return $stmt->get_result()->fetch_object('smd\models\User');
    }

    // get all user data method (select * from users)
    public function getAll()
    {
        return $this->query('SELECT * FROM `users`;');
    }
}