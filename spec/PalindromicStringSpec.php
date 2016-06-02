<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PalindromicStringSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->make('aba')->shouldBe('YES');
        $this->make('aabbaa')->shouldBe('YES');
        $this->make('abc')->shouldBe('NO');
    }
}
