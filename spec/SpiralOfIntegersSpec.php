<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SpiralOfIntegersSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('SpiralOfIntegers');
    }
    public function it_blabla() {
        $this->make();
    }
}
