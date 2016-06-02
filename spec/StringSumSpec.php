<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringSumSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->sum('aba')->shouldBe(4);
    }
}
