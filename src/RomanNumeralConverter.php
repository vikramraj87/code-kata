<?php

class RomanNumeralConverter
{
    private $symbols;

    function __construct()
    {
        $this->symbols = [
            "I", "V", "X", "L", "C", "D", "M"
        ];
    }


    public function convert($number)
    {
        if($number < 1) {
            throw new \Exception("No zero in roman numerals");
        }
        if($number > 3999) {
            throw new \Exception("Haven't figured it out for more than 3999");
        }

        $parts = [];
        for($position = 0; $number > 0; $number = intval($number / 10), $position += 2) {
            $curr = $number % 10;
            if ($curr != 0) {
                $majorSymbolIndex = intval(($curr + 1) / 5);
                $adder = $curr - ($majorSymbolIndex * 5);
                $majorSymbolIndex += $position;
                $majorSymbol = $this->symbols[$majorSymbolIndex];

                if ($majorSymbolIndex == $position) {
                    $parts[] = str_repeat($majorSymbol, $adder);
                } else {
                    $tmp = $majorSymbol;
                    if ($adder < 0) {
                        $parts[] = $this->symbols[$position] . $tmp;
                    } else {
                        $tmp .= str_repeat($this->symbols[$position], $adder);
                        $parts[] = $tmp;
                    }
                }
            }
        }
        return implode("", array_reverse($parts));
    }
}
