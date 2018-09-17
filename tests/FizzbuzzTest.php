<?php

namespace Exercises\Test;

use Exercises;
use PHPUnit\Framework\TestCase;

class FizzbuzzTest extends TestCase
{
    use Util\ArrayTestCaseTrait;

    public function addDataProvider()
    {
        return [
            [15, [
                1, 2, 'fizz', 4, 'buzz',
                'fizz', 7, 8, 'fizz', 'buzz',
                11, 'fizz', 13, 14, 'fizzbuzz',
            ]],
        ];
    }

    /**
     * @covers Exercises\fizzbuzz()
     * @dataProvider addDataProvider
     */
    public function testFizzbuzz($a, $expected)
    {
        $result = Exercises\fizzbuzz($a);
        $this->assertArraySimilar($expected, $result);
    }
}
