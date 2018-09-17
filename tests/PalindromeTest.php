<?php

namespace Exercises\Test;

use Exercises;
use PHPUnit\Framework\TestCase;

class PalindromeTest extends TestCase
{
    public function addDataProvider()
    {
        return [
            ['mary', false],
            ['ana', true],
            ['a9x00000000x9a', true],
        ];
    }

    /**
     * @covers Exercises\palindrome()
     * @dataProvider addDataProvider
     */
    public function testPalindrome($a, $expected)
    {
        $result = Exercises\palindrome($a);
        $this->assertEquals($expected, $result);
    }
}
