<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PrimeFactors');
    }

    function it_reutrns_empty_array_for_1()
    {
        $this->generate(1)->shouldReturn([]);
    }

    function it_returns_2_for_2()
    {
        $this->generate(2)->shouldReturn([2]);
    }

    function it_returns_3_for_3()
    {
        $this->generate(3)->shouldReturn([3]);
    }

    function it_returns_2_2_for_4()
    {
        $this->generate(4)->shouldReturn([2,2]);
    }

    function it_returns_5_for_5()
    {
        $this->generate(5)->shouldReturn([5]);
    }

    function it_returns_2_3_for_6()
    {
        $this->generate(6)->shouldReturn([2,3]);
    }

    function it_returns_2_2_2_for_8()
    {
        $this->generate(8)->shouldReturn([2,2,2]);
    }

    function it_returns_3_3_for_9()
    {
        $this->generate(9)->shouldReturn([3,3]);
    }

    function it_returns_2_2_3_for_12()
    {
        $this->generate(12)->shouldReturn([2,2,3]);
    }

    function it_returns_13_for_13()
    {
        $this->generate(13)->shouldReturn([13]);
    }

    function it_returns_2_2_2_5_5_5_for_1000()
    {
        $this->generate(1000)->shouldReturn([2,2,2,5,5,5]);
    }

    function it_returns_2_2_5_5_17_for_1700()
    {
        $this->generate(1700)->shouldReturn([2,2,5,5,17]);
    }
}
