<?php

class PrimeFactors
{

    public function generate($number)
    {
        $factors = [];

        for($currentFactor = 2; $number > 1; $currentFactor++) {
            for(; $number % $currentFactor == 0; $number /= $currentFactor) {
                $factors[] = $currentFactor;
            }
        }
        
        return $factors;
    }

    public function myVersion($number)
    {
        $factors = [];
        $currentFactor = 2;

        while($currentFactor<=$number) {
            if($number%$currentFactor == 0) {
                $factors[] = $currentFactor;
                $number = $number/$currentFactor;
                $currentFactor = 1;
            }
            $currentFactor++;
        }

        return $factors;
    }
}
