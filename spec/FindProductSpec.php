<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FindProductSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->make('5','1 2 3 4 5')->shouldBe(120);

    }
}
