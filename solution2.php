<?php

function eq(string $exp) : int {
    multiplication($exp);


    return 0;
}

function multiplication($exp) {
    $result = NULL;
    $multiplication = explode("*", $exp);

    var_dump($multiplication);
    if (count($multiplication) == 2) {
        $result = trim($multiplication[0]) * trim($multiplication[1]);
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
multiplication($mul_test);