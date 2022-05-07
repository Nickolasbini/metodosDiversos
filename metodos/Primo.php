<?php

namespace metodos;

class Primo{

    /**
     * Returns an array containing all cousin number between $fromNumber and $toNumber parameters
     *
     * @param  Int   the first number
     * @param  Int   the second number
     * @return Array with cousin numbers found
     */
    public function primos($fromNumber = null, $toNumber = null)
    {
        $cousinNumbers = [];
        $currentNumber = $fromNumber + 1;
        while($currentNumber < $toNumber){
            if($this->isCousinNumber($currentNumber)){
                $cousinNumbers[] = $currentNumber;
            }
            $currentNumber++;
        }
        return $cousinNumbers;
    }

    /**
     * Checks if sent number is a cousin number
     *
     * @param  Int  the first number
     * @return Bool
     */
    public function isCousinNumber($number)
    {
        $attempts = 0;
        for($count=2; $count < $number; $count++){
            if($number % $count == 0){
                $attempts++;
            }
        }
        return ($attempts == 0 ? true : false);
    }
}