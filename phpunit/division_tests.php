<?php

use PHPUnit\Framework\TestCase;
use Solution2\Solution;

final class DivisionTest extends TestCase {

    public function testTwoParams() : void {
        $this->assertEquals(
            solution::division("12/4"),
            3
        );
    }

    public function testThreeParams() : void {
        $this->assertEquals(
            solution::division("125/5/5"),
            5
        );
    }

}