<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralConverterSpec extends ObjectBehavior
{
    function it_returns_roman_for_1()
    {
        $this->convert(1)->shouldReturn("I");
    }
    
    function it_returns_roman_for_2()
    {
        $this->convert(2)->shouldReturn("II");
    }
    
    function it_returns_roman_for_3()
    {
        $this->convert(3)->shouldReturn("III");
    }
    
    function it_returns_roman_for_4()
    {
        $this->convert(4)->shouldReturn("IV");
    }

    function it_returns_roman_for_5()
    {
        $this->convert(5)->shouldReturn("V");
    }

    function it_returns_roman_for_6()
    {
        $this->convert(6)->shouldReturn("VI");
    }

    function it_returns_roman_for_7()
    {
        $this->convert(7)->shouldReturn("VII");
    }

    function it_returns_roman_for_8()
    {
        $this->convert(8)->shouldReturn("VIII");
    }

    function it_returns_roman_for_9()
    {
        $this->convert(9)->shouldReturn("IX");
    }

    function it_returns_roman_for_10()
    {
        $this->convert(10)->shouldReturn("X");
    }
    
    function it_returns_roman_for_11()
    {
        $this->convert(11)->shouldReturn("XI");
    }
    function it_returns_roman_for_12()
    {
        $this->convert(12)->shouldReturn("XII");
    }
    
    function it_returns_roman_for_14()
    {
        $this->convert(14)->shouldReturn("XIV");
    }
    
    function it_returns_roman_for_18()
    {
        $this->convert(18)->shouldReturn("XVIII");
    }
    
    function it_returns_roman_for_27()
    {
        $this->convert(27)->shouldReturn("XXVII");
    }
    function it_returns_roman_for_43()
    {
        $this->convert(43)->shouldReturn("XLIII");
    }
    
    function it_returns_roman_for_50()
    {
        $this->convert(50)->shouldReturn("L");
    }
    
    function it_returns_roman_for_78()
    {
        $this->convert(78)->shouldReturn("LXXVIII");
    }
    
    function it_returns_roman_for_83()
    {
        $this->convert(83)->shouldReturn("LXXXIII");
    }
    
    function it_returns_roman_for_90()
    {
        $this->convert(90)->shouldReturn("XC");
    }
    
    function it_returns_roman_for_99()
    {
        $this->convert(99)->shouldReturn("XCIX");
    }
    
    function it_returns_roman_for_100()
    {
        $this->convert(100)->shouldReturn("C");
    }
    
    function it_returns_roman_for_125()
    {
        $this->convert(125)->shouldReturn("CXXV");
    }

    function it_returns_roman_for_289()
    {
        $this->convert(289)->shouldReturn("CCLXXXIX");
    }
    
    function it_returns_roman_for_400()
    {
        $this->convert(400)->shouldReturn("CD");
    }
    
    function it_returns_roman_for_500()
    {
        $this->convert(500)->shouldReturn("D");
    }
    
    function it_returns_roman_for_987()
    {
        $this->convert(987)->shouldReturn("CMLXXXVII");
    }

    function it_returns_roman_for_1000()
    {
        $this->convert(1000)->shouldReturn("M");
    }
}
