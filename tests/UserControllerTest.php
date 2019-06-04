<?php

use PHPUnit\Framework\TestCase;
use smd\controllers\UserController;

final class UserControllerTest extends TestCase
{
    // Will run before each test
    protected function setUp()
    {
        $stub = $this->getMockBuilder('UserRepository')
            ->getMock();

        $stub->method('register')
            ->willReturn(true);
        $stub->method('login')
            ->willReturn(true);
    }

    public function testCannotBeRegisteredFromIncorrectEmail()
    {
        $userController = new UserController();
        $this->assertFalse($userController->register('test', 'test', 'test', 'test', 'test', 'user')['success']);
    }

    public function testCanBeRegistered()
    {
        $userController = new UserController();
        $this->assertTrue($userController->register('test@test.nl', 'test', 'test', 'test', 'test', 'user')['success']);
    }
}