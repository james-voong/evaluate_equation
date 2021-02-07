<?php

/**
 * Evaluates an equation that was a string.
 * This solution makes use of eval().
 *
 * @param string $exp The expression
 *
 * @return int The answer
 */
namespace Solution1;

class Solution {
    function eq(string $exp) : int {
        eval('$result = ('.$exp.');');
        return $result;
    }
}