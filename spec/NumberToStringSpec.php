<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumberToStringSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('NumberToString');
    }

    function it_returns_zero_for_0()
    {
        $this->generate(0)->shouldReturn('zero');
    }

    function it_returns_one_for_1()
    {
        $this->generate(1)->shouldReturn('one');
    }

    function it_returns_four_for_4()
    {
        $this->generate(4)->shouldReturn('four');
    }

    function it_returns_string_for_10()
    {
        $this->generate(10)->shouldReturn('ten');
    }

    function it_returns_string_for_11()
    {
        $this->generate(11)->shouldReturn('eleven');
    }

    function it_returns_string_for_12()
    {
        $this->generate(12)->shouldReturn('twelve');
    }

    function it_returns_string_for_16()
    {
        $this->generate(16)->shouldReturn('sixteen');
    }

    function it_returns_string_for_20()
    {
        $this->generate(20)->shouldReturn('twenty');
    }

    function it_returns_string_for_21()
    {
        $this->generate(21)->shouldReturn('twenty one');
    }

    function it_returns_string_for_23()
    {
        $this->generate(23)->shouldReturn('twenty three');
    }

    function it_returns_string_for_27()
    {
        $this->generate(27)->shouldReturn('twenty seven');
    }

    function it_returns_string_for_39()
    {
        $this->generate(39)->shouldReturn('thirty nine');
    }

    function it_returns_string_for_40()
    {
        $this->generate(40)->shouldReturn('forty');
    }

    function it_returns_string_for_41()
    {
        $this->generate(41)->shouldReturn("forty one");
    }

    function it_returns_string_for_49()
    {
        $this->generate(49)->shouldReturn("forty nine");
    }

    function it_returns_string_for_99()
    {
        $this->generate(99)->shouldReturn("ninety nine");
    }

    function it_returns_string_for_100()
    {
        $this->generate(100)->shouldReturn("one hundred");
    }

    function it_returns_string_for_107()
    {
        $this->generate(107)->shouldReturn("one hundred and seven");
    }
    
    function it_returns_string_for_109()
    {
        $this->generate(109)->shouldReturn("one hundred and nine");
    }

    function it_returns_string_for_115()
    {
        $this->generate(115)->shouldReturn("one hundred and fifteen");
    }

    function it_returns_string_for_140()
    {
        $this->generate(140)->shouldReturn("one hundred and forty");
    }

    function it_returns_string_for_246()
    {
        $this->generate(246)->shouldReturn("two hundred and forty six");
    }

    function it_returns_string_for_475()
    {
        $this->generate(475)->shouldReturn("four hundred and seventy five");
    }

    function it_returns_string_for_550()
    {
        $this->generate(550)->shouldReturn("five hundred and fifty");
    }

    function it_returns_string_for_999()
    {
        $this->generate(999)->shouldReturn("nine hundred and ninety nine");
    }
    
    function it_returns_string_for_1000()
    {
        $this->generate(1000)->shouldReturn("one thousand");
    }

    function it_returns_string_for_1007()
    {
        $this->generate(1007)->shouldReturn("one thousand and seven");
    }

    function it_returns_string_for_1010()
    {
        $this->generate(1010)->shouldReturn("one thousand and ten");
    }

    function it_returns_string_for_1015()
    {
        $this->generate(1015)->shouldReturn("one thousand and fifteen");
    }

    function it_returns_string_for_1019()
    {
        $this->generate(1019)->shouldReturn("one thousand and nineteen");
    }

    function it_returns_string_for_1020()
    {
        $this->generate(1020)->shouldReturn("one thousand and twenty");
    }

    function it_returns_string_for_1078()
    {
        $this->generate(1078)->shouldReturn("one thousand and seventy eight");
    }

    function it_returns_string_for_1100()
    {
        $this->generate(1100)->shouldReturn("one thousand and one hundred");
    }

    function it_returns_string_for_1167()
    {
        $this->generate(1167)->shouldReturn("one thousand, one hundred and sixty seven");
    }

    function it_returns_string_for_1193()
    {
        $this->generate(1193)->shouldReturn("one thousand, one hundred and ninety three");
    }

    function it_returns_string_for_1207()
    {
        $this->generate(1207)->shouldReturn("one thousand, two hundred and seven");
    }

    function it_returns_string_for_13000()
    {
        $this->generate(13000)->shouldReturn("thirteen thousand");
    }

    function it_returns_string_for_49746()
    {
        $this->generate(49746)->shouldReturn("forty nine thousand, seven hundred and forty six");
    }

    function it_returns_string_for_100000()
    {
        $this->generate(100000)->shouldReturn("one hundred thousand");
    }

    function it_returns_string_for_123456()
    {
        $this->generate(123456)->shouldReturn("one hundred and twenty three thousand, four hundred and fifty six");
    }

    function it_returns_string_for_324567000()
    {
        $this->generate(324567000)->shouldReturn("three hundred and twenty four million, five hundred and sixty seven thousand");
    }

    function it_returns_string_for_3000000000()
    {
        $this->generate(3000000000)->shouldReturn("three billion");
    }
    
    function it_returns_string_for_98000000017()
    {
        $this->generate(98000000017)->shouldReturn("ninety eight billion and seventeen");
    }
}
