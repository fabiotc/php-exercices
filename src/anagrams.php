<?php

namespace Exercises;

/**
 * Check to see if two provided strings are anagrams of eachother
 *
 * @param stringA $stringA first string for comparation
 * @param stringB $stringB second string for comparation
 *
 * @return bool
 */

function anagrams(string $stringA, string $stringB): bool
{
    $cleanedStringA = cleanChars($stringA);
    $cleanedStringB = cleanChars($stringB);

    return count_chars($cleanedStringA, 1) === count_chars($cleanedStringB, 1);
}

function cleanChars($string)
{
    // Allow only letters
    $result = preg_replace("/[^a-zA-Z]/", '', $string);

    // Make lowercase
    $result = strtolower($result);

    return $result;
}
