<?php

namespace Exercises;

/**
 * Write a program that console logs the numbers
 * from 1 to n. But for multiples of three print
 * “fizz” instead of the number and for the multiples
 * of five print “buzz”. For numbers which are multiples
 * of both three and five print “fizzbuzz”.
 *
 * @param int $number
 *
 * @return array
 */

function fizzbuzz(int $number): array
{
    $fizzBuzzResult = [];

    foreach (range(1, $number) as $n) {
        if ($n % 3 === 0 && $n % 5 === 0) {
            $fizzBuzzResult[] = 'fizzbuzz';
        } elseif ($n % 3 === 0) {
            $fizzBuzzResult[] = 'fizz';
        } elseif ($n % 5 === 0) {
            $fizzBuzzResult[] = 'buzz';
        } else {
            $fizzBuzzResult[] = $n;
        }
    }

    return $fizzBuzzResult;
}
