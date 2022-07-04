<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {

        $calculator = new Calculator;
        $result = $calculator->add(20, 5);

        $this->assertEquals(25, $result);
    }
    public function testsubtract()
    {

        $calculator = new Calculator;
        $result = $calculator->subtract(20, 5);

        $this->assertEquals(15, $result);
    }
    public function testmultiply()
    {

        $calculator = new Calculator;
        $result = $calculator->multiply(20, 5);

        $this->assertEquals(3, $result);
    }
    public function testdivide()
    {

        $calculator = new Calculator;
        $result = $calculator->divide(20, 5);

        $this->assertEquals(4, $result);
    }
}
