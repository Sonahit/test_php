<?php

namespace App;

class Simple
{
    /**
     * Add a to b
     *
     * @param integer $a Value
     * @param integer $b Value
     *
     * @return integer
     */
    public function add(int $a, int $b)
    {
        return $a + $b;
    }

    /**
     * Subtract a from b
     *
     * @param integer $a Value
     * @param integer $b Value
     *
     * @return integer
     */
    public function subtract(int $a, int $b)
    {
        //
    }

    /**
     * Multiply a to b
     *
     * @param integer $a Value
     * @param integer $b Value
     *
     * @return integer
     */
    public function multiply(int $a, int $b)
    {
        //
    }

    /**
     * Divide a to b
     *
     * @param integer $a Value
     * @param integer $b Value
     *
     * @return integer
     */
    public function division(int $a, int $b)
    {
        //
    }

    /**
     * Replace chars at $haystack by string $expression with $replace
     *
     * @param string $expression Main expression
     * @param string $haystack   Subject
     * @param string $replace    Replacements
     *
     * @return string
     */
    public function replaceStrings(string $expression, string $haystack, string $replace)
    {
        //
    }

    /**
     * Replace chars at $haystack by regex $expression with $replace
     *
     * @param string $expression Main expression
     * @param string $haystack   Subject
     * @param string $replace    Replacements
     *
     * @return string
     */
    public function pregReplaceStrings(string $expression, string $haystack, string $replace)
    {
        //
    }

    /**
     * Concatenate strings
     *
     * @param string $first  First string
     * @param string $second Second string
     *
     * @return string
     */
    public function concatStrings(string $first, string $second)
    {
        //
    }

    /**
     * Merge arrays into one
     *
     * @param array $first  First array
     * @param array $second Second array
     *
     * @return array
     */
    public function arrayMerge(array $first, array $second)
    {
        //
    }

    /**
     * Return unique values from array
     *
     * @param array $array Array
     *
     * @return array
     */
    public function arrayUnique(array $array)
    {
        //
    }

    /**
     * Return intersect array against $first that compares with $second
     *
     * @param array $first  Value
     * @param array $second Value
     *
     * @return array
     */
    public function arrayIntersects(array $first, array $second)
    {
        //
    }

    /**
     * Return difference array against $first that compares with $second
     *
     * @param array $first  Value
     * @param array $second Value
     *
     * @return array
     */
    public function arrayDiff(array $first, array $second)
    {
        //
    }
}
