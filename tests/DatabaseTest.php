<?php

use PHPUnit\Framework\TestCase;
use smd\Database;

final class DatabaseTest extends TestCase
{
    public function testCanGetAConnection()
    {
        $this->assertInstanceOf(mysqli::class, Database::getConnection());
    }
}