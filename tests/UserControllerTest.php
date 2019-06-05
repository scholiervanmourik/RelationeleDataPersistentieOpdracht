<?php

use PHPUnit\Framework\TestCase;
use smd\controllers\UserController;
use smd\Database;

final class UserControllerTest extends TestCase
{
    private $userController;

    // Will run before each test
    protected function setUp()
    {
        $stub = $this->getMockBuilder('smd\repositories\UserRepository')
            ->disableOriginalConstructor()
            ->setMethods(['register', 'login'])
            ->getMock();

        $stub->method('register')
            ->willReturn(true);
        $stub->method('login')
            ->willReturn(true);
        $this->userController = new UserController($stub);
    }

    public function testCannotBeRegisteredFromIncorrectEmail()
    {
        $this->assertFalse($this->userController->register('test', 'test', 'test', 'test', 'test', 'user')['success']);
    }

    public function testCanBeRegistered()
    {
        $this->assertTrue($this->userController->register('test@test.nl', 'test', 'test', 'test', 'test', 'user')['success']);
    }
}