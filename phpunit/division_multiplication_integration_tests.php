<?php

use PHPUnit\Framework\TestCase;
use Solution2\Solution;

final class DivisionMultiplicationIntegrationTest extends TestCase {

    public function testOneOfEachMultiplicationFirst() : void {
        $this->assertEquals(
            solution::eq("3*4/12"),
            1
        );
    }

    public function testOneOfEachDivisionFirst() : void {
        $this->assertEquals(
            solution::eq("100/10*5"),
            50
        );
    }

    public function testMultipleDivisionsOneMultiplication() : void {
        $this->assertEquals(
            solution::eq("1000/100/5*6"),
            6
        );
    }

    public function testMultipleMultiplicationsOneDivision() : void {
        $this->assertEquals(
            solution::eq("5*6*8/2"),
            120
        );
    }

    public function testMultipleOfEachDivisionFirst() : void {
        $this->assertEquals(
            solution::eq("72/8/3*7*4"),
            84
        );
    }

    public function testMultipleOfEachMultiplicationFirst() : void {
        $this->assertEquals(
            solution::eq("4*8*9/4/8"),
            9
        );
    }

    public function testMultipleOfEachMixedOrder() : void {
        $this->assertEquals(
            solution::eq("5*8/2*11"),
            220
        );

        $this->assertEquals(
            solution::eq("40/10*9*8/2"),
            144
        );
    }

}