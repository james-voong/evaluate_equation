<?php

use PHPUnit\Framework\TestCase;
use Solution2\Solution;

final class MultiplicationTest extends TestCase {

    public function testTwoParams() : void {
        $this->assertEquals(
            solution::multiplication("3*4"),
            12
        );
    }

    public function testThreeParams() : void {
        $this->assertEquals(
            solution::multiplication("5*5*7"),
            175
        );
    }

}