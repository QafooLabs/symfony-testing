<?php

namespace AppBundle\Tests;

class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testGetterSetter()
    {
        $calculator = new Calculator();

        $this->assertEquals(2, $calculator->add(1, 1));
    }
}

class Calculator
{
    public function add($x, $y)
    {
        return $x - $y;
    }
}
