<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FactorialSpec extends ObjectBehavior
{
    function it_tests_factorial_generation()
    {
        $this->make(2)->shouldBe(2);
        $this->make(4)->shouldBe(24);
        $this->make(7)->shouldBe(5040);
    }
}
