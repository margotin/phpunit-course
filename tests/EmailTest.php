<?php

use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
     * @dataProvider emailsProvider     
     */
    public function testValidEmail($email)
    {
        $this->assertRegExp('/^.+\@\S+\.\S+$/', $email);
    }

    public function emailsProvider()
    {
        return [
            ['dsds@ffs.df'],
            ['dsds@ffs.dffdfd'],
            ['dsds@ffs.fr'],
        ];
    }

    /** @dataProvider numbersProvider */
    public function testMath($a, $b, $expected)
    {
        $result = $a * $b;
        $this->assertEquals($expected, $result);
    }

    public function numbersProvider()
    {
        return [
            [1, 2, 2],
            [2, 2, 4],
            [3, 3, 9],
        ];
    }
}
