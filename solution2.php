<?php

function eq(string $exp) : int {
    multiplication($exp);


    return 0;
}

/**
 * Takes an expression, checks if there's any multiplication, and does the multiplication.
 *
 * @param string $exp
 *
 * @return int
 */
function multiplication(string $exp) : ?int {
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

// TODO use PHPUnit for this.
$test1 = "3 + 4";
$test2 = "3 * 4";
$test3 = "12 / 4";
$test4 = "8 - 7";

// echo eq($test1) == 7 ? "Test1 passed" : "Test1 failed. Result " . eq($test1) . "\n";
// echo eq($test2) == 12 ? "Test2 passed" : "Test2 failed. Result " . eq($test2) . "\n";
// echo eq($test3) == 3 ? "Test3 passed" : "Test3 failed. Result " . eq($test3) . "\n";
// echo eq($test4) == 1 ? "Test4 passed" : "Test4 failed. Result " . eq($test4) . "\n";

$mul_test = "3*4*2";
var_dump(multiplication($mul_test));