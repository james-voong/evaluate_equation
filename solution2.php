<?php

namespace Solution2;

class Solution {
    public static function eq(string $exp) : int {
        // Remove all whitespace from the expression.
        $exp = str_replace(' ', '', $exp);

        // Create a map so that each number and operator is its own element.
        $map = [];

        // As I'll be splitting the numbers into 1 char pieces, keep track of ongoing ones.
        $inprogressnumbers = [];

        /* Attempt to create a map. It will look like this:
        $exp = "3*4/12"
        $map = [
            [0] => 3,
            [1] => 'multiply',
            [2] => 4,
            [3] => 'divide',
            [4] => 12
        ];
        */
        foreach (str_split($exp) as $value) {
            switch($value) {
                case '*':
                    $map[] = implode($inprogressnumbers);
                    $map[] = '*';
                    $inprogressnumbers = [];
                    break;
                case '/':
                    $map[] = implode($inprogressnumbers);
                    $map[] = '/';
                    $inprogressnumbers = [];
                    break;
                default:
                    $inprogressnumbers[] = $value;
                    continue;
                    break;

            }
        }
        // The last number isn't added into $map during the loop, add it in now.
        $map[] = implode($inprogressnumbers);

        $result = 0;
        foreach ($map as $key => $element) {
            if ($key == 0) {
                $result = $element;
            }
            switch ($element) {
                case '*':
                    $result = $result * $map[$key + 1];
                    break;
                case '/':
                    $result = $result / $map[$key + 1];
                    break;
            }

        }

        return $result;
    }

    // TODO Assess whether still needed.
    /**
     * Takes an expression, checks if there's any multiplication, and does the multiplication.
     *
     * @param string $exp
     *
     * @return int
     */
    public static function multiplication(string $exp) : ?int {
        $result = NULL;
        $numbers_to_be_multiplied = explode("*", $exp);

        // The count will be >1 if there is anything to be multiplied.
        if (count($numbers_to_be_multiplied) > 1) {
            foreach ($numbers_to_be_multiplied as $key => $number_to_be_multiplied) {

                // Set the first element and continue, otherwise it will multiply against itself.
                if ($key == 0) {
                    $result = $number_to_be_multiplied;
                    continue;
                }
                //TODO remove trim()
                $result = trim($result) * trim($number_to_be_multiplied);
            }
        }

        return $result;
    }

    // TODO Assess whether still needed.
    /**
     * Takes an expression, checks if there's any division, and does the divison.
     *
     * @param string $exp
     *
     * @return int
     */
    public static function division(string $exp) : ?int {
        $result = NULL;
        $numbers_to_be_divided = explode("/", $exp);

        // The count will be >1 if there is anything to be divided.
        if (count($numbers_to_be_divided) > 1) {
            foreach ($numbers_to_be_divided as $key => $number_to_be_divided) {

                // Set the first element and continue, otherwise it will divide against itself.
                if ($key == 0) {
                    $result = $number_to_be_divided;
                    continue;
                }
                //TODO remove trim()
                $result = trim($result) / trim($number_to_be_divided);
            }
        }

        return $result;
    }

    // TODO Assess whether still needed.
    /**
     * Check if ready to be evaluated.
     *
     */
    function check($array, $char) {
        $symbols = ['+', '-', '*', '/'];

        $arr = str_split($array, 1);
        foreach ($symbols as $symbol) {
            if (in_array($symbol, $arr)) {

            }
        }
    }
}
