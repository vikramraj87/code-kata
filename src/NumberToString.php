<?php

class NumberToString
{
    private $strElevenToNineteen = [
        "eleven",
        "twelve",
        "thirteen",
        "fourteen",
        "fifteen",
        "sixteen",
        "seventeen",
        "eighteen",
        "nineteen"
    ];

    private $strOnes = [
        "one",
        "two",
        "three",
        "four",
        "five",
        "six",
        "seven",
        "eight",
        "nine"
    ];

    private $strTens = [
        "ten",
        "twenty",
        "thirty",
        "forty",
        "fifty",
        "sixty",
        "seventy",
        "eighty",
        "ninety"
    ];

    private $strBigUnits = [
        "thousand",
        "million",
        "billion"
    ];

    public function generate($number)
    {
        // Convert the number to integer
        $number = intval($number);

        // No need to process anything if the number is zero
        if($number == 0) {
            return "zero";
        }

        $position = 0;
        $parts = [];
        for(;$number > 0; $number = intval($number / 1000)) {
            $currStr = $this->convertHundredsToString($number % 1000);
            if(strlen($currStr) != 0) {
                if($position != 0) {
                    $currStr = $currStr . " " . $this->strBigUnits[$position - 1];
                }
                $parts[] = $currStr;
            }
            $position++;
        }
        $parts = array_reverse($parts);
        $str = implode(", ", $parts);

        if(count($parts) > 1) {
            $lastIndex = count($parts) - 1;

            if(strpos($parts[$lastIndex], "and") == false) {
                $str = preg_replace("/, ([a-zA-Z ]*)$/", " and $1", $str);
            }
        }
        return $str;
    }

    private function convertHundredsToString($number)
    {
        if($number == 0) {
            return "";
        }

        $str = "";

        $parts = [0, 0, 0];
        for($pos = 0; $number > 0; $number = intval($number / 10), $pos++) {
            $parts[$pos] = $number % 10;
        }

        if($parts[0] > 0) {
            $str = $this->strOnes[$parts[0] - 1];
        }

        if($parts[1] > 0) {
            if($parts[1] == 1 && $parts[0] != 0) {
                $str = $this->strElevenToNineteen[$parts[0]-1];
            } else {
                $str = $this->strTens[$parts[1] - 1] . " " . $str;
            }
        }

        if($parts[2] > 0) {
            $str = $this->strOnes[$parts[2] - 1] . " hundred and " . $str;
        }

        return preg_replace("/( and)? $/", "", $str);
    }
}

