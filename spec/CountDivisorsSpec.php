<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CountDivisorsSpec extends ObjectBehavior
{
    function it_returns_10_for_1_10_1()
    {
        $this->make('1 10 1')->shouldBe(10);
        $this->make('200 300 2')->shouldBe(51);
        $this->make('567 943 3')->shouldBe(126);
        $this->make('347 1000 432')->shouldBe(2);
        $this->make('1000 1000 999')->shouldBe(0);
    }
}
