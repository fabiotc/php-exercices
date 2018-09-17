<?php

namespace Exercises;

/**
 * Given a string, return true if the string is a palindrome
 * or false if it is not.  Palindromes are strings that
 * form the same word if it is reversed. *Do* include spaces
 * and punctuation in determining if the string is a palindrome.
 *
 * @param string $stringA first string for comparation
 *
 * @return bool
 */

function palindrome(string $string): bool
{
    // convert to array
    $result = str_split($string);

    // reverse
    $reversedArray = array_reverse($result);

    // convert to string
    $stringResulted = implode('', $reversedArray);

    return $string === $stringResulted;
}
