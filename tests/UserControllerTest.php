<?php

use PHPUnit\Framework\TestCase;
use smd\controllers\UserController;
use smd\models\User;

final class UserControllerTest extends TestCase
{
    private $userController;
    private $stub;

    // Will run before each test
    protected function setUp()
    {
        $this->stub = $this->getMockBuilder('smd\repositories\UserRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $this->stub->method('editUser')
            ->willReturn(false);
        $this->userController = new UserController($this->stub);
    }

    public function testCannotBeRegisteredFromIncorrectEmail()
    {
        $this->assertFalse($this->userController->register('test', 'test', 'test', 'test', 'test', 'user')['success']);
    }

    public function testCanBeRegistered()
    {
        $this->stub->method('register')
            ->willReturn(true);
        $this->assertTrue($this->userController->register('test@test.nl', 'test', 'test', 'test', 'test', 'user')['success']);
    }

    public function testCannotBeRegistered()
    {
        $this->stub->method('register')
            ->willReturn(false);
        $this->assertFalse($this->userController->register('test@test.nl', 'test', 'test', 'test', 'test', 'user')['success']);

    }

    public function testCanLogin()
    {
        $this->stub->method('login')
            ->willReturn(true);
        $this->assertTrue($this->userController->login('test@test.nl', 'test')['success']);
    }

    public function testCannotLogin()
    {
        $this->stub->method('login')
            ->willReturn(null);
        $this->assertFalse($this->userController->login('test@test.nl', 'test')['success']);
    }

    public function testCannotLoginWithNull()
    {
        $this->stub->method('login')
            ->willReturn(true);
        $this->assertFalse($this->userController->login(null, null)['success']);
    }

    public function testLoginHasSession()
    {
        $this->stub->method('login')
            ->willReturn(new User());
        $this->userController->login('test@test.nl', 'test');
        $this->assertInstanceOf(User::class, $this->userController->getUser());
    }
}