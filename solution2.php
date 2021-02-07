<?php

namespace Solution2;

class Solution {
    function eq(string $exp) : int {
        static::multiplication($exp);


        return 0;
    }

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

                $result = trim($result) * trim($number_to_be_multiplied);
            }
        }

        return $result;
    }

    /**
     * Check if ready to be evaluated.
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
