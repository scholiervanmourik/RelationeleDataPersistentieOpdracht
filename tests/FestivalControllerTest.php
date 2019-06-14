<?php


use PHPUnit\Framework\TestCase;
use smd\controllers\FestivalController;

final class FestivalControllerTest extends TestCase
{
    private $festivalController;
    private $stub;

    // Will run before each test
    protected function setUp()
    {
        $this->stub = $this->getMockBuilder('smd\repositories\FestivalRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $this->stub->method('findByName')
            ->willReturn(array('num_rows' => 0));
        $this->festivalController = new FestivalController($this->stub);
    }

    public function testCanDelete()
    {
        $this->stub->method('delete')
            ->willReturn(true);
        $this->assertTrue($this->festivalController->removeFestival(1)['success']);
    }

    public function testCannotDelete()
    {
        $this->stub->method('delete')
            ->willReturn(false);
        $this->assertFalse($this->festivalController->removeFestival(1)['success']);
    }

    public function canFindByName()
    {
        $this->assertTrue($this->festivalController->findByName('test'));
    }
}