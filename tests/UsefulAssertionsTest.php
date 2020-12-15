<?php

use PHPUnit\Framework\TestCase;

class UsefulAssertionsTest extends TestCase
{
    // copore strings
    public function testAssertSame()
    {
        $expected = 'baz';
        $result = 'baz';
        $this->assertSame($expected, $result);
    }

    // compare numbers
    public function testAssertEquals()
    {
        $expected = 1;
        $result = 1;
        $this->assertEquals($expected, $result);
    }

    // 
    public function testAssertEmpty()
    {
        $this->assertEmpty([]);
    }

    // 
    public function testAssertNull()
    {
        $this->assertNull(null);
    }

    // 
    public function testAssertGreaterThan()
    {
        $expected = 1;
        $result = 2;
        $this->assertGreaterThan($expected, $result);
    }

    public function testAssertFalse()
    {
        $this->assertFalse(false);
    }

    public function testAssertTrue()
    {
        $this->assertTrue(true);
    }

    public function testAssertCount()
    {
        $expected = 2;
        $result = [1, 2];
        $this->assertCount($expected, $result);
        $this->assertCount(3, [1, 2, 3]);
    }

    public function testAssertContains()
    {
        $this->assertContains(3, [1, 2, 3]);
    }

    public function testAssertStringContainsString()
    {
        $searchFor = 'b';
        $searchIn = 'baz';
        $this->assertStringContainsString($searchFor, $searchIn);
    }

    public function testAssertInstanceOf()
    {
        // new Exception is an instance of RuntimeException ?
        $this->assertInstanceOf(Exception::class, new Exception());
    }

    public function testAssertArrayHaskey()
    {
        $this->assertArrayHasKey('baz', ['baz' => 'bar']);
    }

    public function testAssertDirectoryIsWritable()
    {
        $this->assertDirectoryIsWritable(__DIR__);
    }

    public function testAssertFileIsWritable()
    {
        $this->assertFileIsWritable(pathinfo('UsefulAssertionsTest.php', PATHINFO_DIRNAME));
    }
}
