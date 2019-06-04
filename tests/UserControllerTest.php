<?php

use PHPUnit\Framework\TestCase;
use smd\controllers\UserController;

final class UserControllerTest extends TestCase
{
    public function testCannotBeRegisteredFromIncorrectEmail()
    {
        $userController = new UserController();
        $this->assertEquals($userController->register('test', 'test', 'test', 'test', 'test', 'user')['success'], false);
    }
}