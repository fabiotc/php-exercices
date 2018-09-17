<?php

namespace Exercises\Test;

use Exercises;
use PHPUnit\Framework\TestCase;

class AnagramsTest extends TestCase
{
    public function addDataProvider()
    {
        return [
            ['Fabio Tadeu da Costa', 'fabiotadeudacosta', true],
            [' Super  ultra  extra ', 'extra ultrasuper', true],
            ['Paul Jhon George Ringo', 'Ringo - Jhon - Paul - George', true],
            ['One One', 'Two two two', false],
            ['Paul Jhon George Ringo', 'Paul Jhon George and Ringo', false],
        ];
    }

    /**
     * @covers Exercises\anagrams()
     * @dataProvider addDataProvider
     */
    public function testAnagrams($a, $b, $expected)
    {
        $result = Exercises\anagrams($a, $b);
        $this->assertEquals($expected, $result);
    }
}
