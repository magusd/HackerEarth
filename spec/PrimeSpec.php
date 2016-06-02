<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class isPrimeSpec extends ObjectBehavior
{
    function it_tries_a_lot_of_primes()
    {
        $this->check(2)->shouleBe(true);
        $this->check(3)->shouleBe(true);
        $this->check(5)->shouleBe(true);
        $this->check(7)->shouleBe(true);
        $this->check(11)->shouleBe(true);
        $this->check(13)->shouleBe(true);
        $this->check(17)->shouleBe(true);
        $this->check(19)->shouleBe(true);
        $this->check(23)->shouleBe(true);
        $this->check(29)->shouleBe(true);
        $this->check(31)->shouleBe(true);
        $this->check(37)->shouleBe(true);
        $this->check(41)->shouleBe(true);
        $this->check(43)->shouleBe(true);
        $this->check(47)->shouleBe(true);
        $this->check(53)->shouleBe(true);
        $this->check(59)->shouleBe(true);
        $this->check(61)->shouleBe(true);
        $this->check(67)->shouleBe(true);
        $this->check(71)->shouleBe(true);
        $this->check(73)->shouleBe(true);
        $this->check(79)->shouleBe(true);
        $this->check(83)->shouleBe(true);
        $this->check(89)->shouleBe(true);
        $this->check(97)->shouleBe(true);
        $this->check(103)->shouldBe(true);
        $this->check(107)->shouldBe(true);
        $this->check(109)->shouldBe(true);
        $this->check(113)->shouldBe(true);

        $this->check(127)->shouldBe(true);
        $this->check(131)->shouldBe(true);
        $this->check(137)->shouldBe(true);
        $this->check(139)->shouldBe(true);
        $this->check(149)->shouldBe(true);
        $this->check(151)->shouldBe(true);
        $this->check(157)->shouldBe(true);
        $this->check(163)->shouldBe(true);
        $this->check(167)->shouldBe(true);
        $this->check(173)->shouldBe(true);

        $this->check(179)->shouldBe(true);
        $this->check(181)->shouldBe(true);
        $this->check(191)->shouldBe(true);
        $this->check(193)->shouldBe(true);
        $this->check(197)->shouldBe(true);
        $this->check(199)->shouldBe(true);
        $this->check(211)->shouldBe(true);
        $this->check(223)->shouldBe(true);
        $this->check(227)->shouldBe(true);
        $this->check(229)->shouldBe(true);

        $this->check(233)->shouldBe(true);
        $this->check(239)->shouldBe(true);
        $this->check(241)->shouldBe(true);
        $this->check(251)->shouldBe(true);
        $this->check(257)->shouldBe(true);
        $this->check(263)->shouldBe(true);
        $this->check(269)->shouldBe(true);
        $this->check(271)->shouldBe(true);
        $this->check(277)->shouldBe(true);
        $this->check(281)->shouldBe(true);

        $this->check(283)->shouldBe(true);
        $this->check(293)->shouldBe(true);
        $this->check(307)->shouldBe(true);
        $this->check(311)->shouldBe(true);
        $this->check(313)->shouldBe(true);
        $this->check(317)->shouldBe(true);
        $this->check(331)->shouldBe(true);
        $this->check(337)->shouldBe(true);
        $this->check(347)->shouldBe(true);
        $this->check(349)->shouldBe(true);

        $this->check(353)->shouldBe(true);
        $this->check(359)->shouldBe(true);
        $this->check(367)->shouldBe(true);
        $this->check(373)->shouldBe(true);
        $this->check(379)->shouldBe(true);
        $this->check(383)->shouldBe(true);
        $this->check(389)->shouldBe(true);
        $this->check(397)->shouldBe(true);
        $this->check(401)->shouldBe(true);
        $this->check(409)->shouldBe(true);

        $this->check(419)->shouldBe(true);
        $this->check(421)->shouldBe(true);
        $this->check(431)->shouldBe(true);
        $this->check(433)->shouldBe(true);
        $this->check(439)->shouldBe(true);
        $this->check(443)->shouldBe(true);
        $this->check(449)->shouldBe(true);
        $this->check(457)->shouldBe(true);
        $this->check(461)->shouldBe(true);
        $this->check(463)->shouldBe(true);

        $this->check(467)->shouldBe(true);
        $this->check(479)->shouldBe(true);
        $this->check(487)->shouldBe(true);
        $this->check(491)->shouldBe(true);
        $this->check(499)->shouldBe(true);
        $this->check(503)->shouldBe(true);
        $this->check(509)->shouldBe(true);
        $this->check(521)->shouldBe(true);
        $this->check(523)->shouldBe(true);
        $this->check(541)->shouldBe(true);

        $this->check(547)->shouldBe(true);
        $this->check(557)->shouldBe(true);
        $this->check(563)->shouldBe(true);
        $this->check(569)->shouldBe(true);
        $this->check(571)->shouldBe(true);
        $this->check(577)->shouldBe(true);
        $this->check(587)->shouldBe(true);
        $this->check(593)->shouldBe(true);
        $this->check(599)->shouldBe(true);
        $this->check(601)->shouldBe(true);
    }
}
